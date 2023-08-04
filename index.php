<!doctype html>
<html lang="en">

<head>
  <title>HOME | DYNAMIC</title>
  <?php include 'headlink.php' ?>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap');

    /* body {
  height: 100%; margin: 0
}

a {
    color: #007bff;
    text-decoration: none;
} */
    button:focus,
    input:focus {
      outline: none;
      box-shadow: none;
    }

    a,
    a:hover {
      text-decoration: none;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: #e0e3e8;

    }


    /*------------*/
    .dropdown-menu {
      min-width: 200px;
      position: absolute;
      border-radius: 4px;
      padding: 12px 4px;
      border: none;
      z-index: 99;
      -webkit-box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.3);
      transition: 0.3s;

    }

    .dropdown-menu>.dropdown {
      position: relative;
    }

    .dropdown-menu>.dropdown a::after {
      transform: rotate(-90deg);
      position: absolute;
      right: .9rem;
      top: .9rem;
    }

    .dropdown-menu>.dropdown .dropdown-menu {
      top: -.7rem;
      left: 100%;
      border-radius: 0 .25rem .25rem .25rem;
    }
  </style>
</head>

<body>
  <?php include 'menu.php' ?>


  <section class="pooo">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <p class="po">ACCELERATE THE USER EXPERIENCE</p>
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h2>TECHNOLOGY TO POWER YOUR DREAMS</h2>
              </div>
              <div class="carousel-item">
                <h2>SOFTWARE TO POWER YOUR BUSINESS</h2>
              </div>
              <div class="carousel-item">
                <h2>DRYFT DYNAMICS EMPOWERS YOU</h2>
              </div>
            </div>
          </div>
          <p> Try our free software trial for 7 days. Dryft Dynamics (P) Limited builds vital capasbilities to deliver digital outcomes that help your business grow.</p>
          <button type="button" class="btn btn-primary">Request A Quote</button>
          <button type="button" class="btn btn-primary">Request Free Trial</button>
        </div>
        <div class="col-lg-5 hidden-md">
          <img src="img/man-31 - Copy.png" width="80%">
        </div>
      </div>
    </div>
  </section>

  <section class="bbb" >
    <div class="container" >

      <div class="row" >
        <div class="col-md-3"  >
          <div class="cc">
            <h2>Smart Software's</h2>
          </div>
        </div>
        <div class="col-md-3"  >
          <div class="cc">
            <h2>Smart Software's</h2>
          </div>
        </div>
        <div class="col-md-3"  >
          <div class="cc">
            <h2>Smart Software's</h2>
          </div>
        </div>
        <div class="col-md-3"  >
          <div class="cc">
            <h2>Smart Software's</h2>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include 'footer.php' ?>
  <?php include 'footerlink.php' ?>
  <script>
    // dropdown-toggle class not added for submenus by current WP Bootstrap Navwalker as of November 15, 2017.
    $(".dropdown-menu > .dropdown > a").addClass("dropdown-toggle");

    $(".dropdown-menu a.dropdown-toggle").on("click", function(e) {
      if (!$(this).next().hasClass("show")) {
        $(this).parents(".dropdown-menu").first().find(".show").removeClass("show");
      }
      var $subMenu = $(this).next(".dropdown-menu");
      $subMenu.toggleClass("show");
      $(this)
        .parents("li.nav-item.dropdown.show")
        .on("hidden.bs.dropdown", function(e) {
          $(".dropdown-menu > .dropdown .show").removeClass("show");
        });
      return false;
    });
  </script>
</body>

</html>