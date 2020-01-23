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
    <title>Registration Confirmation | Horizon 2k20</title>
    <style>
      .header-bar .site-branding a {
        color: #050505;
        text-decoration: none;
      }
      .site-navigation ul li a {
        color: #050505;
      }
    </style>
  </head>
  <body class="bg-light">
    <?php require_once './header.html'; ?>
    <div class="container p-3 pt-5">
      <h1
        class="display-4 text-center mt-5 pt-3 page-heading"
        style="color: #000000;"
      >
        Registration Confirmation
      </h1>
      <p class="text-center"></p>
      <div class="container mt-5 text-dark" style="height: 50vh">
        <?php 
        require_once './db.php';
        if(!isset($_POST['name'])){
            header('location: /register.php');
        }else{
            $p = $_POST;
            $name = $p['name'];
            $email = $p['email'];
            $mobile = $p['mobile'];
            $clg = $p['college'];
            $dept = $p['dept'];
            $roll = $p['clgRoll'];
            $year = $p['year'];
            $tsize = $p['tshirtsize'];
            $events;
            $eventsA;
            $eventsB;
            $eventsC;
            if(isset($p['events'])){
                $events = implode(' | ', $p['events']);
            }else{
                $events = '';
            }
            if(isset($p['eventsA'])){
                $eventsA = implode(' | ', $p['eventsA']);
            }else{
                $eventsA = '';
            }
            if(isset($p['eventsB'])){
                $eventsB = implode(' | ', $p['eventsB']);
            }else{
                $eventsB = '';
            }
            if(isset($p['eventsC'])){
                $eventsC = implode(' | ', $p['eventsC']);
            }else{
                $eventsC = '';
            }
            $res = $conn->query("SELECT name FROM participants WHERE email='$email' OR mobile='$mobile'");
            if(isset(mysqli_fetch_assoc($res)['name'])){ ?>
                <div class="mx-3 alert alert-danger text-center mb-4 mt-5" role="alert">
                    <strong>Already registered with this email or phone.</strong> Please try another.
                </div>
                <p class="text-center mt-5">
                    <a href="/register.php" class="btn btn-outline-info mx-auto px-5">Register</a>
                </p>
                <?php
            }else{
                $uid = random_int(100000, 999999);
                $uid = 'HZ20'.$uid;
                $query = 'INSERT INTO participants (name, email, mobile, college, dept, roll, year, tsize, events, eventsA, eventsB, eventsC, horizon_id) '.
                 "VALUES('$name', '$email', $mobile, '$clg', '$dept', $roll, '$year', '$tsize', '$events', '$eventsA', '$eventsB', '$eventsC','$uid')";
                $res = mysqli_query($conn, $query);
                if($res){ ?>
                    <div class="container-fluid text-justified mb-4 mt-5" style="font-size: 1rem">
                        <p>Hi <b><?=$name ?></b>,</p>
                        <p>You have been successfully registerd at BCREC HORIZON.</p>
                        <p>Your Horizon ID is <b class="ml-2" style="font-size: 1.5rem"><?=$uid?></b>.</p>
                        <p>You will recieve an email regarding the registration.</p>
                        <p>Use the Horizon ID to pay registration fee and for future references.</p>
                    </div>
                    <p class="text-center mt-5">
                        <a href="/register.php" class="btn btn-outline-info mx-auto px-5">Register Another</a>
                    </p>
                <?php

                }else{ ?>
                    <div class="mx-3 alert alert-danger text-center mb-4 mt-5" role="alert">
                        <strong>Unable to register.</strong> Please try again.
                    </div>
                    <p class="text-center mt-5">
                        <a href="/register.php" class="btn btn-outline-info mx-auto px-5">Register</a>
                    </p>
                <?php

                }
                
            }
        }
        ?>
      </div>
    </div>
    <div class="bg-info fixed-countdown" id="fixed-countdown">
      <?php require './countdown.html'; ?>
    </div>
    <?php require './footer.html'; ?>
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
