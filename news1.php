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
            <h1 class="header-title1">Le devoir de servir en silence</h1>
            <img src="mes-articles/photos/img3.jpg" alt="" class="header-img1">

        </div>
    </section>

    <section class="post-content1 post-container1">
        <h2 class="sub-heading1">Le devoir de servir en silence.</h2>
        <p class="post-text1">J’ai vu l’annonce d’un concert des étudiants dédié au DG du COUD. Qu’il soit derrière cette initiative ou pas, qu’à cela ne tienne, il a la responsabilité de se ranger sous les principes de rupture, de changement de paradigmes. Comme toutes les autres autorités. Vous venez d’accéder à une mission lourde de responsabilités. C’est celle de servir sans relâche un peuple qui vous a investis de sa confiance. Gouverner, ce n’est pas trôner, c’est s’effacer pour exalter la nation. N’attendez ni louanges ni acclamations. Vous n’êtes pas venus récolter des éloges, mais semer l’espérance. Les vrais serviteurs n’attendent pas des mercis, ils donnent tout sans rien espérer en retour, hormis la satisfaction d’avoir laissé des traces durables dans les cœurs et les esprits.</p>
        <p class="post-text1">Le chemin du pouvoir est fait de pièges souvent négligés. Le plus insidieux est celui du voyeurisme politique, où les lumières des caméras remplacent celles des actions sincères. Éloignez-vous des parrainages coûteux et des événements clinquants qui vident les caisses de l’État. Ces extravagances ne font qu’affamer l’âme du service public. Gardez-vous des gens dont les louanges ne servent qu’à flatter l’orgueil. Que vos actions soient votre unique publicité. Que votre travail silencieux serve les générations futures.</p>
        <p class="post-text1">Chaque décision que vous prenez engage des vies. Les budgets ne sont pas des chiffres abstraits, ce sont les larmes et la sueur de ceux qui vous ont confié leurs espoirs. Agissez avec rigueur, non pour plaire, mais pour bâtir un avenir où chacun se reconnaîtra dans la dignité retrouvée de la nation. Ne cherchez pas la reconnaissance immédiate. Les grands résultats sont invisibles à court terme, mais ils façonnent les fondations d’un pays prospère. Rejetez la tentation du faste et de l’ostentation. La grandeur d’un dirigeant se mesure à la modestie avec laquelle il accepte d’être jugé sur ses œuvres et non sur ses paroles. Que votre satisfaction soit dans l’œuvre bien accomplie, non dans les louanges éphémères. Ne convoitez pas l’immortalité dans les pages d’un livre d’histoire, mais dans le souffle d’une nation que vous aurez relevée, éduquée, nourrie et guidée.</p>
        <p class="post-text1">C’est au peuple qu’appartiennent les applaudissements. Il vous a élus, non pour que vous l’émerveilliez, mais pour que vous le serviez. C’est à vous de le remercier chaque jour par votre dévouement, votre intégrité et votre labeur. Restez humbles et vous ne laisserez pas derrière vous des monuments, mais des générations debout, libres et fières.</p>
        <h4 class="post-text1">I’mDieng, écrivain africain du Sénégal <br>
        Dakar, le 27 novembre 2024</h4>
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