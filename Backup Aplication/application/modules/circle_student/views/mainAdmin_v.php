<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Circle Student</title>
  <!-- Favicon -->
  <link href="<?php echo base_url() ?>/assets/admin/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url() ?>/assets/admin/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo base_url() ?>/assets/admin/css/argon.css?v=1.0.0" rel="stylesheet">
  <link type="text/css" href="<?php echo base_url(); ?>assets/home/css/animate.css" rel="stylesheet">
 <!-- popup delete CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
</head>
 <style type="text/css">

        td {
          cursor: pointer;
        }

        .editor{
          display: none;
        }

        </style>
<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="<?php echo base_url('circle_student/admin') ?>">
        <img src="<?php echo base_url() ?>assets/admin/img/text_logo.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php echo base_url() ?>/assets/home/img/avatar.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo base_url('master_login/aunt/logout') ?>" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="<?php echo base_url('circle_student/admin') ?>">
                <img src="<?php echo base_url() ?>assets/admin/img/text_logo.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('circle_student/admin') ?>">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
             <a href="#pagefront" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i>Front</a>
            <ul class="collapse list-inline" id="pagefront">
                <li>
                    <a href="<?php echo base_url('circle_student/admin/data_slider') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Slider</a>
                </li></ul>
             <a href="#page" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Master</a>
            <ul class="collapse list-inline" id="page">
                <li>
                    <a href="<?php echo base_url('circle_student/admin/data_identitas_sekolah') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Identitas Sekolah</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/Admin/data_kurikulum')?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Kurikulum</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/admin/data_tahun_akademik'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Tahun Akademik</a>
                </li>
                <li>
                    <a href="#" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Gedung</a>
                </li>
                <li>
                    <a href="#" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Ruangan</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/admin/data_golongan')?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Golongan</a>
                </li>
                <li>
                    <a href="" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Jurusan</a>
                </li>
                <li>
                    <a href="#" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Kelas</a>
                </li>
                <li>
                    <a href="#" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Kelas Paralel</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/admin/data_stts_kepegawaian')?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Status Kepegawaian</a>
                </li>
            </ul>
               <a  href="#masterpengguna" class="nav-link" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fa fa-users"></i> Data Pengguna</a> 
                 <ul class="collapse list-unstyled" id="masterpengguna">
                    <li>
                        <a class="nav-link" href="#"><i class="fa fa-info text-primary ml-3"></i>Data Siswa</a>
                        <a class="nav-link" href="#"><i class="fa fa-cubes text-primary ml-3"></i>Data Guru</a>
                         <a class="nav-link" href="#"><i class="fa fa-calendar-alt text-primary ml-3"></i>Data Kepala Sekolah </a>
                        <a class="nav-link" href="#"><i class="fa fa-building text-primary ml-3"></i>Data Administrator </a>
                         <a class="nav-link" href="#"><i class="fa fa-info text-primary ml-3"></i>Data Admin Sekolah</a>
                        <a class="nav-link" href="#"><i class="fa fa-cubes text-primary ml-3"></i>Data Admin Konten</a>
                         <a class="nav-link" href="#"><i class="fa fa-info text-primary ml-3"></i>Data Modul Akses Khusus</a>
                       
                    </li>                  
                </ul>
              <a  href="#masterakademik" class="nav-link" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fa fa-users"></i> Data Akademik</a> 
               <ul class="collapse list-unstyled" id="masterakademik">
                  <li>
                      <a class="nav-link" href="#"><i class="fa fa-info text-primary ml-3"></i>Data Kelompok Mapel</a>
                      <a class="nav-link" href="#"><i class="fa fa-cubes text-primary ml-3"></i>Data Mata Pelajaran</a>
                       <a class="nav-link" href="#"><i class="fa fa-calendar-alt text-primary ml-3"></i>Data Jadwal Pelajaran </a>
                      <a class="nav-link" href="#"><i class="fa fa-building text-primary ml-3"></i>Data Kompetensi Belajar </a>
                       <a class="nav-link" href="#"><i class="fa fa-info text-primary ml-3"></i>Data Rentang Nilai</a>
                  
                  </li>                  
              </ul>
          </li>
          
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Documentation</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-spaceship"></i> Getting started
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-palette"></i> Foundation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
              <i class="ni ni-ui-04"></i> Components
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html"><?php echo $parent_title."  <i class='fa fa-angle-right'></i>  ".$child_title ?></a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?php echo base_url() ?>/assets/home/img/avatar.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $this->session->userdata("username"); ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url('master_login/aunt/logout') ?>" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-info pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col">
          <?php echo $contents; ?>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
          <div class="modal-content " id="modalColor">
            <div class="modal-body">
              <div class="py-3 text-center">
                <i class="ni ni-bell-55 ni-3x"></i>
                <h4 class="heading mt-4" id="txtNotif"></h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
          <div class="modal-content bg-gradient-danger">
            <div class="modal-body">
              <div class="py-3 text-center">
                <i class="ni ni-bell-55 ni-3x"></i>
                <h4 class="heading mt-4" id="txtConfirm"></h4>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-white"  id="btnYes">Yes</button>
              <button type="button" class="btn btn-white ml-auto" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              <!-- &copy; 2018 <a href="#" class="font-weight-bold ml-1" target="_blank">IHBS</a> -->
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url() ?>/assets/admin/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url() ?>/assets/admin/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/admin/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url() ?>/assets/admin/js/argon.js?v=1.0.0"></script>
  <script src="<?php echo base_url(); ?>/assets/home/js/wow.min.js"></script>
  <script  src="<?php echo base_url(); ?>/assets/sweetalert/sweetalert.min.js"></script>

 
  <script type="text/javascript">
    $(function () {
      if ($("#tbDataSekolah").length) {
        dataTbSekolah();
      }
      if ($("#tbThnAkademik").length) {
        dataTbThnAkademik();
      }

      if ($("#tbDataSlider").length) {
        dataTbSlider();
      }

    });

    function dataTbSekolah() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/admin/get_dataSekolah') ?>",
        dataType : "JSON",
        success:function(response){
          $("#tbDataSekolah > tbody").empty();var no =1;
          $.each(response, function(Index,Value){
            $("#tbDataSekolah > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.nm_sekolah+"</td>"+
                "<td>"+Value.alamat_sekolah+"</td>"+
                "<td>"+Value.unit+"</td>"+
                "<td><button class='btn btn-info btn-sm' title='Detail' onclick=detailSekolah('"+Value.kd_sekolah+"')><i class='fa fa-list'></i></button><button class='btn btn-warning btn-sm' onclick=editSekolah('"+Value.kd_sekolah+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDeleteSekolah('"+Value.kd_sekolah+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    function addSekolah(){
      $("input").val("");
      $("#frmTbSekolah").hide(500);
      $("#frmAddSekolah").show(1000);
      $("#btnAddSekolah").hide();
      $("#btnCancel").show(1001);
      $("#btnSave").show(1001);
    }

    function cancelAddSekolah(){
      $("#frmTbSekolah").show(1000);
      $("#frmAddSekolah").hide(500);
      $("#btnAddSekolah").show();
      $("#btnCancel").hide();
      $("#btnSave").hide();
      $("#btnUpdate").hide();
      $("#btnCancel").text("Cancel");
      $("#unit").removeAttr('disabled','disabled');
      $("#nmSekolah").removeAttr('disabled','disabled');
      $("#npsn").removeAttr('disabled','disabled');
      $("#nss").removeAttr('disabled','disabled');
      $("#alamat").removeAttr('disabled','disabled');
      $("#kdPos").removeAttr('disabled','disabled');
      $("#desa").removeAttr('disabled','disabled');
      $("#kec").removeAttr('disabled','disabled');
      $("#kota").removeAttr('disabled','disabled');
      $("#tlp").removeAttr('disabled','disabled');
      $("#fax").removeAttr('disabled','disabled');
      $("#email").removeAttr('disabled','disabled');
      $("#web").removeAttr('disabled','disabled');
    }

    function saveSekolah(){
      var unit = $("#unit").val();
      var nmSekolah  = $("#nmSekolah").val();
      var npsn = $("#npsn").val();
      var nss = $("#nss").val();
      var alamat = $("#alamat").val();
      var kdPos = $("#kdPos").val();
      var desa = $("#desa").val();
      var kec = $("#kec").val();
      var kota = $("#kota").val();
      var tlp = $("#tlp").val();
      var fax = $("#fax").val();
      var email = $("#email").val();
      var web = $("#web").val();

      if (!unit||!nmSekolah||!alamat||!kdPos||!desa||!kec||!kota||!tlp||!email) {
        $("#modalColor").addClass("bg-gradient-warning");
        $("#txtNotif").text("Kolom Yang Bertanda (*) Harus Diisi !");
        $("#notif").modal('show');

        setTimeout (function(){
          $("#notif").modal('hide');
          $("#modalColor").removeClass("bg-gradient-warning");
          $("#txtNotif").text("");
        },3000)
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/admin/saveDataSekolah'); ?>",
          data : {
            unit:unit,
            nmSekolah : nmSekolah,
            npsn :npsn,
            nss : nss,
            alamat : alamat,
            kdPos : kdPos,
            desa : desa,
            kec :kec,
            kota :kota,
            tlp : tlp,
            fax : fax,
            email : email,
            web : web
          },
          success:function(response){
            if (jQuery.trim(response)==="success") {
              dataTbSekolah()
              cancelAddSekolah()
              $("#modalColor").addClass("bg-gradient-success");
              $("#txtNotif").text("Data Berhasil Disimpan!");
              $("#notif").modal('show');

              setTimeout (function(){
                $("#notif").modal('hide');
                $("#modalColor").removeClass("bg-gradient-success");
                $("#txtNotif").text("");
              },3000)
            }else if (jQuery.trim(response)==="failed") {
              cancelAddSekolah()
              $("#modalColor").addClass("bg-gradient-warning");
              $("#txtNotif").text("Data Gagal Disimpan!");
              $("#notif").modal('show');

              setTimeout (function(){
                $("#notif").modal('hide');
                $("#modalColor").removeClass("bg-gradient-warning");
                $("#txtNotif").text("");
              },3000)
            }
          }
        });
      }
    }

    function confirmDeleteSekolah(id){
      $("#btnYes").attr('onclick','deleteListSekolah('+id+')');
      $("#confirmDelete").modal("show");
      $("#txtConfirm").text("Yakin, Hapus Data Sekolah ?");
    }

    function deleteListSekolah(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/admin/deleteListSekolah'); ?>",
        data : {id:id},
        success:function(response) {
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbSekolah()
            $("#modalColor").addClass("bg-gradient-success");
            $("#txtNotif").text("Data Berhasil Dihapus!");
            $("#notif").modal('show');

            setTimeout (function(){
              $("#notif").modal('hide');
              $("#modalColor").removeClass("bg-gradient-warning");
              $("#txtNotif").text("");
            },3000)
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            dataTbSekolah()
            $("#modalColor").addClass("bg-gradient-warning");
            $("#txtNotif").text("Data Gagal Dihapus!");
            $("#notif").modal('show');

            setTimeout (function(){
              $("#notif").modal('hide');
              $("#modalColor").removeClass("bg-gradient-warning");
              $("#txtNotif").text("");
            },3000)
          }
        }
      });
    }

    function editSekolah(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/admin/getDataSekolahById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response) {
          $("#unit").val(response[0].unit);
          $("#nmSekolah").val(response[0].nm_sekolah);
          $("#npsn").val(response[0].npsn);
          $("#nss").val(response[0].nss);
          $("#alamat").val(response[0].alamat_sekolah);
          $("#kdPos").val(response[0].kd_pos);
          $("#desa").val(response[0].desa);
          $("#kec").val(response[0].kecamatan);
          $("#kota").val(response[0].kota);
          $("#tlp").val(response[0].no_tlp);
          $("#fax").val(response[0].fax);
          $("#email").val(response[0].email);
          $("#web").val(response[0].web);

          $("#frmTbSekolah").hide(500);
          $("#frmAddSekolah").show(1000);
          $("#btnAddSekolah").hide();
          $("#btnCancel").show(1001);
          $("#btnUpdate").show(1001);
          $("#btnUpdate").attr('onclick','updateSekolah('+id+')');
        }
      });
    }

    function updateSekolah(id) {
      var unit = $("#unit").val();
      var nmSekolah  = $("#nmSekolah").val();
      var npsn = $("#npsn").val();
      var nss = $("#nss").val();
      var alamat = $("#alamat").val();
      var kdPos = $("#kdPos").val();
      var desa = $("#desa").val();
      var kec = $("#kec").val();
      var kota = $("#kota").val();
      var tlp = $("#tlp").val();
      var fax = $("#fax").val();
      var email = $("#email").val();
      var web = $("#web").val();

      if (!unit||!nmSekolah||!alamat||!kdPos||!desa||!kec||!kota||!tlp||!email) {
        $("#modalColor").addClass("bg-gradient-warning");
        $("#txtNotif").text("Kolom Yang Bertanda (*) Harus Diisi !");
        $("#notif").modal('show');

        setTimeout (function(){
          $("#notif").modal('hide');
          $("#modalColor").removeClass("bg-gradient-warning");
          $("#txtNotif").text("");
        },3000)
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/admin/updateSekolah') ?>",
          data : {
            id:id,
            unit:unit,
            nmSekolah : nmSekolah,
            npsn :npsn,
            nss : nss,
            alamat : alamat,
            kdPos : kdPos,
            desa : desa,
            kec :kec,
            kota :kota,
            tlp : tlp,
            fax : fax,
            email : email,
            web : web
          },
          success:function(response) {
            if (jQuery.trim(response)==="success") {
              dataTbSekolah()
              cancelAddSekolah()
              $("#modalColor").addClass("bg-gradient-success");
              $("#txtNotif").text("Data Berhasil Diperbarui!");
              $("#notif").modal('show');

              setTimeout (function(){
                $("#notif").modal('hide');
                $("#modalColor").removeClass("bg-gradient-success");
                $("#txtNotif").text("");
              },3000)
            }else if(jQuery.trim(response)==="failed"){
              $("#modalColor").addClass("bg-gradient-warning");
              $("#txtNotif").text("Data Gagal Diperbarui!");
              $("#notif").modal('show');

              setTimeout (function(){
                $("#notif").modal('hide');
                $("#modalColor").removeClass("bg-gradient-warning");
                $("#txtNotif").text("");
              },3000)
            }
          }
        });
      }
    }

    function detailSekolah(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/admin/getDataSekolahById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response) {
          $("#unit").val(response[0].unit).attr('disabled','disabled');
          $("#nmSekolah").val(response[0].nm_sekolah).attr('disabled','disabled');
          $("#npsn").val(response[0].npsn).attr('disabled','disabled');
          $("#nss").val(response[0].nss).attr('disabled','disabled');
          $("#alamat").val(response[0].alamat_sekolah).attr('disabled','disabled');
          $("#kdPos").val(response[0].kd_pos).attr('disabled','disabled');
          $("#desa").val(response[0].desa).attr('disabled','disabled');
          $("#kec").val(response[0].kecamatan).attr('disabled','disabled');
          $("#kota").val(response[0].kota).attr('disabled','disabled');
          $("#tlp").val(response[0].no_tlp).attr('disabled','disabled');
          $("#fax").val(response[0].fax).attr('disabled','disabled');
          $("#email").val(response[0].email).attr('disabled','disabled');
          $("#web").val(response[0].web).attr('disabled','disabled');

          $("#frmTbSekolah").hide(500);
          $("#frmAddSekolah").show(1000);
          $("#btnCancel").text("Back");
          $("#btnCancel").show(1001);
        }
      });
    }

    function dataTbThnAkademik() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/admin/getDataThnAkademik'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#tbThnAkademik > tbody").empty();var no=1;
          $.each(response, function(Index,Value){
            $("#tbThnAkademik > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.nm_thn_akademik+"</td>"+
                "<td>"+Value.keterangan+"</td>"+
                "<td>"+Value.unit+"</td>"+
                "<td>"+Value.status+"</td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editThnAkademik('"+Value.kd_thn_akademik+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDeleteThnAkademik('"+Value.kd_thn_akademik+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    function addThnAkademik() {
      $("input").val("");
      $("#frmTbThnAkademik").hide(500);
      $("#frmAddThnAkademik").show(1000);
      $("#btnAddSekolah").hide();
      $("#btnCancel").show(1001);
      $("#btnSave").show(1001);
    }

    function cancelAddThnAkademik() {
      $("#frmTbThnAkademik").show(1000);
      $("#frmAddThnAkademik").hide(500);
      $("#btnAddThnAkademik").show();
      $("#btnCancel").hide();
      $("#btnSave").hide();
      $("#btnUpdate").hide();
      $("#btnCancel").text("Cancel");
    }

    function saveThnAkademik() {
      var unit = $("#unit").val();
      var nmThn = $("#nmThn").val();
      var ket = $("#ket").val();
      var stat = $("#stat").val();

      if (!unit||!nmThn||!ket||!stat) {
        $("#modalColor").addClass("bg-gradient-warning");
        $("#txtNotif").text("Kolom Yang Bertanda (*) Harus Diisi !");
        $("#notif").modal('show');

        setTimeout (function(){
          $("#notif").modal('hide');
          $("#modalColor").removeClass("bg-gradient-warning");
          $("#txtNotif").text("");
        },3000)
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/admin/saveThnAkademik') ?>",
          data : {unit:unit, nmThn:nmThn, ket:ket, stat:stat},
          success : function(response){
            if (jQuery.trim(response)==="success") {
              dataTbThnAkademik();
              cancelAddThnAkademik();
              $("#modalColor").addClass("bg-gradient-success");
              $("#txtNotif").text("Data Berhasil Ditambah!");
              $("#notif").modal('show');

              setTimeout (function(){
                $("#notif").modal('hide');
                $("#modalColor").removeClass("bg-gradient-success");
                $("#txtNotif").text("");
              },3000)
            }else if(jQuery.trim(response)==="failed"){
              $("#modalColor").addClass("bg-gradient-warning");
              $("#txtNotif").text("Data Gagal Ditambah!");
              $("#notif").modal('show');

              setTimeout (function(){
                $("#notif").modal('hide');
                $("#modalColor").removeClass("bg-gradient-warning");
                $("#txtNotif").text("");
              },3000)
            }
          }
        });
      }
    }

    function confirmDeleteThnAkademik(id) {
      $("#btnYes").attr('onclick','deleteThnAkademik('+id+')');
      $("#confirmDelete").modal("show");
      $("#txtConfirm").text("Yakin, Hapus Tahun Akademik ?");
    }

    function deleteThnAkademik(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/admin/deleteThnAkademik') ?>",
        data : {id:id},
        success : function(response){
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbThnAkademik();
            cancelAddThnAkademik();
            $("#modalColor").addClass("bg-gradient-success");
            $("#txtNotif").text("Data Berhasil Dihapus!");
            $("#notif").modal('show');

            setTimeout (function(){
              $("#notif").modal('hide');
              $("#modalColor").removeClass("bg-gradient-success");
              $("#txtNotif").text("");
            },3000)
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            $("#modalColor").addClass("bg-gradient-warning");
            $("#txtNotif").text("Data Gagal Dihapus!");
            $("#notif").modal('show');

            setTimeout (function(){
              $("#notif").modal('hide');
              $("#modalColor").removeClass("bg-gradient-warning");
              $("#txtNotif").text("");
            },3000)
          }
        }
      });
    }

    function editThnAkademik(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/admin/getThnAkademikById'); ?>",
        dataType : "JSON",
        data : {id:id},
        success : function(response){
          $("#unit").val(response[0].unit);
          $("#nmThn").val(response[0].nm_thn_akademik);
          $("#ket").val(response[0].keterangan);
          $("#stat").val(response[0].status);

          $("#frmTbThnAkademik").hide(500);
          $("#frmAddThnAkademik").show(1000);
          $("#btnAddThnAkademik").hide();
          $("#btnCancel").show(1001);
          $("#btnUpdate").show(1001);
          $("#btnUpdate").attr('onclick','updateThnAkademik('+id+')');
        }
      });
    }

    function updateThnAkademik(id) {
      var unit = $("#unit").val();
      var nmThn = $("#nmThn").val();
      var ket = $("#ket").val();
      var stat = $("#stat").val();

      if (!unit||!nmThn||!ket||!stat) {
        $("#modalColor").addClass("bg-gradient-warning");
        $("#txtNotif").text("Kolom Yang Bertanda (*) Harus Diisi !");
        $("#notif").modal('show');

        setTimeout (function(){
          $("#notif").modal('hide');
          $("#modalColor").removeClass("bg-gradient-warning");
          $("#txtNotif").text("");
        },3000)
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/admin/updateThnAkademik'); ?>",
          data : {id:id, unit:unit, nmThn:nmThn, ket:ket, stat:stat},
          success : function(response){
            if (jQuery.trim(response)==="success") {
              dataTbThnAkademik();
              cancelAddThnAkademik();
              $("#modalColor").addClass("bg-gradient-success");
              $("#txtNotif").text("Data Berhasil Diperbarui!");
              $("#notif").modal('show');

              setTimeout (function(){
                $("#notif").modal('hide');
                $("#modalColor").removeClass("bg-gradient-success");
                $("#txtNotif").text("");
              },3000)
            }else if(jQuery.trim(response)==="failed"){
              $("#modalColor").addClass("bg-gradient-warning");
              $("#txtNotif").text("Data Gagal Diperbarui!");
              $("#notif").modal('show');

              setTimeout (function(){
                $("#notif").modal('hide');
                $("#modalColor").removeClass("bg-gradient-warning");
                $("#txtNotif").text("");
              },3000)
            }
          }
        });
      }
    }

  </script>


