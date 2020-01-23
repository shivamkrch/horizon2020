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
    <title>Registration | Horizon 2k20</title>
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
        class="display-4 text-center mt-5 page-heading"
        style="color: #000000;"
      >
        Registration
      </h1>
      <p class="text-center"></p>
      <div class="container mt-5">
        <form action="reg-confirm.php" method="post">
          <input
            type="text"
            name="name"
            class="form-control form-control-lg mb-3"
            placeholder="Full name*"
            required
          />
          <input
            type="email"
            name="email"
            class="form-control form-control-lg mb-3"
            placeholder="Email*"
            required
          />
          <input
            type="tel"
            name="mobile"
            maxlength="10"
            class="form-control form-control-lg mb-3"
            placeholder="Mobile*"
            required
          />
          <input
            type="text"
            name="college"
            class="form-control form-control-lg mb-3"
            placeholder="College*"
            required
          />
          <input
            type="text"
            name="dept"
            class="form-control form-control-lg mb-3"
            placeholder="Department*"
            required
          />
          <input
            type="number"
            name="clgRoll"
            class="form-control form-control-lg mb-3"
            placeholder="College Roll*"
            required
          />
          <div class="form-group mb-3">
            <select
              name="year"
              class="form-control form-control-lg"
              required
            >
              <option disabled selected>Select Year*</option>
              <option>1st</option>
              <option>2nd</option>
              <option>3rd</option>
              <option>4th</option>
            </select>
          </div>
          <div class="form-group mb-3">
            <select
              name="tshirtsize"
              class="form-control form-control-lg"
              required
            >
              <option disabled selected>Select T-Shirt Size*</option>
              <option value="XS">Xtra-Small (XS)</option>
              <option value="S">Small (S)</option>
              <option value="M">Medium (M)</option>
              <option value="L">Large (L)</option>
              <option value="XL">Xtra-large (XL)</option>
              <option value="XXL">Xtra-xtra-large (XXL)</option>
            </select>
            <small class="text-muted ml-2"
              >T-Shirts will be provided to limited number of participants on
              first come first serve basis.</small
            >
          </div>
          <div class="form-group mb-5">
            <h4 class="text-dark">Events:</h4>
            <p class="text-dark">Click on school name to view events.</p>
            <div class="container-fluid mt-4 text-dark">
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <a
                        href="#"
                        class="btn-link"
                        data-toggle="collapse"
                        data-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                      >
                        Central Events
                        <i class="fas fa-chevron-down float-right"></i>
                      </a>
                    </h5>
                  </div>

                  <div
                    id="collapseOne"
                    class="collapse show"
                    aria-labelledby="headingOne"
                    data-parent="#accordion"
                  >
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event1"
                          name="events[]"
                          value="Treasure Hunt"
                        />
                        <label class="custom-control-label" for="event1"
                          >Treasure Hunt</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event2"
                          name="events[]"
                          value="WANNACODE"
                        />
                        <label class="custom-control-label" for="event2"
                          >WANNACODE</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event3"
                          name="events[]"
                          value="Ignitia"
                        />
                        <label class="custom-control-label" for="event3"
                          >Ignitia</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event3"
                          name="events[]"
                          value="TechMela"
                        />
                        <label class="custom-control-label" for="event3"
                          >TechMela</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event4"
                          name="events[]"
                          value="Game Thrones"
                        />
                        <label class="custom-control-label" for="event4"
                          >Game Thrones</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event5"
                          name="events[]"
                          value="Cinekshetra"
                        />
                        <label class="custom-control-label" for="event5"
                          >Cinekshetra</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event6"
                          name="events[]"
                          value="Bohemian Colours"
                        />
                        <label class="custom-control-label" for="event6"
                          >Bohemian Colours</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event7"
                          name="events[]"
                          value="B-Plan"
                        />
                        <label class="custom-control-label" for="event7"
                          >B-Plan</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event8"
                          name="events[]"
                          value="RoboSoccer"
                        />
                        <label class="custom-control-label" for="event8"
                          >RoboSoccer</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event9"
                          name="events[]"
                          value="RoboWar"
                        />
                        <label class="custom-control-label" for="event9"
                          >RoboWar</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event10"
                          name="events[]"
                          value="X-Posed"
                        />
                        <label class="custom-control-label" for="event10"
                          >X-Posed</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event11"
                          name="events[]"
                          value="Scholar"
                        />
                        <label class="custom-control-label" for="event11"
                          >Scholar</label
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <a
                        href="#"
                        class="btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                      >
                        School A<i class="fas fa-chevron-down float-right"></i>
                      </a>
                    </h5>
                  </div>
                  <div
                    id="collapseTwo"
                    class="collapse"
                    aria-labelledby="headingTwo"
                    data-parent="#accordion"
                  >
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event12"
                          name="eventsA[]"
                          value="AutoCAD"
                        />
                        <label class="custom-control-label" for="event12"
                          >AutoCAD</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event13"
                          name="eventsA[]"
                          value="Mech Quiz"
                        />
                        <label class="custom-control-label" for="event13"
                          >Mech Quiz</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event14"
                          name="eventsA[]"
                          value="Brug-IT"
                        />
                        <label class="custom-control-label" for="event14"
                          >Brug-IT</label
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <a
                        href="#"
                        class="btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                      >
                        School B<i class="fas fa-chevron-down float-right"></i>
                      </a>
                    </h5>
                  </div>
                  <div
                    id="collapseThree"
                    class="collapse"
                    aria-labelledby="headingThree"
                    data-parent="#accordion"
                  >
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event15"
                          name="eventsB[]"
                          value="Circuitrix"
                        />
                        <label class="custom-control-label" for="event15"
                          >Circuitrix</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event16"
                          name="eventsB[]"
                          value="Tech Quiz"
                        />
                        <label class="custom-control-label" for="event16"
                          >Tech Quiz</label
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                      <a
                        href="#"
                        class="btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapseFour"
                        aria-expanded="false"
                        aria-controls="collapseFour"
                      >
                        School C<i class="fas fa-chevron-down float-right"></i>
                      </a>
                    </h5>
                  </div>
                  <div
                    id="collapseFour"
                    class="collapse"
                    aria-labelledby="headingFour"
                    data-parent="#accordion"
                  >
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event17"
                          name="eventsC[]"
                          value="Andromeda"
                        />
                        <label class="custom-control-label" for="event17"
                          >Andromeda</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="event18"
                          name="eventsC[]"
                          value="Web-D"
                        />
                        <label class="custom-control-label" for="event18"
                          >Web-D</label
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row my-2 justify-content-center">
            <div class="col-sm-4">
              <input
                type="reset"
                value="Reset"
                class="btn btn-secondary px-5"
              />
            </div>
            <div class="col-sm-4">
              <input type="submit" value="Register" class="btn btn-info px-5" />
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="bg-info fixed-countdown" id="fixed-countdown">
      <?php require './countdown.html'; ?>
    </div>
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
