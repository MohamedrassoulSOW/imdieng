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
            <h1 class="header-title1">Madame Bovary de Gustave Flaubert, Le Père Goriot de Balzac, Phèdre de Racine…</h1>
            <img src="mes-articles/photos/img3.jpg" alt="" class="header-img1">

        </div>
    </section>

    <section class="post-content1 post-container1">
        <h2 class="sub-heading1"></h2>
        <p class="post-text1">Madame Bovary de Gustave Flaubert, Le Père Goriot de Balzac, Phèdre de Racine… autant d’œuvres de la littérature française du dix neuvième siècle qui peuplent encore les salles de classe sénégalaises. Bien qu’indéniablement marquantes dans l’histoire littéraire mondiale, ces œuvres sont imposées à une jeunesse sénégalaise du vingt-et-unième siècle, qui ne peut pas s’identifier à des personnages et des intrigues si éloignés de leur réalité quotidienne. Comment espérer cultiver l’amour de la lecture chez des élèves lorsqu'ils sont confrontés à des textes qui ne correspondent pas à leur vécu, leurs préoccupations ou leur environnement socioculturel ?</p>
        <p class="post-text1">Ces œuvres classiques ne sont pas mauvaises en soi. Elles apportent une certaine richesse culturelle  et leur universalité est louable. Mais, peuvent-elles réellement attirer l’attention d’une génération si différente de celle à laquelle elles s’adressaient à l’origine ? La jeunesse actuelle, confrontée à des défis sociétaux, économiques et culturels propres à l’Afrique contemporaine, a besoin de récits qui reflètent ces réalités, qui évoquent leurs luttes, leurs rêves et qui présentent des personnages dans lesquels ils peuvent se reconnaître. Nous sommes en Afrique, précisément au Sénégal. Pourquoi, alors, les programmes scolaires continuent de forcer des œuvres qui ne parlent pas directement à cette génération, alors que nous regorgeons de talents littéraires africains? Des auteurs tels que Mariama Bâ, Cheikh Hamidou Kane, Amadou Ampathé Bâ, Ken Bugul, Aminata Sow Fall, Faty Dieng, Elgas et tant d’autres, ont su mettre en lumière la complexité de nos sociétés, les conflits identitaires, les bouleversements historiques et les défis contemporains. Pourquoi ne pas les mettre au cœur de l’éducation de nos enfants ? Ces écrivains africains sont mieux placés pour évoquer les réalités auxquelles sont confrontées les jeunes générations, qu’il s’agisse de la migration clandestine, de la quête identitaire, de la tradition face à la modernité ou de la lutte pour la justice sociale.</p>
        <p class="post-text1">Le système éducatif sénégalais doit cesser d’être un vecteur de colonisation intellectuelle et culturelle. Continuons-nous à nous coloniser nous-mêmes en imposant des œuvres qui datent de plus de deux siècles, sans faire de place aux écrivains africains ? Ce paradoxe est d’autant plus criant que le Sénégal est un pays riche en talents littéraires, capables de produire des écrits puissants et ancrés dans nos réalités. Il faut que notre système éducatif exploite cette diversité et cette richesse. L’abandon de la lecture par les élèves n’est pas une question de désintérêt pour la littérature en tant que telle, mais un désintérêt pour des œuvres qui ne leur parlent pas. Il est illusoire de penser que des romans écrits en 1800 peuvent répondre aux aspirations d’une jeunesse de 2024. Ce fossé générationnel et culturel, que le système éducatif ignore trop souvent, doit être comblé. Il est plus que temps de proposer des livres qui abordent des sujets contemporains et valorisent l’héritage littéraire africain. Cela permettra d’offrir aux élèves des perspectives plus en phase avec leurs expériences, leurs défis et leurs ambitions. Les jeunes Sénégalais doivent pouvoir lire des livres qui parlent de leur pays, de leur continent, de leur histoire et de leur avenir. Cette réforme est urgente, si nous voulons vraiment éveiller l’esprit critique, la créativité et la passion des jeunes pour la lecture.</p>
        <p class="post-text1">Les autorités éducatives doivent repenser les programmes scolaires et donner une place prépondérante aux auteurs africains dans les classes. Il s’agit de rééquilibrer les contenus pour que nos jeunes puissent enfin se voir à travers les œuvres qu'ils étudient. Le futur de l’éducation africaine repose sur notre capacité à faire de la littérature un miroir de nos réalités.</p>
        <h4 class="post-text1">I’mDieng, écrivain africain du Sénégal <br>
        Dakar, le 21 septembre 2024</h4>
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