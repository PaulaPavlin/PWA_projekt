<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Unos/Kontakt</title>
</head>
<body>
    <a id="vrh"></a>
        <header>
            <img src="../images/logo_orienteering.jpeg" alt="">
            <h1><b>Orijentacijsko trčanje</b></h1>
            <nav>
                <ul>
                    <li><i class="fa-solid fa-house"></i><a href="index.php">Naslovnica</a></li>
                    <li><i class="fa-solid fa-circle-info"></i><a href="o nama.php">O nama</a></li>
                    <li><i class="fa-regular fa-newspaper"></i><a href="novosti.php">Novosti</a></li>
                    <li><i class="fa-solid fa-phone"></i><a href="../kontakt/unos.php">Unos podataka</a></li>
                </ul>
            </nav>
        </header>

        <main class="stranica">
            <div class="container">
                <section class="kontakt">
                    <h1 class="mb-4"><u>Unos podataka/kontakt</u></h1>
                    <hr>
                <h2>Podaci uneseni u formu:</h2>
                <?php
                // Povezivanje na bazu podataka
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "orijentacijsko_trcanje";

                // Kreiranje konekcije
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Provjera konekcije
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Provjeravamo je li forma poslala podatke metodom POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    // Provjeravamo je li svaka varijabla postavljena prije nego što ih koristimo
                    $title = isset($_POST['title']) ? $_POST['title'] : '';
                    $about = isset($_POST['about']) ? $_POST['about'] : '';
                    $content = isset($_POST['content']) ? $_POST['content'] : '';
                    $category = isset($_POST['category']) ? $_POST['category'] : '';
                    $archive = isset($_POST['archive']) ? 1 : 0; // Provjeravamo je li checkbox označen

                    // Učitavamo podatke slike, ako je uploadana
                    $pphoto_name = isset($_FILES['pphoto']['name']) ? $_FILES['pphoto']['name'] : '';
                    $pphoto_tmp = isset($_FILES['pphoto']['tmp_name']) ? $_FILES['pphoto']['tmp_name'] : '';

                    // Direktorij u koji želimo spremiti uploadane slike
                    $upload_directory = '../uploads/';

                    // Provjerite postoji li direktorij, ako ne postoji, kreirajte ga
                    if (!is_dir($upload_directory)) {
                        mkdir($upload_directory, 0777, true); // 0777 dozvole i true za rekurzivno kreiranje
                    }

                    // Generiramo jedinstveno ime za sliku kako bi se izbjegli sukobi imena
                    $pphoto_newname = uniqid() . '_' . $pphoto_name;

                    // Puni put do datoteke na poslužitelju
                    $target_file = $upload_directory . $pphoto_newname;

                    // Pokušavamo premjestiti datoteku iz privremene lokacije u odredišnu mapu

                    // SQL upit za unos podataka u bazu
                    $sql = "INSERT INTO vijesti (title, about, content, pphoto, category, archive) VALUES ('$title', '$about', '$content', '$pphoto_newname', '$category', '$archive')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<p>Podaci su uspješno spremljeni u bazu podataka.</p>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    // Ostatak vaše logike za prikaz ostalih podataka iz forme
                    echo "<p><strong>Naslov vijesti:</strong> $title</p>";
                    echo "<p><strong>Kratki sadržaj vijesti:</strong> $about</p>";
                    echo "<p><strong>Sadržaj vijesti:</strong></p>";
                    echo "<p>$content</p>";
                    if (move_uploaded_file($pphoto_tmp, $target_file)) {
                        echo "<p><strong>Slika:</strong> <img src='$target_file' alt='$pphoto_name'></p>";
                    } else {
                        echo "<p>Došlo je do problema prilikom spremanja slike.</p>";
                        $pphoto_newname = null; // Ako spremanje slike ne uspije, postavljamo ime slike na null
                    }
                    echo "<p><strong>Kategorija vijesti:</strong> $category</p>";
                    echo "<p><strong>Spremiti u arhivu:</strong> " . ($archive ? 'Da' : 'Ne') . "</p>";

                } else {
                    // Ako nije poslan POST zahtjev, možemo preusmjeriti ili prikazati poruku
                    echo "<p>Nema podataka poslanih s forme.</p>";
                }

                // Zatvaranje konekcije
                $conn->close();
                ?>
                    </div>
                    <br><hr><a href="#vrh" class="vrh">Povratak na početak</a>
                </div>
    	</main>

    <footer>Paula Pavlin 0246108890</footer>
</body>
</html>
