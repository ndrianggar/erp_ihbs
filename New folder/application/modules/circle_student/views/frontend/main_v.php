<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>IHBS-AKADEMIK</title>
  <!-- Favicon -->
  <link rel="icon" 
      type="image/png" 
      href="/somewhere/myicon.png" />

  <link href="<?php echo base_url(); ?>assets/home/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url(); ?>assets/home/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/home/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo base_url(); ?>assets/home/css/argon.css" rel="stylesheet">
  <link type="text/css" href="<?php echo base_url(); ?>assets/home/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Satisfy" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/sweetalert/sweetalert.css">

  <!-- Docs CSS -->
  <!-- <link type="text/css" href="<?php echo base_url(); ?>assets/home/css/docs.min.css" rel="stylesheet"> -->
  
</head>

<body>
  <header class="header-global">

    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent bg-header">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="<?php echo base_url('circle_student'); ?>">
          <img src="<?php echo base_url(); ?>assets/home/img/brand/logo cs gabus.png" style="width: 200px; height: auto;">
          <!-- <h2 style="font-weight: bold; color: #fff;">IHBS</h2> -->
        </a>
        <button class="navbar-toggler custom-toggler"  type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="<?php echo base_url('circle_student'); ?>">
                  <img src="<?php echo base_url(); ?>assets/home/img/brand/logo.png">
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
       
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
               <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Tentang Kami</span>
              </a>
              <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Materi</span>
              </a>
               <div class="dropdown-menu">
                <a href="./examples/landing.html" class="dropdown-item">Tk</a>
                <a href="./examples/profile.html" class="dropdown-item">SD</a>
                <a href="./examples/login.html" class="dropdown-item">SMP PUTRA</a>
                <a href="./examples/login.html" class="dropdown-item">SMP PUTRI</a>
                <a href="./examples/register.html" class="dropdown-item">SMA PUTRA</a>
                <a href="./examples/register.html" class="dropdown-item">SMA PUTRI</a>
              </div>

              </ul>
           
           
              <?php if (empty($_session['nama'])) {?>
                <a href="<?php echo base_url('circle_student/login');?>" class="nav-link-icon">
                  <i class="fa fa-sign-in mr-2"></i>Login
                </a>
              <?php }else{ ?>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link nav-link-icon" data-toggle="dropdown" href="#" role="button">
                    <div class="icon icon-shape icon-sm bg-gradient-primary rounded-circle text-white mr-2">
                      <i class="fa fa-user"></i>
                    </div><?php echo $this->session->userdata("nama"); ?>
                  </a>
                  <div class="dropdown-menu">
                    <a href="<?php echo base_url('circle_student/profile') ?>" class="dropdown-item">
                      <div class="icon icon-shape icon-sm bg-gradient-success rounded-circle text-white mr-2">
                        <i class="fa fa-user"></i>
                      </div>Profile
                    </a>
                    <a href="#" class="dropdown-item" onclick="confirmLogOut()">
                      <div class="icon icon-shape icon-sm bg-gradient-warning rounded-circle text-white mr-2">
                        <i class="fa fa-sign-out"></i>
                      </div>Log Out
                    </a>
                  </div>
                </li>
              <?php } ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>
   


  <?php echo $contents; ?>
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
      <div class="row align-items-center justify-content-md-between bg-ungugitu">
        <div class="col-md-12">
          <div class="copyright pull-right">
            &copy; 2018
            <a href="" target="_blank">IHBS</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <!-- Modal -->
  <div class="modal fade" id="logOut_notif" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content bg-gradient-danger">
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="heading mt-4">Are you sure you want to logout ?</h4>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" onclick="logOut()">Yes</button>
          <button type="button" class="btn btn-white ml-auto" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal_changePass" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white pb-2">
              <div class="text-muted text-center mb-3">
                <h3>Change Password</h3>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Password Change Form</small>
              </div>
              <div class="alert alert-dismissible fade show" role="alert" style="display:none;" id="alert_changePass">
                  <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
                  <span class="alert-inner--text"><strong id="txt_alertChangePass"></strong></span>
                </div>
              <form role="form">
                <div class="form-group mb-3" id="form_oldPass">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password Lama" type="password" id="oldPass">
                  </div>
                </div>
                <div class="form-group" id="form_newPass">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password Baru" type="password" id="newPass">
                  </div>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4" onclick="changePass()" style="width: 100%">Change Password</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="updateProfil_notif" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-success modal-dialog-centered modal-" role="document">
      <div class="modal-content" id="bg_notifUpdateProfil">
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="heading mt-4" id="txt_notifUpdateProfil"></h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <script src="<?php echo base_url(); ?>/assets/home/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/home/vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/home/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/home/vendor/headroom/headroom.min.js"></script>
   <script src="<?php echo base_url(); ?>/assets/home/js/argon.js?v=1.0.1"></script>
  <script src="<?php echo base_url(); ?>/assets/home/js/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/home/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>


  <script type="text/javascript">
    new WOW().init();
  </script>
  <script type="text/javascript">
    function checkLogin(param) {
      var login = true;
      if (login) {
        window.location = "<?php echo base_url('circle_student/'); ?>"+param;
      }else{
        window.location = "<?php echo base_url('login');?>";
      }
    }

    function confirmLogOut() {
      $("#logOut_notif").modal("show");

    }

    function logOut() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/logout'); ?>",
        dataType : "json",
        success: function(response){
          window.location = "<?php echo base_url('circle_student'); ?>";
        }
      });
    }

    function changeData(param) {
      if (param=="ds") {
        $("#do").removeClass("show");
        $("#ds").addClass("show");
      }else if(param=="do"){
        $("#ds").removeClass("show");
        $("#do").addClass("show");
      }
    }

    function editProfil() {
      $("#edit_nama").show();
      $("#edit_nik").show();
      $("#edit_nisn").show();
      $("#edit_nipd").show();
      $("#edit_tmptLahir").show();
      $("#edit_tglLahir").show();
      $("#edit_gender").show();
      $("#edit_agama").show();
      $("#edit_kls").show();
      $("#edit_klsParalel").show();
      $("#edit_jurusan").show();
      $("#edit_angkatan").show();
      $("#edit_alamat").show();
      $("#edit_tlp").show();
      $("#edit_RtRw").show();
      $("#edit_desa").show();
      $("#edit_kecamatan").show();
      $("#edit_kota").show();
      $("#edit_kdPos").show();
      $("#edit_statusKPS").show();
      $("#edit_noKPS").show();
      $("#edit_skhun").show();
      $("#edit_nmBpk").show();
      $("#edit_nmIbu").show();
      $("#edit_thnLhrBpk").show();
      $("#edit_thnLhrIbu").show();
      $("#edit_pendidikanBpk").show();
      $("#edit_pendidikanIbu").show();
      $("#edit_pekerjaanBpk").show();
      $("#edit_pekerjaanIbu").show();
      $("#edit_noTlpBpk").show();
      $("#edit_noTlpIbu").show();

      for (var i = 0; i < $("span").length; i++) {
        $("#label"+i).hide();
      }

      $("#btnCancel").show();
      $("#btnUpdate").show();
      
    }

    function cancelEditPrfl(){
      $("#edit_nama").hide();
      $("#edit_nik").hide();
      $("#edit_nisn").hide();
      $("#edit_nipd").hide();
      $("#edit_tmptLahir").hide();
      $("#edit_tglLahir").hide();
      $("#edit_gender").hide();
      $("#edit_agama").hide();
      $("#edit_kls").hide();
      $("#edit_klsParalel").hide();
      $("#edit_jurusan").hide();
      $("#edit_angkatan").hide();
      $("#edit_alamat").hide();
      $("#edit_tlp").hide();
      $("#edit_RtRw").hide();
      $("#edit_desa").hide();
      $("#edit_kecamatan").hide();
      $("#edit_kota").hide();
      $("#edit_kdPos").hide();
      $("#edit_statusKPS").hide();
      $("#edit_noKPS").hide();
      $("#edit_skhun").hide();
      $("#edit_nmBpk").hide();
      $("#edit_nmIbu").hide();
      $("#edit_thnLhrBpk").hide();
      $("#edit_thnLhrIbu").hide();
      $("#edit_pendidikanBpk").hide();
      $("#edit_pendidikanIbu").hide();
      $("#edit_pekerjaanBpk").hide();
      $("#edit_pekerjaanIbu").hide();
      $("#edit_noTlpBpk").hide();
      $("#edit_noTlpIbu").hide();

      for (var i = 0; i < $("span").length; i++) {
        $("#label"+i).show();
      }

      $("#btnCancel").hide();
      $("#btnUpdate").hide();
      
    }

    function updateProfil(){
      var nama = $("#edit_nama").val();
      var nik  = $("#edit_nik").val();
      var nisn = $("#edit_nisn").val();
      var nipd = $("#edit_nipd").val();
      var tmptLahir = $("#edit_tmptLahir").val();
      var tglLahir  = $("#edit_tglLahir").val();
      var gender = $("#edit_gender").val();
      var agama  = $("#edit_agama").val();
      var kls = $("#edit_kls").val();
      var klsParalel = $("#edit_klsParalel").val();
      var jurusan  = $("#edit_jurusan").val();
      var angkatan = $("#edit_angkatan").val();
      var alamat = $("#edit_alamat").val();
      var tlp  = $("#edit_tlp").val();
      var RtRw = $("#edit_RtRw").val();
      var desa = $("#edit_desa").val();
      var kecamatan = $("#edit_kecamatan").val();
      var kota  = $("#edit_kota").val();
      var kdPos = $("#edit_kdPos").val();
      var statusKps = $("#edit_statusKPS").val();
      var noKps = $("#edit_noKPS").val();
      var skhun = $("#edit_skhun").val();
      var nmBpk = $("#edit_nmBpk").val();
      var nmIbu = $("#edit_nmIbu").val();
      var thnLhrBpk = $("#edit_thnLhrBpk").val();
      var thnLhrIbu = $("#edit_thnLhrIbu").val();
      var pendidikanBpk = $("#edit_pendidikanBpk").val();
      var pendidikanIbu = $("#edit_pendidikanIbu").val();
      var pekerjaanBpk = $("#edit_pekerjaanBpk").val();
      var pekerjaanIbu = $("#edit_pekerjaanIbu").val();
      var noTlpBpk = $("#edit_noTlpBpk").val();
      var noTlpIbu = $("#edit_noTlpIbu").val();

      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('circle_student/update_profil'); ?>",
        dataType : "json",
        data : {
          nama : nama,
          nik : nik,
          nisn : nisn,
          nipd : nipd,
          tmptLahir : tmptLahir,
          tglLahir : tglLahir,
          gender : gender,
          agama : agama,
          kls : kls,
          klsParalel : klsParalel,
          jurusan : jurusan,
          angkatan : angkatan,
          alamat : alamat,
          tlp : tlp,
          RtRw : RtRw,
          desa : desa,
          kecamatan : kecamatan,
          kota : kota,
          kdPos : kdPos,
          statusKps : statusKps,
          noKps : noKps,
          skhun : skhun,
          nmBpk : nmBpk,
          nmIbu : nmIbu,
          thnLhrBpk : thnLhrBpk,
          thnLhrIbu : thnLhrIbu,
          pendidikanBpk : pendidikanBpk,
          pendidikanIbu : pendidikanIbu,
          pekerjaanBpk : pekerjaanBpk,
          pekerjaanIbu : pekerjaanIbu,
          noTlpBpk : noTlpBpk,
          noTlpIbu : noTlpIbu
        },
        success:function(response){
          if (response==="success") {
            $("#bg_notifUpdateProfil").addClass("bg-gradient-success");
            $("#txt_notifUpdateProfil").text("Update data profile success !");
            $("#updateProfil_notif").modal("show");
            setTimeout(function() {
              window.location = "<?php echo base_url("circle_student/profile"); ?>";
            },3000)
          }else{
            $("#bg_notifUpdateProfil").addClass("bg-gradient-danger");
            $("#txt_notifUpdateProfil").text("Update data profile failed !");
            $("#updateProfil_notif").modal("show");
          }
        }
      });
    }

    function changePass(){
      var oldPass = $("#oldPass").val();
      var newPass = $("#newPass").val();
      if (!oldPass || !newPass) {
        $("#form_newPass").addClass("has-danger");
        $("#form_oldPass").addClass("has-danger");
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo site_url("circle_student/home/change_pass") ?>",
          data : {oldPass:oldPass,newPass:newPass},
          success:function(response){
            if (jQuery.trim(response)==="success") {
              $("#alert_changePass").removeClass("alert-warning");
              $("#alert_changePass").addClass("alert-success");
              $("#txt_alertChangePass").text("Change Password Success !");
              $("#alert_changePass").show();
              setTimeout(function(){
                $("#modal_changePass").modal("hide");
              },5000);
              $("input").val("");
            }else if(jQuery.trim(response)==="failed"){
              $("#alert_changePass").addClass("alert-warning");
              $("#txt_alertChangePass").text("Change Password Failed !");
              $("#alert_changePass").show();
            }else if(jQuery.trim(response)==="wrong"){
              $("#alert_changePass").addClass("alert-warning");
              $("#txt_alertChangePass").text("Incorrect Old Password !");
              $("#alert_changePass").show();
            }else if(jQuery.trim(response)==="empty"){
              $("#form_newPass").addClass("has-danger");
              $("#form_oldPass").addClass("has-danger");
            }
            setTimeout (function(){
              $("#alert_changePass").hide();
            },5000);
          }
        });
      }
    }
  </script>

</body>

</html> 