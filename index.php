<?php include 'includes/header.php'; ?>
<?php include 'includes/config.php'; ?>
<?php include 'includes/include_email.php'; ?>

<body>
  <div id="progressbar">  </div>
  <div id="scrollPath">  </div>

  <img src="images/PNG/BatmanTheme.png" alt="" class="lander">

<?php include 'includes/navigation.php'; ?>

  <div class="container-fluid ">
    <div class="row">
      <div class="col-lg-6 text-1 slide-in from-left">

        <?php echo $lang['lander_text'] ?>

      </div>


      <div class="col-lg-6 image">


      </div>
    </div>

  </div>
  </div>
<div id="works">
  <?php include 'includes/card_section.php'; ?>
</div>


  </div>
  <hr class="separator">
  <div class="container-fluid">
    <div class="title_c">
      <div class="container-c">
        <p> <span class="bigger-c"><?php echo $lang['work_information'] ?></span> </p>
      </div>

      <hr class="little-separator">
      <div class="row">
        <div class="col-lg-6">

        </div>
        <div class="col-lg-6">

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4 col-md-12 csz-text slide-in from-left">

      <?php echo $lang['graphic'] ?>

    </div>
    <div class="col-lg-4 col-md-12 csz-text fade-in">

      <?php echo $lang['design'] ?>

    </div>
    <div class="col-lg-4 col-md-12 csz-text slide-in from-right">

      <?php echo $lang['programming'] ?>

    </div>
  </div>

  <hr class="separator">

  <div class="row fade-in">
    <div class="col-lg-6">
      <h2 class="center"><?php echo $lang['graphic_programs'] ?></h2>
      <div class="graphic-images">
        <img src="images/SVG/Photoshop.svg" class="graphic-image" alt="">
        <img src="images/SVG/indesign.svg" class="graphic-image" alt="">
        <img src="images/SVG/Illustrator.svg" class="graphic-image" alt="">
        <img src="images/SVG/inkspace.svg" class="graphic-image" alt="">
        <img src="images/SVG/coreldraw-logo.svg" class="graphic-image" alt="">
      </div>
    </div>
    <div class="col-lg-6">
      <h2 class="center"><?php echo $lang['languages'] ?></h2>
      <div class="graphic-images">
        <img src="images/SVG/HTML.svg" class="graphic-image" alt="">
        <img src="images/SVG/css.svg" class="graphic-image" alt="">
        <img src="images/SVG/php.svg" class="graphic-image" alt="">
        <img src="images/SVG/js.svg" class="graphic-image" alt="">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-md-12 about-1 slide-in from-left">
      <div class="profile-image">
        <img src="images/SVG/profile_mock.svg" alt="">
      </div>

    </div>

    <div class="col-lg-6 col-md-12 about-2 slide-in from-right" id="aboutme">
      <?php echo $lang['about_me'] ?>
    </div>
  </div>

  <div class="row contact-form fade-in" id="contact">
    <div class="Text-contact">
      <h2><?php echo $lang['contact_me'] ?></h2>
    </div>
    <div class="col-lg-6 col-md-12">
      <form class="contact-form">

        <div class="form-group py-2">
          <label for="email" class="py-1"> <?php echo $lang['contact_form_email'] ?></label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group py-2">
          <label for="name" class="py-1"> <?php echo $lang['contact_form_name'] ?></label>
          <input type="text" class="form-control" id="name" placeholder="Example">
        </div>
        <div class="form-group py-2">
          <label for="subject" class="py-1"><?php echo $lang['contact_form_content'] ?></label>
          <textarea class="form-control" id="subject" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-light iconic"> <?php echo $lang['contact_form_send'] ?> </button>
      </form>
    </div>
    <div class="col-lg-6 col-md-12">

    </div>
  </div>



  </div>



  </div>
  <section id="footer">
    <div class="row">
      <div class="col-lg-12">
        <ul class="icons">
          <li> <a href="https://dribbble.com/KacperBwc"><i class="fa-brands fa-dribbble"></i></a></li>
          <li><a href="https://www.instagram.com/niecwiat"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="https://fapaster.artstation.com/"><i class="fa-brands fa-artstation"></i></a></li>
        </ul>

      </div>

      <div class="col-lg-12">
        <p class="creator">Kacper Borowiec</p>
      </div>
    </div>
  </section>

<?php include 'includes/scripts.php'; ?>

</body>

</html>
