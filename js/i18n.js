// ============================
// I18N.JS - TRADUCTIONS FR / EN
// ============================
// Le français est écrit directement dans index.html (attributs data-i18n).
// Ce fichier contient uniquement l'anglais, plus quelques textes utilisés en JS.

(function () {

    const en = {
        "meta.title": "Diallo Fatimatou | Computer Science Portfolio",
        "meta.description": "Portfolio of Diallo Fatimatou, first-year Master's student in MIAGE at Claude Bernard University Lyon 1: data analysis, artificial intelligence, projects in Python, C++, Java and web.",

        "theme.toggle": "Toggle dark mode",

        "nav.home": "Home",
        "nav.about": "About",
        "nav.journey": "Education",
        "nav.exp": "Experience",
        "nav.projects": "Projects",
        "nav.skills": "Skills",
        "nav.contact": "Contact",

        "hero.tag": "Master 1 MIAGE student · Claude Bernard University Lyon 1",
        "hero.p1": "A first-year Master's student in MIAGE (Business Information Systems), I am passionate about the technologies that are transforming our world. From <b>data analysis</b> to advances in <b>artificial intelligence</b>, including <b>networks</b> and an introduction to <b>cybersecurity</b>, I strive to build innovative, reliable and secure digital solutions. 🚀",
        "hero.p2": "Through this portfolio, I invite you to discover my background, my projects and my ambitions in the tech world.",
        "hero.cv": "Download my CV",
        "hero.projects": "See my projects",
        "hero.quote": "“To create is to exist twice”",

        "about.title": "About me",
        "about.p1": "Currently in the first year of a <b>Master's in MIAGE</b> (Business Information Systems) at the École Polytechnique of Claude Bernard University Lyon 1, I see digital technology as a lever for creation and transformation. My journey, from Conakry to Limoges by way of an Erasmus semester in Mons and an internship at CETIC, has led me to <b>data analysis</b> and <b>artificial intelligence</b>, which I am now deepening.",
        "about.p2": "Curious and committed, I enjoy projects with a strong human impact, whether through software development, supporting students or the digital transformation of businesses.",
        "about.lookTitle": "I am looking for",
        "about.look1": "an <b>internship</b> starting in <b>May 2027</b> (end of Master 1)",
        "about.look2": "a <b>work-study position</b> (apprenticeship) for my <b>Master 2 MIAGE</b>",
        "about.lookBtn": "Contact me",

        "journey.title": "Education",
        "tl.limoges": "University of Limoges",
        "tl.lyon": "École Polytechnique – Claude Bernard University Lyon 1",
        "tl.mons": "University of Mons – Belgium",
        "tl.m1.title": "Master 1 MIAGE (Business Information Systems)",
        "tl.m1.c1": "Data analysis & data mining",
        "tl.m1.c2": "Artificial intelligence",
        "tl.m1.c3": "Project management",
        "tl.m1.c5": "Business knowledge",
        "tl.s6.date": "2026 · Semester 6",
        "tl.s6.title": "Bachelor's Year 3 – Computer Science",
        "tl.s6.c1": "Advanced databases (Datalog, XPath, XQuery)",
        "tl.s6.c3": "Functional programming (DrRacket)",
        "tl.s6.c4": "Advanced compilation",
        "tl.s6.c5": "Programming project",
        "tl.s5.date": "2025 · Semester 5",
        "tl.gamal": "Gamal Abdel Nasser University of Conakry",
        "tl.l3.title": "Bachelor's Year 3 – Computer Science",
        "tl.l3.c1": "Compiler design",
        "tl.l3.c2": "Analysis & OOP – C++",
        "tl.l3.c3": "Grammars & languages",
        "tl.l3.c4": "Concurrent programming",
        "tl.l3.c5": "Algorithms & complexity",
        "tl.l2.title": "Bachelor's Year 2 – Computer Science",
        "tl.l2.c1": "Logic",
        "tl.l2.c2": "Advanced C",
        "tl.l2.c3": "Software project",
        "tl.l2.c4": "Object-oriented programming (Java)",
        "tl.l2.c5": "Web development",
        "tl.gl2.title": "Bachelor's Year 2 – Computer Engineering",
        "tl.gl2.c1": "Databases",
        "tl.gl2.c2": "WordPress",
        "tl.gl2.c3": "Computer maintenance",
        "tl.gl2.c4": "Object-oriented programming (C++)",
        "tl.gl1.title": "Bachelor's Year 1 – Computer Engineering",
        "tl.gl1.c1": "General English",
        "tl.gl1.c2": "Data structures",
        "tl.gl1.c3": "Electronic circuits",
        "tl.gl1.c4": "Mathematics for computer science",

        "exp.title": "Experience",
        "exp.cetic.kind": "International internship",
        "exp.cetic.title": "Data analysis & software development",
        "exp.cetic.place": "CETIC · Belgium",
        "exp.cetic.date": "July – August 2026",
        "exp.cetic.desc": "Worked on a <b>Python/Django</b> application dedicated to analysing data from GitLab projects, and explored <b>artificial intelligence applied to data analysis</b>.",
        "exp.cetic.c1": "Python / Django",
        "exp.cetic.c2": "Data analysis",
        "exp.cetic.c3": "GitLab",
        "exp.cetic.c4": "AI",
        "exp.dal.kind": "Entrepreneurship",
        "exp.dal.title": "Managing partner",
        "exp.dal.place": "Daldigit360 · Guinea",
        "exp.dal.date": "2024 – 2026",
        "exp.dal.desc": "Oversaw the digital transformation of several <b>Guinean SMEs</b>, with both a strategic and an operational vision of digital technology.",
        "exp.dal.c1": "Digital transformation",
        "exp.dal.c2": "Strategy",
        "exp.dal.c3": "Project management",
        "exp.tut.kind": "Tutoring",
        "exp.tut.title": "Student tutor",
        "exp.tut.place": "University of Limoges",
        "exp.tut.date": "Sept. – Nov. 2025",
        "exp.tut.desc": "Supported and tutored <b>international students</b> and newcomers at the University of Limoges.",
        "exp.tut.c1": "Mentoring",
        "exp.tut.c2": "Organisation",
        "exp.tut.c3": "Service-minded",
        "exp.asso.kind": "Volunteering",
        "exp.asso.title": "Student associations",
        "exp.asso.place": "AEGL · COP1 Limoges",
        "exp.asso.date": "2025 – Sept. 2026",
        "exp.asso.desc": "Communications officer at <b>AEGL</b> and volunteer at <b>COP1 Limoges</b>.",
        "exp.asso.c1": "Communication",
        "exp.asso.c2": "Project management",
        "exp.asso.c3": "Team coordination",

        "projects.title": "My projects",
        "projects.subtitle": "A selection of academic and personal projects completed during my bachelor's degree",
        "projects.more": "Show more",
        "projects.less": "Show less",

        "p1.title": "LL(1) Parser – C-like mini-language",
        "p1.l1": "Built a predictive top-down LL(1) parser in Python",
        "p1.l2": "Implemented FIRST and FOLLOW sets to build the parsing table",
        "p1.l3": "Step-by-step analysis of source code and syntax-error detection",
        "p1.l4": "Interactive construction and visualisation of the parse tree with Tkinter",
        "p1.l5": "Display controls: zoom, navigation and applied rules",
        "p1.l6": "Follows a defined and validated grammar for a C-inspired mini-language",

        "p2.title": "Academic Records Management",
        "p2.l1": "Developed C++ software to manage degrees, semesters and teaching units",
        "p2.l2": "Teacher management using inheritance and polymorphism (EnseignantChercheur, AutreEnseignant)",
        "p2.l3": "Automatic calculation of teaching hours, workloads and degree costs",
        "p2.l4": "File-based data persistence with serialisation/deserialisation",
        "p2.l5": "Enhanced console interface with colours for IDs, labels and errors",

        "p3.title": "GeneLog – Family Genealogy",
        "p3.gifAlt": "GeneLog demo: adding a family in the Tkinter interface",
        "p3.l1": "Developed family-genealogy management software in Python",
        "p3.l2": "Creation and management of individuals, families and relationships (parent, child, spouse)",
        "p3.l3": "Intuitive Tkinter GUI to visualise the family tree",
        "p3.l4": "Data stored in a local SQLite database",
        "p3.l5": "Logical constraints enforced: date consistency, minimum marriage age, unique identifiers",
        "p3.l6": "Wrote a complete, structured technical report",

        "p4.l1": "Java application to tag images and save their metadata",
        "p4.l2": "Ergonomic JavaFX interface for image management",
        "p4.l3": "Filters and transformations (rotation, mirroring, visual effects…)",
        "p4.l4": "Detailed report documenting the object-oriented architecture",

        "p5.l1": "Video game in Processing inspired by the classic “Space Invaders”",
        "p5.l2": "Implemented shooting, movement and collision mechanics",
        "p5.l3": "Visual effects to enhance the gameplay experience",
        "p5.l4": "Simple, intuitive player interface",
        "p5.l5": "Technical report describing how the game works",

        "p6.l1": "User area with login and dynamic display of the user's name",
        "p6.l2": "Interface built with HTML, CSS and JavaScript, integrated with PHP",
        "p6.l3": "Redirects and session management to secure access",
        "p6.l4": "Interactive features to improve the user experience",

        "skills.title": "Skills",
        "skills.g1": "Programming languages",
        "skills.g2": "Data & AI",
        "skills.g3": "Frameworks & tools",
        "lvl.adv": "Advanced",
        "lvl.int": "Intermediate",
        "lvl.basic": "Basic knowledge",
        "sk.data": "Data analysis",
        "sk.server": "Server management",
        "sk.security": "Security & persistence",
        "sk.pm": "Project management",
        "sk.scripts": "Automation / Scripting",
        "sk.team": "Teamwork",
        "sk.adapt": "Adaptability",
        "sk.time": "Time management",
        "sk.creativity": "Creativity",
        "sk.problem": "Problem solving",

        "contact.title": "Contact",
        "contact.info": "My details",
        "contact.quote": "“Always learning, always moving forward.”",
        "form.name": "Name",
        "form.namePh": "Your name",
        "form.message": "Your message",
        "form.messagePh": "Your message...",
        "form.send": "Send",
        "form.sending": "Sending...",
        "form.success": "Thank you! Your message has been sent.",
        "form.error": "Sending failed. You can email me directly at fatimatoudaka@gmail.com."
    };

    // Textes français qui n'existent pas dans le HTML au chargement (utilisés par script.js)
    const fr = {
        "projects.less": "Voir moins",
        "form.sending": "Envoi..."
    };

    const LANGUES = ["fr", "en"];
    let langue = "fr";

    // Récupère les textes français depuis la page
    document.querySelectorAll("[data-i18n]").forEach(el => {
        fr[el.dataset.i18n] = el.innerHTML.trim();
    });
    document.querySelectorAll("[data-i18n-placeholder]").forEach(el => {
        fr[el.dataset.i18nPlaceholder] = el.getAttribute("placeholder");
    });
    document.querySelectorAll("[data-i18n-aria]").forEach(el => {
        fr[el.dataset.i18nAria] = el.getAttribute("aria-label");
    });
    document.querySelectorAll("[data-i18n-alt]").forEach(el => {
        fr[el.dataset.i18nAlt] = el.getAttribute("alt");
    });
    const metaDescription = document.querySelector('meta[name="description"]');
    fr["meta.title"] = document.title;
    fr["meta.description"] = metaDescription.getAttribute("content");

    function t(cle) {
        const dico = langue === "en" ? en : fr;
        return dico[cle] ?? fr[cle] ?? cle;
    }

    function appliquer(nouvelleLangue) {
        langue = LANGUES.includes(nouvelleLangue) ? nouvelleLangue : "fr";
        document.documentElement.lang = langue;

        document.querySelectorAll("[data-i18n]").forEach(el => {
            el.innerHTML = t(el.dataset.i18n);
        });
        document.querySelectorAll("[data-i18n-placeholder]").forEach(el => {
            el.setAttribute("placeholder", t(el.dataset.i18nPlaceholder));
        });
        document.querySelectorAll("[data-i18n-aria]").forEach(el => {
            el.setAttribute("aria-label", t(el.dataset.i18nAria));
        });
        document.querySelectorAll("[data-i18n-alt]").forEach(el => {
            el.setAttribute("alt", t(el.dataset.i18nAlt));
        });
        document.title = t("meta.title");
        metaDescription.setAttribute("content", t("meta.description"));

        document.querySelectorAll(".lang-switch [data-lang]").forEach(btn => {
            btn.setAttribute("aria-pressed", String(btn.dataset.lang === langue));
        });

        try { localStorage.setItem("lang", langue); } catch (e) {}
    }

    // Boutons FR / EN
    document.querySelectorAll(".lang-switch [data-lang]").forEach(btn => {
        btn.addEventListener("click", () => appliquer(btn.dataset.lang));
    });

    // Langue au chargement : choix précédent, sinon ?lang=en dans l'URL, sinon français
    let initiale = null;
    try { initiale = localStorage.getItem("lang"); } catch (e) {}
    const parametre = new URLSearchParams(window.location.search).get("lang");
    if (parametre) initiale = parametre;
    if (initiale && initiale !== "fr") appliquer(initiale);

    window.i18n = { t, appliquer };
})();
