<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="IHBS">
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
  <link href="<?php echo base_url() ?>/assets/admin/vendor/select-2/select2.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/vendor/select-master/dist/css/bootstrap-select.css">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugin/ckeditor/styles.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugin/datatables/jquery.dataTables_themeroller.css">
</head>

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
            <a class="nav-link" href="<?php echo base_url('hris/main/') ?>">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a href="#data-master" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Master Data</a>
            <ul class="collapse list-inline" id="data-master">
              <li>
                <li>
                    <a href="<?php echo base_url('hris/main/position_data') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Master Position</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/main/division_data'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Master Division</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/main/job_title_data'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Job Title</a>
                </li>
               
            </ul>
          </li>
          <li class="nav-item">
            <a href="#data-pengguna" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i>Payroll Employee</a>
            <ul class="collapse list-inline" id="data-pengguna">
                <li>
                    <a href="<?php echo base_url('hris/main/payroll_data'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Payroll Employee</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/main/renumerasi_data'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Renumerasi Salary</a>
                </li>
               
            </ul>
          </li>
          <li class="nav-item">
            <a href="#data-akademik" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Master Employee</a>
            <ul class="collapse list-inline" id="data-akademik">
                <li>
                    <a href="<?php echo base_url('hris/main/employee_data') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>View Employee</a>
                </li>
                <!-- <li>
                    <a href="<?php echo base_url('hris/main/data_mapel'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Approval Employee</a>
                </li> -->
               
            </ul>
          </li>
         <!--  <li class="nav-item">
            <a href="#data-absensi" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Data Absensi</a>
            <ul class="collapse list-inline" id="data-absensi">
                <li>
                    <a href="<?php echo base_url('hris/main/data_absensi_guru') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Absensi Guru</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/main/data_absensi_siswa'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Absensi Siswa</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/main/data_rekap_absensi_siswa'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Rekap Absensi</a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#data-jurnal" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Data Jurnal KBM</a>
            <ul class="collapse list-inline" id="data-jurnal">
                <li>
                    <a href="<?php echo base_url('hris/main/input_jurnal_kbm') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Input Jurnal KBM</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/main/laporan_jurnal_kbm'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Laporan Jurnal KBM</a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#data-materi" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Materi & Tugas</a>
            <ul class="collapse list-inline" id="data-materi">
                <li>
                    <a href="<?php echo base_url('hris/main/data_materi') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Materi</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/main/data_cbt'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>CBT</a>
                </li>
            </ul> -->
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url('hris/main')?>"><i class="fa fa-home"></i>&nbsp;</a>
        <?php echo $parent_title.$child_title ?> <span id="textForm"></span>
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
    <div class="header pb-8 pt-5 pt-md-8" style="min-height: 300px; background-image: url(<?php echo base_url() ?>assets/admin/img/theme/benner.jpg); background-size: cover; background-position: center top;">
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
          <style media="screen" type="text/css">
+     th.biodata {
+       max-width: 120px;
+       white-space: nowrap;
+       text-overflow: ellipsis;
+     }
+    </style>
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
  <script src="<?php echo base_url(); ?>/assets/home/js/argon.js?v=1.0.1"></script>
  <script src="<?php echo base_url(); ?>/assets/home/js/wow.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/admin/vendor/select-2/select2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugin/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugin/datatables/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugin/ckeditor/ckeditor.js"></script>
  <!-- <script src="<?php echo base_url(); ?>/assets/plugin/ckeditor5/ckeditor.js"></script> -->
  <script src="<?php echo base_url(); ?>/assets/admin/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/plugin/input-mask/inputmask.js"></script>
  <script src="<?php echo base_url(); ?>/assets/admin/vendor/select-master/dist/js/bootstrap-select.js"></script>


  <script>
     function alertSuccessSave() {
      $("#modalColor").addClass("bg-gradient-success");
      $("#txtNotif").text("Data Berhasil Disimpan!");
      $("#notif").modal('show');

      setTimeout (function(){
        $("#notif").modal('hide');
        $("#modalColor").removeClass("bg-gradient-success");
        $("#txtNotif").text("");
      },3000)
    }

  
    function alertSuccessUpdate() {
      $("#modalColor").addClass("bg-gradient-success");
      $("#txtNotif").text("Data Berhasil Diperbarui!");
      $("#notif").modal('show');

      setTimeout (function(){
        $("#notif").modal('hide');
        $("#modalColor").removeClass("bg-gradient-success");
        $("#txtNotif").text("");
      },3000)
    }

    function alertFailedUpdate() {
      $("#modalColor").addClass("bg-gradient-warning");
      $("#txtNotif").text("Data Gagal Diperbarui!");
      $("#notif").modal('show');

      setTimeout (function(){
        $("#notif").modal('hide');
        $("#modalColor").removeClass("bg-gradient-warning");
        $("#txtNotif").text("");
      },3000)
    }


    function alertFailedSave() {
      $("#modalColor").addClass("bg-gradient-warning");
      $("#txtNotif").text("Data Gagal Disimpan!");
      $("#notif").modal('show');

      setTimeout (function(){
        $("#notif").modal('hide');
        $("#modalColor").removeClass("bg-gradient-warning");
        $("#txtNotif").text("");
      },3000)
    }

   function alertEmptyImportanInput(){
      $("#modalColor").addClass("bg-gradient-warning");
      $("#txtNotif").text("Kolom Yang Bertanda (*) Harus Diisi !");
      $("#notif").modal('show');

      setTimeout (function(){
        $("#notif").modal('hide');
        $("#modalColor").removeClass("bg-gradient-warning");
        $("#txtNotif").text("");
      },3000)
    }

  
    function alertSuccessDelete() {
      $("#modalColor").addClass("bg-gradient-success");
      $("#txtNotif").text("Data Berhasil Dihapus!");
      $("#notif").modal('show');

      setTimeout (function(){
        $("#notif").modal('hide');
        $("#modalColor").removeClass("bg-gradient-warning");
        $("#txtNotif").text("");
      },3000)
    }

    function alertFailedDelete() {
      $("#modalColor").addClass("bg-gradient-warning");
      $("#txtNotif").text("Data Gagal Dihapus!");
      $("#notif").modal('show');

      setTimeout (function(){
        $("#notif").modal('hide');
        $("#modalColor").removeClass("bg-gradient-warning");
        $("#txtNotif").text("");
      },3000)
    }

    function confirmDelete(param,id, id2){
      $("#btnYes").attr('onclick','delete'+param+'("'+id+'","'+id2+'")');
      $("#confirmDelete").modal("show");
      $("#txtConfirm").text("Yakin, Hapus Daftar "+param+" ?");
    }

    function alertEmptyImportanInput(){
      $("#modalColor").addClass("bg-gradient-warning");
      $("#txtNotif").text("Kolom Yang Bertanda (*) Harus Diisi !");
      $("#notif").modal('show');

      setTimeout (function(){
        $("#notif").modal('hide');
        $("#modalColor").removeClass("bg-gradient-warning");
        $("#txtNotif").text("");
      },3000)
    }

     function cancelAdd(param){
      $("#frmTbEmployee").show(1000);
       $("#btnImport").hide();
        $("#frmImportEmployee").hide();
          $("#frmAddEmployee").hide();
          $("#view_profile_employe").hide();
          // $("#data-jabatan-tambahan").hide();
    /*  $("#frmImport"+param).hide(500);
      $("#btnAdd"+param).show();
      $("#btnPrint"+param).show();
      $("#btnImport"+param).show();*/
     
      $("#btnCancel").hide();
      $("#btnSave").hide();
      $("#btnUpdate").hide();
      $("#btnCancel").text("Cancel");
      $("#btnCancelImport").hide();
    }

   function importEmployee(){
      $("#frmImportEmployee").show(500);
      $("#frmAddEmployee").hide();
      $("#frmTbEmployee").hide();
      $("#view_profile_employe").hide();
      $("#btnSave").hide();
      $("#btnCancel").hide();
      $("#btnImport").show();
      $("#btnCancelImport").show();

    }

    function inputEmployee(){
/*      $("input").val("");*/
      $("select").val("");

      $("select").val("").trigger('change.select2');
     /* $("#input_gender").val(response[0][0].gender).prop('t', 'disabled');*/
     /* $("checkbox").prop('checked', false);*/
      $("#frmAddEmployee").show(500);
      $("#frmImportEmployee").hide();
      $("#frmTbEmployee").hide();
      $("#btnCancel").show();
      $("#btnSave").show();
      $("#btnImport").hide();
      $("#btnCancelImport").hide();
      $("#view_profile_employe").hide();
    }

     function importDataUniv(){
      $("#importDataUniv").hide();
      $("#frmTbEmployee").hide();
      $("#btnSave").hide();
      $("#btnCancel").hide();
      $("#btnImport").show();
    }
