<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio - Anass KADA</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->
    <header>
        <div id="mobile-menu-close">
            <span>Fermer</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
            <li>
                <a href="#about">A propos</a>
            </li>
            <li>
                <a href="#experience">Expériences</a>
            </li>
            <li>
                <a href="#education">Formations</a>
            </li>
            <li>
                <a href="#projects">Projets</a>
            </li>
            <li>
                <a href="#skills">Compétences</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </header>
    <!-- End header -->

    <div id="lead">
        <div id="lead-content">
            <h1>Hi! I'm Anass Kada</h1>
            <h2>Lead web developer</h2>
            <a href="./cv/CV%20-%20Anass%20KADA.pdf" class="btn-rounded-white" target="_blank">Télécharger mon CV</a>
        </div>
        <!-- End #lead-content -->

        <div id="lead-overlay"></div>

        <div id="lead-down">
            <span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
        </div>
        <!-- End #lead-down -->
    </div>
    <!-- End #lead -->

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="heading">A propos de moi</h2>
                </div>
                <div class="col-md-8">
                    <p>
                        Fort de mon expérience de plus de <?= (int) date('Y') - 2015 ?> ans et de mon expertise en tant que développeur d’applications web, j’accompagne les entreprises et les professionnels dans tout type de projet technologique et digitale.
                        <br>
                        Avec une maîtrise complète des langages en back-end comme en front-end, je peux mettre mon expertise à votre service pour vous conseiller et vous accompagner dans votre projet.
                        <br>
                        Pour tous vos projets, je vous apporte donc des solutions complètes pour concevoir et réaliser vos applications.
                        <br><br>
                        Mon expertise :
                        <li>Développement BackEnd (PHP5/7, Symfony 3/4/5)</li>
                        <li>Développement FrontEnd (HTML, CSS, JavaScript, JQuery, AJAX)</li>
                        <li>Traitement des données (SQL, ETL, SSIS, Power BI)</li>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End #about -->

    <div id="experience" class="background-alt">
        <h2 class="heading">Expériences</h2>
        <div id="experience-timeline">
            <div data-date="Janvier 2020 – Aujourd'hui">
                <h3>Amphenol Antenna Solutions, Inc.</h3>
                <h4>Lead developer</h4>
                <p>
                <ul>
                    <li>Développements et maintien des applications
                        <ul>
                            <li>Recenser les besoins utilisateurs ou les besoins d’évolutions et co-rédiger un cahier des charges</li>
                            <li>Développer et maintenir les applications et tracer les évolutions via CVS (Concurent Version System)</li>
                            <li>Réaliser les tests techniques et fonctionnels des développements et valider avec les utilisateurs ou le donneur d’ordre</li>
                            <li>Documenter les applications, les dépendances et les interactions entre les systèmes et/ou les applications</li>
                            <li>Former les utilisateurs concernés aux développements effectués</li>
                            <li>Diagnostiquer et traiter les pannes sur tous les sites utilisant l’application de production dans les meilleurs délais</li>
                            <li>Assurer l’astreinte</li>
                        </ul>
                    </li>
                    <br>

                    <li>Supervision technique des développements
                        <ul>
                            <li>Superviser les choix techniques des projets pour l’équipe de développement</li>
                            <li>Respecter, faire respecter et maintenir les procédures de développement</li>
                            <li>Assurer les bonnes pratiques, la qualité et fiabilité des développements de l’équipe</li>
                            <li>Assurer la sécurité et l’intégrité des applications et des données</li>
                            <li>Assurer la documentation de toutes les applications</li>
                            <li>Guider et former les développeurs de l’équipe</li>
                            <li>Adopter une démarche d’amélioration continue</li>
                        </ul>
                    </li>
                    <br>

                    <li>Gestion de projets
                        <ul>
                            <li>Garantir le respect du cahier des charges et des délais</li>
                            <li>Structurer un projet en taches et planifier les actions</li>
                            <li>Assurer le suivi des actions et la communication des avancées</li>
                            <li>Informer la hiérarchie des possibles risques, problèmes bloquants ou déviations du projet</li>
                        </ul>
                    </li>
                    <br>

                    <li>Support informatique divers
                        <ul>
                            <li>Diagnostiquer et traiter les pannes sur les postes informatisés de production</li>
                            <li>Installer et configurer un poste informatisé de production</li>
                            <li>Réaliser le support micro-informatique de manière ponctuel</li>
                            <li>Gestion des comptes utilisateurs en fonction des systèmes du SI définis par le responsable</li>
                        </ul>
                    </li>

                </ul>
                </p>
            </div>

            <div data-date="Mars 2016 – Janvier 2020">
                <h3>Amphenol Antenna Solutions, Inc.</h3>
                <h4>Développeur web - Analyste</h4>

                <ul>
                    <li>Développements et maintien des applications
                        <ul>
                            <li>Recenser les besoins utilisateurs ou les besoins d’évolutions et co-rédiger un cahier des charges</li>
                            <li>Développer et maintenir les applications et tracer les évolutions via CVS (Concurent Version System)</li>
                            <li>Réaliser les tests techniques et fonctionnels des développements et valider avec les utilisateurs ou le donneur d’ordre</li>
                            <li>Documenter les applications, les dépendances et les interactions entre les systèmes et/ou les applications</li>
                            <li>Former les utilisateurs concernés aux développements effectués</li>
                            <li>Diagnostiquer et traiter les pannes sur tous les sites utilisant l’application de production dans les meilleurs délais</li>
                            <li>Assurer l’astreinte</li>
                        </ul>
                    </li>
                    <br>

                    <li>Supervision technique des développements
                        <ul>
                            <li><del>Superviser les choix techniques des projets pour l’équipe de développement</del></li>
                            <li>Respecter, faire respecter et maintenir les procédures de développement</li>
                            <li>Assurer les bonnes pratiques, la qualité et fiabilité des développements de l’équipe</li>
                            <li>Assurer la sécurité et l’intégrité des applications et des données</li>
                            <li>Assurer la documentation de toutes les applications</li>
                            <li><del>Guider et former les développeurs de l’équipe</del></li>
                            <li>Adopter une démarche d’amélioration continue</li>
                        </ul>
                    </li>
                    <br>

                    <li>Gestion de projets
                        <ul>
                            <li>Garantir le respect du cahier des charges et des délais</li>
                            <li>Structurer un projet en taches et planifier les actions</li>
                            <li>Assurer le suivi des actions et la communication des avancées</li>
                            <li>Informer la hiérarchie des possibles risques, problèmes bloquants ou déviations du projet</li>
                        </ul>
                    </li>
                    <br>

                    <li>Support informatique divers
                        <ul>
                            <li>Diagnostiquer et traiter les pannes sur les postes informatisés de production</li>
                            <li>Installer et configurer un poste informatisé de production</li>
                            <li>Réaliser le support micro-informatique de manière ponctuel</li>
                            <li>Gestion des comptes utilisateurs en fonction des systèmes du SI définis par le responsable</li>
                        </ul>
                    </li>

                </ul>

            </div>

            <div data-date="September 2015 – September 2016">
                <h3>Amphenol Antenna Solutions, Inc.</h3>
                <h4>Stage - Développeur web</h4>
                <p>
                    Développer et maintenir des applications web dédiées au service de la recherche et de l'innovation
                </p>
            </div>
        </div>
    </div>
    <!-- End #experience -->

    <div id="education">
        <h2 class="heading">Formation</h2>
        <div class="education-block">
            <h3>Amphenol Antenna Solutions, Inc.</h3>
            <span class="education-date">Juin 2020</span>
            <h4>Microsoft SQL Server Integration Services</h4>
            <p>
                SQL Server Integration Services (SSIS) est un puissant outil ETL utilisé dans le cadre de projets d'intégration ou de BI. Grâce à cette formation d'un mois, j'ai appris à implémenter une solution ETL avec SSIS. J'ai découvert le traitement et l'alimentation des données, la sécurisation et l'optimisation des flux.
            </p>
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>Amphenol Antenna Solutions, Inc.</h3>
            <span class="education-date">Mai 2020</span>
            <h4>Microsoft Power BI</h4>
            <p>
                Power BI est un ensemble de services logiciels, d’applications et de connecteurs qui œuvrent ensemble pour transformer des sources de données disparates en informations visuelles immersives et interactives. Vos données peuvent être sous forme de feuille de calcul Excel ou de collection d’entrepôts de données hybrides locaux ou sur le cloud. Power BI vous permet de vous connecter facilement à vos sources de données, de visualiser et de découvrir ce qui est important, et de partager ces informations avec qui vous voulez.
            </p>
            <img src="images/powerbi.png" width="500px" alt="">
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>Amphenol Antenna Solutions, Inc.</h3>
            <span class="education-date">Février 2020</span>
            <h4>Anglais</h4>
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>ORSYS - Paris</h3>
            <span class="education-date">Juin 1019</span>
            <h4>Symfony 4</h4>
            <img src="images/orsys-sf4.PNG" width="300" alt="">
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>Udemy - plateforme web</h3>
            <span class="education-date">Juin 1019</span>
            <h4>Symfony 4</h4>
            <img src="images/certificat-sf4-udemy.jpg" width="300" alt="">
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>Université Paul Sabatier Toulouse III</h3>
            <span class="education-date">Septembre 2016 - Septembre 2017</span>
            <h4>Bac +3 (Licence / Bachelor) - Gestion et traitement informatique de données massives</h4>
            <p>
                La licence professionnelle "Gestion et Traitement Informatique de Données Massives" propose un parcours "Bases de données avancées" qui vise à former des experts chargés de l'analyse des systèmes d'information des entreprises (mise en place de solutions ERP, CRM), de la conception du développement et de l'administration de bases de données et d'entrepôts de données.
            </p>
            <img src="images/gtid.PNG" width="300" alt="">
        </div>
        <!-- End .education-block -->


        <div class="education-block">
            <h3>Université Avignon</h3>
            <span class="education-date">Septembre 2014 - Septembre 2016</span>
            <h4>Bac +2 (BTS, DUT, DEUG) - Statistique et informatique décisionnelle</h4>
            <p>
                Les diplômés sont formés à l’analyse des résultats
                et la rédaction de rapports synthétiques afin d’aider
                les décideurs dans la prise de décisions.
            </p>
            <img src="images/stid.PNG" width="300" alt="">
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>Lycée Léonard de Vinci - Amboise</h3>
            <span class="education-date">Septembre 2013 - Juillet 2014</span>
            <h4>Baccalauréat / Niveau bac - Scientifique - Science de l'ingénieur</h4>
        </div>
        <!-- End .education-block -->

    </div>
    <!-- End #education -->

    <div id="projects" class="background-alt">
        <h2 class="heading">Projets</h2>
        <div class="container">
            <div class="row">
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="images/factory2.png" height="300" width="300"  alt=""/>
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Factory - Manufacturing Execution System</h3>
                        <p>Application de production contenant plus de 100 modules développées pour chaque secteur de production</p>
                        <li>Développement et mise en œuvre d'une application de MES déployée sur 3 de nos sites</li>
                        <li>Pilotage d’appareils de mesure</li>
                        <li>Suivi en temps réel de la production</li>
                        <li>Reporting des efficiences et analyse de la productivité</li>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->

                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="images/intranet.PNG" width="300" height="300"   alt=""/>
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Intranet - Amphenol Antenna Solutions</h3>
                        <p>
                            Cette intranet regroupe toutes les applications web servant à améliorer le quotidien des utilisateurs et de l'entreprise
                        </p>
                        <li>Gestion des demandes d'achats pour le suivi de tous les achats effectués</li>
                        <li>Gestion des ordres de mission pour le suivi de tous les déplacements du personnel</li>
                        <li>Présence de l'organigramme à jour en fonction des informations renseignées</li>
                        <li>Communications diffusés par la direction</li>
                        <li>Boite à idée</li>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->
            </div>
        </div>
    </div>
    <!-- End #projects -->

    <div id="skills">
        <h2 class="heading">Compétences</h2>
        <ul>
            <li>Symfony 4</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>SQL Server</li>
            <li>Oracle</li>
            <li>SGBDR</li>
            <li>JavaScript</li>
            <li>AJAX</li>
            <li>JQuery</li>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>GIT</li>
            <li>SVN</li>
            <li>Windows Server</li>
            <li>Business Objects</li>
            <li>SQL Server Integration Services (SSIS)</li>
            <li>Power BI</li>
            <li>VBA</li>
            <li>Microsoft office</li>

        </ul>
    </div>
    <!-- End #skills -->

    <div id="contact">
        <h2>Me contacter</h2>
        <A  HREF="mailto:kaada.anass@gmail.com">kaada.anass@gmail.com</A>

        <!--        <div id="contact-form">-->
<!--            <form method="POST" action="https://formspree.io/email@email.com">-->
<!--                <input type="hidden" name="_subject" value="Contact depuis mon portfolio" />-->
<!--                <input type="email" name="_replyto" placeholder="Votre E-mail" required>-->
<!--                <textarea name="message" placeholder="Votre message" required></textarea>-->
<!--                <button type="submit">Envoyer</button>-->
<!--            </form>-->
<!--        </div>-->
        <!-- End #contact-form -->
    </div>
    <!-- End #contact -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 copyright">
                    <p>
                        Copyright &copy; <?= date('Y') ?> Anass Kada
                    </p>
                </div>
                <div class="col-sm-2 top">
                    <span id="to-top">
                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="col-sm-5 social">
                    <ul>

                        <li>
                            <a href="https://www.linkedin.com/in/anass-kada-212023141/" target="_blank"><img src="images/linkedin.png" width="75" alt=""></i></a>
                        </li>
                        <li>
                            <a href="https://my.indeed.com/p/anassk-te8j0bw" target="_blank"><img src="images/indeed.ico" width="75" alt=""></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/scripts.min.js"></script>
</body>

</html>
