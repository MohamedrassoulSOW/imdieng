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
            <h1 class="header-title1">Plaidoyer pour Gaza et l’humanité bafouée.</h1>
            <img src="mes-articles/photos/img3.jpg" alt="" class="header-img1">

        </div>
    </section>

    <section class="post-content1 post-container1">
        <h2 class="sub-heading1">Plaidoyer pour Gaza et l’humanité bafouée.</h2>
        <p class="post-text1">Quand le monde comprendra-t-il que la paix vaut mieux que la vengeance ? Quand l’humanité s’éveillera-t-elle enfin face à la barbarie qui se répète sous nos yeux, jour après jour, à Gaza ? Les cris des enfants, les larmes des mères, les rues dévastées par la violence : ce sont des scènes qui devraient secouer les consciences, mais qui, au lieu de cela, tombent dans le silence accablant des institutions internationales. L’ONU semble aujourd'hui dépassée, impuissante devant la tragédie humaine qui se déroule en Palestine.
        </p>
        <p class="post-text1">L’histoire de Gaza est celle d’un peuple pris dans l’étau de la cruauté, assiégé non seulement par les bombes et les armes, mais aussi par l’indifférence des puissants de ce monde. L’Occident, celui-là même qui se targue de défendre les droits humains et la démocratie, célèbre aujourd’hui des morts, justifie des injustices et ferme les yeux sur les enfants, les innocents, réduits en poussière sous les décombres. Qu’est devenu l’humanisme que l’on nous enseigne dans les grandes chartes et conventions internationales ? Ces promesses d’un monde plus juste et plus égalitaire ne sont aujourd'hui que des mots vides, des reliques d’une époque révolue où l’on osait encore croire à la paix.
        </p>
        <p class="post-text1">Israël, dans cette impitoyable guerre, pense que la victoire s’achète par la force, par la répression, par la destruction. Mais que vaut une victoire quand elle est tâchée de sang ? Que vaut l’humanité, quand elle se nourrit de crimes ? Les dirigeants du monde se perdent dans des discours de paix, mais leurs actions parlent un autre langage : celui de la complicité silencieuse face à l’injustice. Gaza brûle, mais les grandes puissances continuent de jouer le jeu diplomatique, préférant protéger leurs intérêts plutôt que de défendre les valeurs qu’elles prétendent incarner. Le silence de la communauté internationale n’est pas seulement une forme de lâcheté ; il est une complicité. En ne dénonçant pas fermement les violences, en ne condamnant pas les exactions, l’ONU et les autres institutions censées garantir la paix deviennent des acteurs passifs de cette tragédie. Chaque jour qui passe sans action concrète, chaque enfant qui meurt sous les bombes, chaque maison réduite en ruines est un échec de l’humanité tout entière. Le monde doit se réveiller. Il ne s’agit pas seulement d’un conflit entre deux nations ; il s’agit de l’avenir de notre humanité commune. La paix ne se construira jamais sur les ruines de la haine. La vengeance ne mène qu’à plus de douleur, plus de destruction. L’histoire nous l’a montré à maintes reprises : perpétuer la violence ne fait que nourrir un cycle infernal dont personne ne sortira gagnant.
        </p>
        <p class="post-text1">À Gaza, c’est l’humanité qui souffre. Et tant que nous fermerons les yeux sur cette souffrance, tant que nous resterons silencieux, nous serons tous coupables. Il est temps pour le monde de se lever, de crier « stop », et de prendre position pour la justice. Parce qu’il le faut. Parce que la paix ne naîtra jamais de la guerre. Elle ne peut éclore que du respect de la vie, de la dignité humaine et de la reconnaissance des droits de chacun à vivre libre et en sécurité. 
        </p>
        <p class="post-text1">C’est le moment de dire « assez ». Pour Gaza. Pour les enfants qui y grandissent dans la peur. Pour l’humanité tout entière.
        </p>
        <h4 class="post-text1">I’mDieng, écrivain africain du Sénégal <br>
        Dakar, le 30 septembre 2024</h4>
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