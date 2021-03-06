<!-- Change password page  -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/images/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?= base_url('/assets/images/plane.png') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Nashik Tourism &mdash; Login 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= base_url('/assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('/assets/css/loginpage.css?v=1.3.0') ?>" rel="stylesheet" />
</head>
<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
           <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url('MainC/')?>" rel="tooltip" title="Designed by GPN Studnets. Coded by Durgesh, Kunal, Diksha, Shaurya, Gaurav." data-placement="bottom" target="_blank"><i class="fa fa-plane" aria-hidden="true"></i>
           Nashik Tourism
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/images/blurred-image-1.jpg" style="font-size: 1.20571em; letter-spacing: 1px;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('MainC/')?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('MainC/AboutNashik')?>">About Nashik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('MainC/Dest')?>">Destination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('MainC/FoodStuff')?>">Food stuff</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('MainC/Culture')?>">Culture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/nashik.tourism.9" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/nashik_tourism" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="">
    <div class="page-header-image" style="background-image:url(<?= base_url('assets/images/').$Page[0]->img ?>);"></div>
    <div class="content">
      <div class="container">

      <?php  include('error.php'); ?>
      
        <div class="col-md-4 ml-auto mr-auto">
         
          <div class="card card-login card-plain">
            <?= form_open('/changeingPassword','class="form"') ?>
              <div class="card-header text-center">
                <div class="navbar-translate">
                  <br>
                </div>
              </div>
              <div class="card-body">
                
                <h4 class="text-left">Change Password For <?= $d->username ?></h4>
               
                <input autocomplete="off" type="hidden" class="form-control" name="username" placeholder="Username..." value="<?= $d->username ?>">
                 

                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" name="password" placeholder="Enter The new Password" class="form-control" />
                  <?php echo form_error('password'); ?>
                </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Change Password</button>
                
                <div class="pull-right">
                  <h6>
                    <a href="#" class="link">Need Help?</a>
                  </h6>
                </div>
                <!-- </div> New Footer--> 
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="<?= base_url('MainC/')?>">
                Home
              </a>
            </li>
            <li>
              <a href="<?= base_url('MainC/AboutUs')?>">
                About Us
              </a>
            </li>
            <li><a href="<?= base_url('MainC/Dest')?>">
                Destination
              </a>
            </li>
            <li>
              <a href="<?= base_url('MainC/Culture')?>">
                Culture
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://gpnashik.ac.in" target="_blank">GPN Studnets</a>. Coded by
          <a href="#" target="_blank">G S D K D</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url('/assets/js/core/jquery.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('/assets/js/core/popper.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('/assets/js/core/bootstrap.min.js') ?>" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= base_url('/assets/js/plugins/bootstrap-switch.js') ?>"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url('/assets/js/plugins/nouislider.min.js') ?>" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?= base_url('/assets/js/plugins/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('/assets/js/loginpage.js?v=1.3.0') ?>" type="text/javascript"></script>
</body>

</html>