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
    <link rel="stylesheet" href="./styles/contact.css">

    <!-- Head -->
    <?php include './includes/head.php';?>

    <!-- Captcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Title -->
    <title>Contact - Karl Stobbe</title>
  </head>
  <body>
    <!-- Header -->
    <?php include './includes/header.php';?>
    <!-- Navbar -->
    <?php include './includes/nav.php';?>

    <!-- Page Content -->
    <section class="contact">
      <h1 class="name">CONTACT</h1>

      <form
        action="./sendMail.php"
        class="form"
        autocomplete="off"
        method="POST"
      >
        <div class="name-form">
          <input type="text" name="name" required />
          <label for="name" class="label-name">
            <span class="content-name">Name</span>
          </label>
        </div>

        <div class="email-form">
          <input type="text" name="email" required />
          <label for="email" class="label-name">
            <span class="content-name">Email</span>
          </label>
        </div>

        <textarea
          name="message"
          id="msg"
          cols="50"
          rows="10"
          placeholder="Your question..."
          required
        ></textarea>

        <div
          class="g-recaptcha"
          data-sitekey="6LdiPAkaAAAAANZ9NgeQ6NPwkpPVCUHZQKEAv4OR"
          data-callback="recaptchaCallback"
        ></div>

        <div class="submit-btn">
          <input type="submit" id="submit-btn" value="Send" required />
        </div>
      </form>

      <p><br />Or send an email to: karlstobbe@gmail.com</p>
    </section>

    <!-- Footer -->
    <?php include './includes/footer.php';?>

    <!-- Javascript -->
    <script src="./scripts/app.js"></script>
    <script>
      const submitBtn = document.querySelector(".submit-btn");
      const captcha = document.querySelector(".g-recaptcha");

      function recaptchaCallback() {
        submitBtn.style.display = "flex";
      }
    </script>
  </body>
</html>
