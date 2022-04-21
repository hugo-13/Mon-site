<?php

session_start();

require('../Controller/notif.php');
require('../Controller/historisation.php');
require('../Controller/Contact.php');

use Contact\Contact;

$contact = new Contact;
$contact->contact();

?>



<!DOCTYPE html>
<html lang="fr">


<!-- 
#      Hugo seigle
#         _, _,
#       .' .' |
#      /  /   /
#     _|_/__.'
#    .'   `\
#   ( ^     \
#    '.__    \
#       _)    '.
#   _.-'/       '.
#  (__.'          \
#   .' .-.         ;
#  (_.'   \        |`\
#       .--\      /   |
#      (__.-'    /'--'
#    (______( 
-->


<head>

    <!-- Head  -->
    <?php include('./partials/head.php') ?>

    <!-- Titre haut de doc onglet  -->
    <title>Développeur web en formation - Hugo seigle</title>

</head>



<body>


    <div class="bottomFixButtionComponent">
        <a href="../#header">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-up-fill show-on-scroll" id="top" viewBox="0 0 16 16">
                <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
            </svg>
        </a>
    </div>

    <!-- Top page  -->
    <header id="header">



        <!-- slider  -->
        <section id="slider">

            <!-- progress bar  -->
            <div class="chart">
                <div class="bar"></div>
            </div>
            <script src="../js/progress-bar.js"></script>
            <div class="slider">
                <figure>
                    <div class="slide">
                        <img src="../images/slider_1.png" alt="" class="img-responsive">
                        <div class="text-slider">
                            <h2 class="dWist"><span class="txt-rotate" data-period="2000" data-rotate='[ "Bienvenue sur mon site ", "Welcome on my web site ", "Bienvenidos a mi sitio web ", "Benvenuti nel mio sito web "]'></span></h2>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="../images/slider_2.png" alt="">
                        <div class="text-slider change-word">
                            <h2>Une grande
                                <span></span>

                            </h2>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="../images/slider_3.png" alt="">
                        <div class="text-slider">
                            <h2 class="zoom">Plus qu'une passion</h2>
                        </div>
                </figure>
            </div>



            <!-- fleche bas  -->
            <div class="arrow">
                <a href="../#presentation">
                    <span style="margin-bottom: 3px;"></span>
                    <span></span>
                </a>
            </div>


            <!-- script du text  -->
            <script src="../js/hello-anim.js"></script>
        </section>

        <!-- scipte slider  -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


        <!-- information au dessus de la nav  -->
        <div class="information">

            <!-- lien icon  -->
            <div class="icon container-fluid">
            <a href="https://github.com/hugo-13" class="git">
                    <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                    <span style="margin-left: 5px;">Github</span>
                </a>
                <a href="https://www.linkedin.com/in/hugo-seigle-%F0%9F%92%BB-8798a220a/" class="linkedin">
                    <svg fill="#ffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                        <path d="M 5 3 C 3.895 3 3 3.895 3 5 L 3 19 C 3 20.105 3.895 21 5 21 L 19 21 C 20.105 21 21 20.105 21 19 L 21 5 C 21 3.895 20.105 3 19 3 L 5 3 z M 5 5 L 19 5 L 19 19 L 5 19 L 5 5 z M 7.7792969 6.3164062 C 6.9222969 6.3164062 6.4082031 6.8315781 6.4082031 7.5175781 C 6.4082031 8.2035781 6.9223594 8.7167969 7.6933594 8.7167969 C 8.5503594 8.7167969 9.0644531 8.2035781 9.0644531 7.5175781 C 9.0644531 6.8315781 8.5502969 6.3164062 7.7792969 6.3164062 z M 6.4765625 10 L 6.4765625 17 L 9 17 L 9 10 L 6.4765625 10 z M 11.082031 10 L 11.082031 17 L 13.605469 17 L 13.605469 13.173828 C 13.605469 12.034828 14.418109 11.871094 14.662109 11.871094 C 14.906109 11.871094 15.558594 12.115828 15.558594 13.173828 L 15.558594 17 L 18 17 L 18 13.173828 C 18 10.976828 17.023734 10 15.802734 10 C 14.581734 10 13.930469 10.406562 13.605469 10.976562 L 13.605469 10 L 11.082031 10 z" />
                    </svg>
                    <span style="margin-left: 5px;">Linkedin</span>
                </a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=hugo.seigle03@gmail.com&su=Subject&body=Body%20Text" id="mail">
                    <svg fill="#ffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="24px" height="24px">
                        <path d="M 5.5 7 C 3.019531 7 1 9.019531 1 11.5 L 1 11.925781 L 25 29 L 49 11.925781 L 49 11.5 C 49 9.019531 46.980469 7 44.5 7 Z M 6.351563 9 L 43.644531 9 L 25 22 Z M 1 14.027344 L 1 38.5 C 1 40.980469 3.019531 43 5.5 43 L 44.5 43 C 46.980469 43 49 40.980469 49 38.5 L 49 14.027344 L 43 18.296875 L 43 41 L 7 41 L 7 18.296875 Z" />
                    </svg>
                    <span style="margin-left: 5px;">hugo.seigle03@gmail.com</span>
                </a>
                <span id="numero">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffff">
                        <path d="M18.48 22.926l-1.193.658c-6.979 3.621-19.082-17.494-12.279-21.484l1.145-.637 3.714 6.467-1.139.632c-2.067 1.245 2.76 9.707 4.879 8.545l1.162-.642 3.711 6.461zm-9.808-22.926l-1.68.975 3.714 6.466 1.681-.975-3.715-6.466zm8.613 14.997l-1.68.975 3.714 6.467 1.681-.975-3.715-6.467z" />
                    </svg>
                    <span>07 69 27 87 52</span>
                </span>
            </div>
        </div>
        </div>

        <!-- Nav Bar  -->
        <?php include('./partials/header.php') ?>



    </header>

    <!-- main de la page  -->
    <main>


        <section id="page">

            <!-- partie presentation -->
            <div id="presentation">
                <div class="title">
                    <h1 class="show-on-scroll">Presentation</h1>
                    <h2 class="show-on-scroll">Qui suis-je ?</h2>
                    <hr class="show-on-scroll">
                </div>

                <div class="sur-moi">
                    <img src="../images/moi.png" alt="" class="show-on-scroll moi">

                    <div class="qui show-on-scroll">
                    <p>
                            Je m'appelle <strong>Hugo SEIGLE</strong>, j'ai 18 ans et je vis à Saint-Etienne.
                            Mes hobbies sont le basket-ball, l'automobile, les jeux vidéo et l'informatique.
                            Je pratique le basket depuis 15 ans ce qui m'a permis d'avoir un bon <strong><span>esprit d'équipe</span></strong>.
                            <br>
                            <br>
                            Aujourd'hui, j'ai choisi d'orienter mes études dans l'informatique plus précisément dans la <strong>programmation</strong>.
                            Le métier de développeur regroupe plusieurs domaines (web, logiciel,...).
                            J'entreprends actuellement des études orientées web ce qui me permet de découvrir une des facettes de ce métier.
                            Ce métier demande <strong><span>rigueur</span></strong>, <strong><span>persévérance</span></strong>, <strong><span>curiosité</span></strong> et <strong><span>logique</span></strong>.

                        </p>
                    </div>
                </div>
            </div>

            <!-- Partie parcours  -->
            <div id="parcours">
                <div class="head-content-top"></div>
                <div class="title">
                    <h1 class="show-on-scroll">Mon parcours</h1>
                    <h2 class="show-on-scroll">Qu'ai-je fait ?</h2>
                    <hr class="show-on-scroll">
                </div>

                <!-- Tableau de mon parcours  -->
                <div class="tab-parcours">
                    <div class="container-fluid">
                        <div class="row justify-content-center column head show-on-scroll" style="margin-bottom: 60px;">
                            <div id="DesignLink" class="col-sm-4 heading debut-heading">
                                <h3 class="mb-0"><strong>On commence ?</strong></h3>
                            </div>
                            <div id="ProgLink" class="col-sm-4 heading">
                                <h3 class="mb-0"><strong>Le lycée</strong></h3>
                            </div>
                            <div id="SupportLink" class="col-sm-4 heading">
                                <h3 class="mb-0"><strong>Aujourd'hui</strong></h3>
                            </div>
                        </div>
                    </div>

                    <div id="Design" class="container-fluid tab-content yes">
                        <div class="container-fluid">
                            <div class="row fluid-tab">
                                <div class="col-sm-6 right-content text-opacity show-on-scroll">
                                    <h3><strong>Découverte</strong></h3>
                                    <p>J'ai découvert la programmation avec le logiciel <strong>Scratch</strong> en 3<sup>ème</sup>. Il permet d'acquérir la logique nécessaire à la programmation.</p>
                                    <p>J'ai commencé à faire des recherches dans le domaine de la programmation. J'ai alors pu modifier le code source d'un de mes jeux vidéo. Ainsi, j'ai découvert que tout était <span><strong>possible</strong></span> en programmation. </p>
                                    <p>Grâce à ce projet qui m'a beaucoup intéressé, j'ai décidé de poursuivre mes études dans une filière post-baccalauréat <strong>orientée programmation</strong>.</p>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                        </div>
                    </div>
                    <div id="Programming" class="container-fluid tab-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 right-content text-opacity show-on-scroll">
                                    <h3><strong>Un bon début</strong></h3>
                                    <p>En arrivant au lycée en filière <span><strong>STI2D</strong></span> avec option <span><strong>SIN</strong></span> (Science de l'informatique et du numérique) je découvre plusieurs langages de programmation comme le C, C++, Python, HTML/CSS, PHP et JS.</p>
                                    <p>Ayant acquis une certaine connaissance en <strong>python</strong> et le <strong>développement web</strong> en général, je décide de m'investir en dehors de mes heures de cours afin d'approfondir mes connaissances.</p>
                                    <p>Pour valider mon année, j'ai eu l'occasion d'effectuer un <strong>stage</strong> et un projet à savoir : créer un logiciel permettant de récupérer les données d'un robot <strong>EDEV3</strong> et de le contrôler, tout cela en python et micro-python.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Support" class="container-fluid tab-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 right-content text-opacity show-on-scroll">
                                    <h3><strong>Mes études supérieures</strong></h3>
                                    <p>Après avoir connu une déception au sein d'un <strong>BTS SIO</strong>, je me dirige vers une formation professionnalisante en développement web, web mobile chez <span><strong>M2i</strong></span> formation à Lyon.</p>
                                    <p>Cette formation m'a permis d'en <strong>apprendre</strong> davantage sur ce métier de developpeur web et d'accroître mes compétences dans le domaine. Ainsi, j'ai de <strong>solides</strong> bases en HTML/CSS, PHP, SQL, JS, et dans plusieurs CMS et frameworks.</p>
                                    <p>Aujourd'hui, je suis à la recherche d'un <span><strong>stage</strong></span> en entreprise de Juillet à Septembre, afin de gagner en expérience et en compétences. Je suis aussi à la recherche d'une <span><strong>alternance</strong></span> sur 1 an afin de poursuivre mes études la <strong>rentrée prochaine</strong> en licence informatique.
                                        Je souhaite que cette <strong>passion</strong> devienne mon métier.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="img-back">
                    <h5 class="show-on-scroll">'' Motivé et ambitieux ''</h5>
                </div>


                <!-- script tab  -->
                <script src="../js/parcours-tab.js"></script>
            </div>

            <div id="xp">
                <div class="title">
                    <h1 class="show-on-scroll">Mes compétences</h1>
                    <h2 class="show-on-scroll">De quoi suis-je capable ?</h2>
                    <hr class="show-on-scroll">
                </div>

                <div class="all-prog">
                    <a href="../images/cv.png"><img src="../images/cv.gif" alt="" class="cv show-on-scroll"></a>
                    <div class="xp-bar">

                        <h5 class="show-on-scroll">Mes compétences en développement</h5>
                        <div class="progress show-on-scroll">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">HTML/CSS</div>
                        </div>
                        <div class="progress show-on-scroll">
                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">PHP & SQL</div>
                        </div>
                        <div class="progress show-on-scroll" style=" margin-bottom:4vw">
                            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">JAVASCRIPT</div>
                        </div>

                        <h5 class="show-on-scroll show-on-scroll">Mes compétences en graphisme</h5>

                        <div class="progress show-on-scroll">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">Photoshop</div>
                        </div>
                        <div class="progress show-on-scroll">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">Adobe XD</div>
                        </div>

                    </div>

                </div>
            </div>




            <div class="img-back2">
                <h5 class="show-on-scroll">'' Mon CV <a href="../images/cv.png" download="CV_Hugo_SEIGLE">ici</a> ''</h5>
            </div>


            <div id="contact">
                <div class="title">
                    <h1 class="show-on-scroll">Me contacter</h1>
                    <h2 class="show-on-scroll">Vous êtes intéressé ?</h2>
                    <hr class="show-on-scroll">
                </div>

                <div class="container contact-form">
                    <div class="contact-image">
                        <img src="../images/logo.png" />
                    </div>
                    <form method="post" action="../#contact" enctype="multipart/form-data">
                        <h3>Envoi par mail</h3>
                        <div class="row">
                            <!-- Message d'erreur  -->
                            <?php echo "<div style='color:red;font-weight:600;margin-top:10px;'>" . $contact->getErreurEnvoie() . "</div>" ?>
                            <div class="col-md-6 show-on-scroll">

                                <div class="form-group">
                                    <input type="text" name="nom" class="form-control" placeholder="Nom, entreprise, ..." />
                                </div>

                                <!-- Message d'erreur  -->
                                <?php echo "<div style='color:red;font-weight:600;margin-top:10px;'>" . $contact->getErreurNom() . "</div>" ?>

                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email" />
                                </div>

                                <!-- Message d'erreur  -->
                                <?php echo "<div style='color:red;font-weight:600;margin-top:10px;'>" . $contact->getErreurMail() . "</div>" ?>



                                <select class="form-select" aria-label="Default select example" name="pour">
                                    <option selected value="0">Objet</option>
                                    <option value="Stage">Un stage</option>
                                    <option value="Alternance">Une alternance</option>
                                    <option value="Autre">Autre</option>
                                </select>

                                <!-- Message d'erreur  -->
                                <?php echo "<div style='color:red;font-weight:600;margin-top:10px;'>" . $contact->getErreurPour() . "</div>" ?>

                            </div>
                            <div class="col-md-6 show-on-scroll">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Votre message" style="width: 100%; height: 150px;"></textarea>
                                </div>
                                <!-- Message d'erreur  -->
                                <?php echo "<div style='color:red;font-weight:600;margin-top:10px;'>" . $contact->getErreurMessage() . "</div>" ?>
                            </div>
                            <!-- Captcha  -->
                            <div class="col-6 captcha show-on-scroll">
                                <label for="exampleFormControlTextarea1" class="form-label"></label>
                                <img src="../Controller/captcha.php" style="margin-top: 2vw;" />
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Captcha" name="captcha" style="width: 175px; margin-top:10px">

                                <!-- Message d'erreur -->
                                <?php echo "<div style='color:red;font-weight:600;margin-top:10px;'>" . $contact->getErreurCaptcha() . "</div>" ?>
                            </div>


                            <div class="form-group btnn show-on-scroll">
                                <input type="submit" name="reg_contact" class="btnContact" value="Envoyer" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>



            <!-- Footer  -->
            <?php include('./partials/footer.php'); ?>



        </section>








    </main>

    <!-- show on scroll script  -->
    <script src="../js/show-on-scroll.js"></script>

    <!-- script pour la nav sticky  -->
    <script src="../js/nav-sticky.js"></script>

</body>

</html>