/*
    function Profileemploye(){
     
    }
*/
    

    $(function () {
      if ($("#tbEmployee").length) {
        dataTbEmployee();
      }

      if ($("#tbDataDivision").length) {
        dataTbDivision();
      } 

      if ($("#tbDataJbtitle").length) {
        dataTbJbtitle();
      }

       if ($("#tbDataPosition").length) {
        dataTbPosition()
      }  

      if ($("#tbDataRenum").length) {
        dataTbRenumerasi()
      }

      if ($("#idselectStatusKrywan").length) {
        selectStatusKrywan();
      }

      if ($("#idselectCountries").length) {
        selectCountries();
      }


      if ($("#idselectJbtn").length) {
        selectJbtn();
      }   
      
      if ($("#idselectJbtn2").length) {
        selectJbtn2();
      }   

      if ($("#input_idselectJobTitle").length) {
        selectJobTitle();
      }  
      if ($("#input_idselectJobTitle2").length) {
        selectJobTitle2();
      }  

      if ($("#idselectCbg").length) {
        selectCbg();
      }
      if ($("#input_idselectDivisi").length) {
        selectDivisi();
      }
      

      if ($("#input_idselectPndkkanterakhir").length) {
        selectPendidikanTerakhir();
      }

      if ($("#input_idselectUniversitas").length) {
        selectUniversitas();
      }

      if ($("#input_idselectJurusan").length) {
        selectJurusan();
      }

      if ($("#input_idselectFakultas").length) {
        selectFakultas();
      }
       if ($("#input_idselectProvinsi").length) {
        selectProvinsi();
      } 

        if ($("#input_employee").length) {
        selectEmployeenip();
      } 

      

    });

     function changeData(param) {
      if (param=="ds") {
        $("#do").removeClass("show");
        $("#ds").addClass("show");
      }else if(param=="do"){
        $("#ds").removeClass("show");
        $("#do").addClass("show");
      }else if(param=="ds1"){
        $("#do1").removeClass("show");
        $("#do2").removeClass("show");
        $("#do3").removeClass("show");
        $("#ds1").addClass("show");
      }else if (param=="do1") {
        $("#ds1").removeClass("show");
        $("#do2").removeClass("show");
        $("#do3").removeClass("show");
        $("#do1").addClass("show");
      }else if (param=="do2") {
        $("#do1").removeClass("show"); 
        $("#ds1").removeClass("show");
        $("#do3").removeClass("show");
        $("#do2").addClass("show");
      }else if (param=="do3") {
        $("#do1").removeClass("show"); 
        $("#ds1").removeClass("show");
        $("#do2").removeClass("show");
        $("#do3").addClass("show");
      }
    }
    function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
          $('#PrevPhoto_pgwi').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
        }
      };

      function readURL2(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
          $('#Prevfile_ktp').attr('src', e.target.result);

        }

        reader.readAsDataURL(input.files[0]);
        }
      };

    function readURL3(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
          $('#Prevfile_kk').attr('src', e.target.result);
      
        }

        reader.readAsDataURL(input.files[0]);
        }
      };

   function dataTbEmployee(){
    $('#tbEmployee').dataTable().fnDestroy();
    $('#tbEmployee').dataTable({
      
    "pageLength" : 50,
      "responsive" : true,
      "autoWidth" : false,
      "ordering" : true,
      "bProcessing" : false,
      "bServerSide" : true,
      "bJQueryUI" : true,
      "lengthMenu":   [ 25, 50, 75, 100 ],
      "sPaginationType" : "full_numbers",
      "sAjaxSource" : "<?php echo base_url(); ?>hris/main/getEmployee/",
    /*    "aoColumnDefs": [
            { "sWidth": "10%", "aTargets": [ -1 ] }
        ],*/
      
     "columns" : [
              

                    {"data" : "photo_pegawai",  "name" :"photo_pegawai"},
                    {"data" : "photo_pegawai",  "name" :"tgl_lahir"},            
                    {"data" : "biodata_employee", "name" : "nip"},
                    {"data" : "pangkat_jabatan", "name" : "nama"},
                    {"data" : "pangkat_jabatan", "name" : "nm_jbtn"}           

    
                  ],
                
  "columnDefs":   [
                  { className: "no", "targets": [0,0] },
                  { className: "photo", "targets": [0,1], width: 100},
                  { className: "biodata", "targets": [0,2] },
                  { className: "pangkat", "targets": [0,3] },
                  { className: "action", "targets": [0,4]},                    
                ],

        "fnServerData" : function(sSource,aoData,fnCallback){
            // aoData.push({"name":"kd_kls","value":kd_kls});
            // aoData.push({"name":"unit","value":unit});
            $.ajax({
              "type"      : "POST",
              "dataType"  : "JSON",
              "url"       : sSource,
              "data"      : aoData,
              "success"   : fnCallback
            });
          },       
        "fixedColumns": true,
           "fnServerData" : function(sSource,aoData,fnCallback){
    
          $.ajax({
            "type"      : "POST",
            "dataType"  : "JSON",
            "url"       : sSource,
            "data"      : aoData,
            "success"   : fnCallback

          });

        },

        "fnRowCallback" : function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
              
            $("td:eq(0)",nRow).text(++iDisplayIndex);
            if(!aData['photo_pegawai']){
               $("td:eq(1)",nRow).html("<img src='<?php echo base_url();?>assets/file_karyawan/images/user.png' class ='photoimg'><div class ='overlay'><a href='#' class='icon' onclick=Profileemployedetail('"+aData["kd_karyawan"]+"','"+aData["nip"]+"') title='User Profile'><i class='fa fa-user'><br>profile</i></a></div>");

            }else{
               $("td:eq(1)",nRow).html("<img src='<?php echo base_url();?>assets/file_karyawan/images/"+aData['photo_pegawai']+"'  class='photoimg'> <div class= 'overlay'><a href='#' class='icon' onclick=Profileemployedetail('"+aData["kd_karyawan"]+"','"+aData["nip"]+"') title='User Profile'><i class='fa fa-user'><br>profile</br></i></a></div>");

              }
          
            $("td:eq(4)",nRow).html("<button class='btn btn-info btn-sm' onclick=editEmployee('"+aData["kd_karyawan"]+"','"+aData["nip"]+"') title='Edit'><i class='fa fa-list'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Employee','"+aData["kd_karyawan"]+"','"+aData["nip"]+"') title='Delete'><i class='fa fa-trash'></i></button>");
 
          }

    });
  }

   $('#inputDataEmployee').submit(function(e){
    e.preventDefault();
    var kd_karyawan  = $("#kd_karyawan").val();
    var nama         = $("#input_nama").val();
    var nm_pnggilan  = $("#input_namap").val();
    var no_kk        = $("#input_no_kk").val();
    var no_ktp       = $("#input_no_ktp").val();
    var tempat_lahir = $("#input_tempat_lahir").val();
    var tgl_lahir    = $("#input_tanggal_lahir").val();
    var status_nikah = $("#input_status_nikah").val();
    var gender       = $("#input_gender").val();
    var agama        = $("#input_agama").val();
    var id_country   = $("#idselectCountries").val();
    var id_prov      = $("#input_idselectProvinsi").val();
    var id_kab       = $("#input_idselectKabupaten").val();
    var id_kec       = $("#input_idselectKecamatan").val();
    var id_kel       = $("#input_idselectKelurahan").val();
    var alamat       = $("#input_alamat").val();
    var rt           = $("#input_rt").val();
    var rw           = $("#input_rw").val();
    var kd_pos       = $("#input_kd_pos").val();
    var gol_darah    = $("#input_gol_darah").val();
    var id_status_karyawan = $("#idselectStatusKrywan").val();
    var id_jabatan   = $("#idselectJbtn").val();
    var id_job_title = $("#input_idselectJobTitle").val();
    var id_cbg       = $("#idselectCbg").val();
    var id_divisi    = $("#input_idselectDivisi").val();     
    var mulai_brgbg  = $("#input_mulai_brgbg").val();
    var no_tlp       = $("#input_no_tlp").val();
    var nmr_darurat1 = $("#input_nmr_darurat1").val();
    var nm_nmr_darurat1 = $("#input_nm_nmr_darurat1").val();
    var id_jnjng_pddk= $("#input_idselectPndkkanterakhir").val();
    var thn_lulus    = $("#input_thn_lulus").val();
    var id_college_krywn= $("#input_idselectUniversitas").val();
    var id_jurusan_krywn = $("#input_idselectJurusan").val();
    var id_fakultas_krywn = $("#input_idselectFakultas").val();
    var ipk          = $("#input_ipk").val();
    var password     = $("#password-field").val();
    var hak_akses     = $("#customCheck28").val();
    var hak_akses     = $("#customCheck29").val();
    

    if (!nama||!nm_pnggilan||!no_kk||!no_ktp||!tempat_lahir||!tgl_lahir||!status_nikah||!gender||!agama||!id_country||!id_prov||!id_kab||!id_kec||!id_kel||!alamat||!rt||!rw||!kd_pos||!gol_darah||!id_status_karyawan||!id_jabatan||!id_job_title||!id_cbg||!id_divisi||!mulai_brgbg||!no_tlp||!nmr_darurat1||!nm_nmr_darurat1||!id_jnjng_pddk||!thn_lulus||!id_college_krywn||!id_jurusan_krywn||!id_fakultas_krywn||!ipk||!password||!hak_akses){
      alertEmptyImportanInput();

    }else{
      if (kd_karyawan == ''){

    $.ajax({
      type:  "POST",
      url :  "<?php echo base_url('hris/main/inputDataEmployee');?>",
      data:  new FormData(this),
      processData:false,
      contentType:false,
      cache:false,
      async:true,
      success: function(response){
        if (jQuery.trim(response)==="success") {
          dataTbEmployee();
          cancelAdd('Employee');
          alertSuccessSave();
        }else if(jQuery.trim(response)==="failed"){
          alertFailedSave();
        }
      }

    });
  }else{
    $.ajax({
      url:"<?php echo base_url('hris/main/updateDataEmploye');?>",
      type:"post",
      data:new FormData(this),
      processData:false,
      contentType:false,
      cache:false,
      async:true,
      success: function(response){
        if (jQuery.trim(response)==="success") {
          dataTbEmployee();
          cancelAdd('Employee');
          alertSuccessUpdate();
        }else if(jQuery.trim(response)==="failed"){
          alertFailedSave();
        }
      }

    });
  
  }
    }
   });


    function editEmployee(id,nip) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/getEmployeeById'); ?>",
        data : {id:id,nip:nip},
        dataType : "JSON",
        success : function(response) {

          $("#kd_karyawan").val(response[0][0].kd_karyawan);
          $("#input_nip").val(response[0][0].nip);
          $("#input_nama").val(response[0][0].nama);
          $("#input_namap").val(response[0][0].nm_pnggilan);
          $("#input_no_kk").val(response[0][0].no_kk);
          $("#input_no_ktp").val(response[0][0].no_ktp);
          $("#input_tempat_lahir").val(response[0][0].tempat_lahir);
          $("#input_tanggal_lahir").val(response[0][0].tgl_lahir);
          $("#input_status_nikah").val(response[0][0].status_nikah);
          $("#input_gender").val(response[0][0].gender).prop('disabled', 'disabled');//dikirim tapi tidak dipost tgl 16-12-19/ 
          $("#input_agama").val(response[0][0].agama);
          $("#input_jml_anak").val(response[0][0].jml_anak);
          $("#idselectCountries").val(response[0][0].id_country).trigger("change.select2");
          $("#input_idselectProvinsi").val(response[0][0].id_prov).trigger("change.select2");
          setTimeout (function(){
          $("#input_idselectKabupaten").val(response[0][0].id_kab).trigger("change.select2");},100);
          setTimeout (function(){
          $("#input_idselectKecamatan").val(response[0][0].id_kec).trigger("change.select2");},200);
          setTimeout(function(){
          $("#input_idselectKelurahan").val(response[0][0].id_kel).trigger("change.select2");},400);
          $("#input_alamat").val(response[0][0].alamat);
          $("#input_rt").val(response[0][0].rt);
          $("#input_rw").val(response[0][0].rw);
          $("#input_kd_pos").val(response[0][0].kd_pos);
          $("#input_gol_darah").val(response[0][0].gol_darah);
          $("input[name='sts_eng[]'][value='"+response[0][0].bhs_eng+"']").prop("checked",true);  
          $("input[name='sts_brs[]'][value='"+response[0][0].serti_eng+"']").prop("checked",true);
          $("input[name='sts_arb[]'][value='"+response[0][0].bhs_arab+"']").prop("checked",true); 
          $("input[name='sts_brs_arb[]'][value='"+response[0][0].serti_arab+"']").prop("checked",true);  
          $("#idselectStatusKrywan").val(response[0][0].id_status_karyawan);
          $("#idselectJbtn").val(response[0][0].id_jabatan);
          $("#input_idselectJobTitle").val(response[0][0].id_job_title);
          $("#idselectCbg").val(response[0][0].id_cbg);
          setTimeout(function(){
          $("#input_idselectDivisi").val(response[0][0].id_divisi).trigger("change.select2");},100);     
          $("input[name='seragam[]'][value='"+response[0][0].seragam+"']").prop("checked",true);
          $("#input_mulai_brgbg").val(response[0][0].mulai_brgbg);
          $("#input_email").val(response[0][0].email);
          $("#input_no_tlp").val(response[0][0].no_tlp);
          $("#input_nmr_darurat1").val(response[0][0].nmr_darurat1);
          $("#input_nm_nmr_darurat1").val(response[0][0].nm_nmr_darurat1);
          $("#input_nm_nmr_darurat1").val(response[0][0].nm_nmr_darurat1);
          setTimeout(function(){
          $("#input_idselectPndkkanterakhir").val(response[0][0].id_jnjng_pddk).trigger("change.select2");},100);
           $("#input_thn_lulus").val(response[0][0].thn_lulus);
           setTimeout(function(){
          $("#input_idselectUniversitas").val(response[0][0].id_jnjng_pddk).trigger("change.select2");},100);
          $("#input_idselectJurusan").val(response[0][0].id_jurusan_krywn).trigger("change.select2");
          $("#input_idselectFakultas").val(response[0][0].id_fakultas_krywn).trigger("change.select2");
          $("#input_ipk").val(response[0][0].ipk);
          $("input[name='tilawah[]'][value='"+response[0][0].tilawah+"']").prop("checked",true);
          $("#input_p_kajian").val(response[0][0].p_kajian);
          $("input[name='komputer[]'][value='"+response[0][0].komputer+"']").prop("checked",true);
          $("#input_pelatihan").val(response[0][0].pelatihan);
          $("#input_hfln_quran").val(response[0][0].hfln_quran);
          $("input[name='aktifitas_kajian[]'][value='"+response[0][0].aktifitas_kajian+"']").prop("checked",true);

           if (!response[0][0].photo_pegawai) {
            $("#PrevPhoto_pgwi").attr("src","<?php echo base_url() ?>assets/file_karyawan/images/user.png")
          }else{
            $("#PrevPhoto_pgwi").attr("src","<?php echo base_url() ?>assets/file_karyawan/images/"+response[0][0].photo_pegawai+"")
          }

           if (!response[0][0].file_ktp) {
            $("#Prevfile_ktp").attr("src","<?php echo base_url() ?>assets/file_karyawan/images/KTP elektronik.jpg")
          }else{
            $("#Prevfile_ktp").attr("src","<?php echo base_url() ?>assets/file_karyawan/images/"+response[0][0].file_ktp+"")
          } 

          if (!response[0][0].file_kk) {
            $("#Prevfile_kk").attr("src","<?php echo base_url() ?>assets/file_karyawan/images/kk2.png")
          }else{
            $("#Prevfile_kk").attr("src","<?php echo base_url() ?>assets/file_karyawan/images/"+response[0][0].file_kk+"")
          }
          var hak_akses = response[1][0].hak_akses;
          var arr_hak_akses = hak_akses.split(',')
          $.each(arr_hak_akses, function(index, value) { 
            $("input[name='hak_akses[]'][value='"+value+"']").prop("checked",true);
          });

       /*    $("#password-field").val(response[1][0].password);*/
           $("#input_level").val(response[1][0].level);

      $("#frmAddEmployee").show(500);
      $("#frmImportEmployee").hide();
      $("#frmTbEmployee").hide();
      $("#btnCancel").show();
      $("#btnSave").show();
      $("#btnImport").hide();
      $("#btnCancelImport").hide();
      $("#view_profile_employe").hide();
         }
       });
    }

    function Profileemployedetail(id,nip){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/getdetailEmployee')?>",
        data : {id:id,nip:nip},
        dataType :"JSON",
        success : function (response){

      $("#view_profile_employe").show(500);
      $("#frmAddEmployee").hide();
      $("#frmImportEmployee").hide();
      $("#frmTbEmployee").hide();
      $("#btnCancel").hide();
      $("#btnSave").hide();
      $("#btnImport").hide();
      $("#btnCancelImport").hide();

      $("#username-detail").text(response[1][0].username);
      $("#nama-detail").text(response[0][0].nama);
      $("#h3nama-detail").text(response[0][0].nama);
      $("#namap-detail").text(response[0][0].nm_pnggilan);
      $("#nip-detail").text(response[0][0].nip);
      $("#email-detail").text(response[0][0].email);
      $("#notlp-detail").text(response[0][0].no_tlp);
      $("#no_kk-detail").text(response[0][0].no_kk);
      $("#no_ktp-detail").text(response[0][0].no_ktp);
      $("#tempat_lahir-detail").text(response[0][0].tempat_lahir);
      $("#tanggal_lahir-detail").text(response[0][0].tgl_lahir);
      $("#gender-detail").text(response[0][0].gender);
      $("#agama-detail").text(response[0][0].agama);
      $("#gol_darah-detail").text(response[0][0].gol_darah);
      $("#status_nikah-detail").text(response[0][0].status_nikah);
      $("#jml_anak").val(response[0][0].jml_anak);
      $("#Countries-detail").text(response[0][0].country_name);
      $("#alamat-detail").html(response[0][0].alamat+"<br> Provinsi : "+response[0][0].namaProv+"<br> Kabupaten : "+response[0][0].namaKab+"<br> Kecamatan : "+response[0][0].namaKec+"<br> Kelurahan :"+response[0][0].namaKel+ "<br> RT : "+response[0][0].rt+"<br> RW :" + response[0][0].rw+"<br> Kodepos : "+response[0][0].kd_pos);
     
     
      $("#kd_pos-detail").text(response[0][0].kd_pos);
      $("bhs_eng").val(response[0][0].bhs_eng);  
      $("serti_eng").val(response[0][0].serti_eng);
      $("bjs_arab").val(response[0][0].bhs_arab); 
      $("sert_arab").val(response[0][0].serti_arab);  
      $("#StatusKrywan-detail").text(response[0][0].nm_status_karyawan);
      $("#Jbtn-detail").text(response[0][0].nm_jbtn);
      $("#JobTitle-detail").text(response[0][0].job_title);
      $("#cbg-detail").text(response[0][0].nm_cbg);
      $("#divisi-detail").text(response[0][0].nm_divisi);     
      $("#mulai_brgbg-detail").html("<b>Dari</b> &nbsp;"+response[0][0].mulai_brgbg+"<br><b>Sampai</b> <?php echo date("Y-m-d")?>&nbsp;<br> <b>Masa Kerja</b> :  ("+response[0][0].jml_brgb+" thn)");
      $("#nmr_darurat1-detail").html(response[0][0].nmr_darurat1+"<br> <b>Nama</b> : "+response[0][0].nm_nmr_darurat1); 
      $("#riwayatpend-detail").html(response[0][0].nm_jnjng_pddk+"<br><b>Lulus Tahun</b> : " +response[0][0].thn_lulus+"<br><b>Universitas</b> : " +response[0][0].nm_college_krywn+"<br><b>Fakultas</b> : "+response[0][0].nm_fakultas_krywn+"<br><b>Jurusan</b> : " +response[0][0].nm_jurusan_krywn+"<br><b>IPK</b> : "+response[0][0].ipk);
        $("#keagamaan-detail").html("<b>Hafalan Quran</b> : " +response[0][0].hfln_quran+"<br><b>Bahasa Arab</b> : " +response[0][0].bhs_arab+ "&nbsp;/&nbsp;" +response[0][0].serti_arab);

        $("#bahasaengris-detail").html("<br><b>Bahasa Inggris</b> : "+response[0][0].bhs_eng+ "&nbsp;/&nbsp;" +response[0][0].serti_eng);
        
     if (!response[0][0].photo_pegawai) {
          $("#img-detail").attr("src","<?php echo base_url() ?>assets/file_karyawan/images/user.png");
          }else{
            $("#img-detail").attr("src","<?php echo base_url() ?>assets/file_karyawan/images/"+response[0][0].photo_pegawai+"");
          }
        }

      });
       dataTmbhJbtnEmployee(nip,id="")

    }

    function deleteEmployee(id,id2){
    $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/deleteEmployee') ?>",
        data : {id:id, id2:id2},
        success : function(response) {
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbEmployee();
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            alertFailedDelete();
          }
        }
      });
    }
   
   $('#importDataEmployee').submit(function(e){
      e.preventDefault();
      $.ajax({
        url:"<?php echo base_url('hris/main/importDataEmployee');?>",
        type:"post",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
            if (jQuery.trim(response)==="success") {
              cancelAdd('Employee');
              dataTbEmployee();
              alertSuccessSave();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
      });
    });


    $('#tmbhJbtnEmployee').submit(function(e){

      var id_jabatan_tambahan = $("#input-id_jabatan_tambahan").val();
      var nip = $("#nip-detail").text()
      var form_data = new FormData(this);
      form_data.append('nip',nip);
      e.preventDefault();
      if(id_jabatan_tambahan ==''){
      $.ajax({
        type:"post",
        url:"<?php echo base_url('hris/main/inputJabatanEmployee');?>",
        data:form_data,
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
          if(jQuery.trim(response)==="success"){
                alertSuccessSave();
              $("#form-tambah-jabatan").modal('hide')  
              dataTmbhJbtnEmployee(nip,id='') 
          }else if(jQuery.trim(response)==="failed"){
            alertFailedSave();
          }
        } 
      });
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('hris/main/updateTmbhJbtnEmployee')?>",
          data : form_data,
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success:function(response){
             if(jQuery.trim(response)==="success"){
                alertSuccessUpdate();
                dataTmbhJbtnEmployee(nip,id='')
                setTimeout(function(){
              $("#form-tambah-jabatan").modal('hide');},500);
             }else if(jQuery.trim(response)==="failed"){
                alertFailedUpdate()
             } 
          }

        });
      }
    });


    function dataTmbhJbtnEmployee(nip,id){
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url('hris/main/getTmbhJbtnEmployee')?>",
      data : {nip:nip},
      dataType :"JSON",
      success : function(response){
        $("#data-jabatan-tambahan > tbody").empty(); 
         var no=1;
         $.each(response, function(Index,Value){
          $("#data-jabatan-tambahan > tbody:last-child").append("<tr>"+
              "<td align='center'>"+ no ++ +"</td>"+
              "<td align='center'>"+Value.nm_jbtn+"</td>"+ 
              "<td align='center'>"+Value.job_title+"</td>"+ 
              "<td align='center'>"+Value.file_sk+"</td>"+ 
              "<td align='center'>"+Value.tgl_jabatan+"</td>"+
              "<td align='center'>"+Value.tgl_berakhir+"</td>"+
              "<td><button class='btn btn-warning btn-sm' onclick=editTmbhJbtnEmployee('"+Value.id_jabatan_tambahan+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Jabatan','"+Value.id_jabatan_tambahan+"',1) title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
         });
      }

    });
  }

  function editTmbhJbtnEmployee(id){
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url('hris/main/getTmbhJbtnEmployee') ?>",
      data : {id:id},
      dataType : "JSON",
      success:function(response){
          $("#form-tambah-jabatan").modal('show');  
          $("#idselectJbtn2").val(response[0].id_jabatan);
          $("#sfile_sk").text(response[0].file_sk);
          $("#input_idselectJobTitle2").val(response[0].id_job_title);
          $("#tgl_jabatan").val(response[0].tgl_jabatan);
          $("#tgl_berakhir").val(response[0].tgl_berakhir);
          $("#input-id_jabatan_tambahan").val(response[0].id_jabatan_tambahan);
      }
    })
  }

  function deleteJabatan(id,id2){
    var nip = $("#nip-detail").text()
        $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/deleteTmbhJbtnEmployee') ?>",
        data : {id:id, id2:id2},
        success : function(response){
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTmbhJbtnEmployee(nip,id='')
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            alertFailedDelete();
          }
        }
      });
    }

  function dataTbPosition(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/getDataPosition') ?>",
        dataType : "JSON",
        success : function(response) {
          $("#tbDataPosition > tbody").empty(); var no=1; i=1;
          $.each(response, function (Index, Value) {
            $("#tbDataPosition > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td align='center'>"+Value.id_jabatan+"</td>"+
                 "<td align='center'>"+Value.nm_jbtn+"</td>"+
             /*   "<td align='center'><label class='custom-toggle'><input type='checkbox' "+ (Value.status == 'aktif' ? 'checked' : '') +" onchange='changeStatusUnit("+Value.kd_unit+")'><span class='custom-toggle-slider rounded-circle'></span></label></td>"+*/
                "<td><button class='btn btn-warning btn-sm' onclick=editJabatan('"+Value.id_jabatan+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Jabatan','"+Value.id_jabatan+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          });
        }
      });
    } 

    function dataTbJbtitle(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/getDataJbtitle') ?>",
        dataType : "JSON",
        success : function(response) {
          $("#tbDataJbtitle > tbody").empty(); var no=1; i=1;
          $.each(response, function (Index, Value) {
            $("#tbDataJbtitle > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td align='center'>"+Value.id_job_title+"</td>"+
                 "<td align='center'>"+Value.job_title+"</td>"+
                 "<td align='center'>"+Value.nm_jbtn+"</td>"+
             /*   "<td align='center'><label class='custom-toggle'><input type='checkbox' "+ (Value.status == 'aktif' ? 'checked' : '') +" onchange='changeStatusUnit("+Value.kd_unit+")'><span class='custom-toggle-slider rounded-circle'></span></label></td>"+*/
                "<td><button class='btn btn-warning btn-sm' onclick=editJabatan('"+Value.id_job_title+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Jabatan','"+Value.id_job_title+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          });
        }
      });
    }
    
      function dataTbDivision(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/getDataDivision') ?>",
        dataType : "JSON",
        success : function(response) {
          $("#tbDataDivision > tbody").empty(); var no=1; 
          $.each(response, function (Index, Value) {
            $("#tbDataDivision > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td align='center'>"+Value.id_divisi+"</td>"+
                 "<td align='center'>"+Value.nm_divisi+"</td>"+
             /*   "<td align='center'><label class='custom-toggle'><input type='checkbox' "+ (Value.status == 'aktif' ? 'checked' : '') +" onchange='changeStatusUnit("+Value.kd_unit+")'><span class='custom-toggle-slider rounded-circle'></span></label></td>"+*/
                "<td><button class='btn btn-warning btn-sm' onclick=editDivisi('"+Value.id_divisi+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Divisi','"+Value.id_divisi+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      })
    }
     

      function  dataTbRenumerasi(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/getDataRenumerasi') ?>",
        dataType : "JSON",
        success : function(response) {
          $("#tbDataRenum > tbody").empty(); var no=1; 
          $.each(response, function (Index, Value) {
            $("#tbDataRenum > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                 "<td align='fixed-left'>"+Value.nm_jnjng_pddk+"</td>"+
                 "<td align='fixed-left'>"+Value.golongan+"</td>"+
                 "<td align='fixed-left'>"+Value.kategori+"</td>"+
                 "<td align='fixed-left'>"+Value.masa_kerjaMin+"-"+Value.masa_kerjaMax+"</td>"+
                 "<td align='fixed-left'>"+Value.gaji_pokok+"</td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editDivisi('"+Value.id_renumGaji+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Divisi','"+Value.id_renumGaji+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      })
    }
     

    $('#importDataUniv').submit(function(e){
      e.preventDefault();
      $.ajax({
        url:"<?php echo base_url('hris/main/importDataUniv');?>",
        type:"post",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
              if (jQuery.trim(response)==="success"){
                cancelAdd('Employee');
                dataTbEmployee();
                alertSuccessSave();
              }else if(jQuery.trim(response)==="failed"){
                alertFailedSave();
              }
           }
      });
    });

      function selectCountries() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetCountries'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#idselectCountries").empty();
          $("#idselectCountries").append(
              "<option value ='' selected>-- Pilih Negara --</option>"
            );
          $.each(response, function(Index,Value){
            $("#idselectCountries").append(
              "<option value='"+Value.id_country+"'>"+Value.country_name+"</option>"
            );
          })
        }
      });
    }

    $("#idselectCountries").select2({
      placeholder: "Pilih Negara",
    });

     function selectStatusKrywan() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetStatusKrywan'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#idselectStatusKrywan").empty();
          $("#idselectStatusKrywan").append(
              "<option value ='' selected>-- Pilih Status --</option>"
            );
          $.each(response, function(Index,Value){
            $("#idselectStatusKrywan").append(
              "<option value='"+Value.id_status_karyawan+"'>"+Value.nm_status_karyawan+"</option>"
            );
          })
        }
      });
    }

/*
    $("#idselectStatusKrywan").select2({
      placeholder: 'Pilih Status Karyawan',
    });
*/

    function selectJbtn() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetJbtn'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#idselectJbtn").empty();
          $("#idselectJbtn").append(
              "<option value ='' selected>-- Pilih Jabatan --</option>"
            );
          $.each(response, function(Index,Value){
            $("#idselectJbtn").append(
              "<option value='"+Value.id_jabatan+"'>"+Value.nm_jbtn+"</option>"
            );
          })
        }
      });
    }

    function selectJbtn2() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetJbtn'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#idselectJbtn2").empty();
          $("#idselectJbtn2").append(
              "<option value ='' selected>-- Pilih Jabatan --</option>"
            );
          $.each(response, function(Index,Value){
            $("#idselectJbtn2").append(
              "<option value='"+Value.id_jabatan+"'>"+Value.nm_jbtn+"</option>"
            );
          })
        }
      });
    }

    function selectCbg() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetCbg'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#idselectCbg").empty();
          $("#idselectCbg").append(
              "<option value ='' selected>-- Pilih Cabang --</option>"
            );
          $.each(response, function(Index,Value){
            $("#idselectCbg").append(
              "<option value='"+Value.id_cbg+"'>"+Value.nm_cbg+"</option>"
            );
          })
        }
      });
    }

    function selectJobTitle() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetJobtitle'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#input_idselectJobTitle").empty();
          $("#input_idselectJobTitle").append(
              "<option value ='' selected>-- Pilih Job Title --</option>"
            );
          $.each(response, function(Index,Value){
            $("#input_idselectJobTitle").append(
              "<option value='"+Value.id_job_title+"'>"+Value.job_title+"</option>"
            );
          })
        }
      });
    }

    function selectJobTitle2() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetJobtitle'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#input_idselectJobTitle2").empty();
          $("#input_idselectJobTitle2").append(
              "<option value ='' selected>-- Pilih Job Title --</option>"
            );
          $.each(response, function(Index,Value){
            $("#input_idselectJobTitle2").append(
              "<option value='"+Value.id_job_title+"'>"+Value.job_title+"</option>"
            );
          })
        }
      });
    }
    function selectDivisi() {
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('hris/main/GetDivisi'); ?>",
            dataType : "JSON",
            success : function(response){
              $("#input_idselectDivisi").empty();
              $("#input_idselectDivisi").append(
                  "<option value ='' selected> Pilih Divisi </option>"
                );
              $.each(response, function(Index,Value){
                $("#input_idselectDivisi").append(
                  "<option value='"+Value.id_divisi+"'>"+Value.nm_divisi+"</option>"
                );
              })
            }
          });
        }


     function selectPendidikanTerakhir() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetPendidikanTrkhr'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#input_idselectPndkkanterakhir").empty();
          $("#input_idselectPndkkanterakhir").append(
              "<option value ='' selected>--Pilih Pendidikan Terakhir--</option>"
            );
          $.each(response, function(Index,Value){
            $("#input_idselectPndkkanterakhir").append(
              "<option value='"+Value.id_jnjng_pddk+"'>"+Value.nm_jnjng_pddk+"</option>"
            );
          })
        }
      });
    }


    $("#input_idselectPndkkanterakhir").select2({
      placeholder: 'Pilih Jurusan',
    });

     function selectUniversitas() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetUniversitas'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#input_idselectUniversitas").empty();
          $("#input_idselectUniversitas").append(
              "<option value ='' selected>--Pilih Status--</option>"
            );
          $.each(response, function(Index,Value){
            $("#input_idselectUniversitas").append(
              "<option value='"+Value.id_college_krywn+"'>"+Value.nm_college_krywn+"</option>"
            );
          })
        }
      });
    }

    $("#input_idselectUniversitas").select2({
      placeholder: 'Pilih Universitas',
    });

     function selectFakultas() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetFakultas'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#input_idselectFakultas").empty();
          $("#input_idselectFakultas").append(
              "<option value ='' selected>--Pilih Status--</option>"
            );
          $.each(response, function(Index,Value){
            $("#input_idselectFakultas").append(
              "<option value='"+Value.id_fakultas_krywn+"'>"+Value.nm_fakultas_krywn+"</option>"
            );
          })
        }
      });
    }


    $("#input_idselectFakultas").select2({
      placeholder: 'Pilih FAKULTAS',
    });


    $("#idselectUniversitas").select2({
      placeholder: 'Pilih Universitas',
    });

     function selectJurusan() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetJurusan'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#input_idselectJurusan").empty();
          $("#input_idselectJurusan").append(
              "<option value ='' selected>--Pilih Status--</option>"
            );
          $.each(response, function(Index,Value){
            $("#input_idselectJurusan").append(
              "<option value='"+Value.id_jurusan_krywn+"'>"+Value.nm_jurusan_krywn+"</option>"
            );
          })
        }
      });
    }


    $("#input_idselectJurusan").select2({
      placeholder: 'Pilih Jurusan',
    });

    
     function selectProvinsi() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetProvinsi'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#input_idselectProvinsi").empty();
          $("#input_idselectProvinsi").append(
              "<option value ='' selected>--Pilih Status--</option>"
            );
          $.each(response, function(Index,Value){
            $("#input_idselectProvinsi").append(
              "<option value='"+Value.id_prov+"'>"+Value.namaProv+"</option>"
            );
          })
        }
      });
    }


    $("#input_idselectProvinsi").select2({
      placeholder: 'Pilih Provinsi',
    });
 
    function selectKabupaten(){
      var id = $("#input_idselectProvinsi").val()
      
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('hris/main/GetKabupaten'); ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response){

          $("#input_idselectKabupaten").empty();
            $("#input_idselectKabupaten").append(
                "<option value ='' selected>--Pilih Status--</option>"
              );
            $.each(response, function(Index,Value){
              $("#input_idselectKabupaten").append(
                "<option value='"+Value.id_kab+"'>"+Value.namaKab+"</option>"
              );
            });            
        }
      });
    }
    
     $("#input_idselectKabupaten").select2({
      placeholder: 'Pilih Kabupaten',
    });

     function selectKecamatan(){
      var id = $("#input_idselectKabupaten").val()

      $.ajax({
        type     : "POST",
        url      : "<?php echo base_url('hris/main/GetKecamatan'); ?>",
        data     : {id:id},
        dataType : "JSON",
        success   : function(response){

            $("#input_idselectKecamatan").empty();
              $("#input_idselectKecamatan").append(
                 "<option value ='' selected>--Pilih Status--</option>"
                );
              $.each(response, function(Index, Value){
                $("#input_idselectKecamatan").append(
                  "<option value='"+Value.id_kec+"'>"+Value.namaKec+"<option>"
                  );
              });
        }

      });
     }

      $("#input_idselectKecamatan").select2({
      placeholder: 'Pilih Kecamatan',
    });

       function selectKelurahan(){
      var id = $("#input_idselectKecamatan").val()

      $.ajax({
        type     : "POST",
        url      : "<?php echo base_url('hris/main/GetKelurahan'); ?>",
        data     : {id:id},
        dataType : "JSON",
        success   : function(response){

            $("#input_idselectKelurahan").empty();
              $("#input_idselectKelurahan").append(
                 "<option value ='' selected>--Pilih Status--</option>"
                );
              $.each(response, function(Index, Value){
                $("#input_idselectKelurahan").append(
                  "<option value='"+Value.id_kel+"'>"+Value.namaKel+"<option>"
                  );
              });
        }

      });
     }

      $("#input_idselectKelurahan").select2({
      placeholder: 'Pilih Kelurahan',
    });

 function input_selectunit(){
     var id = $("#input_idselectDivisi").val()

      $.ajax({
          type    : "POST",
          url     : "<?php echo base_url('hris/main/GetUnit');?>",
          data    : {id:id},
          dataType    : "JSON",
          success : function(response){

            $("#input_selectunit").empty();
              $("#input_idselectunit").append(
                "option value ='' selected> --Pilih Status--</option>"
                );
            $.each(response, function(Index, Value){
               $("#input_idselectunit").append(
                "<option value='"+Value.kd_unit+"'>"+Value.unit+"</option>"
                );
            })  
          }

      });
    }


   /*  belum digunakan karena pakai tabeljs

   function input_selectEmployeenip(){
      var id = $("#input_idselectunit").val()
      $.ajax({
          type    : "POST",
          url     : "<?php echo base_url('hris/main/GetEmployebyunit');?>",    
          data    : {id:id},    
          dataType    : "JSON",
          success : function(response){

            $("#input_idemployee").empty();
              $("#input_idemployee").append(
                "option value ='' selected> --Pilih Status--</option>"
                );
            $.each(response, function(Index, Value){
               $("#input_idemployee").append(
                "<option value='"+Value.kd_karyawan+"'>"+Value.nama+" - "+Value.nip+"</option>"
                );
            })  
          }

      });
    }
*/
    function Searchemployeeid(){
      var kd_unit = $("#input_idselectunit").val()
      var id_divisi = $("#input_idselectDivisi").val()
         $('#tbDataPayroll').dataTable().fnDestroy();
          $('#tbDataPayroll').dataTable({
            
          "pageLength" : 50,
            "responsive" : true,
            "autoWidth" : false,
            "ordering" : true,
            "bProcessing" : false,
            "bServerSide" : true,
            "bJQueryUI" : true,
            "lengthMenu":   [ 25, 50, 75, 100 ],
            "sPaginationType" : "full_numbers",
            "sAjaxSource" : "<?php echo base_url(); ?>hris/main/GetEmployenip/",
          /*    "aoColumnDefs": [
                  { "sWidth": "10%", "aTargets": [ -1 ] }
              ],*/
            
           "columns" : [
                    
              {"data" : "nama",  "name" :"nama"},
              {"data" : "nip",  "name" :"nip"},
              {"data" : "nama",  "name" :"nama"},
              {"data" : "nm_divisi",  "name" :"nm_divisi"},            
              {"data" : "unit", "name" : "unit"},
              {"data" : "mulai_brgbg", "name" : "mulai_brgbg"},
              {"data" : "nm_jbtn", "name" : "nm_jbtn"},           
              {"data" : "nm_jbtn", "name" : "nm_jbtn"},           
              {"data" : "jml_anak", "name" : " jml_anak"},         /*  
              {"data" : "gaji_pokok", "name" : "gaji_pokok"},           
              {"data" : "nm_jnjng_pddk", "name" : "nm_jnjng_pddk"}, */          
              {"data" : "mulai_brgbg", "name" : "mulai_brgbg"},           
              {"data" : "mulai_brgbg", "name" : "mulai_brgbg"},           
              {"data" : "mulai_brgbg", "name" : "mulai_brgbg"},           
              {"data" : "mulai_brgbg", "name" : "mulai_brgbg"},           
              {"data" : "mulai_brgbg", "name" : "mulai_brgbg"},           
              {"data" : "mulai_brgbg", "name" : "mulai_brgbg"},         
              {"data" : "mulai_brgbg", "name" : "mulai_brgbg"},         
              {"data" : "tunjang_trans", "name" : "tunjang_trans"},      
              {"data" : "tunjang_kehadiran", "name" : "tunjang_kehadiran"},      
              {"data" : "tunjang_piket", "name" : "tunjang_piket"},      
              {"data" : "tambah_ngajar", "name" : "tambah_ngajar"},      
              {"data" : "tunjang_tmpting", "name" : "tunjang_tmpting"},      
              {"data" : "tunjang_mkn", "name" : "tunjang_mkn"},      
              {"data" : "iuran_karywn", "name" : "iuran_karywn"},      
              {"data" : "tunjang_hartua", "name" : "tunjang_hartua"},      
              {"data" : "tunjang_pengmkn", "name" : "tunjang_pengmkn"},      
              {"data" : "pinjam_pribadi", "name" : "pinjam_pribadi"},      
              {"data" : "pinjam_kendar", "name" : "pinjam_kendar"},      
              {"data" : "pinjam_rumah", "name" : "pinjam_rumah"},      
              {"data" : "pinjam_rumah", "name" : "pinjam_rumah"}      
            ],
            "fnServerData" : function(sSource,aoData,fnCallback){
                aoData.push({"name":"kd_unit","value":kd_unit});
                aoData.push({"name":"id_divisi","value":id_divisi});
                $.ajax({
                  "type"      : "POST",
                  "dataType"  : "JSON",
                  "url"       : sSource,
                  "data"      : aoData,
                  "success"   : fnCallback
                });
              },                      

              "fnRowCallback" : function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
                
              $("td:eq(0)",nRow).text(++iDisplayIndex);
          
              $("td:eq(7)",nRow).html('<input type="text" style="border:2;" id="jml_hari" onkeydown ="Tambah()">')
              $("td:eq(15)",nRow).html('<input type="text" style="border:2;" id="satuan_trans" onkeydown ="Tambah()">')
              $("td:eq(16)",nRow).html('<input type="text" style="border:2;" id="tunjang_trans" onkeydown ="Tambah()">')
              $("td:eq(17)",nRow).html('<input type="text" style="border:2;" id="tunjang_kehadiran" onkeydown ="Tambah()">');
              $("td:eq(18)",nRow).html('<input type="text" style="border:2;" id="tunjang_piket" onkeydown ="Tambah()">');
              $("td:eq(19)",nRow).html('<input type="text" style="border:2;" id="tambah_ngajar" onkeydown ="Tambah()">');
              $("td:eq(20)",nRow).html('<input type="text" style="border:2;" id="tunjang_tmpting" onkeydown ="Tambah()">');
              $("td:eq(21)",nRow).html('<input type="text" style="border:2;" id="tunjang_mkn" onkeydown ="Tambah()">');
              $("td:eq(22)",nRow).html('<input type="text" style="border:2;" id="iuran_karywn" onkeydown ="Tambah()">');
              $("td:eq(23)",nRow).html('<input type="text" style="border:2;" id="tunjang_hartua" onkeydown ="Tambah()">');
              $("td:eq(24)",nRow).html('<input type="text" style="border:2;" id="tunjang_pengmkn" onkeydown ="Tambah()">');
              $("td:eq(25)",nRow).html('<input type="text" style="border:2;" id="pinjam_pribadi" onkeydown ="Tambah()">');
              $("td:eq(26)",nRow).html('<input type="text" style="border:2;" id="pinjam_kendar" onkeydown ="Tambah()">');
              $("td:eq(27)",nRow).html('<input type="text" style="border:2;" id="pinjam_rumah" onkeydown ="Tambah()">');
             $("td:eq(28)",nRow).html('<input type="text" style="border:2;" id="pinjam_rumah" onkeydown ="Tambah()">');
            
                }

          });
        }

function Tambah(){
  var jml_h = $("#jml_hari").val()
 
  var hasil = jml_h * 30000 ;
  var hasil2 = jml_h * 50000 ;

  $("#tunjang_trans").val(hasil) 
  $("#tunjang_kehadiran").val(hasil2)
}
        
 function selectGenderForCode(){
        var id = $("#input_gender").val()

        $.ajax({
          type    : "POST",
          url     : "<?php echo base_url('hris/main/GetCodeOtmts');?>",
          data    : {id:id},
          // dataType : "JSON",
          success : function(response){
            $("#input_nip").val($.trim(response));

          }

        });
      }

      $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
  });

  function AddLblForm(param){
    $("#textForm").html('<i class="fa fa-angle-right text-white">&nbsp;</i><a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">'+param+' &nbsp</a>');
  }

   function ImportLblForm(param){
    $("#textForm").html('<i class="fa fa-angle-right text-white">&nbsp;</i><a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">'+param+' &nbsp</a>');
  }

    $('#btn-tambah-jabatan').on('click',function(){
      
        $('#form-tambah-jabatan').modal('show');
      });




  </script>
</body>

</html>