<?php
// === DEBUG / Erreurs ===
error_reporting(E_ALL);
ini_set('display_errors', 1);

// === HEADER JSON ===
header('Content-Type: application/json');

// === FONCTION DE SÉCURISATION ===
function securisation($donnee){
    $donnee = trim($donnee);
    $donnee = stripslashes($donnee);
    $donnee = strip_tags($donnee);
    $donnee = htmlspecialchars($donnee);
    return $donnee;
}

// === RÉCUPÉRATION DES CHAMPS DU FORMULAIRE ===
$nom = securisation($_POST['nom'] ?? '');
$prenom = securisation($_POST['prenom'] ?? '');
$email_form = securisation($_POST['email'] ?? '');
$message_form = securisation($_POST['message'] ?? '');

// === TEXTE DU MAIL ===
$text = "Nom: $nom\nPrénom: $prenom\nEmail: $email_form\n\n$message_form";

// === PHPMailer ===
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require __DIR__ . '/../PHPMailer-master/src/Exception.php';
require __DIR__ . '/../PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/../PHPMailer-master/src/SMTP.php';
require 'config.php';

$mail = new PHPMailer(true);

try {
    // === CONFIG SMTP ===
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER; // défini dans config.php
    $mail->Password   = SMTP_PASS; // défini dans config.php
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // === DESTINATAIRES & CONTENU ===
    $mail->setFrom('from@example.com', 'Diallo Fatimatou');
    $mail->addAddress('fatimatoudaka@gmail.com');
    $mail->isHTML(false);
    $mail->Subject = 'Message Portfolio – Diallo Fatimatou';
    $mail->Body    = $text;

    // === ENVOI ===
    $mail->send();

    // === JSON SUCCÈS ===
    echo json_encode(['success' => true]);

} catch (Exception $e) {
    // === JSON ERREUR ===
    echo json_encode(['success' => false, 'error' => $mail->ErrorInfo]);
}
