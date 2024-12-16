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
            <h1 class="header-title1">Une petite présentation du text</h1>
            <img src="mes-articles/photos/img3.jpg" alt="" class="header-img1">

        </div>
    </section>

    <section class="post-content1 post-container1">
        <h2 class="sub-heading1"></h2>
        <p class="post-text1">Le Sénégal, le nôtre, ce pays aux mille promesses, est aujourd'hui pris dans un immobilisme alarmant. La futilité devient le meilleur sujet, l’essentiel est écarté de priorités. Pendant que le monde avance à une vitesse fulgurante, porté par l’innovation, la créativité et l’ambition, nous, en tant que société, demeurons englués dans les faits divers, des bidules superfétatoires, les futilités et les controverses vaines. La majorité de nos discussions publiques, que ce soit sur les réseaux sociaux, dans les journaux ou sur les plateaux télévisés, se concentre sur des sujets secondaires. C’est, soit le sexe, la vie privée, les polémiques ou les distractions inutiles. Pendant ce temps, les nations ambitieuses investissent dans l'avenir, dans les secteurs porteurs de développement et d’innovation. C’est triste de faire le constat, mais le Sénégal moderne est rongé par un mal insidieux : l'obsession des apparences. Chacun veut être vu, entendu, admiré, sans se soucier des fondements de sa réussite ou de l’impact de ses actions. Nous vivons dans une société où l'ego a pris le dessus sur la volonté collective de bâtir un avenir commun. Il n’est plus question de coopération, d’unité ou de solidarité. Tout le monde veut être plus important que l'autre, croyant être la solution à tous les problèmes. La vérité est que nous ne parviendrons jamais à un développement durable tant que cette mentalité persistera.
        </p>
        <p class="post-text1">Dans cette atmosphère d'égocentrisme exacerbé, la critique constructive devient un acte de défiance. Quiconque ose remettre en question le statu quo, quiconque a l’audace de pointer du doigt les dysfonctionnements, est immédiatement catalogué comme un ennemi de la nation ou une personne à abattre. Au lieu de promouvoir l’audace et la vérité, nous nous acharnons sur ceux qui osent nous défier. Nous nous confortons dans une illusion collective où chacun feint la perfection. Cette attitude nous conduit tout droit à une stagnation permanente. Et, l’un des maux les plus profonds de notre société est notre relation ambivalente avec la vérité. Au Sénégal, nous avons développé une étrange affection pour le mensonge. Nous préférons qu’on nous berne, qu’on nous leurre, qu’on nous endorme dans un faux sentiment de sécurité et de confort. La vérité est souvent trop douloureuse, trop brutale pour être acceptée. Le mensonge, quant à lui, est doux, rassurant et nous permet de continuer à vivre dans notre sommeil profond, loin des réalités qui exigeraient des changements radicaux. Cette complaisance envers le mensonge est non seulement visible dans la sphère politique, mais aussi dans nos interactions quotidiennes. Nous avons peur de regarder en face les défis auxquels nous faisons face. Nous avons peur de reconnaître nos propres erreurs. L’égoïsme est le cancer de notre développement. Il est sans doute l'une des plus grandes tares de notre société actuelle. Or, le développement national nécessite un effort collectif, une vision partagée. Nous sommes prisonniers de nos ambitions individuelles. Chacun tire la couverture à soi. Chacun espère briller aux dépens des autres. Cette compétition malsaine ne fait que diviser, affaiblir notre cohésion sociale et, par ricochet, ralentir notre développement économique.</p>
        <p class="post-text1">Ici, c’est là où chacun cherche à maintenir ses privilèges. L'innovation est reléguée au second plan. Là où des pays comme le Rwanda, l’Éthiopie ou encore le Maroc investissent massivement dans les technologies, l’entrepreneuriat et les infrastructures, nous restons obsédés par les querelles internes. Les rares jeunes qui osent innover sont souvent freinés par un système bureaucratique lourd, une absence de soutien réel et une critique sociale acerbe. Au lieu d’encourager la prise de risque, nous nous empressons de dénigrer ceux qui osent rêver grand. Nous vivons dans une société où l’échec est stigmatisé au point de dissuader l'initiative, là où d’autres voient dans l’échec une étape naturelle vers le succès.
        </p>
        <p class="post-text1">Nos médias, autrefois vecteurs d’information et d’éducation, se sont transformés en tribunes où la médiocrité est reine. Les sujets de fond sont évités, remplacés par des débats futiles sur la vie privée des célébrités ou sur des scandales éphémères. On ne parle plus des vrais défis de notre temps : la pauvreté, l’éducation, l’emploi des jeunes, l’industrialisation. Non, ce sont les querelles personnelles, les polémiques insignifiantes qui dominent nos espaces médiatiques. Les chaînes de télévision, les stations de radio et les journaux, au lieu d’élever le débat, préfèrent descendre dans les bas-fonds du sensationnalisme pour capter l’attention. Les réseaux sociaux, quant à eux, sont devenus les arènes de combats où tout le monde veut avoir raison. Ces plateformes, qui auraient pu servir à informer, à éduquer et à inspirer, sont devenues des lieux où règnent la haine, la calomnie et la destruction d’images. Loin d’encourager l'innovation ou la pensée critique, ces espaces amplifient les querelles stériles et les polémiques superficielles.</p>
        <p class="post-text1">Le développement se mérite. Il n'est ni un hasard, ni un don du ciel, mais le fruit d’un travail acharné, d'une réflexion profonde et d’une volonté collective. Tant que nous resterons concentrés sur nos petites querelles et nos egos, tant que nous préférerons le mensonge confortable à la vérité dérangeante, nous n’avancerons pas. Il est impératif de changer nos mentalités, de cesser de nous voir comme des adversaires et de commencer à travailler ensemble pour bâtir un avenir meilleur. Sans une prise de conscience collective, nous ne bougerons pas d’un iota. Il nous faudra remettre en question nos valeurs, nos priorités et nos choix. Il nous faudra mettre de côté nos égoïsmes et de commencer à penser à ce que nous pouvons accomplir ensemble, pour le bien commun. La stagnation du Sénégal est le reflet de notre incapacité à affronter la vérité, à nous unir et à nous engager dans un véritable effort de transformation. Le réveil sera douloureux, mais il est nécessaire. Parce que si nous ne changeons pas maintenant, nous risquons de rester éternellement quémandeurs de dons, consommateurs de tout, producteurs de rien, spectateurs d’un monde qui avance sans nous.</p>
        <p class="post-text1"></p>
        <p class="post-text1"></p>
        <h4 class="post-text1">I’mDieng, écrivain africain du Sénégal. <br>
        Dakar, 17 septembre 2024</h4>
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