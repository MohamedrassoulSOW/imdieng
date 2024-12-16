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
            <h1 class="header-title1">A quand un Modèle Économique SÉNÉGALAIS?</h1>
            <img src="mes-articles/photos/img3.jpg" alt="" class="header-img1">

        </div>
    </section>

    <section class="post-content1 post-container1">
        <h2 class="sub-heading1">A quand un Modèle Économique SÉNÉGALAIS?</h2>
        <p class="post-text1">Le modèle économique d'un Etat est l'épine dorsale de son développement, un schéma directeur qui doit être soigneusement conçu pour tirer parti de ses avantages et de ses ressources uniques. Dans le contexte du Sénégal, une nation qui a hérité d'un riche ensemble de ressources, il est impératif de reconnaître l'importance cruciale de l'exploitation judicieuse de ces atouts.
        <br>Malheureusement, depuis son accession à l'indépendance en 1960, notre Etat a souvent emprunté des modèles économiques étrangers sans véritablement les adapter à nos spécificités sociales, politiques et économiques. Nous avons eu tendance à confondre les programmes politiques, comme le Plan Sénégal Émergent, avec de véritables modèles économiques.</p>
        <p class="post-text1">Les pays dits développés ont élaboré leurs modèles économiques en tenant compte de leurs atouts géographiques, climatiques, ressources naturelles, et de bien d'autres facteurs. Ils ont su exploiter leurs avantages locaux pour bâtir des économies robustes et prospères.
        <br>Prenons exemple sur d'autres nations qui ont réussi à exploiter leur modèle économique pour atteindre le développement. L'Allemagne, par exemple, a développé un modèle économique fondé sur la qualité de ses produits manufacturés, la formation de sa main-d'œuvre et une culture de l'efficacité. Elle a su capitaliser sur ces atouts pour devenir un leader mondial de l'industrie et de l'exportation.
        </p>
        <p class="post-text1">La Corée du Sud, quant à elle, s'est orientée vers un modèle économique axé sur l'investissement massif dans l'éducation et la recherche, ce qui a permis d'ériger des géants technologiques tels que Samsung et Hyundai, tout en renforçant son économie nationale.</p>
        <p class="post-text1">Imaginez le potentiel inexploité de nos plus de 700 kilomètres de côtes. Ces étendues maritimes regorgent de ressources halieutiques, offrant une opportunité inestimable pour le développement d'une industrie de la pêche florissante. Un modèle économique robuste devrait favoriser la pêche durable, créant ainsi des emplois locaux et générant des revenus significatifs pour le pays. Au lieu de vendre à moindre coût nos tonnes de poissons aux capitalistes européens et aux bateaux gourmands chinois.
        <br>La Zone des Niayes, avec ses plus de 180 kilomètres de terres fertiles, est un trésor agricole qui devrait jouer un rôle central dans notre modèle économique. En tirant parti de cette zone pour développer une agriculture moderne et intensive, nous pouvons non seulement nourrir notre population, mais aussi devenir un fournisseur de produits agricoles de qualité sur les marchés régionaux et internationaux.
        <br>Le fleuve qui serpente au nord du Sénégal offre un potentiel considérable pour la culture du riz, tandis que le sud est propice à la production de fruits tropicaux. Les terres du centre sont idéales pour les céréales. Le Sénégal a toutes les cartes en main pour devenir un acteur majeur de l'agriculture en Afrique de l'Ouest.</p>
        <p class="post-text1">Et que dire de notre soleil généreux, de nos réserves d'or, de zircon, de fer, de pétrole et de gaz ? Ces ressources naturelles représentent une opportunité majeure pour diversifier notre économie, stimuler l'industrialisation et créer des emplois de qualité.</p>
        <p class="post-text1">Pour que ces ressources deviennent le moteur de notre développement, nous devons repenser notre modèle économique, en mettant l'accent sur la création de valeur ajoutée locale, la recherche et le développement, la formation de la main-d'œuvre et la promotion de l'entrepreneuriat.
        </p>
        <p class="post-text1">Le Sénégal ne doit plus se contenter de copier des modèles étrangers, mais doit tracer sa propre voie, ancré dans ses réalités et ses atouts. Cela nécessite du courage, de la volonté politique, du patriotisme, une planification stratégique solide et l'engagement de tous les acteurs de la société sénégalaise. Avec une vision audacieuse et une action déterminée, nous pouvons libérer le potentiel de notre nation et ouvrir la voie vers un avenir prospère et durable.
        </p>
        <p class="post-text1"></p>
        <h4 class="post-text1">I’mDieng, écrivain africain du Sénégal <br>
        Dakar le 12 septembre 2023</h4>
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