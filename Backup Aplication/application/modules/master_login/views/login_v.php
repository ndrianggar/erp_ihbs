<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="<?php echo base_url() ?>/assets/admin/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url() ?>/assets/admin/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo base_url() ?>/assets/admin/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="bg-white" style="background-image: url('<?php echo base_url() ?>assets/admin/img/bg_login.jpg'); background-size: cover; height: 100%;">
  <div class="main-content">    
    <!-- Header -->
    <div class="header py-7 py-lg-6" >
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row">
            <div class="col-lg-5 col-md-6" style="text-align: center;">
              <img src="<?php echo base_url() ?>assets/admin/img/text_logo.png" style="width: 450px;" class="image-responsive">            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container pt-lg-md mt--8 pb-5">
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
            </div>
          </div>
        </div>
      </div>
  </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url() ?>assets/admin/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url() ?>assets/admin/js/argon.js?v=1.0.0"></script>
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
          url  : "<?php echo site_url('master_login/aunt/check_login'); ?>",
          data : {user:user,pass:pass},
          dataType: 'json',
          // dataType : 'html',
          // cache: false,
          success:function(response){
            if (response==="success") {
              $("#alertLoginSuccess").show();
              setTimeout(function(){
                window.location = "<?php echo base_url() ?>" ;
              }, 50);
            }else if (response==="failed"){
              $("#alertLoginFailed").show();
              setTimeout(function(){
                $("#alertLoginFailed").hide();
              }, 50);
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