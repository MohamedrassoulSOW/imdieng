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
            <h1 class="header-title1">Lutte contre le cancer / octobre rose</h1>
            <img src="mes-articles/photos/img3.jpg" alt="" class="header-img1">

        </div>
    </section>

    <section class="post-content1 post-container1">
        <h2 class="sub-heading1"></h2>
        <p class="post-text1">Je ne vis plus. Rien ni personne ne peut me séparer de lui, à part la mort. La nuit, il attend patiemment que tout s'éteigne, que l'obscurité prenne place et que le silence envahisse ma chambre. C'est à ce moment-là qu'il frappe, sans crier gare. Je le sens, cet intrus, s'insinuer en moi comme un fauve affamé. Il s'attaque à moi, non pas avec des crocs visibles, mais avec une violence invisible, sourde, qui déchire ma chair. Je ne crie pas, mais mon corps parle pour moi. Il tremble sous l'assaut de ce prédateur qui me consume lentement, méthodiquement, sans répit.
La douleur, elle est vive, féroce. Elle me cloue au lit, elle me retient prisonnière, les mains accrochées à mes draps, le souffle coupé par l'intensité du supplice. Il tire, arrache, mord à pleines dents. Mon sein devient son terrain de jeu, sa proie préférée, et moi, je suis là, impuissante, face à cette créature sournoise qui rôde le fond de mon être. Parfois, je ferme les yeux en espérant que ce ne soit qu'un mauvais rêve, mais non, chaque nuit, il revient, plus féroce encore, comme s'il prenait plaisir à ravager ce qu'il me reste de force.
</p>
        <p class="post-text1">Mes jours sont des rémissions, des pauses infimes où je tente de respirer, où je fais semblant de sourire. Je me lève, le corps lourd, les membres engourdis, et j'affronte la vie avec cette douleur, tapie en moi, prête à bondir au moindre mouvement. Il n'y a plus d'échappatoire. Je suis vivante, mais comme un fantôme, déambulant dans ce monde qui ne sait rien de mes combats nocturnes. Je suis morte sans mourir. Morte à petit feu, chaque souffle arraché, chaque nuit volée.
        </p>
        <p class="post-text1">Je repense à avant. Avant que ce monstre ne prenne possession de moi, de mon corps, de ma vie. Avant que je ne devienne ce champ de bataille où chaque jour est une guerre à gagner. Il a pris tout ce que j'avais de précieux. Ma liberté, mon insouciance, ma féminité. Et pourtant, je suis encore là. Debout, oui, mais vacillante.
        </p>
        <p class="post-text1">Je suis ce soldat qui porte des blessures invisibles, celles que personne ne voit, celles que l'on tait, par pudeur, par peur.
        Et puis, il y a cette douleur dans ma poitrine. Ce poids qui pèse, qui brûle, qui tire. Chaque seconde me rappelle que je ne suis plus la même, que quelque chose en moi se désagrège. Mon sein, ce symbole de vie, de féminité, n'est plus que l'ombre de lui-même. Il est défiguré, marqué par cette guerre que je mène dans le silence. Une guerre contre cet ennemi invisible qui me ronge de l'intérieur, qui me consume chaque jour un peu plus.
        Ce fauve n'est pas une bête sauvage, non.
        Il a un nom, bien réel, bien cruel. Le cancer. J’ai
        le cancer du sein. Ce prédateur qui s'attaque à nos vies, qui vole nos nuits, nos sourires, nos corps. Ce mal qui se cache, qui grandit dans l'ombre et qui finit par tout détruire sur son passage. 
        </p>
        <p class="post-text1">Mais je refuse de baisser les bras. Je me bats, pour moi, pour toutes celles qui, comme moi, affrontent chaque jour cette douleur silencieuse. Je me bats pour que nos voix, nos histoires, ne soient plus murmurées dans l'obscurité, mais criées haut et fort. Aujourd'hui, je rends hommage à toutes ces femmes courageuses qui, comme moi, se battent contre cet ennemi invisible. 
        </p>
        <p class="post-text1">À celles qui ont perdu leur sein, mais jamais leur courage. 

        <br>À celles qui vivent avec la peur, mais qui sourient malgré tout.
        <br>À celles qui luttent dans le silence, la nuit venue, mais qui continuent d'aimer la vie, envers et contre tout.
        <br>Et à vous, mes sœurs, mes amies, je vous dis, ne laissez pas ce fauve vous surprendre. Faites le dépistage, dès que possible. 
        <br>Prévenez-le avant qu'il n'ait le temps de s'installer, avant qu'il ne prenne vos nuits, vos jours, vos vies. 
        <br>Soyez vigilantes, soyez courageuses et nous pourrons le vaincre. Parce que vous n’êtes pas seules. Parce que nous, hommes et femmes, sommes plus forts que ce mal.
        </p>
        <h4 class="post-text1">I’mDieng, écrivain africain du Sénégal 
 <br>
Dakar, le 1er octobre 2024</h4>
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