<script type="text/javascript">

  $(function(){
    
    $(document).on("click","td",function(){
    $(this).find("span[class~='caption']").hide();
    $(this).find("input[class~='editor']").fadeIn().focus();
  });

  $("#btnTambahkurikulum").click(function(){
    $.ajax({
      type:"post",
      cache:false,
      dataType: "JSON",
      url:"<?php echo base_url('circle_student/Admin/create_data_kurikulum'); ?>",
      success: function(a){
        var ele="";
        ele+="<tr data-id='"+a.id+"'>";
        ele+="<td><span class='span-nm_kur caption' data-id='"+a.id+"'></span> <input type='text' class='field-nm_kur form-control editor'  data-id='"+a.id+"' /></td>";
        ele+="<td><span class='span-stts caption' data-id='"+a.id+"'></span> <input type='text' class='field-stts form-control new field-nm_kur'  data-id='"+a.id+"' /></td>";
        ele+="<td><span class='span-stts caption' data-id='"+a.id+"'></span> <input type='text' class='field-stts form-control new field-stts' data-id='"+a.id+"' value='YA' /></td>";
        ele+="<td><button class='btn btn-sm btn-danger hapus-data-kur' data-id='"+a.id+"'><i class='glyphicon glyphicon-remove'></i> Hapus</button></td>";
        ele+="</tr>";

        var element=$(ele);
        element.hide();
        element.prependTo("#table-body").fadeIn(1500);
      }
    });
  });

  $(document).on("keydown",".editor",function(e){
    if(e.keyCode==13){
      var target=$(e.target);
      var value=target.val();
      var id=target.attr("data-id");
      var data={id:id,value:value};
      if(target.is(".field-nm_kur")){
        data.modul="nm_kur";
      }else if(target.is(".field-stts")){
      data.modul="stts";
      }

      $.ajax({
        type:"post",
        cache:false,
        data:data,
        url:"<?php echo base_url('circle_student/Admin/update_data_kurikulum'); ?>",
        success: function(a){
          target.hide();
          target.siblings("span[class~='caption']").html(value).fadeIn();
        }
      })
    }
  });

  $(document).on("keydown",".new",function(e){
    if(e.keyCode==13){
      var target=$(e.target);
      var value=target.val();
      var id=target.attr("data-id");
      var data={id:id,value:value};
      if(target.is(".field-nm_kur")){
        data.modul="nm_kur";
      }else if(target.is(".field-stts")){
      data.modul="stts";
      }

      $.ajax({
        type:"post",
        cache:false,
        data:data,
        url:"<?php echo base_url('circle_student/Admin/update_data_kurikulum'); ?>",
        success: function(a){
          target.hide();
          target.siblings("span[class~='caption']").html(value).fadeIn();
          window.location = "<?php echo base_url('circle_student/admin/data_kurikulum') ?>";
        }
      })
    }
  });


  $(document).on("click",".hapus-data-kur",function(){
    var id=$(this).attr("data-id");
    swal({
      title:"Hapus Kurikulum",
      text:"Yakin akan menghapus kurikulum ini?",
      type: "warning",
      showCancelButton: true,
      confirmButtonText: "Hapus",
      closeOnConfirm: true,
    },
    function(){
       $.ajax({
        type:"post",
        cache:false,
        url:"<?php echo base_url('circle_student/Admin/delete_data_kurikulum'); ?>",
        data:{id:id},
        success: function(){
          $("tr[data-id='"+id+"']").fadeOut("fast",function(){
            $(this).remove();
          });
        }
      });
    });
  });
});

