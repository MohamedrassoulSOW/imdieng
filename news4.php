<?php
    include'function.php';
    if(!isset($_SESSION['id'])){
        header('location: connexion.php' );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Blogger</title>
    <!-- box icon -->
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<section class="post-header1">
        <div class="header-content1 post-container1">
            <a href="lecteur.php" class="back-home1">Back To Home</a>
            <h1 class="header-title1">Lettre ouverte au Président de la République</h1>
            <img src="mes-articles/photos/img3.jpg" alt="" class="header-img1">

        </div>
    </section>

    <section class="post-content1 post-container1">
        <h2 class="sub-heading1">Lettre ouverte au Président de la République</h2>
        <p class="post-text1">Monsieur le Président, <br>

        Permettez-moi de reprendre vos mots, pour entamer ma lettre. « Il me revient le douloureux souvenir des martyrs de la démocratie sénégalaise, des amputés, des blessés et des anciens prisonniers. Je garderai toujours à l’esprit les lourds sacrifices consentis, afin de ne jamais vous décevoir. » Les souvenirs de notre lutte pour la démocratie sont marqués par des douleurs ineffaçables, « irréversibles », gravées dans nos cœurs par la perte de ceux qui ont donné leur vie pour que la liberté, la justice et la dignité soient des réalités tangibles pour chaque sénégalais. Ces martyrs de la démocratie, ces âmes courageuses, ont refusé de se taire face aux abus, aux injustices et aux obstacles dressés sur leur chemin. Ils ont tracé, de leur sang, la voie de la souveraineté pour notre nation, sans faiblir et sans jamais renoncer à leur rêve d’un Sénégal où chaque voix serait entendue, chaque vie respectée.
        </p>
        <p class="post-text1">Monsieur le Président, aujourd’hui, pendant que les espoirs renaissent et que le pays retrouve sa quête de justice et de progrès, la responsabilité de poursuivre leur œuvre nous incombe. A nous tous. Sans exception. Cette responsabilité exige que nous marchions avec la même foi, avec l’intégrité de ceux qui ont sacrifié tout pour que nous soyons libres. C’est avec le poids de leur héritage et la détermination de les honorer que j’écris. Cette lettre est un rappel, un hommage et un appel à préserver cet idéal de gouvernance et de justice pour lequel tant ont tout sacrifié.
        </p>
        <p class="post-text1">Monsieur le Président, je ne vous l’apprends pas, un décret présidentiel n’est pas une simple formalité administrative ; il est un acte de pouvoir et de responsabilité qui va bien au-delà des portes du Palais. Il a une portée profonde et il touche des vies, des communautés entières et, en quelque sorte, l’avenir même de notre pays. Un décret présidentiel, c’est la matérialisation de la volonté de l’État, son bras opérationnel, sa voix et sa signature. Avec un décret, vous avez le pouvoir de créer ou de transformer, mais également, volontairement ou involontairement, de fragiliser ou de briser. Un décret, c’est la formalisation d’une vision de société, un acte qui vient incarner les valeurs et les ambitions du Sénégal, mais aussi l’image que nous renvoyons au monde. Chaque nomination, révocation ou affectation d’un citoyen par décret, au-delà d’une simple décision politique, est une partie de notre patrimoine moral et civique. Elle peut apporter la lumière là où règne l’incertitude, donner de l’espoir là où il y a désillusion, mais elle peut aussi susciter le doute lorsque ce choix n’incarne pas les valeurs pour lesquelles le peuple s’est battu.
        </p>
        <p class="post-text1">Monsieur le Président, ce moment est important pour notre pays. La population a mis en vous une confiance immense, tout en espérant un changement de gouvernance, mais aussi une refondation des valeurs qui définissent notre nation. Chaque décret doit donc être fait de prudence, de responsabilité et d’une vision à long terme. Le cas récent de la nomination de Samba Ndiaye est et de tant d’autres d’ailleurs, est problématique. Cette décision, qui a suscité une vive réaction au sein de la jeunesse et des citoyens patriotes, n’est pas perçue comme alignée avec les principes d’intégrité et d’engagement citoyen que nous souhaitons voir incarner par votre gouvernement. Monsieur Ndiaye, à plusieurs reprises, s’est positionné en porte-à-faux avec les valeurs de justice et de patriotisme qui animent cette nouvelle gouvernance. Sa nomination met en lumière l’importance d’une connaissance approfondie et minutieuse des parcours de ceux à qui sont confiées des responsabilités stratégiques, car un tel choix affecte non seulement l’individu, mais aussi le moral et l’espoir de tout un peuple. Quand vous signez un décret, vous ne faites pas qu’entériner un document officiel, mais vous placez, au cœur de la République, une représentation de notre idéal collectif, une incarnation de l’espoir que vous portez pour le Sénégal. Que chaque nomination soit un modèle de mérite et de vertu. Il ne s’agit pas simplement de faire preuve de rigueur, mais de donner un souffle de cohérence à l’esprit de votre mandat. Choisissez parmi ceux qui représentent véritablement les valeurs de rupture, d’intégrité et de dévouement.
        </p>
        <p class="post-text1">Monsieur le Président, l’histoire du Sénégal se construit à chaque acte que vous posez et elle nous observe, elle vous observe. Faites de chacune de vos actions une preuve de montrer que ce pays peut être gouverné par des valeurs fortes, qu’il est possible d’incarner une gouvernance juste, au service du bien commun et du progrès.
        </p>
        <p class="post-text1">Recevez, Monsieur le Président, l’assurance de ma considération respectueuse et de mon soutien indéfectible pour cette grande mission que vous portez au nom de notre nation. 
<br>Jubb-Jubbal-Jubbanti
</p>
        <h4 class="post-text1">Dakar, le 25 octobre 2024 <br>
        I’mDieng, écrivain africain du Sénégal</h4>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
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
                        <p><a href="mailto:blogmahou2024@gmail.com">blogmahou2024@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>
</html>