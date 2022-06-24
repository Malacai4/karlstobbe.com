<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS files -->
    <link rel="stylesheet" href="./styles/base.css">
    <link rel="stylesheet" href="./styles/page-header.css">
    <link rel="stylesheet" href="./styles/recordings.css">

    <!-- Head -->
    <?php include './includes/head.php';?>

    <!-- Title -->
    <title>Recordings - Karl Stobbe</title>
  </head>
  <body>
    <!-- Header -->
    <?php include './includes/header.php';?>
    <!-- Navbar -->
    <?php include './includes/nav.php';?>

    <!-- Page Content -->
    <section class="recordings">
      <h1 class="name">RECORDINGS</h1>

      <div class="latest">
        <div class="album">
          <img src="styles/images/BachBartókAlbumCover.jpeg" alt="">
          <p>Bach & Bartók<br>Karl Stobbe</p>
          <p><a href="https://leaf-music.lnk.to/ks2022WE" target="_blank">Leaf Music</a> | <a href="styles/images/BachBartokBookletFinal-Apr15.pdf" target="_blank">Bach/Bartok Digital Booklet</a></p>
        </div>

      </div>
      <div class="other-albums">

        <div class="album">
          <img src="styles/images/AV2310.jpeg" alt="">
          <p>Ysaÿe Sonatas for Solo Violin<br>Karl Stobbe</p>
          <p><a href="https://music.apple.com/ca/album/ysa%C3%BFe-sonatas-for-solo-violin/875501490" target="_blank">Apple</a> | <a href="https://open.spotify.com/album/0EXw3WDCbAS43fE23ViuZ8" target="_blank">Spotify</a></p>
        </div>

        <div class="album">
          <img src="styles/images/Leclair Cover.jpeg" alt="">
          <p>Six Sonatas for Two Violins<br>Gwen Hoebig & Karl Stobbe</p>
          <p><a href="https://music.apple.com/ca/album/leclair-six-sonatas-for-two-violins-op-3/1328606003" target="_blank">Apple</a> | <a href="https://open.spotify.com/album/5JFhV474yN3V3zdreSTj0q" target="_blank">Spotify</a></p>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <?php include './includes/footer.php';?>

    <!-- Javascript -->
    <script src="./scripts/app.js"></script>
  </body>
</html>