</script>

<script type="text/javascript">

  $(function(){
    
    $(document).on("click","td",function(){
    $(this).find("span[class~='caption']").hide();
    $(this).find("input[class~='editor']").fadeIn().focus();
  });

  $("#btnTambahgolongan").click(function(){
    $.ajax({
      type:"post",
      cache:false,
      dataType: "JSON",
      url:"<?php echo base_url('circle_student/Admin/create_data_golongan'); ?>",
      success: function(a){
        var ele="";
        ele+="<tr data-id='"+a.id+"'>";
        ele+="<td><span class='span-nm_gol caption' data-id='"+a.id+"'></span> <input type='text' class='field-nm_gol form-control editor'  data-id='"+a.id+"' /></td>";
        ele+="<td><span class='span-nm_gol caption' data-id='"+a.id+"'></span> <input type='text' class='field-nm_gol form-control new field-nm_gol'  data-id='"+a.id+"' /></td>";
        ele+="<td><span class='span-keterangan caption' data-id='"+a.id+"'></span> <input type='text' class='field-keterangan form-control new field-keterangan'  data-id='"+a.id+"' /></td>";
        ele+="<td><button class='btn btn-sm btn-danger hapus-data-gol' data-id='"+a.id+"'><i class='glyphicon glyphicon-remove'></i> Hapus</button></td>";
        ele+="</tr>";

        var element=$(ele);
        element.hide();
        element.prependTo("#table-body").fadeIn(1500);
      }
    });
  });

  $(document).on("keydown",".editor",function(e){
    if(e.keyCode==13){
      var target=$(e.target);
      var value=target.val();
      var id=target.attr("data-id");
      var data={id:id,value:value};
      if(target.is(".field-nm_gol")){
        data.modul="nm_gol";
      }else if(target.is(".field-keterangan")){
      data.modul="keterangan";
      }

      $.ajax({
        type:"post",
        cache:false,
        data:data,
        url:"<?php echo base_url('circle_student/Admin/update_data_golongan'); ?>",
        success: function(a){
          target.hide();
          target.siblings("span[class~='caption']").html(value).fadeIn();
        }
      })
    }
  });

  $(document).on("keydown",".new",function(e){
    if(e.keyCode==13){
      var target=$(e.target);
      var value=target.val();
      var id=target.attr("data-id");
      var data={id:id,value:value};
      if(target.is(".field-nm_gol")){
        data.modul="nm_gol";
      }else if(target.is(".field-keterangan")){
      data.modul="keterangan";
      }

      $.ajax({
        type:"post",
        cache:false,
        data:data,
        url:"<?php echo base_url('circle_student/Admin/update_data_golongan'); ?>",
        success: function(a){
          target.hide();
          target.siblings("span[class~='caption']").html(value).fadeIn();
          window.location = "<?php echo base_url('circle_student/admin/data_golongan') ?>";
        }
      })
    }
  });


  $(document).on("click",".hapus-data-gol",function(){
    var id=$(this).attr("data-id");
    swal({
      title:"Hapus Golongan",
      text:"Yakin akan menghapus Golongan ini?",
      type: "warning",
      showCancelButton: true,
      confirmButtonText: "Hapus",
      closeOnConfirm: true,
    },
    function(){
       $.ajax({
        type:"post",
        cache:false,
        url:"<?php echo base_url('circle_student/Admin/delete_data_golongan'); ?>",
        data:{id:id},
        success: function(){
          $("tr[data-id='"+id+"']").fadeOut("fast",function(){
            $(this).remove();
          });
        }
      });
    });
  });
});

