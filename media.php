<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS files -->
    <link rel="stylesheet" href="./styles/base.css" />
    <link rel="stylesheet" href="./styles/page-header.css" />

    <!-- Head -->
    <?php include './includes/head.php';?>

    <!-- Title -->
    <title>Media - Karl Stobbe</title>
  </head>
  <body>
    <!-- Header -->
    <?php include './includes/header.php';?>
    <!-- Navbar -->
    <?php include './includes/nav.php';?>

    <!-- Page Content -->
    <section class="media">
      <h1 class="name">MEDIA</h1>

      <div class="videos">
        <div class="row">
          <iframe src="https://player.vimeo.com/video/496468315?h=59b06b6c8d" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>
          <iframe src="https://player.vimeo.com/video/496470126?h=d480fed03b" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>
        </div>
        <div class="row">
          <iframe src="https://player.vimeo.com/video/495009731?h=795c2ede58" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>
          <iframe src="https://player.vimeo.com/video/536588667?h=b941341bb5" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>
        </div>
        <div class="row">
          <iframe src="https://www.youtube.com/embed/9DDdyZGPwPk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
          <iframe src="https://www.youtube.com/embed/CMv5-QmhNak" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include './includes/footer.php';?>

    <!-- Javascript -->
    <script src="./scripts/app.js"></script>
  </body>
</html>
