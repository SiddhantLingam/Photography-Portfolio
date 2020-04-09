<!DOCTYPE html>
<html lang="en" >
<head>
  <?php include 'head.php'; ?>
</head>

<body>

<div class="wrapper">
<?php include 'nav.php'; ?>

  <section id="home" class="sec-main">
    <h1 class="main-heading">Where creativity happens</h1>
  </section>

  <section id="about" class="sec-about">
    <div class="container">
      <h1>About me</h1>

      <hr />

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <p>Hi, my name is Siddhant Lingam and I am a weekend Photographer & Editor based in Bhilai. I love taking pictures of wildlife, environment and people. My other skills include Lightroom, Photoshop, Premiere. If you want to hire me or just to talk, <a class="js-connect" href="#footer">connect</a> with me.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="folio" class="sec-folio">
    <div class="container">
      <h1>Previous Work</h1>

      <hr/>

      <div class="row">
        <div class="col-md-4">
          <img class="center-block" src="images/monkey.jpg" alt="Monkey" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="images/dog.jpg" alt="Dog" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="images/emu.jpg" alt="Emu" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <img class="center-block" src="images/light-long.jpg" alt="Car Tail Lights" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="images/drop.jpg" alt="Drop" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="images/water-long.jpg" alt="Water Long Exposure" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <img class="center-block" src="images/boy.jpg" alt="Boy" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="images/girl.jpg" alt="B&W Girl" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="images/sid.jpg" alt="Siddhant" />
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <img class="center-block" src="images/flower1.jpg" alt="Flower" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="images/flower2.jpg" alt="Flower" />
        </div>

        <div class="col-md-4">
          <img class="center-block" src="images/flower3.jpg" alt="Flower" />
        </div>
      </div>
    </div>
  </section>
  <section id="services" class="sec-services">
    <div class="container">
      <h1>Services</h1>

      <hr />

      <div class="row">
        <div class="col-sm-4">
          <i class="fa fa-4x fa-paint-brush"></i>

          <h2 class="h3">Beautiful Edits</h2>

          <p>Every photograph submitted will be unique and tailored to suit your needs and requirements.</p>
        </div>

        <div class="col-sm-4">
          <i class="fa fa-camera-retro fa-4x"></i>

          <h2 class="h3">Portraiture</h2>

          <p>Location and scenario based specific portrait shoots for a single person or group.</p>
        </div>

        <div class="col-sm-4">
          <i class="fa fa-4x fa-refresh"></i>

          <h2 class="h3">Always Responsive</h2>

          <p>Unlimited revisons for submitted photographs at negotiable prices.</p>
        </div>
      </div>
    </div>
  </section>

  

  <section id="contact" class="sec-contact">
    <div class="container">
      <h1>Hire me</h1>

      <hr />

      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <form class="center-block" action="insert.php" method="post">
            <div class="form-group">
              <label class="sr-only" for="inputName">Full name</label>

              <input name="inputName" id="inputName" class="form-control" type="text" placeholder="Rahul" required />
            </div>

            <div class="form-group">
              <label for="inputMail" class="sr-only">Email Address</label>

              <input name="inputMail" id="inputMail" class="form-control" type="email" placeholder="rahul.kumar@gmail.com" required />
            </div>

            <div class="form-group">
              <label for="inputMessage" class="sr-only">Your Message</label>

              <textarea name="inputMessage" id="inputMessage" class="form-control" name="message" cols="30" rows="8" required></textarea>
            </div>

            <div class="form-group">
              <button class="btn btn-default center-block" type="submit" value="Hire me">Hire me</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>
</div>

<script src="js/jquery-min.js"></script>
<script src="js/bootstrap-min.js"></script>
<script src="./script.js"></script>

</body>
</html>