</script>


<script type="text/javascript">

  $(function(){
    
    $(document).on("click","td",function(){
    $(this).find("span[class~='caption']").hide();
    $(this).find("input[class~='editor']").fadeIn().focus();
  });

  $("#btnTambahsttspeg").click(function(){
    $.ajax({
      type:"post",
      cache:false,
      dataType: "JSON",
      url:"<?php echo base_url('circle_student/Admin/create_data_sttspegw'); ?>",
      success: function(a){
        var ele="";
        ele+="<tr data-id='"+a.id+"'>";
        ele+="<td><span class='span-nm_stts_peg caption' data-id='"+a.id+"'></span> <input type='text' class='field-nm_stts_peg form-control editor'  data-id='"+a.id+"' /></td>";
        ele+="<td><span class='span-nm_stts_peg caption' data-id='"+a.id+"'></span> <input type='text' class='field-nm_stts_peg form-control new field-nm_stts_peg'  data-id='"+a.id+"' /></td>";
        ele+="<td><span class='span-keterangan caption' data-id='"+a.id+"'></span> <input type='text' class='field-keterangan form-control new field-keterangan'  data-id='"+a.id+"' /></td>";
        ele+="<td><button class='btn btn-sm btn-danger hapus-data-sttspeg' data-id='"+a.id+"'><i class='glyphicon glyphicon-remove'></i> Hapus</button></td>";
        ele+="</tr>";

        var element=$(ele);
        element.hide();
        element.prependTo("#table-body").fadeIn(1500);
      }
    });
  });

  $(document).on("keydown",".editor",function(e){
    if(e.keyCode==13){
      var target=$(e.target);
      var value=target.val();
      var id=target.attr("data-id");
      var data={id:id,value:value};
      if(target.is(".field-nm_stts_peg")){
        data.modul="nm_stts_peg";
      }else if(target.is(".field-keterangan")){
      data.modul="keterangan";
      }

      $.ajax({
        type:"post",
        cache:false,
        data:data,
        url:"<?php echo base_url('circle_student/Admin/update_data_sttspegw'); ?>",
        success: function(a){
          target.hide();
          target.siblings("span[class~='caption']").html(value).fadeIn();
        }
      })
    }
  });

  $(document).on("keydown",".new",function(e){
    if(e.keyCode==13){
      var target=$(e.target);
      var value=target.val();
      var id=target.attr("data-id");
      var data={id:id,value:value};
      if(target.is(".field-nm_stts_peg")){
        data.modul="nm_stts_peg";
      }else if(target.is(".field-keterangan")){
      data.modul="keterangan";
      }

      $.ajax({
        type:"post",
        cache:false,
        data:data,
        url:"<?php echo base_url('circle_student/Admin/update_data_sttspegw'); ?>",
        success: function(a){
          target.hide();
          target.siblings("span[class~='caption']").html(value).fadeIn();
          window.location = "<?php echo base_url('circle_student/admin/data_stts_kepegawaian') ?>";
        }
      })
    }
  });


  $(document).on("click",".hapus-data-sttspeg",function(){
    var id=$(this).attr("data-id");
    swal({
      title:"Hapus status pegawai",
      text:"Yakin akan menghapus Status Pegawai ini?",
      type: "warning",
      showCancelButton: true,
      confirmButtonText: "Hapus",
      closeOnConfirm: true,
    },
    function(){
       $.ajax({
        type:"post",
        cache:false,
        url:"<?php echo base_url('circle_student/Admin/delete_data_sttspegw'); ?>",
        data:{id:id},
        success: function(){
          $("tr[data-id='"+id+"']").fadeOut("fast",function(){
            $(this).remove();
          });
        }
      });
    });
  });
});

