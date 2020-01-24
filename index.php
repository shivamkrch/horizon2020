<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Horizon 2020 | The annual Techfest of BCREC</title>
</head>
<body class="bg-light">
    <?php require_once './header.html'; ?>
    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto col-lg-10">
                    <div class="entry-header">
                        <h3 class="text-warning" style="font-size: 2rem">Dr. B. C. Roy Engineering College, Durgapur</h3>
                        <h6>presents</h6>
                        <h2 style="letter-spacing: .5rem;">HORIZON</h2>
                    </div><!-- .entry-header -->
                    <div class="entry-header">
                        <h3 id="date" class="text-info" data-date="2020/02/14">14-15 February, 2020</h3>
                    </div><!-- .entry-header -->
                    <?php require './countdown.html'; ?>
                </div><!-- .col-12 -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12 ">
                    <div class="entry-footer">
                        <a href="#" class="btn register-link">Register</a>
                        <a href="#" class="btn current">See Events</a>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .hero-content -->
    <?php require_once './schools.html' ?>
    <div class="bg-info fixed-countdown" id="fixed-countdown"><?php require './countdown.html'; ?></div>
<?php 
require_once './bcrec.html';
require_once './team.html';
require_once './footer.html'; 
?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>