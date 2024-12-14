<?php
    include'lecteur.php';
    if(!isset($_SESSION['id'])){
        header('location: connexion.php' );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I'mDieng</title>
    <!-- box icon -->
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<section class="post-header1">
        <div class="header-content1 post-container1">
            <a href="lecteur.php" class="back-home1">Retour Home</a>
            <h1 class="header-title1">Une petite présentation du text</h1>
            <img src="mes-articles/photos/img3.jpg" alt="" class="header-img1">

        </div>
    </section>

    <section class="post-content1 post-container1">
        <h2 class="sub-heading1">Refuser de fermer une école, c’est préférer bâtir l’avenir.</h2>
        <p class="post-text1">L’éducation est le socle de tout développement. Quand l’État choisit de fermer une école au lieu de recruter des enseignants, il commet une erreur grave qui menace de briser des rêves et de compromettre l’avenir de toute une génération. Plusieurs écoles du « Sénégal des profondeurs » risquent d’être fermées. Certaines évoluent dans des conditions on ne peut plus difficiles. L’école élémentaire de Danthialy, dans la commune de Gassane, départemental de Linguère, est un exemple concret:  une seule salle de classe, un seul enseignant chargé d’assurer l’instruction de tous les élèves dans des conditions extrêmement difficiles. Loin de justifier une fermeture, cette situation exige des solutions novatrices et audacieuses. Plusieurs pays ont montré qu’il est possible de transformer des crises en opportunités grâce à des programmes de volontariat dans le secteur de l’éducation. Au Rwanda, après le génocide de 1994, des milliers de jeunes diplômés se sont portés volontaires pour enseigner dans des écoles primaires et secondaires. Ils ont ainsi contribué à reconstruire le système éducatif. En Inde, le programme Teach for India mobilise chaque année des volontaires qui enseignent dans des zones rurales ou défavorisées, tout en recevant des formations pédagogiques. Ces modèles démontrent que, même dans des contextes économiques difficiles, une mobilisation bien organisée peut faire des miracles.</p>
        <p class="post-text1">Au Sénégal, un tel programme pourrait répondre immédiatement aux besoins criants en enseignants et renforcer le lien entre la jeunesse et la nation. En effet, le ministère de l’Éducation pourrait lancer un appel national à la jeunesse diplômée, en insistant sur l’aspect patriotique et temporaire de leur engagement. Les volontaires recevraient des indemnités pour couvrir les frais de transport, de logement et de nourriture. Cette approche limiterait les coûts pour l’État. En échange de leur engagement, l’État pourrait garantir un recrutement prioritaire avec des salaires compétitifs une fois la situation économique stabilisée. Les volontaires seraient formés en pédagogie et gestion de classe à travers des sessions intensives avant leur prise de poste.</p>
        <p class="post-text1">Les défis sont immenses, mais les opportunités le sont également. Garantir l’accès à l’éducation dans des zones reculées profitera aux enfants mais également cela encouragera le développement local, réduira les inégalités et renforcera l’économie à long terme. Les jeunes qui s’engagent aujourd’hui auront le sentiment d’avoir contribué au bien commun et une expérience enrichissante qu’ils pourront valoriser dans leur parcours professionnel.</p>
        <p class="post-text1">Laisser une école fermer équivaut à sacrifier l’avenir. La jeunesse sénégalaise a montré à maintes reprises qu’elle est prête à s’engager pour le bien de la nation. Encore faut-il qu’on lui en donne l’occasion. Le gouvernement pourrait et devrait répondre à cet appel. Investir dans l’éducation, c’est investir dans la prospérité et la stabilité de demain. Que chaque enfant, quelle que soit sa condition sociale ou géographique, ait une chance égale d’apprendre et de rêver.</p>
        <h4 class="post-text1">I’mDieng, écrivain africain du Sénégal. <br> Dakar, le 23 novembre 2024</h4>
    </section>

    <div class="social-media post-container">
        <span class="social-media-title">voir nos articles</span>
        <div class="social">
            <a href="#"><i class="bx bxl-facebook" style="color: #111;"></i></a>
            <a href="#"><i class="bx bxl-instagram" style="color: #111;"></i></a>
            <a href="#"><i class="bx bxl-twitter" style="color: #111;"></i></a>
            <a href="#"><i class="bx bxl-linkedin" style="color: #111;"></i></a>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="sec about-us">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa natus dignissimos temporibus alias, qui minima? Labore ratione ea quibusdam tempora aliquid rerum, enim, quos sapiente sed consequuntur totam repellendus magni.</p>
                <ul class="reseau-sociaux">
                    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                    <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="sec quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="lecteur.php">About</a></li>
                </ul>
            </div>
            <div class="sec contactBx">
                <h2>Contact Infos</h2>
                <ul class="info">
                    <li>
                        <span><i class="bx bxs-map"></i></span>
                        <span>6444 London street <br> Brighton PA 33445 <br> Uk</span>
                    </li>
                    <li>
                        <span><i class="bx bx-envelope"></i></span>
                        <p><a href="mailto:contact@imdiengconsulting.com">contact@imdiengconsulting.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>
</html>