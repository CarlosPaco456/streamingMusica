<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Insertion HTML5 Template</title>
  <!--

Template 2101 Insertion

http://www.tooplate.com/view/2101-insertion

-->
  <!-- load CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"> <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>"> <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome-all.min.css') ?>"> <!-- Font awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/css/tooplate-style.css') ?>"> <!-- Templatemo style -->

  <script>
    var renderPage = true;

    if (navigator.userAgent.indexOf('MSIE') !== -1 ||
      navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
      alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      renderPage = false;
    }
  </script>

</head>

<body>

  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="tm-main">

    <div class="tm-welcome-section">
      <div class="container tm-navbar-container">
        <div class="row">
          <div class="col-xl-12">
            <nav class="navbar navbar-expand-sm">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a href="index.php" class="nav-link tm-nav-link tm-text-white active">Home</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('about.php') ?>" class="nav-link tm-nav-link tm-text-white">About</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('contact.php') ?>" class="nav-link tm-nav-link tm-text-white">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('usuario') ?>" class="nav-link tm-nav-link tm-text-white">Usuarios</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome">
          <i class="fas tm-fa-big fa-music tm-fa-mb-big"></i>
          <h1 class="text-uppercase mb-3 tm-site-name">Usuarios</h1>
        </div>
      </div>

    </div>

    <div class="container">



      <div class="row">
        <div class="col-lg-12">
          <div class="tm-tag-line">
            <h2 class="tm-tag-line-title">Music is your powerful energy.</h2>
          </div>
          <table class="table table-bordered" id="users">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Fecha de creacion</th>
              <th>Estado</th>
            </tr>
          </table>
        </div>
      </div>


      <footer class="row">
        <div class="col-xl-12">
          <p class="text-center p-4">Copyright &copy; <span class="tm-current-year">2018</span> Your Company Name - Web Design: <a href="http://tooplate.com" class="tm-text-gray">Tooplate</a></p>
        </div>
      </footer>
    </div> <!-- .container -->

  </div> <!-- .main -->

  <!-- load JS -->
  <script src="<?= base_url('assets/js/jquery-3.2.1.slim.min.js') ?>"></script> <!-- https://jquery.com/ -->
  <script>
    /* DOM is ready
    ------------------------------------------------*/
    $(function() {

      if (renderPage) {
        $('body').addClass('loaded');
      }

      $('.tm-current-year').text(new Date().getFullYear()); // Update year in copyright
    });
  </script>
</body>

</html>