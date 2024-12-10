<?php
    include'function.php';
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
    <header>
        <div class="nav-container">
            
            <a href="lecteur.php" class="logo">I'm<span>Dieng</span></a>
            <a href="deconnexion.php" class="login">Déconnecter</a>
        </div>
    </header>
    <section class="banner" id="home">
        <img src="mes-articles/photos/banner1.png" alt="">
    </section>

    <section class="about container" id="about">
        <div class="contentBx">
            <h2 class="titleText">Catch up with the trending topics</h2>
            <p class="title-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate et error recusandae quibusdam natus nobis! Quis commodi ea iure. Iste beatae quas qui provident laudantium dolor, nesciunt corporis cumque?
                <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad rem, ea suscipit est similique esse optio aspernatur praesentium facere eius reiciendis laudantium deserunt recusandae officiis dolorum. Provident officia nisi sequi.
            </p>
            <a href="#" class="btn2"> Read more</a>
        </div>
        <div class="imgBx">
            <img src="photo/pub1.jpg" alt="" class="fitBg">
        </div>
    </section>

    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter="all">All</span>
        <span class="filter-item" data-filter="tech">Tech</span>
        <span class="filter-item" data-filter="food">Food</span>
        <span class="filter-item" data-filter="news">News</span>
    </div>

    <div class="post container">
         <!------- Post 0 Exemplaire --------->
    <!--<div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">How to create the best UI with figma</p>
            <span class="post-date">16 Nov 2024</span>
            <p class="post-description">Lorem ipsum dolor sit amet consectetur </p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>-->

        <!------- Post 0 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Refuser de fermer une école, c’est préférer bâtir l’avenir.</p>
            <span class="post-date">le 23 Novembre 2024</span>
            <p class="post-description">L’éducation est le socle de tout développement. Quand l’État choisit de fermer une école au lieu de recruter des enseignants,</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>
        
            <!------- Post 1 Exemplaire --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Le devoir de servir en silence</p>
            <span class="post-date">le 27 novembre 2024</span>
            <p class="post-description">J’ai vu l’annonce d’un concert des étudiants dédié au DG du COUD. Qu’il soit derrière cette initiative ou pas, qu’à cela ne tienne,</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news1.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>
        
            <!------- Post 2 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Ce monde est invivable.</p>
            <span class="post-date">le 22 novembre 2024</span>
            <p class="post-description">À quel moment l’humanité a-t-elle perdu son âme ? Comment expliquer que dans un monde où les technologies rivalisent d’innovation et où les fortunes atteignent des sommets astronomiques,</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news2.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 3 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Confier la présidence de l’Assemblée Nationale à Ousmane Sonko pourrait être un faux pas stratégique.</p>
            <span class="post-date">le 20 novembre 2024</span>
            <p class="post-description">Mettre Ousmane Sonko à la présidence de l’Assemblée nationale serait une erreur stratégique majeure, tant sur le plan politique que dans la mise en œuvre de la vision 2050. Cette fonction, bien que prestigieuse, réduirait considérablement son rôle dans le duo qu’il forme avec le Président Bassirou Diomaye Faye, un duo qui incarne la stabilité et le changement tant attendu par les Sénégalais. La présidence de l’Assemblée nationale impose un rôle strictement législatif. Avec le principe de séparation des pouvoirs, Ousmane Sonko serait contraint de se tenir à l’écart des décisions exécutives. Cela signifie qu’il ne pourrait ni orienter les ministres ni garantir une application stricte des projets gouvernementaux. En tant que Président de l’Assemblée, tout entretien fréquent avec le Président de la République pourrait être perçu comme une ingérence qui fragilise la gouvernance.</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news3.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 4 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Lettre ouverte au Président de la République</p>
            <span class="post-date">le 25 octobre 2024</span>
            <p class="post-description">Monsieur le Président, <br>
            Permettez-moi de reprendre vos mots, pour entamer ma lettre. « Il me revient le douloureux souvenir des martyrs de la démocratie sénégalaise, des amputés, des blessés et des anciens prisonniers. Je garderai toujours à l’esprit les lourds sacrifices consentis, afin de ne jamais vous décevoir. » Les souvenirs de notre lutte pour la démocratie sont marqués par des douleurs ineffaçables, « irréversibles », gravées dans nos cœurs par la perte de ceux qui ont donné leur vie pour que la liberté, la justice et la dignité soient des réalités tangibles pour chaque sénégalais. Ces martyrs de la démocratie, ces âmes courageuses, ont refusé de se taire face aux abus, aux injustices et aux obstacles dressés sur leur chemin. Ils ont tracé, de leur sang, la voie de la souveraineté pour notre nation, sans faiblir et sans jamais renoncer à leur rêve d’un Sénégal où chaque voix serait entendue, chaque vie respectée.
            </p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news4.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 5 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Lutte contre le cancer / octobre rose</p>
            <span class="post-date">le 1er octobre 2024</span>
            <p class="post-description">Je ne vis plus. Rien ni personne ne peut me séparer de lui, à part la mort. La nuit, il attend patiemment que tout s'éteigne,</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news5.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 6 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Plaidoyer pour Gaza et l’humanité bafouée.</p>
            <span class="post-date">le 30 septembre 2024</span>
            <p class="post-description">Quand le monde comprendra-t-il que la paix vaut mieux que la vengeance ? Quand l’humanité s’éveillera-t-elle enfin face à la barbarie qui se répète sous nos yeux, jour après jour, à Gaza ? Les cris des enfants, les larmes des mères, les rues dévastées par la violence : ce sont des scènes qui devraient secouer les consciences, mais qui, au lieu de cela, tombent dans le silence accablant des institutions internationales. L’ONU semble aujourd'hui dépassée, impuissante devant la tragédie humaine qui se déroule en Palestine.
            </p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news6.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 7 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">pas de titre pour le moment</p>
            <span class="post-date">le 28 septembre 2024</span>
            <p class="post-description">Les « heureux ménage » en statuts whatsapp, les « téral et yébbi » ostentatoires devant le monde, les photos pro sur les réseaux sociaux…</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news7.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 8 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Nous sommes au temps de la réforme. </p>
            <span class="post-date">le 22 septembre 2024</span>
            <p class="post-description">Il nous faudra du temps, un long et douloureux processus, pour résoudre les nombreux problèmes qui gangrènent notre société.</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news8.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 9 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Madame Bovary de Gustave Flaubert, Le Père Goriot de Balzac, Phèdre de Racine…</p>
            <span class="post-date">le 21 septembre 2024</span>
            <p class="post-description">Ces œuvres classiques ne sont pas mauvaises en soi. Elles apportent une certaine richesse culturelle  et leur universalité est louable. Mais, peuvent-elles réellement attirer l’attention d’une génération si différente de celle à laquelle elles s’adressaient à l’origine ? La jeunesse actuelle, confrontée à des défis sociétaux, économiques et culturels propres à l’Afrique contemporaine, a besoin de récits qui reflètent ces réalités, qui évoquent leurs luttes, leurs rêves et qui présentent des personnages dans lesquels ils peuvent se reconnaître. Nous sommes en Afrique, précisément au Sénégal. Pourquoi, alors, les programmes scolaires continuent de forcer des œuvres qui ne parlent pas directement à cette génération,</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news9.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 10 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Où est passé tout cet argent ?</p>
            <span class="post-date">le 18 septembre 2024</span>
            <p class="post-description">Depuis des décennies, la ville de Touba est engloutie par les eaux à chaque saison des pluies, un phénomène qui reflète tragiquement l’incapacité de l’État à offrir des solutions durables à cette situation critique.</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news10.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 11 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">La futilité devient le meilleur sujet,</p>
            <span class="post-date">17 septembre 2024</span>
            <p class="post-description">Le Sénégal, le nôtre, ce pays aux mille promesses, est aujourd'hui pris dans un immobilisme alarmant.</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news11.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 12 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Nous sommes tous complices de ce fléau, de cet échec collectif.</p>
            <span class="post-date">le 11 septembre 2024</span>
            <p class="post-description">Encore, des corps. Toujours, des morts. Mbour n’a que des remords. L’émigration clandestine est un drame qui nous traumatise tous, elle ne cesse de croître, jour après jour, malgré les « efforts déployés » depuis des décennies pour la contenir.</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news12.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 13 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">« Ceux-ci iront en enfer. Ceux-là iront au paradis. » </p>
            <span class="post-date">le 07 septembre 2024</span>
            <p class="post-description">Nous sommes qui pour anticiper le jugement dernier ? Revenons sur terre, réapprenons à vivre ensemble et acceptons les différences qui font de nous des êtres uniques. Ce monde est de plus en plus fragmenté par les conflits et les divisions.</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news13.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 14 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Le défi doit être de réinventer l'État et de restaurer la République.</p>
            <span class="post-date">le 03 septembre 2024</span>
            <p class="post-description">À l'égard d'un ennemi, aucune complaisance n'est permise; il faut l'éloigner fermement et le faire oublier sans regret.</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news14.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 15 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">Alerte! Alerte! Alerte ! Tiktok va nous détruire.</p>
            <span class="post-date">le 26 août 2024</span>
            <p class="post-description">Mame Ndiaye Savon, Adamo, Awoush Kitty… des noms qui attirent des milliers de jeunes à travers leurs « lives » sur TikTok,</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news15.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 16 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">LETTRE OUVERTE AU GOUVERNEMENT DU SENEGAL,</p>
            <span class="post-date">le 14 août 2024</span>
            <p class="post-description">À l'attention des Ministres de l’Education Nationale, de l’Enseignement Supérieur, de la Jeunesse, de la Culture et des Sports, et de l’Agriculture,</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news16.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
        </div>

            <!------- Post 17 --------->
        <div class="post-box societe">
            <img src="mes-articles/photos/img1.jpg" alt="" class="post-img">
            <h2 class="category">Société</h2>
            <p class="post-title">A quand un Modèle Économique SÉNÉGALAIS?</p>
            <span class="post-date">le 12 septembre 2023</span>
            <p class="post-description">Le modèle économique d'un Etat est l'épine dorsale de son développement, un schéma directeur qui doit être soigneusement conçu pour tirer parti de ses avantages et de ses ressources uniques.</p>
            <div class="profile">
                <div class="mon-profile">
                    <img src="mes-articles/photos/test1.jpg" alt="" class="profile-img">
                    <span class="profile-name">I'mDieng</span>
                </div>
                <div class="buttom0">
                    <button type="button" class="buttom0"><a href="news17.php" class="buttom0">Lire plus</a></button>
                </div>
                
            </div>
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