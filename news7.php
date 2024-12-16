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
        <p class="post-text1">Les « heureux ménage » en statuts whatsapp, les « téral et yébbi » ostentatoires devant le monde, les photos pro sur les réseaux sociaux… ce sont les seules choses qui comptent. Pour eux. Ceux qui se laissent endormir par les fourberies des réseaux sociaux. La dysmorphophobie a creusé le manque le manque de confiance et développé un complexe qui n’attire aucune attention. Il est silencieux. Ce complexe. Personne ne veut plus être imparfait. On imite tout. On change de vie. Pour faire comme l’autre. Devenir l’autre. Sans l’être vraiment. Mais le paraître suffit. Nous vivons dans un Sénégal où la superficialité règne en maître, où la valeur d’un individu se mesure à l’épaisseur de son portefeuille ou à la courbe de son corps. Une société qui glorifie l’éphémère et l’apparence. Les relations humaines sont devenues des marchandises. La poche pleine suffit aux filles, les fesses bombées aux garçons. Voilà ce qui fait désormais office de fondement pour se marier. Le luxe et la beauté ont pris le pas sur les valeurs essentielles et laissent place à des unions fragiles, sans profondeur ni véritable connexion. 
        </p>
        <p class="post-text1">Aujourd’hui, la beauté fait le choix, l’argent impose sa loi. Les hommes, aveuglés par leur instinct primaire, se laissent envoûter par les courbes exposées sur les réseaux sociaux, mesurant leur succès à la splendeur d’un mariage extravagant. Les poitrines mises en avant et les fesses exposées deviennent les critères d’une réussite éphémère, d’un triomphe superficiel. Et face à ces illusions, les hommes perdent de vue l’essentiel. Ils oublient que la beauté physique ne peut conquérir que temporairement un cœur, et que l’argent seul ne peut acheter l'amour sincère, celui qui traverse les épreuves du temps.
        </p>
        <p class="post-text1">De l’autre côté, les jeunes filles, qui n’ont que leur physique à offrir, se contentent de s’afficher aux bras d’hommes fortunés, croyant avoir atteint le sommet du bonheur. Leur victoire, elles la mesurent en « likes », en commentaires et en fantasmes des réseaux sociaux. Elles cherchent leur validation à travers les regards envieux et les applaudissements de cette foule numérique. Mais à quel prix ? Derrière ces sourires figés et ces photos soigneusement retouchées, la réalité est souvent bien plus cruelle. Parce que, au-delà de la beauté, au-delà des apparences, il y a une vérité universelle. Cette vérité , c’est que la longévité d’un couple ne repose pas sur la cherté des robes de mariage ni sur les bijoux en or, mais sur des valeurs profondes que chaque partenaire incarne pour l’autre. Un homme sage, un homme éclairé, ne cherche pas simplement une compagne pour agrémenter son quotidien ou embellir ses soirées. Non, il cherche celle qui, par son esprit, son cœur et sa vision, peut investir en lui. Cet investissement n’est pas forcément financier. Il est humain, profondément humain.</p>
        <p class="post-text1">Une femme qui aime sincèrement ne s’attarde pas sur la situation actuelle de son partenaire. Elle ne s’arrête pas à ses faiblesses, à ses échecs ou à sa pauvreté. Là où d’autres ne voient que des défauts, des imperfections ou des obstacles, elle perçoit du potentiel. Elle devine un avenir où son homme, malgré les défis du présent, pourra s’épanouir et atteindre des sommets insoupçonnés. Des valeurs sûres. Une femme sincèrement amoureuse devient alors la lumière qui éclaire le chemin de son compagnon. Son regard va au-delà de l’instant présent, elle projette une vision de l’avenir. Elle est capable de voir non seulement ce qu’il est, mais surtout ce qu’il peut devenir.
        </p>
        <p class="post-text1">Le succès d’un couple ne réside pas dans les plaisirs immédiats ni dans les éclats superficiels, mais dans les sacrifices du présent et les ambitions partagées pour le futur. C’est dans la résilience face aux épreuves, dans la capacité à voir au-delà des difficultés, que se trouve la véritable force d’un couple. Et cette force ne peut être atteinte que si les deux partenaires partagent des valeurs communes, celles qui élèvent l’âme et enrichissent l’esprit. Le mariage ne doit pas être une simple célébration publique, un événement fastueux destiné à satisfaire l’ego ou à impressionner l’entourage. Il doit être un engagement sincère, un pacte de loyauté, de respect et de soutien mutuel. Ce n’est que dans cette quête partagée de sens, dans cet effort constant pour se construire mutuellement, que le couple pourra résister aux tempêtes de la vie et s’enraciner dans la solidité du temps. La société moderne, avec ses valeurs éphémères et ses obsessions matérielles, veut oublier cette réalité. Que les jeunes, les hommes et les femmes comprennent que l’amour vrai ne se fonde ni sur l’argent, ni sur la beauté physique, mais sur une vision commune de l’avenir. Nous devons apprendre à résister aux épreuves du temps et offrir à ceux qui la vivent des fruits de bonheur, de joie, de longévité et de prospérité.
        </p>
        <p class="post-text1"></p>
        <p class="post-text1"></p>
        <h4 class="post-text1">I’mDieng, écrivain africain du Sénégal <br>
        Dakar, le 28 septembre 2024</h4>
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