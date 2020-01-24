<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
      integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/styles.css" />
    <style>
      .hero-content .entry-header h2 {
        padding: 20px;
        padding-bottom: 70px;
        margin: 0;
        font-family: mountains;
        text-align: center;
        font-size: 10vw;
        background: linear-gradient(#ff00cd, #ff2525);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
      @media screen and (min-width: 992px){
        .hero-content .entry-header h2{
          font-size: 90px;
        }
      }
    </style>
    <title>Cultural Fest 2020 | The annual Musical Fest of BCREC</title>
  </head>
  <body class="bg-light">
    <?php require_once './header.html'; ?>
    <div class="hero-content">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto col-lg-10">
            <div class="entry-header">
              <h3 class="clgname text-warning" style="font-size: 2rem">
                Dr. B. C. Roy Engineering College, Durgapur
              </h3>
              <h6>presents</h6>
              <h2 style="letter-spacing: .5rem;">CULTURAL FEST</h2>
            </div>
            <div class="entry-header">
              <h3 class="text-info" id="date" data-date="2020/02/13">13 February, 2020</h3>
            </div>
            <?php require './countdown.html'; ?>
          </div>
          <!-- .col-12 -->
        </div>
        <!-- row -->
      </div>
      <!-- .container -->
    </div>
    <!-- .hero-content -->
    <div class="bg-danger fixed-countdown" id="fixed-countdown">
      <?php require './countdown.html'; ?>
    </div>
    <?php
require_once './footer.html'; 
?>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
