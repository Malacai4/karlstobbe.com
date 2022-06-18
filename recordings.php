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

      <div class="latest" style="background-color: red">

        <div class="album" style="background-color: blue">
          <img src="styles/images/BachBartókAlbumCover.jpeg" alt="">
          <a href="https://leaf-music.lnk.to/ks2022WE">https://leaf-music.lnk.to/ks2022WE</a>
        </div>

      </div>
      <div class="other-albums" style="background-color: green">

        <div class="album" style="background-color: purple">
          <img src="styles/images/AV2310.jpeg" alt="">
          <p>Apple | Itunes</p>
        </div>

        <div class="album" style="background-color: yellow">
          <img src="styles/images/Leclair Cover.jpeg" alt="">
          <p>Apple | Itunes</p>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <?php include './includes/footer.php';?>

    <!-- Javascript -->
    <script src="./scripts/app.js"></script>
  </body>
</html>