</script>

 <script type="text/javascript">

 function dataTbSlider() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/admin/get_data_slider'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#tbDataSlider > tbody").empty();var no=1;
          $.each(response, function(Index,Value){
            $("#tbDataSlider > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.nm_slider+"</td>"+
                "<td>"+Value.gambar+"</td>"+
                "<td>"+Value.urutan+"</td>"+
                "<td>"+Value.keterangan+"</td>"+
                "<td>"+Value.status+"</td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editSlider('"+Value.id_slider+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDeleteSlider('"+Value.id_slider+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }
    function addSlider() {
      $("input").val("");
      $("#frmTbSlider").hide(500);
      $("#frmAddSlider").show(1000);
      $("#btnAddSekolah").hide();
      $("#btnCancel").show(1001);
      $("#btnSave").show(1001);
      $("#statinput").val('save')
    }

    function cancelAddSlider() {
      $("#frmTbSlider").show(1000);
      $("#frmAddSlider").hide(500);
      $("#btnAddSlider").show();
      $("#btnCancel").hide();
      $("#btnSave").hide();
      $("#btnUpdate").hide();
      $("#btnCancel").text("Cancel");
    }

    $('#submitDataSlider').submit(function(e){
      e.preventDefault(); 
      // var gambar     = document.getElementById("gambar").value; //https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_fileupload_value
      var nm_slider  = $("#nm_slider").val();
      var urutan     = $("#urutan").val();
      var keterangan = $("#keterangan").val();
      var status     = $("#status").val();

         
     if (!nm_slider||!urutan||!keterangan||!status) {
        $("#modalColor").addClass("bg-gradient-warning");
        $("#txtNotif").text("Kolom Yang Bertanda (*) Harus Diisi !");
        $("#notif").modal('show');

        setTimeout (function(){
          $("#notif").modal('hide');
          $("#modalColor").removeClass("bg-gradient-warning");
          $("#txtNotif").text("");
        },3000)
      }else{
        $.ajax({                                                   
          url:'<?php echo base_url();?>circle_student/admin/created_slider',
          type:"post",
          data:new FormData(this), //this is formData
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              dataTbSlider();
              cancelAddSlider();
              $("#modalColor").addClass("bg-gradient-success");
              $("#txtNotif").text("Data Berhasil Ditambah!");
              $("#notif").modal('show');

              setTimeout (function(){
                $("#notif").modal('hide');
                $("#modalColor").removeClass("bg-gradient-success");
                $("#txtNotif").text("");
              },3000)
            }else if(jQuery.trim(response)==="failed"){
              $("#modalColor").addClass("bg-gradient-warning");
              $("#txtNotif").text("Data Gagal Ditambah!");
              $("#notif").modal('show');

              setTimeout (function(){
                $("#notif").modal('hide');
                $("#modalColor").removeClass("bg-gradient-warning");
                $("#txtNotif").text("");
              },3000)
            }
         }
       });
      }
    });

    function confirmDeleteSlider(id) {
      $("#btnYes").attr('onclick','deleteSlider('+id+')');
      $("#confirmDelete").modal("show");
      $("#txtConfirm").text("Yakin, Hapus Data Slider ?");
    }

    function deleteSlider(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/admin/deleteSlider') ?>",
        data : {id:id},
        success : function(response){
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbSlider();
            cancelAddSlider();
            $("#modalColor").addClass("bg-gradient-success");
            $("#txtNotif").text("Data Berhasil Dihapus!");
            $("#notif").modal('show');

            setTimeout (function(){
              $("#notif").modal('hide');
              $("#modalColor").removeClass("bg-gradient-success");
              $("#txtNotif").text("");
            },3000)
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            $("#modalColor").addClass("bg-gradient-warning");
            $("#txtNotif").text("Data Gagal Dihapus!");
            $("#notif").modal('show');

            setTimeout (function(){
              $("#notif").modal('hide');
              $("#modalColor").removeClass("bg-gradient-warning");
              $("#txtNotif").text("");
            },3000)
          }
        }
      });
    }

    function editSlider(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/admin/getSliderById'); ?>",
        dataType : "JSON",
        data : {id:id},
        success : function(response){
          $("#statinput").val('update')
          $("#id_slider").val(response[0].id_slider);
          $("#gambar").val(response[0].gambar);
          $("#nm_slider").val(response[0].nm_slider);
          $("#urutan").val(response[0].urutan);
          $("#keterangan").val(response[0].keterangan);
          $("#status").val(response[0].status);

          $("#frmTbSlider").hide(500);
          $("#frmAddSlider").show(1000);
          $("#btnAddSlider").hide();
          $("#btnCancel").show(1001);
          $("#btnUpdate").show(1001);
        }
      });
    }

     </script>


</body>

</html>