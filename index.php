<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web stranica koja sadrži detalje o sportu orijentacijskom trčanjem."/>
    <meta name="author" content="Paula Pavlin"/>
    <!--favicon-->
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./images/favicon-16x16.png" sizes="16x16" type="image/pmg">
    <link rel="icon" href="./images/favicon-32x32.png" sizes="32x32" type="image/pmg">
    <!--uključivanje ikona-->
    <script src="https://kit.fontawesome.com/119870e37c.js" crossorigin="anonymous"></script>
    <!--uključivanje fonta_naslov-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Naslovnica</title>
</head>
<body>
    <?php
        include 'connect.php';
        define('UPLPATH', 'img/');
    ?>
        <section class="sport">
            <?php
                $query = "SELECT * FROM vijesti WHERE archive=0 AND category='klub' LIMIT 4";
                $result = mysqli_query($dbc, $query);
                $i=0;
                    while($row = mysqli_fetch_array($result)) {
                        echo '<article>';
                        echo'<div class="article">';
                        echo '<div class="sport_img">';
                        echo '<img src="' . UPLPATH . $row['slika'] . '"';
                        echo '</div>';
                        echo '<div class="media_body">';
                        echo '<h4 class="title">';
                        echo '<a href="clanak.php?id='.$row['id'].'">';
                        echo $row['naslov'];
                        echo '</a></h4>';
                        echo '</div></div>';
                        echo '</article>';
                    }?>
        </section>

    <a id="vrh"></a>
    <header>
        <img src="./images/logo_orienteering.jpeg" alt="">
        <h1><b>Orijentacijsko trčanje</b></h1>
        <nav>
            <ul>
                <li><i class="fa-solid fa-house"></i><a href="index.php">Naslovnica</a></li>
                <li><i class="fa-solid fa-circle-info"></i><a href="o nama/o nama.php">O nama</a></li>
                <li><i class="fa-regular fa-newspaper"></i><a href="novosti/novosti.php">Novosti</a></li>
                <li><i class="fa-solid fa-phone"></i><a href="kontakt/unos.php">Unos podataka</a></li>
            </ul>
        </nav>
    </header>
    <main class="stranica">
        <div class="container">
            <section class="o_orijentacijskom">
                <a id="O orijentacijskom trčanju"></a>
                <h1><b><u>Orijentacijsko trčanje</u></b></h1>
                <hr>
                <table id="sadržaj" class="mb-3">
                    <tr>
                        <td><b><u>Sadržaj:</u></b></td>
                        <td><a href="#O orijentacijskom trčanju">O orijentacijskom trčanju</a></td>
                        <td><a href="#Orijentacijske discipline">Orijentacijske discipline</a></td>
                        <td><a href="#Orijentacijsko trčanje u Hrvatskoj">Orijentacijsko trčanje u Hrvatskoj</a></td>
                    </tr>
                </table>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="./images/naslovnica1.jpg" alt="" class="img-fluid mb-3">
                    </div>
                    <div class="col-lg-6">
                        <br>
                        <p><b>Orijentacijski sport</b> sastoji se od 4 discipline: orijentacijsko trčanje, precizna orijentacija, orijentacija brdskim biciklima (MTBO) te skijaška orijentacija (SKI-O). Na ovoj web stranici možete se informirati o najpoznatijoj disciplini orijentacijskog sporta - orijentacijsko trčanje.
                        <br><br>
                        <b>Orijentacijsko trčanje</b> je neolimpijski sport koji se temelji na kretanju i pronalaženju kontrolnih točaka u prostoru uz pomoć karte i kompasa. Natjecatelj se kreće trčeći ili hodajući po nepoznatom terenu te samo uz pomoć karte i kompasa u što kraćem vremenu obilazi unaprijed određene kontrolne točke ucrtane na karti. Kontrolne točke obilježene su na terenu kontrolnom zastavicom s elektronskom stanicom. Natjecatelj ih mora obilaziti zadanim redoslijedom te na svakoj kontroli ovjeriti svoj dolazak elektronskim čipom. Natjecatelji startaju pojedinačno u intervalnom razmaku, a vrijeme im se mjeri individualno. Pobjednik je onaj koji najbrže obiđe stazu uz uvjet da je obišao sve kontrolne točke zadanim redoslijedom. Natjecatelj se natječe u svojoj dobnoj skupini, a postoje muške i ženske kategorije.
                        <br><br>Dodatne informacije o orijentacijskom trčanju možete pronaći na stranicama 
                        <b><a href="https://orienteering.sport/" target="_blank">Međunarodne orijentacijske federacije (IOF)</a></b>.
                        </p>
                    </div>
                </div>
            </section>
            <section class="discipline_karte">
                <div class="row">
                    <div class="col-lg-6">
                        <article class="discipline mb-4">
                            <a id="Orijentacijske discipline"></a>
                            <h2>Orijentacijske discipline</h2>
                            <p>Discipline se dijele na pojedinačne i štafetne.
                            <br>
                            <b><i>Pojedinačne discipline su</i></b>: sprint, knock-out sprint, srednje i duge staze, noćna orijentacija.
                            <b><i>Štafetne discipline su</i></b>: štafeta i sprint štafeta. Sprint štafetu čine 2 muška i 2 ženska člana, a štafetu 3 muška ili 3 ženska člana.
                            Sprint, knock-out sprint te sprint štafeta trče se na urbanim područjima - naselja, gradski parkovi, a ostale discipline se trče po šumama koje mogu biti i ravne i strmije.
                            Sprint discipline trče se 12-15 minuta, srednje staze 30-35 minuta, a duge staze 75-90 minuta. Štafeta se po izmjeni trči oko 35 minuta.</p>
                            <br><br>
                            <iframe width="600" height="350" src="https://www.youtube.com/embed/DXww8ssF6uo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="karte mb-4">
                            <h2>Orijentacijske karte</h2>
                            <p>Orijentacijske karte su složene karte te je za njihovu izradu potrebno mnogo vremena. Slične su planinarskim kartama, no nešto su manjeg mjerila. Na orijentacijskim kartama nalazi se mnogo simbola koji predstavljaju neki uočljiv detalj na terenu, a npr. šume i livade su označene bijelom odnosno žutom bojom.
                                Najviše se trči sa kartama mjerila 1:10000 (1cm na karti je 100m u prirodi) koje su namijenjene za discipline srednjih i dugih staza te štafete, a sa kartama                                 mjerila 1:4000 (1cm na karti je 40m u prirodi) trči se na sprint natjecanjima. Također postoje karte mjerila 1:5000 i 1:15000.
                            </p>
                            <img src="./images/map.png" alt="" class="img-fluid mb-3">
                        </article>
                    </div>
                </div>
            </section>
            <section class="hrvatska mb-4">
                <a id="Orijentacijsko trčanje u Hrvatskoj"></a>
                <h2>Orijentacijsko trčanje u Hrvatskoj</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <article class="o_u_hr">
                            <h3>Hrvatski orijentacijski savez i klubovi</h3>
                            <p>Orijentacijski sport u Hrvatskoj potječe iz 80.-ih godina 20. stoljeća, a Hrvatski orijentacijski savez osnovan 
                                je u prosincu 2005. godine pod nazivom Hrvatski savez za orijentacijsko trčanje. U punopravno članstvo Hrvatskog 
                                olimpijskog odbora primljen je 27. prosinca 2007. godine. Danas Hrvatski orijentacijski savez broji 11 klubova od kojih je najuspješniji orijentacijski klub "Vihor" iz Zagreba.
                                <br><br><a href="https://orienteering.hr/" target="_blank">Web stranica Hrvatskog orijentacijskog saveza</a>
                                <img src="./images/hr-orijentacijski-savez.jpg" alt="" class="img-fluid col-lg-6">
                            </p>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="repka">
                            <h3>Hrvatska reprezentacija u orijentacijskom trčanju</h3>
                            <p>Reprezentacija se dijeli na seniorsku i juniorsku reprezentaciju. Godišnje odlaze na 5-7 međunarodnih natjecanja, uključujući i Svjetska i Europska prvenstva u orijentacijskom trčanju.
                                Naši najuspješniji orijentacisti su: Matija Razum i Mirja Pavić, oboje iz OK "Japetića" iz Samobora.
                            </p>
                            <br><h3><u>Najznačajniji uspjesi</u></h3>
                            <p>Hrvatska je svoje najveće uspjehe u orijentacijskom sportu ostvarila u disciplini precizne orijentacije. Na Svjetskim prvenstvima 2008. godine u Češkoj i 2009. godine u Mađarskoj, Zdenko Horjan, 
                                član zagrebačkog kluba OK "Vihor", 2 puta osvojio je srebrnu medalju u kategoriji paralympic. <u>Još neki od najznačajnijih rezultata su:</u> Na Svjetskom prvenstvu u preciznoj orijentaciji održanom 2014. godine u Italiji (Trentino) 
                                Hrvatska je postala <u><b>svjetski prvak u ekipnoj konkurenciji (Zdenko Horjan, Ivica Bertol, Ivo Tišljar)</b></u>. Na Svjetskom prvenstvu u preciznoj orijentaciji održanom 2011. godine u Francuskoj (Savoie) 
                                Ivo Tišljar osvojio je broncu u kategoriji OPEN.
                            </p>
                            <img src="./images/2014-wtoc-zdenko-ivica-ivo.jpg" alt="" class="img-fluid mb-3">
                        </article>
                    </div>
                </div>
            </section>
            <section class="kalendar">
                <h3>Kalendar najvažnijih natjecanja u 2024. godini</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Datum</th>
                            <th>Naziv natjecanja</th>
                            <th>Organizator natjecanja</th>
                            <th>Vrsta natjecanja</th>
                            <th>Mjesto održavanja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">subota 21.05.</td>
                            <td rowspan="2">41. Pokal Zagreba</td>
                            <td rowspan="3">OK "Maksimir"</td>
                            <td>Sprint kup Hrvatske</td>
                            <td>Klaka</td>
                        </tr>
                        <tr>
                            <td>Noćno prvenstvo Hrvatske</td>
                            <td>Dotršćina</td>
                        </tr>
                        <tr>
                            <td>subota 01.10.</td>
                            <td>O-Broč</td>
                            <td>Prvenstvo Hrvatske - duge staze</td>
                            <td>Gažul, Brač</td>
                        </tr>
                        <tr>
                            <td>nedjelja 09.10.</td>
                            <td>7. kup četiri rijeke</td>
                            <td>OK "Jelen"</td>
                            <td>Prvenstvo Hrvatske - srednje staze</td>
                            <td>Duga Resa</td>
                        </tr>
                        <tr>
                            <td>subota 15.10.</td>
                            <td>44. Ačkov kup</td>
                            <td>OK "Vihor"</td>
                            <td>Prvenstvo Hrvatske - sprint</td>
                            <td>Čazma</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <br><hr>
            <a href="#vrh" class="vrh">Povratak na početak</a>
        </div>
    </main>
    <footer class="text-white text-center p-3">
        Paula Pavlin, ppavlin@tvz.hr, 2024
    </footer>
</body>
