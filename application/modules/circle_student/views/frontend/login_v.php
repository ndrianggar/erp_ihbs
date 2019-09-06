<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Design System - Free Design System for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="<?php echo base_url(); ?>/assets/home/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url(); ?>/assets/home/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/home/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo base_url(); ?>/assets/home/css/argon.css?v=1.0.1" rel="stylesheet">
  <!-- Docs CSS -->
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Satisfy" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Katibeh|Mirza" rel="stylesheet">
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="<?php echo base_url('circle_student'); ?>">
          <img src="<?php echo base_url(); ?>/assets/home/img/brand/logo.png" style="width: 200px; height: auto;">
          <!-- <h2 style="font-weight: bold; color: #fff;">IHBS</h2> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="<?php echo base_url('circle_student'); ?>">
                  <img src="<?php echo base_url(); ?>/assets/home/img/brand/logo.png">
                  <!-- <h2 style="font-weight: bold; color: #fff;">IHBS</h2> -->
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-green">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0" style="background: transparent;">
              <div class="card-header bg-white pb-3" style="background-color: black;">
                <div class="text-muted text-center mb-3">
                  <small>Awali Dengan Membaca</small>
                  <h2>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ </h2>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="alertLoginSuccess">
                  <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                  <span class="alert-inner--text"><strong>Login Success !</strong></span>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert" style="display: none;" id="alertLoginFailed">
                  <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
                  <span class="alert-inner--text"><strong style="font-size: 12px;">Incorrect Password and Username!</strong></span>
                </div>
                <form role="form">
                  <div class="form-group" id="user_form">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                      </div>
                      <input class="form-control" placeholder="Username" type="text" id="user">
                    </div>
                  </div>
                  <div class="form-group" id="pass_form">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Password" type="password" id="pass">
                    </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span>Remember me</span>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary my-4" onclick="login();" style="width: 100%;">Log in</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="row mt-3">
              <!-- <div class="col-6">
                <a href="#" class="text-light">
                  <small>Forgot password?</small>
                </a>
              </div>
              <div class="col-6 text-right">
                <a href="#" class="text-light">
                  <small>Create new account</small>
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer has-cards">
    <div class="container">
      <div class="row row-grid align-items-center my-md">
        <div class="col-lg-8">
        <h3 class="text-primary font-weight-light mb-1 text-center" style="font-family: 'Satisfy', cursive;">Datang Dengan Obsesi Pulang Dengan Prestasi !</h3>
        <!-- <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4> -->
        </div>
        <div class="col-lg-4 text-lg-center btn-wrapper">
          <a target="_blank" href="" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-instagram"></i>
          </a>
          <a target="_blank" href="" class="btn btn-neutral btn-icon-only btn-youtube btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
            <i class="fa fa-youtube"></i>
          </a>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-12">
          <div class="copyright pull-right">
            &copy; 2018
            <a href="" target="_blank">IHBS</a>.
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script src="<?php echo base_url(); ?>/assets/home/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/home/vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/home/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/home/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url(); ?>/assets/home/js/argon.js?v=1.0.1"></script>
  <script type="text/javascript">
    function login() {
      var user = $("#user").val();
      var pass = $("#pass").val();
      if (!user || !pass) {
        $("#user_form").addClass("has-danger");
        $("#pass_form").addClass("has-danger");
      }else{
        $("#user_form").removeClass("has-danger");
        $("#pass_form").removeClass("has-danger");
        $.ajax({
          type : "POST",
          url  : "<?php echo site_url('circle_student/check_login'); ?>",
          data : {user:user,pass:pass},
          dataType: 'json',
          // dataType : 'html',
          // cache: false,
          success:function(response){
            if (response==="success") {
              $("#alertLoginSuccess").show();
              setTimeout(function(){
                window.location = "<?php echo base_url('circle_student') ?>" ;
              }, 2000);
            }else if (response==="failed"){
              $("#alertLoginFailed").show();
              setTimeout(function(){
                $("#alertLoginFailed").hide();
              }, 6000);
            }else if (response==="empty") {
              $("#user_form").addClass("has-danger");
              $("#pass_form").addClass("has-danger");
            }
          }
        });
      }
    }
  </script>
</body>

</html>