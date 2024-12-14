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
            <h1 class="header-title1">Ce monde est invivable.</h1>
            <img src="mes-articles/photos/img3.jpg" alt="" class="header-img1">

        </div>
    </section>

    <section class="post-content1 post-container1">
        <h2 class="sub-heading1">Ce monde est invivable.</h2>
        <p class="post-text1">À quel moment l’humanité a-t-elle perdu son âme ? Comment expliquer que dans un monde où les technologies rivalisent d’innovation et où les fortunes atteignent des sommets astronomiques, des enfants meurent encore de faim, oubliés dans des contrées lointaines ? Une banane vendue aux enchères pour trois milliards de francs CFA, pendant que des familles ne trouvent pas de quoi rompre leur jeûne. Voilà le tableau grotesque d’une société qui a troqué son humanité contre le clinquant du superflu. Ce monde est un paradoxe. Des États qui allouent des milliards pour alimenter des guerres fratricides, pendant que leurs propres citoyens mendient la dignité. Des lobbys qui vaccinent pour tuer, sous couvert d’un humanisme dévoyé. Des médias transformés en machines à manipuler les foules. Des politiciens qui promettent le bien pour semer le mal.</p>
        <p class="post-text1">Que c’est consternant de constater que des nations continuent de se menacer avec des armes capables d’annihiler des millions de vies en quelques instants! Test de missiles, course à l’armement, des menaces incessantes, un comportement de l’homme qui ne fait qu’accentuer les fractures géopolitiques et alimenter un cycle de peur et de vengeance. L’homme, en apparence, évolue. Mais en réalité, il recule. Il s’enfonce dans un individualisme sauvage. Il abandonne derrière lui toute trace d’altruisme. Nos priorités sont biaisées. Des pays riches et prospères où des citoyens contractent des dettes pour se procurer le dernier modèle d’iPhone, pendant qu’à quelques kilomètres, d’autres abattent des animaux sauvages pour survivre. Le système mondial n’est pas neutre. Il est pensé pour enrichir les puissants et maintenir les faibles dans une précarité perpétuelle. Il organise les inégalités, creuse les écarts et transforme les dépendances en chaînes indestructibles. Les richesses circulent, mais elles gravitent toujours vers le sommet et laissent des miettes à la base.</p>
        <p class="post-text1">A chaque fois, la nature nous rappelle à l’ordre. Pourtant. Les crises environnementales, les migrations forcées, les conflits armés… Tout cela est le fruit amer d’un déséquilibre que nous avons fabriqué. Si l’homme évolue en reculant, c’est parce qu’il a abandonné les valeurs fondamentales qui distinguent les civilisations des barbaries : la justice, la solidarité et la dignité humaine. Qui pour arracher les masques de cette hypocrisie mondiale? Le peu de l’humanité qui reste crie. Qui pour l’entendre ? C’est le cri de la conscience. Une conscience qui refuse de détourner le regard face aux injustices criantes. Une conscience qui croit encore que l’humanité peut se sauver, à condition de retrouver le sens du partage et du respect de la vie. Si nous continuons sur cette voie, ce ne sera pas la planète qui périra, mais l’humanité elle-même. L’histoire nous jugera. Que restera-t-il de nous, sinon le souvenir d’une civilisation qui possédait tout, mais qui a tout gâché ?</p>
        <p class="post-text1"></p>
        <h4 class="post-text1">I’mDieng, écrivain africain du Sénégal <br>
        Dakar, le 22 novembre 2024</h4>
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