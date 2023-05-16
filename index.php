<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dashboard Warung</title>

      <link rel="shortcut icon" href="layouts/assets/img/banner.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>
      <!-- Gambar ada yang Error? Mohon Baca warning_info.txt -->
      <aside>

            <header>
                  <img src="layouts/assets/img/banner.png" class="brand" alt="">
                  <div class="user">Warung Rizky</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=kat_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Category
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=post_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Promo
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=pembeli_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Pembeli
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Rizky Akbar Siregar
            </footer>
      </main>

</body>

</html>