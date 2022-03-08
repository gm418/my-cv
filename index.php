<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== CSS ====================-->
    <link rel="preload" as="font" href="assets/css/styles.css" onload="this.onload=null;this.rel='stylesheet'">

    <title>CV</title>
</head>

<body class="scrollbar-nav">
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Gaëlle Morin</a>

            <div class="nav__menu" id="js-nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a class="nav__link active-link" href="#home">
                            <i class="uil-estate nav__icon"></i>Accueil</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#about">
                            <i class="uil-user nav__icon"></i>A propos
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#skills">
                            <i class="uil-file-alt nav__icon"></i>Compétences
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#qualification">
                            <i class="uil-briefcase-alt nav__icon"></i>Expérience
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#portfolio">
                            <i class="uil-scenery nav__icon"></i>Portfolio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#contact">
                            <i class="uil-message nav__icon"></i>Contact
                        </a>
                    </li>
                </ul>
                <i class="uil-times nav__close" id="js-nav-close"></i>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="uil-moon change-theme" id="js-theme-button"></i>

                <div class="nav__toggle" id="js-nav-toggle">
                    <i class="uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main>
        <!--==================== HOME ====================-->
        <section class="home section center" id="home">
            <div>
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.linkedin.com/in/gaelle-morin/" target="_blank" class="home__social-icon">
                                <i class="uil-linkedin-alt"></i>
                            </a>
                            <a href="#" target="_blank" class="home__social-icon">
                                <i class="uil-gitlab"></i>
                            </a>
                            <a href="https://github.com/daedalus418" target="_blank" class="home__social-icon">
                                <i class="uil-github-alt"></i>
                            </a>
                        </div>

                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                </g>
                            </svg>
                        </div>

                        <div class="home__data">
                            <h1 class="home__name">Bonjour, <br> je suis Gaëlle</h1>
                            <h2 class="home__profession">Développeuse front-end</h2>
                            <a href="#contact" class="home__button button button--flex">
                                Me contacter <i class="uil-message button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil-mouse home__scroll-mouse"></i>
                            <span class="home__scroll-text">Descendre</span>
                            <i class="uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--=================== ABOUT ====================-->
        <section class="about section center" id="about">
            <div>
                <h2 class="section__title">A propos de moi</h2>
                <span class="section__subtitle">Me, myself and I</span>

                <div class="about__container container">
                    <p class="about__text">
                        Développeuse junior avec 3 ans d'expérience dans le développement de sites et d'applications web en utilisant HTML5,
                        CSS3, JavaScript et des frameworks CSS.
                        J'identifie et corrige les problèmes durant les tests ou les retours des utilisateurs, sous la guidance d'un développeur
                        senior.
                    </p>
                </div>
            </div>
        </section>

        <!--=================== SKILLS ===================-->
        <section class="skills section center" id="skills">
            <div>
                <h2 class="section__title">Compétences</h2>
                <span class="section__subtitle">Je peux me rendre utile</span>

                <div class="skills__container container grid">
                    <!--==================== skills 1 ====================-->
                    <div class="skills__content">
                        <i class="uil-html5 skills__icon"></i>
                        <p class="skills__title">HTML5</p>
                    </div>

                    <!--==================== skills 2 ====================-->
                    <div class="skills__content">
                        <i class="uil-css3-simple skills__icon"></i>
                        <p class="skills__title">CSS3</p>
                    </div>

                    <!--==================== skills 3 ====================-->
                    <div class="skills__content">
                        <i class="uil-javascript skills__icon"></i>
                        <p class="skills__title">JavaScript</p>
                    </div>

                    <!--==================== skills 4 ====================-->
                    <div class="skills__content">
                        <i class="uil-sass skills__icon"></i>
                        <p class="skills__title">Sass</p>
                    </div>

                    <!--==================== skills 5 ====================-->
                    <div class="skills__content">
                        <i class="uil-tailwind skills__icon"></i>
                        <p class="skills__title">Tailwind</p>
                    </div>

                    <!--==================== skills 6 ====================-->
                    <div class="skills__content">
                        <i class="uil-figma skills__icon"></i>
                        <p class="skills__title">Figma</p>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section center" id="qualification">
            <div>
                <h2 class="section__title">Expérience</h2>
                <span class="section__subtitle">Mon parcours professionnel</span>

                <div class="qualification__container container">
                    <div class="qualification__tabs">
                        <div class="qualification__button js-qualification__active" aria-controls="#education">
                            <i class="uil-graduation-cap qualification__icon"></i>
                            Etudes
                        </div>

                        <div class="qualification__button" aria-controls="#work">
                            <i class="uil-briefcase-alt qualification__icon"></i>
                            Travail
                        </div>
                    </div>

                    <div class="qualification__contents">
                        <!--==================== QUALIFICATION CONTENT 1 ====================-->
                        <ul class="qualification__content js-qualification__active" id="education">
                            <!--==================== QUALIFICATION 1 ====================-->
                            <li class="qualification__data">
                                <div class="qualification__calendar">
                                    <i class="uil-calendar-alt"></i>
                                    Sept 2003 - juin 2006
                                </div>
                                <div class="qualification__marker">
                                    <span class="qualification__point"></span>
                                    <span class="qualification__line"></span>
                                </div>
                                <div class="qualification__text">
                                    <h3 class="qualification__title">Technicienne de laboratoire</h3>
                                    <span class="qualification__subtitle">Institut d'Enseignement Supérieur Alexandre-André (Belgique)</span>
                                    <p class="qualification__summary"></p>
                                </div>
                            </li>
                            <!--==================== QUALIFICATION 2 ====================-->
                            <li class="qualification__data">
                                <div class="qualification__calendar">
                                    <i class="uil-calendar-alt"></i>
                                    Sept 2016 - juin 2017
                                </div>
                                <div class="qualification__marker">
                                    <span class="qualification__point"></span>
                                    <span class="qualification__line"></span>
                                </div>
                                <div class="qualification__text">
                                    <h3 class="qualification__title">Développeuse web</h3>
                                    <span class="qualification__subtitle">Wild Code School</span>
                                    <p class="qualification__summary">
                                        Réalisation de deux projets-clients dans le cadre de ma formation à la Wild Code School.
                                        L'un en 6 semaines l'autre en 8 semaines. L'occasion d'appliquer mes connaissances pour
                                        le compte d'acteurs locaux.
                                    </p>
                                </div>
                            </li>
                        </ul>

                        <!--==================== QUALIFICATION CONTENT 2 ====================-->
                        <ul class="qualification__content" aria-hidden="true" id="work">
                            <!--==================== QUALIFICATION 1 ====================-->
                            <li class="qualification__data">
                                <div class="qualification__calendar">
                                    <i class="uil-calendar-alt"></i>
                                    Sept 2006 - août 2016
                                </div>
                                <div class="qualification__marker">
                                    <span class="qualification__point"></span>
                                    <span class="qualification__line"></span>
                                </div>
                                <div class="qualification__text">
                                    <h3 class="qualification__title">Technicienne de laboratoire</h3>
                                    <span class="qualification__subtitle"></span>
                                    <p class="qualification__summary">
                                        J'étais principalement chargée de l'entretien, la calibration, les contrôles
                                        et la gestion des pannes sur différents automates d'analyse. Des analyses médicales des
                                        échantillons et de la validation technique des résultats. J'ai également préparé des
                                        chimiothérapies, tenu à jour des dossiers aux essais cliniques ou encore testé la
                                        qualité microbiologique de l'eau et de médicaments.
                                    </p>
                                </div>
                            </li>
                            <!--==================== QUALIFICATION 2 ====================-->
                            <li class="qualification__data">
                                <div class="qualification__calendar">
                                    <i class="uil-calendar-alt"></i>
                                    Fév 2017 - juil 2017
                                </div>
                                <div class="qualification__marker">
                                    <span class="qualification__point"></span>
                                    <span class="qualification__line"></span>
                                </div>
                                <div class="qualification__text">
                                    <h3 class="qualification__title">Stagiaire</h3>
                                    <span class="qualification__subtitle">Filver</span>
                                    <p class="qualification__summary">
                                        Stage de 6 mois dans une agence web, j'ai participé au développement d'une
                                        application en interne. J'ai surtout mis en pratique mes connaissances en frontend. J'ai aussi animé
                                        des ateliers d'initiation au code pour les enfants de 7 à 11 ans.
                                    </p>
                                </div>
                            </li>
                            <!--==================== QUALIFICATION 3 ====================-->
                            <li class="qualification__data">
                                <div class="qualification__calendar">
                                    <i class="uil-calendar-alt"></i>
                                    Fév 2018 - juin 2018
                                </div>
                                <div class="qualification__marker">
                                    <span class="qualification__point"></span>
                                    <span class="qualification__line"></span>
                                </div>
                                <div class="qualification__text">
                                    <h3 class="qualification__title">Développeuse Rails</h3>
                                    <span class="qualification__subtitle">Hexagonal Consulting et jrnl</span>
                                    <p class="qualification__summary">Chez Hexagonal Consulting, développement d'une application avec une interface
                                        admnistrateur et permettant de s'inscrire à des évènements, de noter les participants et
                                        de récupérer les notes dans un tableau à double entrées.<br></br>
                                        Pour l'application jrnal, participation à la création du tableau de bord des
                                        administrateurs, à l'invitation d'utilisateurs et à la gestion des statuts d'un article.
                                    </p>
                                </div>
                            </li>
                            <!--==================== QUALIFICATION 4 ====================-->
                            <li class="qualification__data">
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Sep 2018 - oct 2018
                                </div>
                                <div class="qualification__marker">
                                    <span class="qualification__point"></span>
                                    <span class="qualification__line"></span>
                                </div>
                                <div class="qualification__text">
                                    <h3 class="qualification__title">Intégratrice WordPress</h3>
                                    <span class="qualification__subtitle">Happy Dev</span>
                                    <p class="qualification__summary">
                                        Accompagnée par un développeur senior, j'ai été chargée d'intégrer les pages
                                        d'un WordPress pour une agence de motion design.
                                    </p>
                                </div>
                            </li>
                            <!--==================== QUALIFICATION 5 ====================-->
                            <li class="qualification__data">
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Déc 2018 - aujourd'hui
                                </div>
                                <div class="qualification__marker">
                                    <span class="qualification__point"></span>
                                    <span class="qualification__line"></span>
                                </div>
                                <div class="qualification__text">
                                    <h3 class="qualification__title">Intégratrice</h3>
                                    <span class="qualification__subtitle">Startin'Blox</span>
                                    <p class="qualification__summary">Développement d'une application pour faciliter le travail entre freelances,
                                        associations, etc.
                                        J'ai intégré les maquettes fournies par la graphiste et affiché des données dynamiques.
                                        La structure HTML est générée par Startin'blox et j'utilise les composants développés
                                        par l'équipe de développeurs pour les adapter graphiquement.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section center" id="portfolio">
            <div>
                <h2 class="section__title">Portfolio</h2>
                <span class="section__subtitle">Mes réalisations</span>

                <div class="portfolio__container container grid">

                    <!--==================== IMAGES ====================-->
                    <div class="portfolio__images">
                        <input type="radio" name="image" id="image1" checked>
                        <input type="radio" name="image" id="image2">
                        <input type="radio" name="image" id="image3">
                        <input type="radio" name="image" id="image4">
                        <input type="radio" name="image" id="image5">

                        <div class="portfolio__image image_1">
                            <img src="assets/img/mam-lg.jpg" alt="" class="portfolio__image-lg">
                            <img src="assets/img/mam-tb.jpg" alt="" class="portfolio__image-tb">
                            <img src="assets/img/mam-mb.jpg" alt="" class="portfolio__image-mb">
                        </div>
                        <div class="portfolio__image image_2">
                            <img src="assets/img/bij-lg.jpg" alt="" class="portfolio__image-lg">
                            <img src="assets/img/bij-tb.jpg" alt="" class="portfolio__image-tb">
                        </div>
                        <div class="portfolio__image image_3">
                            <img src="assets/img/portfolio-lg.jpg" alt="" class="portfolio__image-lg">
                            <img src="assets/img/portfolio-tb.jpg" alt="" class="portfolio__image-tb">
                            <img src="assets/img/portfolio-mb.jpg" alt="" class="portfolio__image-mb">
                        </div>
                        <div class="portfolio__image image_4">
                            <img src="assets/img/hexa-lg.jpg" alt="" class="portfolio__image-lg">
                            <img src="assets/img/hexa-tb.jpg" alt="" class="portfolio__image-tb">
                        </div>
                        <div class="portfolio__image image_5">
                            <img src="assets/img/orbit-lg.jpg" alt="" class="portfolio__image-lg">
                            <img src="assets/img/orbit-tb.jpg" alt="" class="portfolio__image-tb">
                            <img src="assets/img/orbit-mb.jpg" alt="" class="portfolio__image-mb">
                        </div>
                    </div>

                    <!--==================== CONTENTS ====================-->
                    <div class="portfolio__information">
                        <label for="image1">
                            <div class="portfolio__content portfolio__active">
                                <div class="portfolio__header">
                                    <h3 class="portfolio__title">MAM aux Trésors</h3>
                                    <i class="uil-angle-right portfolio__chevron"></i>
                                </div>
                                <div class="portfolio__tags">
                                    <span class="portfolio__tag">MongoDB</span>
                                    <span class="portfolio__tag">Express</span>
                                    <span class="portfolio__tag">AngularJS</span>
                                    <span class="portfolio__tag">NodeJS</span>
                                    <span class="portfolio__tag">JavaScript</span>
                                    <span class="portfolio__tag">Materialize</span>
                                </div>
                                <p class="portfolio__description">
                                    Création d'un site vitrine et partiellement administrable pour une Maison d'Assistantes Maternelles appelée
                                    la MAM Aux Trésors. Elle souhaitaient mettre en évidence l'équipe et présenter brièvement leur établissement et les
                                    activités proposées. Elles peuvent éditer les parties "Partenaires" et ... Grâce à ce projet, nous avons mis
                                    en application nos connaissances fraîchement acquises sur le framework Materialize.
                                </p>
                            </div>
                        </label>

                        <label for="image2">
                            <div class="portfolio__content">
                                <div class="portfolio__header">
                                    <h3 class="portfolio__title">BIJ et BIJ Web</h3>
                                    <i class="uil-angle-right portfolio__chevron"></i>
                                </div>
                                <div class="portfolio__tags">
                                    <span class="portfolio__tag">Electron</span>
                                    <span class="portfolio__tag">MongoDB</span>
                                    <span class="portfolio__tag">Express</span>
                                    <span class="portfolio__tag">AngularJS</span>
                                    <span class="portfolio__tag">NodeJS</span>
                                    <span class="portfolio__tag">JavaScript</span>
                                    <span class="portfolio__tag">Materialize</span>
                                </div>
                                <p class="portfolio__description">
                                    Sous la houlette de l'Union Nationale de l'Information Jeunesse (UNIJ), le Bureau de l'Information Jeunesse
                                    (BIJ) souhaitait une application bureau et web permettant à n'importe quel forma.teur.trice de leur Bureau
                                    d'accéder, online et offline, à ses cours. L'intérêt était de transposer leur support de formation dans une application
                                    afin qu'elle soit téléchargeable et pouvoir l'utiliser même là où il n'y a pas Internet afin d'éviter le
                                    transport de documents physiques pouvant être lourds. Il fallait également une partie admin afin de pouvoir
                                    créer/supprimer des comptes utilisateurs.
                                </p>
                            </div>
                        </label>

                        <label for="image3">
                            <div class="portfolio__content">
                                <div class="portfolio__header">
                                    <h3 class="portfolio__title">Mon portfolio</h3>
                                    <i class="uil-angle-right portfolio__chevron"></i>
                                </div>
                                <div class="portfolio__tags">
                                    <span class="portfolio__tag">ReactJS</span>
                                    <span class="portfolio__tag">JavaScript</span>
                                    <span class="portfolio__tag">Bulma</span>
                                </div>
                                <p class="portfolio__description">
                                    J'avais envie de m'attaquer à un projet personnel et d'apprendre ReactJS. J'ai surtout appris que React est
                                    beaucoup trop puissant pour ce que j'ai voulu coder mais au moins, je suis sur les rails pour apprendre la suite.
                                </p>
                            </div>
                        </label>

                        <label for="image4">
                            <div class="portfolio__content">
                                <div class="portfolio__header">
                                    <h3 class="portfolio__title">Rate Me</h3>
                                    <i class="uil-angle-right portfolio__chevron"></i>
                                </div>
                                <div class="portfolio__tags">
                                    <span class="portfolio__tag">Ruby on Rails</span>
                                    <span class="portfolio__tag">JavaScript</span>
                                    <span class="portfolio__tag">Bootstrap</span>
                                    <span class="portfolio__tag">AWS-sdk</span>
                                    <span class="portfolio__tag">Google API</span>
                                </div>
                                <p class="portfolio__description">
                                    Cette application permet aux utilisateurs, via un mail envoyé par l'administrateur, de se connecter via leur
                                    compte Google.
                                    Ils peuvent ensuite créer un évènement et voir les évènements passés et ceux auxquels ils peuvent s'
                                    inscrire grâce à un code couleur.
                                    Après la fin de l'évènement, les participants peuvent se noter entre eux et ajouter un commentaire. Chaque
                                    note est symbolisée par une couleur.
                                </p>
                            </div>
                        </label>

                        <label for="image5">
                            <div class="portfolio__content">
                                <div class="portfolio__header">
                                    <h3 class="portfolio__title">Orbit</h3>
                                    <i class="uil-angle-right portfolio__chevron"></i>
                                </div>
                                <div class="portfolio__tags">
                                    <span class="portfolio__tag">HTML5</span>
                                    <span class="portfolio__tag">CSS3</span>
                                    <span class="portfolio__tag">Scss</span>
                                    <span class="portfolio__tag">JavaScript</span>
                                    <span class="portfolio__tag">Startin'blox</span>
                                </div>
                                <p class="portfolio__description">
                                    Cette application permet aux utilisateurs, via un mail envoyé par l'administrateur, de se connecter via leur
                                    compte Google.
                                    Ils peuvent ensuite créer un évènement et voir les évènements passés et ceux auxquels ils peuvent s'
                                    inscrire grâce à un code couleur.
                                    Après la fin de l'évènement, les participants peuvent se noter entre eux et ajouter un commentaire. Chaque
                                    note est symbolisée par une couleur.
                                </p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== CONTACT ME ====================-->
        <?php
        $message_sent = false;
        $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
        const FIELD_REQUIRED = "Champs obligatoire";
        const FIELD_INVALID = "Format de mail non valide";

        if ($request_method === 'POST') {
            $fields = ['name', 'email', 'message'];
            $errors = [];
            $values = [];
            $clean_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $clean_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $clean_message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

            if (!filter_var($clean_email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = FIELD_INVALID;
            }

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = FIELD_REQUIRED;
                } else {
                    $values[$field] = $_POST[$field];
                }
            }

            if (filter_var($clean_email, FILTER_VALIDATE_EMAIL) && count($errors) === 0) {
                $values['email'] = trim($clean_email);
                $values['name'] = trim($clean_name);
                $values['message'] = trim($clean_message);

                $to = "morin.gaelle@gmail.com";
                $body = "";
                $body .= "From: " . $values['name'] . "\r\n";
                $body .= "Email: " . $values['email'] . "\r\n";
                $body .= "Message: " . $values['message'] . "\r\n";

                if (mail($to, "Bonjour !", $body)) {
                    $message_sent = true;
                } else {
                    echo "Mailer Error: " . error_get_last();
                }
            }
        }
        ?>

        <section class="contact section center" id="contact">
            <div>
                <h2 class="section__title">Un projet ?</h2>
                <span class="section__subtitle">Parlons-en !</span>

                <div class="contact__container container grid">
                    <dl>
                        <div class="contact__information">
                            <i class="uil-user contact__icon"></i>
                            <dt class="contact__title">Nom</dt>
                            <dd class="contact__subtitle">Gaëlle Morin</dd>
                        </div>

                        <div class="contact__information">
                            <i class="uil-envelope contact__icon"></i>
                            <dt class="contact__title">Email</dt>
                            <dd class="contact__subtitle">gmorin.dev@gmail.com</dd>
                        </div>

                        <div class="contact__information">
                            <i class="uil-map-marker contact__icon"></i>
                            <dt class="contact__title">Ville</dt>
                            <dd class="contact__subtitle">Bourges</dd>
                        </div>
                    </dl>

                    <?php if ($message_sent) : ?>
                        <div class="content__sent grid">
                            <p>
                                Merci ! <br>
                                Votre message a été envoyé.
                            </p>
                        </div>
                    <?php elseif (!$message_sent || count($errors) === 0) : ?>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="contact__form grid">
                            <div class="contact__inputs grid">
                                <div class="contact__content">
                                    <label for="name" class="contact__label">Votre nom</label>
                                    <input type="text" name="name" id="name" class="contact__input" required>
                                </div>
                                <div class="contact__content">
                                    <label for="email" class="contact__label">Votre email</label>
                                    <input type="email" name="email" id="email" class="contact__input" required>
                                </div>
                            </div>
                            <div class="contact__content">
                                <label for="message" class="contact__label">Votre message</label>
                                <textarea name="message" id="message" cols="0" rows="7" class="contact__input <?php echo isset($errors['message']) ? 'form-invalid' : '' ?>"><?php
                                    echo htmlspecialchars($values['message'], ENT_QUOTES, 'UTF-8');
                                ?></textarea>
                            </div>

                            <div>
                                <button type="submit" class="button">
                                    Envoyer
                                    <i class="uil-message button__icon"></i>
                                </button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Gaëlle</h1>
                    <span class="footer__subtitle">Développeuse front-end</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#skills" class="footer__link">Compétences</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contact</a>
                    </li>
                </ul>

                <ul class="footer__socials">
                    <li>
                        <a href="https://www.linkedin.com/in/gaelle-morin/" target="_blank" class="footer__social">
                            <i class="uil-linkedin-alt"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="footer__social">
                            <i class="uil-gitlab"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/daedalus418" target="_blank" class="footer__social">
                            <i class="uil-github-alt"></i>
                        </a>
                    </li>
                </ul>

                <small class="footer__copy">
                    &#169; Gaelle. All right reserved <br>
                    Icons by
                    <a href="https://iconscout.com/contributors/unicons">Unicons Font</a>,
                    <a href="https://iconscout.com/contributors/jagathish">Jagathish</a> and
                    <a href="https://iconscout.com/contributors/icon-54">Icon 54</a> on
                    <a href="https://iconscout.com">Iconscout</a>
                </small>
            </div>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="js-scroll-up">
        <i class="uil-arrow-up scrollup__icon"></i>
    </a>

    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>
</body>

</html>