<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web stranica koja sadrži detalje o sportu orijentacijskom trčanjem."/>
    <meta name="author" content="Paula Pavlin"/>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../images/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="../images/favicon-32x32.png" sizes="32x32" type="image/png">
    <!-- Uključivanje ikona -->
    <script src="https://kit.fontawesome.com/119870e37c.js" crossorigin="anonymous"></script>
    <!-- Uključivanje fontova -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Unos/Kontakt</title>
</head>



<body>
    <a id="vrh"></a>
    <header>
        <img src="../images/logo_orienteering.jpeg" alt="">
        <h1><b>Orijentacijsko trčanje</b></h1>
        <nav>
            <ul>
                <li><i class="fa-solid fa-house"></i><a href="../index.php">Naslovnica</a></li>
                <li><i class="fa-solid fa-circle-info"></i><a href="../o nama/o nama.php">O nama</a></li>
                <li><i class="fa-regular fa-newspaper"></i><a href="../novosti/novosti.php">Novosti</a></li>
                <li><i class="fa-solid fa-phone"></i><a href="unos.php">Unos podataka</a></li>
            </ul>
        </nav>
    </header>

    <main class="stranica">
        <div class="container">
            <section class="kontakt">
                <h1 class="mb-4"><u>Unos podataka/kontakt</u></h1>
                <hr>
                <p>Ukoliko želite započeti svoje prve orijentacijske korake uz <em>"Trkalce"</em> ili nas podržati putem donacije, sponzorstva ili bilo kojeg drugog oblika ili nam se želite samo javiti ili nešto pitati, možete to učiniti putem forme ili e-maila.</p>
                <hr>
            </section>
            
            <section class="forma">
                <h2 class="mb-4 text-center">Kontakt forma</h2>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <img src="../images/kontakt.jpg" alt="Slika kontakta" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <form action="../skripta.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title" class="form-label">Naslov vijesti</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="about" class="form-label">Kratki sadržaj vijesti (do 50 znakova)</label>
                                <textarea name="about" id="about" cols="30" rows="2" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Sadržaj vijesti</label>
                                <textarea name="content" id="content" cols="30" rows="10" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="pphoto" class="form-label">Slika:</label>
                                <input type="file" accept="image/jpg,image/gif" class="form-control" name="pphoto" required>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Kategorija vijesti</label>
                                <select name="category" id="category" class="form-control" required>
                                    <option value="klub">Klub</option>
                                    <option value="reprezentacija">Reprezentacija</option>
                                </select>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="archive" name="archive">
                                <label class="form-check-label" for="archive">Spremiti u arhivu</label>
                            </div>
                            <div class="mb-3">
                                <button type="reset" class="btn btn-secondary">Poništi</button>
                                <button type="submit" class="btn btn-primary">Prihvati</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            
            
            <section class="okupljanje mt-4">
                <h2>Gdje se nalazimo? &nbsp;<i class="fas fa-map-marked-alt"></i></h2>
                <p>Većinu naših treninga radimo u zagrebačkom parku Maksimir pa ako nas ugledate, nemojte nas zaboraviti pozdraviti ;)</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22244.9177055445!2d16.019406597262137!3d45.818974125639635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d7eab57cb9cf%3A0xd73c20080fa84ffe!2sPark%20Maksimir!5e0!3m2!1sen!2shr!4v1674256186423!5m2!1sen!2shr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
            
            <br><hr><a href="#vrh" class="vrh">Povratak na početak</a>
        </div>
    </main>

    <footer>Paula Pavlin 0246108890</footer>
</body>
</html>