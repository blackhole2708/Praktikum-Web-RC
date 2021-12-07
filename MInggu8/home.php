<?php 
require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();
$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - Minggu 8</title>
        <!--css file-->
        <link rel="stylesheet" href="./assets/css/home.css">
        <!-- modal iklan styling -->
        <link rel="stylesheet" href="./assets/css/iklan.css">
    </head>

    <body>
        <script src="./assets/js/iklan.js"></script>
        <div class="nav-bar">
            <a href="./index.php">Keluar</a>
        </div>
        <section class="base">
            <main>
                <?php foreach ($posts as $item) { ?>

                    <div style="width: 50%;">
                        <div class="card">
                            <div class="container">
                                <h3 class="card-head"><?= $item['judul']; ?></h3>
                                <p class="card-body"><?= $item['isi']; ?></p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </main>

            <aside>
                <h2>History</h2>
                <p>lorem ipsum dolor sit am fix lorem ipsum dolor sit lorem ipsum dolor lorem ipsum dolor sit lorem ipsum dolor</p>
            </aside>
        </section>
        
    </body>
</html>