<!DOCTYPE html>
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
                <img src="<?php echo base_url() ?>assets/main/img/text_logo.png">
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
            <a class="nav-link" href="<?php echo base_url('circle_student/main') ?>">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
             <a href="#pagefront" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i>Front</a>
            <ul class="collapse list-inline" id="pagefront">
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_slider') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Slider</a>
                </li></ul>
          <li class="nav-item">
            <a href="#data-master" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Master</a>
            <ul class="collapse list-inline" id="data-master">
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_unit_sekolah') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Unit Sekolah</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_identitas_sekolah') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Identitas Sekolah</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_kurikulum'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Kurikulum</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_tahun_akademik'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Tahun Akademik</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_gedung'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Gedung</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_ruangan'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Ruangan</a>
                </li>
                <li>
                    <a href="#" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Golongan</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_jurusan') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Jurusan</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_kelas'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Kelas</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_kelas_paralel'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Kelas Paralel</a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#data-pengguna" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Data Pengguna</a>
            <ul class="collapse list-inline" id="data-pengguna">
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_siswa') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Siswa</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_guru'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Guru</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_kepala_sekolah'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Kepala Sekolah</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_admin'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Admin</a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#data-akademik" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Data Akademik</a>
            <ul class="collapse list-inline" id="data-akademik">
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_kelompok_mapel') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Kelompok Mata Pelajaran</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_mapel'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Mata Pelajaran</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_jadwal_pelajaran'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Jadwal Pelajaran</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_rentang_nilai'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Rentang Nilai</a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#data-absensi" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Data Absensi</a>
            <ul class="collapse list-inline" id="data-absensi">
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_absensi_guru') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Absensi Guru</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_absensi_siswa'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Absensi Siswa</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_rekap_absensi_siswa'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Data Rekap Absensi</a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#data-jurnal" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Data Jurnal KBM</a>
            <ul class="collapse list-inline" id="data-jurnal">
                <li>
                    <a href="<?php echo base_url('circle_student/main/input_jurnal_kbm') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Input Jurnal KBM</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/laporan_jurnal_kbm'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Laporan Jurnal KBM</a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#data-materi" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Materi & Tugas</a>
            <ul class="collapse list-inline" id="data-materi">
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_materi') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Materi</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_cbt'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>CBT</a>
                </li>
                <li>
                    <a href="<?php echo base_url('circle_student/main/data_bank_soal') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Bank Soal</a>
                </li>
            </ul>
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
  <script type="text/javascript">
    $(function () {
      if ($("#tbDataUnit").length) {
        dataTbUnit()
      }
      if ($("#unit").length || $("#selectUnit").length || $("#input_unit").length || $("#edit_unit").length) {
        selectUnit()
      }
      if ($("#tbDataSekolah").length) {
        dataTbSekolah();
      }
      if ($("#tbKurikulum").length) {
        dataTbKurikulum()
      }
      if ($("#tbThnAkademik").length) {
        dataTbThnAkademik();
      }
      if($("#tbGedung").length){
        dataTbGedung();
      }
      if($("#tbRuangan1").length){
        dataTbRuangan();
      }
      if ($("#nmGedung").length) {
        selectGedung();
      }
      if ($("#kd_kls_select").length||$("#edit_kls").length) {
        selectKelas();
      }
      if ($("#tbJurusan").length) {
        dataTbJurusan();
      }
      if ($("#tbKelas").length) {
        dataTbKelas();
      }
      if ($("#tbKlsParalel").length) {
        dataTbKlsParalel();
      }
      if ($("#wali_kelas").length) {
        selectWaliKelas();
      }
      if ($("#edit_klsParalel").length) {
        selectedEditKls()
      }
      if ($("#tbGuru").length) {
        dataTbGuru()
      }
      if ($("#tbKepsek").length) {
        dataTbKepsek();
      }
      if ($("#select_nmKepsek").length) {
        selectKepsek();
      }
      if ($("#tbAdmin").length) {
        dataTbAdmin();
      }
      if ($("#select_nmAdmin").length) {
        selectNmAdmin();
      }
      if ($("#tbKelompokMapel").length) {
        dataTbKelompokMapel()
      }
      if ($("#tbMapel").length) {
        dataTbMapel()
      }
      if ($("#select_guru").length) {
        selectGuru();
      }
      if ($("#select_nmHari").length) {
        selectHari();
      }
      if ($("#select_ruangan").length) {
        selectRuangan();
      }
      if ($("#select_thnAkademik").length) {
        selectThnAkademik();
      }

      if ($("#input_mapel").length) {
        selectMapel();
      }

      if ($("#select_jdlBab").length) {
        selectJdlBab();
      }

      if ($("#select_jdlSubBab").length) {
        selectJdlSubBab();
      }

      if ($("#select_JnsCbt").length) {
        selectJnsCbt();
      }
        if ($("#tbDataSlider").length) {
        dataTbSlider();
      }


      $('#input_wktMulai').inputmask(
        "hh:mm:ss", {
          placeholder: "HH:MM:SS", 
          insertMode: false, 
          showMaskOnHover: false,
          // hourFormat: 24
        }
      );
      $('#input_wktSelesai').inputmask(
        "hh:mm:ss", {
          placeholder: "HH:MM:SS", 
          insertMode: false, 
          showMaskOnHover: false,
          // hourFormat: 24
        }
      );
    });

    function dataTbUnit(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataUnit') ?>",
        dataType : "JSON",
        success : function(response) {
          $("#tbDataUnit > tbody").empty(); var no=1; i=1;
          $.each(response, function (Index, Value) {
            $("#tbDataUnit > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td align='center'>"+Value.unit+"</td>"+
                "<td align='center'><label class='custom-toggle'><input type='checkbox' "+ (Value.status == 'aktif' ? 'checked' : '') +" onchange='changeStatusUnit("+Value.kd_unit+")'><span class='custom-toggle-slider rounded-circle'></span></label></td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editUnit('"+Value.kd_unit+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Unit','"+Value.kd_unit+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      })
    }

    function changeStatusUnit(id){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/changeStatusUnit') ?>",
        dataType : "JSON",
        data : {id:id},
        success : function(response) {
          dataTbUnit()
        }
      })
    }

    function saveUnit() {
      var unit = $("#inputUnit").val();
      if (!unit) {
          alertEmptyImportanInput()
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/saveUnit') ?>",
          data : {unit:unit},
          success : function(response) {
            if (jQuery.trim(response)==="success"){
              $("#modalAddUnit").modal("hide");
              dataTbUnit();
              alertSuccessSave();
            }else if (jQuery.trim(response)==="failed") {
              $("#modalAddUnit").modal("hide");
              alertFailedSave();
            }
          }
        })
      }
    }

    function editUnit(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getUnitById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response) {
          $("#modalEditUnit").modal("show");
          $("#editKdUnit").val(response[0].kd_unit);
          $("#editUnit").val(response[0].unit);
        }
      })
    }

    function updateUnit() {
      var id = $("#editKdUnit").val();
      var unit = $("#editUnit").val();
      if (!id || !unit) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/updateUnit'); ?>",
          data : {id:id, unit:unit},
          success : function(response) {
            if (jQuery.trim(response)==="success"){
              $("#modalEditUnit").modal("hide");
              dataTbUnit();
              alertSuccessUpdate();
            }else if (jQuery.trim(response)==="failed") {
              $("#modalEditUnit").modal("hide");
              alertFailedUpdate();
            }
          }
        })
      }
    }

    function deleteUnit(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteUnit'); ?>",
        data : {id:id},
        success : function(response) {
          if (jQuery.trim(response)==="success"){
            $("#confirmDelete").modal("hide");
            dataTbUnit();
            alertSuccessDelete();
          }else if (jQuery.trim(response)==="failed") {
            $("#confirmDelete").modal("hide");
            alertFailedDelete();
          }
        }
      })
    }

    function selectUnit(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataUnit'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#unit").empty();
          $("#unit").append(
              "<option selected>Pilih Unit *</option>"
            );
          $.each(response, function(Index,Value){
            $("#unit").append(
              "<option value='"+Value.unit+"'>"+Value.unit+"</option>"
            );
          })

          $("#selectUnit").empty();
          $("#selectUnit").append(
              "<option selected>Pilih Unit *</option>"
            );
          $.each(response, function(Index,Value){
            $("#selectUnit").append(
              "<option value='"+Value.unit+"'>"+Value.unit+"</option>"
            );
          })

          <?php $sess_unit = $this->session->userdata("unit"); if (!empty($sess_unit)) {?>
          $("#selectUnit").val("SMP PUTRA").trigger('change.select2');
          <?php } ?>

          $("#edit_unit").empty();
          $("#edit_unit").append(
              "<option selected>Pilih Unit *</option>"
            );
          $.each(response, function(Index,Value){
            $("#edit_unit").append(
              "<option value='"+Value.unit+"'>"+Value.unit+"</option>"
            );
          })

          $("#input_unit").empty();
          $("#input_unit").append(
              "<option selected>Pilih Unit *</option>"
            );
          $.each(response, function(Index,Value){
            $("#input_unit").append(
              "<option value='"+Value.unit+"'>"+Value.unit+"</option>"
            );
          })
        }
      });
    }

    function dataTbSekolah() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/get_dataSekolah') ?>",
        dataType : "JSON",
        success:function(response){
          $("#tbDataSekolah > tbody").empty();var no=1;
          $.each(response, function(Index,Value){
            $("#tbDataSekolah > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.nm_sekolah+"</td>"+
                "<td>"+Value.alamat_sekolah+"</td>"+
                "<td>"+Value.unit+"</td>"+
                "<td><button class='btn btn-info btn-sm' title='Detail' onclick=detailSekolah('"+Value.kd_sekolah+"')><i class='fa fa-list'></i></button><button class='btn btn-warning btn-sm' onclick=editSekolah('"+Value.kd_sekolah+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Sekolah','"+Value.kd_sekolah+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    function add(param){
      $("input").val("");
      $("#frmTb"+param).hide(500);
      $("#frmAdd"+param).show(1000);
      $("#frmImport"+param).hide(500);
      $("#btnAdd"+param).hide();
      $("#btnPrint"+param).hide();
      $("#btnImport"+param).hide();
      $("#btnCancel").show(1001);
      $("#btnSave").show(1001);
      $("#btnImport").hide();
    }

    function cancelAdd(param){
      $("#frmTb"+param).show(1000);
      $("#frmAdd"+param).hide(500);
      $("#frmImport"+param).hide(500);
      $("#btnAdd"+param).show();
      $("#btnPrint"+param).show();
      $("#btnImport"+param).show();
      $("#btnImport").hide();
      $("#btnCancel").hide();
      $("#btnSave").hide();
      $("#btnUpdate").hide();
      $("#btnCancel").text("Cancel");
      $("#btnCancelImport").hide();
    }

    function confirmDelete(param,id){
      $("#btnYes").attr('onclick','delete'+param+'("'+id+'")');
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
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/saveDataSekolah'); ?>",
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
              dataTbSekolah();
              cancelAddSekolah();
              alertSuccessSave();
            }else if (jQuery.trim(response)==="failed") {
              cancelAddSekolah();
              alertFailedSave();
            }
          }
        });
      }
    }

    function deleteSekolah(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteListSekolah'); ?>",
        data : {id:id},
        success:function(response) {
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbSekolah()
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            dataTbSekolah();
            alertFailedDelete();
          }
        }
      });
    }

    function editSekolah(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataSekolahById') ?>",
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
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/updateSekolah') ?>",
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
              alertSuccessUpdate();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate()
            }
          }
        });
      }
    }

    function detailSekolah(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataSekolahById') ?>",
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

    function dataTbKurikulum() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKurikulum') ?>",
        dataType : "JSON",
        success : function(response) { var no=1;
          $("#tbKurikulum > tbody").empty();
          $.each(response, function(Index,Value) {
            $("#tbKurikulum > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.nm_kurikulum+"</td>"+
                "<td align='center'><label class='custom-toggle'><input type='checkbox' "+ (Value.status == 'aktif' ? 'checked' : '') +" onchange='changeStatusKurikulum("+Value.kd_kurikulum+")'><span class='custom-toggle-slider rounded-circle'></span></label></td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editKurikulum('"+Value.kd_kurikulum+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Kurikulum','"+Value.kd_kurikulum+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    function changeStatusKurikulum(id){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/changeStatusKurikulum') ?>",
        dataType : "JSON",
        data : {id:id},
        success : function(response) {
          dataTbKurikulum()
        }
      })
    }

    function saveKurikulum() {
      var kurikulum = $("#inputKurikulum").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/saveKurikulum') ?>",
        data : {kurikulum:kurikulum},
        success : function(response) {
          if (jQuery.trim(response)==="success") {
            $("#modalAddKurikulum").modal("hide");
            dataTbKurikulum();
            alertSuccessSave();
          }else if(jQuery.trim(response)==="failed"){
            alertFailedSave();
          }
        }
      });
    }

    function editKurikulum(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getKurikulumById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response) {
          $("#modalEditKurikulum").modal("show");
          $("#editKdKurikulum").val(response[0].kd_kurikulum);
          $("#editKurikulum").val(response[0].nm_kurikulum);
        }
      })
    }

    function dataTbThnAkademik() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataThnAkademik'); ?>",
        dataType : "JSON",
        success : function(response){var no=1;
          $("#tbThnAkademik > tbody").empty();
          $.each(response, function(Index,Value){
            $("#tbThnAkademik > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.nm_thn_akademik+"</td>"+
                "<td>"+Value.keterangan+"</td>"+
                "<td>"+Value.unit+"</td>"+
                "<td>"+Value.status+"</td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editThnAkademik('"+Value.kd_thn_akademik+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('ThnAkademik','"+Value.kd_thn_akademik+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    function saveThnAkademik() {
      var unit = $("#unit").val();
      var nmThn = $("#nmThn").val();
      var ket = $("#ket").val();
      var stat = $("#stat").val();

      if (!unit||!nmThn||!ket||!stat) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/saveThnAkademik') ?>",
          data : {unit:unit, nmThn:nmThn, ket:ket, stat:stat},
          success : function(response){
            if (jQuery.trim(response)==="success") {
              dataTbThnAkademik();
              cancelAdd('ThnAkademik');
              alertSuccessSave();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }
    }

    function deleteThnAkademik(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteThnAkademik') ?>",
        data : {id:id},
        success : function(response){
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbThnAkademik();
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            alertFailedDelete();
          }
        }
      });
    }

    function editThnAkademik(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getThnAkademikById'); ?>",
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
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/updateThnAkademik'); ?>",
          data : {id:id, unit:unit, nmThn:nmThn, ket:ket, stat:stat},
          success : function(response){
            if (jQuery.trim(response)==="success") {
              dataTbThnAkademik();
              cancelAdd('ThnAkademik');
              alertSuccessUpdate();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });
      }
    }

    function dataTbGedung(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataGedung') ?>",
        dataType : "JSON",
        success  : function(response) {
          $("#tbGedung > tbody").empty(); var no=1;
          $.each(response, function(Index,Value){
            $("#tbGedung > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.nm_gedung+"</td>"+
                "<td>"+Value.jml_lantai+"</td>"+
                "<td>"+Value.panjang+"</td>"+
                "<td>"+Value.tinggi+"</td>"+
                "<td>"+Value.lebar+"</td>"+
                "<td>"+Value.unit+"</td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editGedung('"+Value.kd_gedung+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Gedung','"+Value.kd_gedung+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    function saveGedung() {
      var nm_gedung = $("#nmGedung").val();
      var jml_lantai = $("#jmlLantai").val();
      var panjang = $("#panjang").val();
      var lebar = $("#lebar").val();
      var tinggi = $("#tinggi").val();
      var unit = $("#unit").val();

      if (!nm_gedung||!unit) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/insertDataGedung'); ?>",
          data : {
            nm_gedung:nm_gedung, 
            jml_lantai:jml_lantai, 
            panjang:panjang, 
            lebar:lebar, 
            tinggi:tinggi, 
            unit:unit},
          success : function(response){
            if (jQuery.trim(response)==="success") {
              dataTbGedung();
              cancelAdd('Gedung');
              alertSuccessSave();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }
    }

    function deleteGedung(id){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteGedung'); ?>",
        data : {id:id},
        success : function(response){
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbGedung();
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            alertFailedDelete();
          }
        }
      });
    }

    function editGedung(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getGedungById');?>",
        dataType : "JSON",
        data : {id:id},
        success : function(response){
          $("#unit").val(response[0].unit);
          $("#nmGedung").val(response[0].nm_gedung);
          $("#panjang").val(response[0].panjang);
          $("#tinggi").val(response[0].tinggi);
          $("#lebar").val(response[0].lebar);
          $("#jmlLantai").val(response[0].jml_lantai);

          $("#frmTbGedung").hide(500);
          $("#frmAddGedung").show(1000);
          $("#btnAddGedung").hide();
          $("#btnCancel").show(1001);
          $("#btnUpdate").show(1001);
          $("#btnUpdate").attr('onclick','updateGedung('+id+')');
        }
      });
    }

    function updateGedung(id) {
      var nm_gedung = $("#nmGedung").val();
      var jml_lantai = $("#jmlLantai").val();
      var panjang = $("#panjang").val();
      var lebar = $("#lebar").val();
      var tinggi = $("#tinggi").val();
      var unit = $("#unit").val();

      if (!nm_gedung||!unit) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/updateDataGedung'); ?>",
          data : {
            id:id,
            nm_gedung:nm_gedung, 
            jml_lantai:jml_lantai, 
            panjang:panjang, 
            lebar:lebar, 
            tinggi:tinggi, 
            unit:unit},
          success : function(response){
            if (jQuery.trim(response)==="success") {
              dataTbGedung();
              cancelAdd('Gedung');
              alertSuccessUpdate();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });
      }
    }

    function dataTbRuangan(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataRuangan') ?>",
        dataType : "JSON",
        success  : function(response) {
          $("#tbRuangan > tbody").empty(); var no=1;
          $.each(response, function(Index,Value){
            $("#tbRuangan > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.nm_ruangan+"</td>"+
                "<td>"+Value.kapasitas+"</td>"+
                "<td>"+Value.unit+"</td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editRuangan('"+Value.kd_ruangan+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Ruangan','"+Value.kd_ruangan+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    function selectGedung() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataGedung'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#nmGedung").empty();
          $("#nmGedung").append(
              "<option selected>Pilih Gedung</option>"
            );
          $.each(response, function(Index,Value){
            $("#nmGedung").append(
              "<option value='"+Value.kd_gedung+"'>"+Value.nm_gedung+"</option>"
            );
          })
        }
      });
    }

    function deleteRuangan(id){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteRuangan'); ?>",
        data : {id:id},
        success : function(response){
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbRuangan();
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            alertFailedDelete();
          }
        }
      });
    }

    function saveRuangan(){
      var nm_ruangan = $("#nmRuangan").val();
      var kd_gedung = $("#nmGedung").val();
      var kapasitas = $("#kapasitas").val();
      var unit = $("#unit").val();

      if (!nm_ruangan||!kd_gedung||!kapasitas||!unit) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/saveRuangan'); ?>",
          data : {nm_ruangan:nm_ruangan, kd_gedung:kd_gedung, kapasitas:kapasitas,unit:unit},
          success : function(response){
            if (jQuery.trim(response)==="success") {
              dataTbRuangan();
              cancelAdd('Ruangan');
              alertSuccessSave();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }
    }

    function editRuangan(id){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataRuanganById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response){
          $("#unit").val(response[0].unit);
          $("#nmRuangan").val(response[0].nm_ruangan);
          $("#kapasitas").val(response[0].kapasitas);
          $("#nmGedung").val(response[0].kd_gedung);

          $("#frmTbRuangan").hide(500);
          $("#frmAddRuangan").show(1000);
          $("#btnAddR").hide();
          $("#btnCancel").show(1001);
          $("#btnUpdate").show(1001);
          $("#btnUpdate").attr('onclick','updateRuangan('+id+')');
        }
      });
    }

    function updateRuangan(id) {
      var nm_ruangan = $("#nmRuangan").val();
      var kd_gedung = $("#nmGedung").val();
      var kapasitas = $("#kapasitas").val();
      var unit = $("#unit").val();
      if (!nm_ruangan||!kd_gedung||!kapasitas||!unit) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/updateRuangan'); ?>",
          data : {id:id, nm_ruangan:nm_ruangan, kd_gedung:kd_gedung, kapasitas:kapasitas, unit:unit},
          success : function(response) {
            if (jQuery.trim(response)==="success") {
              dataTbRuangan();
              cancelAdd('Ruangan');
              alertSuccessUpdate();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });
      }
    }

    function dataTbJurusan()
    {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataJurusan') ?>",
        dataType : "JSON",
        success  : function(response) {
          $("#tbJurusan > tbody").empty(); var no=1;
          $.each(response, function(Index,Value){
            $("#tbJurusan > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.jurusan+"</td>"+
                "<td>"+Value.nm_jurusan+"</td>"+
                "<td>"+Value.bidang_keahlian+"</td>"+
                "<td>"+Value.kopetensi_umum+"</td>"+
                "<td>"+Value.kopetensi_khusus+"</td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editJurusan('"+Value.kd_jurusan+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Jurusan','"+Value.kd_jurusan+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    function saveJurusan() {
      var jurusan = $("#jurusan").val();
      var nm_jurusan = $("#nmJurusan").val();
      var bidang_keahlian = $("#keahlian").val();
      var kopetensi_umum = $("#kopetensi_umum").val();
      var kopetensi_khusus = $("#kopetensi_khusus").val();

      if (!jurusan||!nm_jurusan) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/insertDataJurusan'); ?>",
          data : {jurusan:jurusan, nm_jurusan:nm_jurusan, bidang_keahlian:bidang_keahlian, kopetensi_umum: kopetensi_umum, kopetensi_khusus:kopetensi_khusus},
          success : function(response) {
            if (jQuery.trim(response)==="success") {
              dataTbJurusan();
              cancelAdd('Jurusan');
              alertSuccessSave();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }
    }

    function editJurusan(id){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataJurusanById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response){
          $("#jurusan").val(response[0].jurusan);
          $("#nmJurusan").val(response[0].nm_jurusan);
          $("#keahlian").val(response[0].bidang_keahlian);
          $("#kopetensi_umum").val(response[0].kopetensi_umum);
          $("#kopetensi_khusus").val(response[0].kopetensi_khusus);

          $("#frmTbJurusan").hide(500);
          $("#frmAddJurusan").show(1000);
          $("#btnAddJurusan").hide();
          $("#btnCancel").show(1001);
          $("#btnUpdate").show(1001);
          $("#btnUpdate").attr('onclick','updateJurusan('+id+')');
        }
      });
    }

    function updateJurusan(id){
      var jurusan = $("#jurusan").val();
      var nm_jurusan = $("#nmJurusan").val();
      var bidang_keahlian = $("#keahlian").val();
      var kopetensi_umum = $("#kopetensi_umum").val();
      var kopetensi_khusus = $("#kopetensi_khusus").val();

      if (!jurusan||!nm_jurusan) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/updateDataJurusan'); ?>",
          data : {id:id, jurusan:jurusan, nm_jurusan:nm_jurusan, bidang_keahlian:bidang_keahlian, kopetensi_umum: kopetensi_umum, kopetensi_khusus:kopetensi_khusus},
          success : function(response) {
            if (jQuery.trim(response)==="success") {
              dataTbJurusan();
              cancelAdd('Jurusan');
              alertSuccessUpdate();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });
      }
    }

    function deleteJurusan(id){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteJurusan'); ?>",
        data : {id:id},
        success : function(response){
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbJurusan();
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            alertFailedDelete();
          }
        }
      });
    }

    function dataTbKelas(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKelas') ?>",
        dataType : "JSON",
        success  : function(response) {
          $("#tbKelas > tbody").empty(); var no=1;
          $.each(response, function(Index,Value){
            $("#tbKelas > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.kd_kls+"</td>"+
                "<td>"+Value.nm_kelas+"</td>"+
                "<td>"+Value.unit+"</td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editKelas('"+Value.kd_kls+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Kelas','"+Value.kd_kls+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    function saveKelas() {
      var unit = $("#unit").val();
      var kd_kls = $("#kd_kls").val();
      var nm_kelas = $("#nm_kelas").val();
      var angka = $("#angka").val();
      if(!unit||!kd_kls||!nm_kelas||!angka){
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/insertDataKelas'); ?>",
          data : {unit:unit, kd_kls:kd_kls, nm_kelas:nm_kelas, angka:angka},
          success : function(response) {
            if (jQuery.trim(response)==="success") {
              dataTbKelas();
              cancelAdd('Kelas');
              alertSuccessSave();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }
    }

    function editKelas(id){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKelasById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response){
          $("#unit").val(response[0].unit);
          $("#nm_kelas").val(response[0].nm_kelas);
          $("#kd_kls").val(response[0].kd_kls);
          $("#angka").val(response[0].angka);

          $("#frmTbKelas").hide(500);
          $("#frmAddKelas").show(1000);
          $("#btnAddKelas").hide();
          $("#btnCancel").show(1001);
          $("#btnUpdate").show(1001);
          $("#btnUpdate").attr('onclick','updateKelas()');
        }
      });
    }

    function updateKelas(){
      var unit = $("#unit").val();
      var kd_kls = $("#kd_kls").val();
      var nm_kelas = $("#nm_kelas").val();
      var angka = $("#angka").val();
      if(!unit||!kd_kls||!nm_kelas||!angka){
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/updateDataKelas'); ?>",
          data : {unit:unit, kd_kls:kd_kls, nm_kelas:nm_kelas, angka:angka},
          success : function(response) {
            if (jQuery.trim(response)==="success") {
              dataTbKelas();
              cancelAdd('Kelas');
              alertSuccessUpdate();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });
      }
    }

    function deleteKelas(id)
    {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteKelas'); ?>",
        data : {id:id},
        success : function(response){
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbKelas();
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            alertFailedDelete();
          }
        }
      });
    }

    function dataTbKlsParalel() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKlsParalel') ?>",
        dataType : "JSON",
        success  : function(response) {
          $("#tbKlsParalel > tbody").empty(); var no=1;
          $.each(response, function(Index,Value){
            $("#tbKlsParalel > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.kd_kls+"</td>"+
                "<td>"+Value.nm_kelas+"</td>"+
                "<td>"+Value.nm_kls_paralel+"</td>"+
                "<td>"+Value.unit+"</td>"+
                "<td>"+Value.nama+"</td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editKlsParalel('"+Value. kd_kls_paralel+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('KlsParalel','"+Value. kd_kls_paralel+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    function selectKelas() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKelas'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#kd_kls_select").empty();
          $("#kd_kls_select").append(
              "<option selected>Pilih Kelas</option>"
            );
          $.each(response, function(Index,Value){
            $("#kd_kls_select").append(
              "<option value='"+Value.kd_kls+"'>"+Value.nm_kelas+" - ( "+Value.unit+" )</option>"
            );
          })
          $("#edit_kls").empty();
          $("#edit_kls").append(
              "<option selected>Pilih Kelas</option>"
            );
          $.each(response, function(Index,Value){
            $("#edit_kls").append(
              "<option value='"+Value.kd_kls+"'>"+Value.nm_kelas+" - ( "+Value.unit+" )</option>"
            );
          })
        }
      });
    }

    $('#kd_kls_select').select2({
      placeholder: 'Pilih Kelas',
    });

    function selectWaliKelas(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataGuru'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#wali_kelas").empty();
          $("#wali_kelas").append(
              "<option selected>Pilih Guru</option>"
            );
          $.each(response, function(Index,Value){
            $("#wali_kelas").append(
              "<option value='"+Value.nip+"'>"+Value.nama_guru+"</option>"
            );
          })
        }
      });
    }

    $("#wali_kelas").select2({
      placeholder: 'Pilih Wali Kelas',
    });

    function saveKlsParalel(){
      var kd_kls = $("#kd_kls_select").val();
      var kls_paralel = $("#kls_paralel").val();
      var wali_kelas = $("#wali_kelas").val();

      if (!kd_kls||!kls_paralel||!wali_kelas) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/insertKlsParalel'); ?>",
          data : {kd_kls:kd_kls, kls_paralel:kls_paralel, wali_kelas:wali_kelas},
          success : function(response){
            if (jQuery.trim(response)==="success") {
              dataTbKlsParalel();
              cancelAdd('KlsParalel');
              alertSuccessSave();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }
    }

    function deleteKlsParalel(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteKlsParalel'); ?>",
        data : {id:id},
        success : function(response) {
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbKlsParalel();
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            alertFailedDelete();
          }
        }
      });
    }

    function editKlsParalel(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKlsParalelById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response){
          $("#kd_kls_select").val(response[0].kd_kls);
          $("#kls_paralel").val(response[0].nm_kls_paralel);
          $("#wali_kelas").val(response[0].wali_kelas);

          $("#frmTbKlsParalel").hide(500);
          $("#frmAddKlsParalel").show(1000);
          $("#btnAddKlsParalel").hide();
          $("#btnCancel").show(1001);
          $("#btnUpdate").show(1001);
          $("#btnUpdate").attr('onclick','updateKlsParalel("'+id+'")');
        }
      });
    }

    function updateKlsParalel(id) {
      var kd_kls = $("#kd_kls_select").val();
      var kls_paralel = $("#kls_paralel").val();
      var wali_kelas = $("#wali_kelas").val();

      if (!kd_kls||!kls_paralel||!wali_kelas) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/updateKlsParalel'); ?>",
          data : {id:id, kd_kls:kd_kls, kls_paralel:kls_paralel, wali_kelas:wali_kelas},
          success : function(response){
            if (jQuery.trim(response)==="success") {
              dataTbKlsParalel();
              cancelAdd('KlsParalel');
              alertSuccessUpdate();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });
      }
    }

    function dataTbSiswa() {
      var unit = $("#selectUnit").val();
      var kd_kls_paralel = $("#selectKlsParalel").val();
      if (!unit||!kd_kls_paralel) {
        alertEmptyImportanInput()
      }else{
        $("#tbSiswa").dataTable().fnDestroy();
        $("#tbSiswa").dataTable({
          // "fixedHeader" : true,
          "pageLength" : 50,
          "autoWidth" : false,
          "ordering" : false,
          "bProcessing" : true,
          "bServerSide" : true,
          "bJQueryUI" : true,
          "sPaginationType" : "full_numbers",
          "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getDataSiswa/",
          "aoColumnDefs": [
            { "sWidth": "10%", "aTargets": [ -1 ] }
        ],
          "columns" : [
            {"data" : "nipd", "name" : "a.nipd"},
            {"data" : "nipd", "name" : "a.nipd"},
            {"data" : "nisn", "name" : "a.nisn"},
            {"data" : "nama", "name" : "a.nama"},
            {"data" : "kd_kls", "name" : "a.kd_kls"},
            {"data" : "nm_kls_paralel", "name" : "c.nm_kls_paralel"},
            {"data" : "unit", "name" : "b.unit"},
            {"data" : "jurusan", "name" : "d.jurusan"},
            {"data" : "nipd", "name" : "nipd"}

          ],
          "fnServerData" : function(sSource,aoData,fnCallback){
            aoData.push({"name":"kd_kls_paralel","value":kd_kls_paralel});
            aoData.push({"name":"unit","value":unit});
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
            $("td:eq(8)",nRow).html("<button class='btn btn-info btn-sm' onclick=detailSiswa('"+aData["nipd"]+"') title='Detail'><i class='fa fa-list'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Siswa','"+aData["nipd"]+"') title='Delete'><i class='fa fa-trash'></i></button>");
          }
        });
      }
    }

    function selectUnitSiswa() {
      var unit = $("#selectUnit").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKlsParalelByUnit'); ?>",
        data : {unit:unit},
        dataType : "JSON",
        success : function(response){
          $("#selectKlsParalel").empty();
          $("#selectKlsParalel").append(
              "<option selected>Pilih Kelas *</option>"
            );
          $.each(response, function(Index,Value){
            $("#selectKlsParalel").append(
              "<option value='"+Value.kd_kls_paralel+"'>"+Value.nm_kls_paralel+"</option>"
            );
          })
        }
      });
    }

    function backPreviewSiswa() {
      $("#btnPrintSiswa").show();
      $("#btnImportSiswa").show();
      $("#btnAddSiswa").show();
      $("#formDetailSiswa").hide(500);
      $("#frmAddSiswa").hide();
      $("#frmTbSiswa").show();
      $("#mainFormSiswa").show(500);
      $("#btnCancel").hide();
      $("#btnSave").hide();
      $("#btnUpdate").hide();
      $("#btnCancel").text("Cancel");
    }

    function changeData(param) {
      if (param=="ds") {
        $("#do").removeClass("show");
        $("#ds").addClass("show");
      }else if(param=="do"){
        $("#ds").removeClass("show");
        $("#do").addClass("show");
      }else if(param=="ds1"){
        $("#do1").removeClass("show");
        $("#ds1").addClass("show");
      }else if (param=="do1") {
        $("#ds1").removeClass("show");
        $("#do1").addClass("show");
      }
    }

    function getKelasByUnit() {
      var unit = $("#input_unit").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKlsByUnit'); ?>",
        data : {unit:unit},
        dataType : "JSON",
        success : function(response){
          $("#input_kls").empty();
          $("#input_kls").append(
              "<option selected>Pilih Kelas *</option>"
            );
          $.each(response, function(Index,Value){
            $("#input_kls").append(
              "<option value='"+Value.kd_kls+"'>"+Value.nm_kelas+"</option>"
            );
          })
        }
      });
    }

    function getKelasParalerByKls() {
      var kd_kls = $("#input_kls").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKlsParalelByKls'); ?>",
        data : {kd_kls:kd_kls},
        dataType : "JSON",
        success : function(response){
          $("#input_klsParalel").empty();
          $("#input_klsParalel").append(
              "<option selected>Pilih Kelas Paralel *</option>"
            );
          $.each(response, function(Index,Value){
            $("#input_klsParalel").append(
              "<option value='"+Value.kd_kls_paralel+"'>"+Value.nm_kls_paralel+"</option>"
            );
          })
        }
      })
    }

    function detailSiswa(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataSiswaByNipd'); ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response){
          if (!response[0].photo) {
            $("#photo").attr("src","<?php echo base_url() ?>assets/home/img/avatar.jpg")
          }else{
            $("#photo").attr("src","<?php echo base_url() ?>assets/photo_siswa/"+response[0].photo+"")
          }
          $("#hdNamaSiswa").text(response[0].nama);
          $("#lbNmSiswa").text(response[0].nama);
          $("#edit_nmSiswa").val(response[0].nama);
          $("#lbNIK").text(response[0].nik);
          $("#edit_nik").val(response[0].nik);
          $("#lbNIPD").text(response[0].nipd);
          $("#edit_nipd").val(response[0].nipd);
          $("#lbNISN").text(response[0].nisn);
          $("#edit_nisn").val(response[0].nisn);
          $("#lbTmptLahir").text(response[0].tempat_lahir);
          $("#edit_tmptLahir").val(response[0].tempat_lahir);
          $("#lbTglLahir").text(response[0].tanggal_lahir);
          $("#edit_tglLahir").val(response[0].tanggal_lahir);
          $("#lbGender").text(response[0].gender);
          $("#edit_gender").val(response[0].gender);
          $("#lbAgama").text(response[0].agama);
          $("#edit_agama").val(response[0].agama);
          $("#lbKls").text(response[0].kd_kls);
          $("#lbUnit").text(response[0].unit);
          $("#edit_unit").val(response[0].unit);
          $("#edit_kls").val(response[0].kd_kls);
          $("#lbKlsParalel").text(response[0].nm_kls_paralel)
          $("#edit_klsParalel").val(response[0].kd_kls_paralel)
          $("#lbJurusan").text(response[0].jurusan)
          $("#edit_jurusan").val(response[0].jurusan)
          $("#lbAngkatan").text(response[0].angkatan)
          $("#edit_angkatan").val(response[0].angkatan)
          $("#lbAlamat").text(response[0].alamat)
          $("#edit_alamat").val(response[0].alamat)
          $("#lbTlp").text(response[0].no_tlp)
          $("#edit_tlp").val(response[0].no_tlp)
          $("#lbRtRw").text(response[0].rt+"/"+response[0].rw)
          $("#edit_rt").val(response[0].rt)
          $("#edit_rw").val(response[0].rw)
          $("#lbDesa").text(response[0].desa)
          $("#edit_desa").val(response[0].desa)
          $("#lbKecamatan").text(response[0].kecamatan)
          $("#edit_kecamatan").val(response[0].kecamatan)
          $("#lbKota").text(response[0].kota)
          $("#edit_kota").val(response[0].kota)
          $("#lbPos").text(response[0].kd_pos)
          $("#edit_kdPos").val(response[0].kd_pos)
          $("#lbStatusKPS").text(response[0].status_kps)
          $("#edit_statusKPS").val(response[0].status_kps)
          $("#lbNoKPS").text(response[0].no_kps)
          $("#edit_noKPS").val(response[0].no_kps)
          $("#lbSkhun").text(response[0].skhun)
          $("#edit_skhun").val(response[0].skhun)
          $("#lbNmBpk").text(response[0].nm_bpk)
          $("#edit_nmBpk").val(response[0].nm_bpk)
          $("#lbNmIbu").text(response[0].nm_ibu)
          $("#edit_nmIbu").val(response[0].nm_ibu)
          $("#lbTglLahirBpk").text(response[0].thn_lahir_bpk)
          $("#edit_thnLhrBpk").val(response[0].thn_lahir_bpk)
          $("#lbTglLahirIbu").text(response[0].thn_lahir_ibu)
          $("#edit_thnLhrIbu").val(response[0].thn_lahir_ibu)
          $("#lbPendidikanBpk").text(response[0].pendidikan_bpk)
          $("#edit_pendidikanBpk").val(response[0].pendidikan_bpk)
          $("#lbPendidikanIbu").text(response[0].pendidikan_ibu)
          $("#edit_pendidikanIbu").val(response[0].pendidikan_ibu)
          $("#lbPekerjaanBpk").text(response[0].pekerjaan_bpk)
          $("#edit_pekerjaanBpk").val(response[0].pekerjaan_bpk)
          $("#lbPekerjaanIbu").text(response[0].pekerjaan_ibu)
          $("#edit_pekerjaanIbu").val(response[0].pekerjaan_ibu)
          $("#lbTlpBpk").text(response[0].no_tlp_bpk)
          $("#edit_noTlpBpk").val(response[0].no_tlp_bpk)
          $("#lbTlpIbu").text(response[0].no_tlp_ibu)
          $("#edit_noTlpIbu").val(response[0].no_tlp_ibu)
          $("#lbPhoto").text(response[0].photo)

          $("#mainFormSiswa").hide();
          $("#formDetailSiswa").show(500);
        }
      });
    }

    function editDataSiswa(){
      $("#lbNmSiswa").hide();
      $("#edit_nmSiswa").show();
      $("#lbNIK").hide();
      $("#edit_nik").show();
      $("#lbNIPD").hide();
      $("#edit_nipd").show();
      $("#lbNISN").hide();
      $("#edit_nisn").show();
      $("#lbTmptLahir").hide();
      $("#edit_tmptLahir").show();
      $("#lbTglLahir").hide();
      $("#edit_tglLahir").show();
      $("#lbGender").hide();
      $("#edit_gender").show();
      $("#lbAgama").hide();
      $("#edit_agama").show();
      $("#lbKls").hide();
      $("#lbUnit").hide();
      $("#edit_unit").show();
      $("#edit_kls").show();
      $("#lbKlsParalel").hide()
      $("#edit_klsParalel").show()
      $("#lbJurusan").hide()
      $("#edit_jurusan").show()
      $("#lbAngkatan").hide()
      $("#edit_angkatan").show()
      $("#lbAlamat").hide()
      $("#edit_alamat").show()
      $("#lbTlp").hide()
      $("#edit_tlp").show()
      $("#lbRtRw").hide()
      $("#edit_rt").show()
      $("#edit_rw").show()
      $("#lbDesa").hide()
      $("#edit_desa").show()
      $("#lbKecamatan").hide()
      $("#edit_kecamatan").show()
      $("#lbKota").hide()
      $("#edit_kota").show()
      $("#lbPos").hide()
      $("#edit_kdPos").show()
      $("#lbStatusKPS").hide()
      $("#edit_statusKPS").show()
      $("#lbNoKPS").hide()
      $("#edit_noKPS").show()
      $("#lbSkhun").hide()
      $("#edit_skhun").show()
      $("#lbNmBpk").hide()
      $("#edit_nmBpk").show()
      $("#lbNmIbu").hide()
      $("#edit_nmIbu").show()
      $("#lbTglLahirBpk").hide()
      $("#edit_thnLhrBpk").show()
      $("#lbTglLahirIbu").hide()
      $("#edit_thnLhrIbu").show()
      $("#lbPendidikanBpk").hide()
      $("#edit_pendidikanBpk").show()
      $("#lbPendidikanIbu").hide()
      $("#edit_pendidikanIbu").show()
      $("#lbPekerjaanBpk").hide()
      $("#edit_pekerjaanBpk").show()
      $("#lbPekerjaanIbu").hide()
      $("#edit_pekerjaanIbu").show()
      $("#lbTlpBpk").hide()
      $("#edit_noTlpBpk").show()
      $("#lbTlpIbu").hide()
      $("#edit_noTlpIbu").show()
      $("#lbPhoto").hide()
      $("#edit_photo").show()

      $("#btnCancelEdit").show();
      $("#btnUpdate").show();
    }

    function cancelEditDataSiswa() {
      $("#lbNmSiswa").show();
      $("#edit_nmSiswa").hide();
      $("#lbNIK").show();
      $("#edit_nik").hide();
      $("#lbNIPD").show();
      $("#edit_nipd").hide();
      $("#lbNISN").show();
      $("#edit_nisn").hide();
      $("#lbTmptLahir").show();
      $("#edit_tmptLahir").hide();
      $("#lbTglLahir").show();
      $("#edit_tglLahir").hide();
      $("#lbGender").show();
      $("#edit_gender").hide();
      $("#lbAgama").show();
      $("#edit_agama").hide();
      $("#lbKls").show();
      $("#lbUnit").show();
      $("#edit_unit").hide();
      $("#edit_kls").hide();
      $("#lbKlsParalel").show()
      $("#edit_klsParalel").hide()
      $("#lbJurusan").show()
      $("#edit_jurusan").hide()
      $("#lbAngkatan").show()
      $("#edit_angkatan").hide()
      $("#lbAlamat").show()
      $("#edit_alamat").hide()
      $("#lbTlp").show()
      $("#edit_tlp").hide()
      $("#lbRtRw").show()
      $("#edit_rt").hide()
      $("#edit_rw").hide()
      $("#lbDesa").show()
      $("#edit_desa").hide()
      $("#lbKecamatan").show()
      $("#edit_kecamatan").hide()
      $("#lbKota").show()
      $("#edit_kota").hide()
      $("#lbPos").show()
      $("#edit_kdPos").hide()
      $("#lbStatusKPS").show()
      $("#edit_statusKPS").hide()
      $("#lbNoKPS").show()
      $("#edit_noKPS").hide()
      $("#lbSkhun").show()
      $("#edit_skhun").hide()
      $("#lbNmBpk").show()
      $("#edit_nmBpk").hide()
      $("#lbNmIbu").show()
      $("#edit_nmIbu").hide()
      $("#lbTglLahirBpk").show()
      $("#edit_thnLhrBpk").hide()
      $("#lbTglLahirIbu").show()
      $("#edit_thnLhrIbu").hide()
      $("#lbPendidikanBpk").show()
      $("#edit_pendidikanBpk").hide()
      $("#lbPendidikanIbu").show()
      $("#edit_pendidikanIbu").hide()
      $("#lbPekerjaanBpk").show()
      $("#edit_pekerjaanBpk").hide()
      $("#lbPekerjaanIbu").show()
      $("#edit_pekerjaanIbu").hide()
      $("#lbTlpBpk").show()
      $("#edit_noTlpBpk").hide()
      $("#lbTlpIbu").show()
      $("#edit_noTlpIbu").hide()

      $("#btnCancelEdit").hide();
      $("#btnUpdate").hide();
    }

    $('#saveDataSiswa').submit(function(e){
      var nipd = $("#nipd").val();
      e.preventDefault(); 
      $.ajax({
        url:"<?php echo base_url('circle_student/main/insertDataSiswa');?>",
        type:"post",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
          if (jQuery.trim(response)==="success") {
            dataTbSiswa();
            alertSuccessSave();
            detailSiswa(nipd);
          }else if(jQuery.trim(response)==="failed"){
            alertFailedSave();
          }
        }
      });
    });

    $('#updateDataSiswa').submit(function(e){
      var nipd = $("#edit_nipd").val();
      e.preventDefault(); 
      $.ajax({
        url:"<?php echo base_url('circle_student/main/updateDataSiswa');?>",
        type:"post",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
          if (jQuery.trim(response)==="success") {
            dataTbSiswa();
            detailSiswa(nipd);
            cancelEditDataSiswa();
            alertSuccessUpdate();
          }else if(jQuery.trim(response)==="failed"){
            alertFailedUpdate();
          }
        }
      });
    });

    function selectEditUnit() {
      var unit = $("#edit_unit").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKlsByUnit'); ?>",
        data : {unit:unit},
        dataType : "JSON",
        success : function(response){
          $("#edit_kls").empty();
          $("#edit_kls").append(
              "<option selected>Pilih Kelas</option>"
            );
          $.each(response, function(Index,Value){
            $("#edit_kls").append(
              "<option value='"+Value.kd_kls+"'>"+Value.nm_kelas+"</option>"
            );
          })

          if (unit=="SMA") {
            $("#edit_jurusan").prop("disabled",false);
            $.ajax({
              type : "POST",
              url  : "<?php echo base_url('circle_student/main/getDataJurusan') ?>",
              dataType : "JSON",
              success : function(response) {
                $("#edit_jurusan").empty();
                $("#edit_jurusan").append(
                    "<option selected>Pilih Jurusan</option>"
                  );
                $.each(response, function(Index,Value){
                  $("#edit_jurusan").append(
                    "<option value='"+Value.jurusan+"'>"+Value.nm_jurusan+" ("+Value.jurusan+")</option>"
                  );
                }) 
              }
            });
          }else{
            $("#edit_jurusan").prop("disabled",true);
          }
        }
      });
    }

    function selectedEditKls() {
      var kd_kls = $("#edit_kls").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKlsParalelByKls'); ?>",
        data : {kd_kls:kd_kls},
        dataType : "JSON",
        success : function(response){
          $("#edit_klsParalel").empty();
          $("#edit_klsParalel").append(
              "<option selected>Pilih Kelas</option>"
            );
          $.each(response, function(Index,Value){
            $("#edit_klsParalel").append(
              "<option value='"+Value.kd_kls_paralel+"'>"+Value.nm_kls_paralel+"</option>"
            );
          })
        }
      })
    }

    function deleteSiswa(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteSiswa'); ?>",
        data : {id:id},
        success : function(response) {
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbSiswa();
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            alertFailedDelete();
          }
        }
      });
    }

    function importSiswa(){
      $("#frmImportSiswa").show(500);
      $("#frmAddSiswa").hide();
      $("#frmTbSiswa").hide();
      $("#btnCancel").hide();
      $("#btnCancelImport").show();
      $("#btnImport").show();
    }

    $('#importDataSiswa').submit(function(e){
      e.preventDefault(); 
      $.ajax({
        url:"<?php echo base_url('circle_student/main/importDataSiswa');?>",
        type:"post",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
          if (jQuery.trim(response)==="success") {
            cancelAdd("Siswa");
            alertSuccessSave();
            $("#excel_siswa").val("");
          }else if(jQuery.trim(response)==="failed"){
            alertFailedSave();
          }
        }
      });
    });

    function printSiswa() {
      var unit = $("#selectUnit").val();
      var kls_paralel = $("#selectKlsParalel").val();
      if (!unit||!kls_paralel) {
        alertEmptyImportanInput();
      }else{
        window.open("<?php echo base_url() ?>circle_student/main/printSiswa/"+unit+"/"+kls_paralel+"",'_blank');
      }
    }

    function dataTbGuru(){
      var unit = $("#selectUnit").val();
      $("#tbGuru").dataTable().fnDestroy();
      $("#tbGuru").dataTable({
        // "fixedHeader" : true,
        "pageLength" : 50,
        "autoWidth" : false,
        "ordering" : false,
        "bProcessing" : true,
        "bServerSide" : true,
        "bJQueryUI" : true,
        "sPaginationType" : "full_numbers",
        "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getDataGuruByUnit/",
        "aoColumnDefs": [
          { "sWidth": "10%", "aTargets": [ -1 ] }
        ],
        "columns" : [
          {"data" : "nip", "name" : "nip"},
          {"data" : "nip", "name" : "nip"},
          {"data" : "nama_guru", "name" : "nama_guru"},
          {"data" : "no_tlp", "name" : "no_tlp"},
          {"data" : "status_kepegawaian", "name" : "status_kepegawaian"},
          {"data" : "jenis_ptk", "name" : "jenis_ptk"},
          {"data" : "unit", "name" : "unit"},
          {"data" : "nip", "name" : "nip"}

        ],
        "fnServerData" : function(sSource,aoData,fnCallback){
          aoData.push({"name":"unit","value":unit});
          // aoData.push({"name":"unit","value":unit});
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
          $("td:eq(7)",nRow).html("<button class='btn btn-info btn-sm' onclick=detailGuru('"+aData["nip"]+"') title='Detail'><i class='fa fa-list'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Guru','"+aData["kd_guru"]+"') title='Delete'><i class='fa fa-trash'></i></button>");
        }
      });
    }

    function detailGuru(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDetailGuru'); ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response) {
          if (!response[0].photo_guru) {
            $("#photo").attr("src","<?php echo base_url() ?>assets/home/img/avatar.jpg")
          }else{
            $("#photo").attr("src","<?php echo base_url() ?>assets/photo_guru/"+response[0].photo_guru+"")
          }
          $("#mainFormGuru").hide(50)
          $("#formDetailGuru").show(500);


          $("#lbUnit").text(response[0].unit);
          $("#edit_unit").val(response[0].unit);
          $("#lbNip").text(response[0].nip);
          $("#edit_nip").val(response[0].nip);
          $("#lbNama").text(response[0].nama_guru);
          $("#edit_nama").val(response[0].nama_guru);
          $("#lbNIK").text(response[0].nik);
          $("#edit_nik").val(response[0].nik);
          $("#lbTmptLahir").text(response[0].tempat_lahir);
          $("#edit_tmptLahir").val(response[0].tempat_lahir);
          $("#lbTglLahir").text(response[0].tanggal_lahir);
          $("#edit_tglLahir").val(response[0].tanggal_lahir);
          $("#lbGender").text(response[0].gender);
          $("#edit_gender").val(response[0].gender);
          $("#lbAgama").text(response[0].agama);
          $("#edit_agama").val(response[0].agama);
          $("#lbKewarganegaraan").text(response[0].kewarganegaraan);
          $("#edit_kewarganegaraan").val(response[0].kewarganegaraan);
          $("#lbTlp").text(response[0].no_tlp);
          $("#edit_tlp").val(response[0].no_tlp);
          $("#lbEmail").text(response[0].email);
          $("#edit_email").val(response[0].email);
          $("#lbAlamat").text(response[0].alamat);
          $("#edit_alamat").val(response[0].alamat);
          $("#lbRtRw").text(response[0].rt+"/"+response[0].rw);
          $("#edit_rt").val(response[0].rt);
          $("#edit_rw").val(response[0].rw);
          $("#lbKecamatan").text(response[0].kecamatan);
          $("#edit_kecamatan").val(response[0].kecamatan);
          $("#lbDesa").text(response[0].desa);
          $("#edit_desa").val(response[0].desa);
          $("#lbKota").text(response[0].kota);
          $("#edit_kota").val(response[0].kota);
          $("#lbPos").text(response[0].kd_pos);
          $("#edit_kdPos").val(response[0].kd_pos);
          $("#lbNuptk").text(response[0].nuptk);
          $("#edit_nuptk").val(response[0].nuptk);
          $("#lbBidangStudi").text(response[0].pengawas_bidang_studi);
          $("#edit_bidangStudi").val(response[0].pengawas_bidang_studi);
          $("#lbPtk").text(response[0].jenis_ptk);
          $("#edit_ptk").val(response[0].jenis_ptk);
          $("#lbTgsTambahan").text(response[0].tugas_tambahan);
          $("#edit_tgsTambahan").val(response[0].tugas_tambahan);
          $("#lbStsPegawai").text(response[0].status_kepegawaian);
          $("#edit_stsPegawai").val(response[0].status_kepegawaian);
          $("#lbStsKeaktifan").text(response[0].status_keaktifan);
          $("#edit_stsKeaktifan").val(response[0].status_keaktifan);
          $("#lbStsNikah").text(response[0].status_pernikahan);
          $("#edit_stsNikah").val(response[0].status_pernikahan);
          $("#lbSkCpns").text(response[0].sk_cpns);
          $("#edit_skCpns").val(response[0].sk_cpns);
          $("#lbTglCpns").text(response[0].tanggal_cpns);
          $("#edit_tglCpns").val(response[0].tanggal_cpns);
          $("#lbSkPengangkatan").text(response[0].sk_pengangkatan);
          $("#edit_skPengangkatan").val(response[0].sk_pengangkatan);
          $("#lbTmtPengangkatan").text(response[0].tmt_pengangkatan);
          $("#edit_tmtPengangkatan").val(response[0].tmt_pengangkatan);
          $("#lbLbPengangkatan").text(response[0].lembaga_pengangkatan);
          $("#edit_lbPengangkatan").val(response[0].lembaga_pengangkatan);
          $("#lbGolongan").text(response[0].golongan);
          $("#edit_golongan").val(response[0].golongan);
          $("#lbSumberGaji").text(response[0].sumber_gaji);
          $("#edit_sumberGaji").val(response[0].sumber_gaji);
          $("#lbAhliLaboratorium").text(response[0].keahlian_laboratorium);
          $("#edit_ahliLaboratorium").val(response[0].keahlian_laboratorium);
          $("#lbIbu").text(response[0].nama_ibu_kandung);
          $("#edit_ibu").val(response[0].nama_ibu_kandung);
          $("#lbNmSuamiIstri").text(response[0].nama_suami_istri);
          $("#edit_nmSuamiIstri").val(response[0].nama_suami_istri);
          $("#lbNipSuamiIstri").text(response[0].nip_suami_istri);
          $("#edit_nipSuamiIstri").val(response[0].nip_suami_istri);
          $("#lbPekerjaanSuamiIstri").text(response[0].pekerjaan_suami_istri);
          $("#edit_pekerjaanSuamiIstri").val(response[0].pekerjaan_suami_istri);
          $("#lbTmtPns").text(response[0].tmt_pns);
          $("#edit_tmtPns").val(response[0].tmt_pns);
          $("#lbLisensiKepsek").text(response[0].lisensi_kepsek);
          $("#edit_lisensiKepsek").val(response[0].lisensi_kepsek);
          $("#lbSekolahBinaan").text(response[0].jumlah_sekolah_binaan);
          $("#edit_sekolahBinaan").val(response[0].jumlah_sekolah_binaan);
          $("#lbDiklatKepengawasan").text(response[0].diklat_kepengawasan);
          $("#edit_diklatKepengawasan").val(response[0].diklat_kepengawasan);
          $("#lbHandleKk").text(response[0].mampu_handle_kk);
          $("#edit_handleKk").val(response[0].mampu_handle_kk);
          $("#lbBreile").text(response[0].keahlian_breile);
          $("#edit_breile").val(response[0].keahlian_breile);
          $("#lbBhsIsyarat").text(response[0].keahlian_bahasa_isyarat);
          $("#edit_bhsIsyarat").val(response[0].keahlian_bahasa_isyarat);
          $("#lbNiyNig").text(response[0].niy_nigk);
          $("#edit_niyNig").val(response[0].niy_nigk);
          $("#lbNpwp").text(response[0].npwp);
          $("#edit_npwp").val(response[0].npwp);
          $("#lbPhoto").text(response[0].photo_guru);
        }
      });
    }

    function backPreviewGuru(){
      $("#formDetailGuru").hide(500);
      $("#frmAddGuru").hide();
      $("#frmTbGuru").show();
      $("#mainFormGuru").show(500);
      $("#btnCancel").hide();
      $("#btnSave").hide();
      $("#btnUpdate").hide();
      $("#btnCancel").text("Cancel");
    }

    function editDataGuru(){
      $("#lbUnit").hide();
      $("#edit_unit").show();
      $("#lbNip").hide();
      $("#edit_nip").show();
      $("#lbNama").hide();
      $("#edit_nama").show();
      $("#lbNIK").hide();
      $("#edit_nik").show();
      $("#lbTmptLahir").hide();
      $("#edit_tmptLahir").show();
      $("#lbTglLahir").hide();
      $("#edit_tglLahir").show();
      $("#lbGender").hide();
      $("#edit_gender").show();
      $("#lbAgama").hide();
      $("#edit_agama").show();
      $("#lbKewarganegaraan").hide();
      $("#edit_kewarganegaraan").show();
      $("#lbTlp").hide();
      $("#edit_tlp").show();
      $("#lbEmail").hide();
      $("#edit_email").show();
      $("#lbAlamat").hide();
      $("#edit_alamat").show();
      $("#lbRtRw").hide();
      $("#edit_rt").show();
      $("#edit_rw").show();
      $("#lbKecamatan").hide();
      $("#edit_kecamatan").show();
      $("#lbDesa").hide();
      $("#edit_desa").show();
      $("#lbKota").hide();
      $("#edit_kota").show();
      $("#lbPos").hide();
      $("#edit_kdPos").show();
      $("#lbNuptk").hide();
      $("#edit_nuptk").show();
      $("#lbBidangStudi").hide();
      $("#edit_bidangStudi").show();
      $("#lbPtk").hide();
      $("#edit_ptk").show();
      $("#lbTgsTambahan").hide();
      $("#edit_tgsTambahan").show();
      $("#lbStsPegawai").hide();
      $("#edit_stsPegawai").show();
      $("#lbStsKeaktifan").hide();
      $("#edit_stsKeaktifan").show();
      $("#lbStsNikah").hide();
      $("#edit_stsNikah").show();
      $("#lbSkCpns").hide();
      $("#edit_skCpns").show();
      $("#lbTglCpns").hide();
      $("#edit_tglCpns").show();
      $("#lbSkPengangkatan").hide();
      $("#edit_skPengangkatan").show();
      $("#lbTmtPengangkatan").hide();
      $("#edit_tmtPengangkatan").show();
      $("#lbLbPengangkatan").hide();
      $("#edit_lbPengangkatan").show();
      $("#lbGolongan").hide();
      $("#edit_golongan").show();
      $("#lbSumberGaji").hide();
      $("#edit_sumberGaji").show();
      $("#lbAhliLaboratorium").hide();
      $("#edit_ahliLaboratorium").show();
      $("#lbIbu").hide();
      $("#edit_ibu").show();
      $("#lbNmSuamiIstri").hide();
      $("#edit_nmSuamiIstri").show();
      $("#lbNipSuamiIstri").hide();
      $("#edit_nipSuamiIstri").show();
      $("#lbPekerjaanSuamiIstri").hide();
      $("#edit_pekerjaanSuamiIstri").show();
      $("#lbTmtPns").hide();
      $("#edit_tmtPns").show();
      $("#lbLisensiKepsek").hide();
      $("#edit_lisensiKepsek").show();
      $("#lbSekolahBinaan").hide();
      $("#edit_sekolahBinaan").show();
      $("#lbDiklatKepengawasan").hide();
      $("#edit_diklatKepengawasan").show();
      $("#lbHandleKk").hide();
      $("#edit_handleKk").show();
      $("#lbBreile").hide();
      $("#edit_breile").show();
      $("#lbBhsIsyarat").hide();
      $("#edit_bhsIsyarat").show();
      $("#lbNiyNig").hide();
      $("#edit_niyNig").show();
      $("#lbNpwp").hide();
      $("#edit_npwp").show();
      $("#lbPhoto").hide();
      $("#edit_photo").show();

      $("#btnCancelEdit").show();
      $("#btnUpdate").show();
    }

    function cancelEditDataGuru(){
      $("#lbUnit").show();
      $("#edit_unit").hide();
      $("#lbNip").show();
      $("#edit_nip").hide();
      $("#lbNama").show();
      $("#edit_nama").hide();
      $("#lbNIK").show();
      $("#edit_nik").hide();
      $("#lbTmptLahir").show();
      $("#edit_tmptLahir").hide();
      $("#lbTglLahir").show();
      $("#edit_tglLahir").hide();
      $("#lbGender").show();
      $("#edit_gender").hide();
      $("#lbAgama").show();
      $("#edit_agama").hide();
      $("#lbKewarganegaraan").show();
      $("#edit_kewarganegaraan").hide();
      $("#lbTlp").show();
      $("#edit_tlp").hide();
      $("#lbEmail").show();
      $("#edit_email").hide();
      $("#lbAlamat").show();
      $("#edit_alamat").hide();
      $("#lbRtRw").show();
      $("#edit_rt").hide();
      $("#edit_rw").hide();
      $("#lbKecamatan").show();
      $("#edit_kecamatan").hide();
      $("#lbDesa").show();
      $("#edit_desa").hide();
      $("#lbKota").show();
      $("#edit_kota").hide();
      $("#lbPos").show();
      $("#edit_kdPos").hide();
      $("#lbNuptk").show();
      $("#edit_nuptk").hide();
      $("#lbBidangStudi").show();
      $("#edit_bidangStudi").hide();
      $("#lbPtk").show();
      $("#edit_ptk").hide();
      $("#lbTgsTambahan").show();
      $("#edit_tgsTambahan").hide();
      $("#lbStsPegawai").show();
      $("#edit_stsPegawai").hide();
      $("#lbStsKeaktifan").show();
      $("#edit_stsKeaktifan").hide();
      $("#lbStsNikah").show();
      $("#edit_stsNikah").hide();
      $("#lbSkCpns").show();
      $("#edit_skCpns").hide();
      $("#lbTglCpns").show();
      $("#edit_tglCpns").hide();
      $("#lbSkPengangkatan").show();
      $("#edit_skPengangkatan").hide();
      $("#lbTmtPengangkatan").show();
      $("#edit_tmtPengangkatan").hide();
      $("#lbLbPengangkatan").show();
      $("#edit_lbPengangkatan").hide();
      $("#lbGolongan").show();
      $("#edit_golongan").hide();
      $("#lbSumberGaji").show();
      $("#edit_sumberGaji").hide();
      $("#lbAhliLaboratorium").show();
      $("#edit_ahliLaboratorium").hide();
      $("#lbIbu").show();
      $("#edit_ibu").hide();
      $("#lbNmSuamiIstri").show();
      $("#edit_nmSuamiIstri").hide();
      $("#lbNipSuamiIstri").show();
      $("#edit_nipSuamiIstri").hide();
      $("#lbPekerjaanSuamiIstri").show();
      $("#edit_pekerjaanSuamiIstri").hide();
      $("#lbTmtPns").show();
      $("#edit_tmtPns").hide();
      $("#lbLisensiKepsek").show();
      $("#edit_lisensiKepsek").hide();
      $("#lbSekolahBinaan").show();
      $("#edit_sekolahBinaan").hide();
      $("#lbDiklatKepengawasan").show();
      $("#edit_diklatKepengawasan").hide();
      $("#lbHandleKk").show();
      $("#edit_handleKk").hide();
      $("#lbBreile").show();
      $("#edit_breile").hide();
      $("#lbBhsIsyarat").show();
      $("#edit_bhsIsyarat").hide();
      $("#lbNiyNig").show();
      $("#edit_niyNig").hide();
      $("#lbNpwp").show();
      $("#edit_npwp").hide();
      $("#lbPhoto").show();
      $("#edit_photo").hide();

      $("#btnCancelEdit").hide();
      $("#btnUpdate").hide();
    }

    $('#updateDataGuru').submit(function(e){
      var nip = $("#edit_nip").val();
      e.preventDefault(); 
      $.ajax({
        url:"<?php echo base_url('circle_student/main/updateDataGuru');?>",
        type:"post",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
          if (jQuery.trim(response)==="success") {
            dataTbGuru();
            detailGuru(nip);
            cancelEditDataGuru();
            alertSuccessUpdate();
          }else if(jQuery.trim(response)==="failed"){
            alertFailedUpdate();
          }
        }
      });
    });


    function changePassGuru(){
      var nip = $("#edit_nip").val();
      var oldPass = $("#oldPass").val();
      var newPass = $("#newPass").val();
      if (!oldPass || !newPass) {
        $("#form_newPass").addClass("has-danger");
        $("#form_oldPass").addClass("has-danger");
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo site_url("circle_student/main/change_pass_guru") ?>",
          data : {oldPass:oldPass,newPass:newPass,nip:nip},
          success:function(response){
            if (jQuery.trim(response)==="success") {
              $("#alert_changePass").removeClass("alert-warning");
              $("#alert_changePass").addClass("alert-success");
              $("#txt_alertChangePass").text("Change Password Success !");
              $("#alert_changePass").show();
              setTimeout(function(){
                $("#modal_changePass").modal("hide");
              },5000);
              $("#newPass").val("");
              $("#oldPass").val("");
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

    $('#inputDataGuru').submit(function(e){
      e.preventDefault(); 
      $.ajax({
        url:"<?php echo base_url('circle_student/main/inputDataGuru');?>",
        type:"post",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
          if (jQuery.trim(response)==="success") {
            dataTbGuru();
            cancelAdd('Guru');
            alertSuccessSave();
          }else if(jQuery.trim(response)==="failed"){
            alertFailedSave();
          }
        }
      });
    });

    function deleteGuru(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteGuru') ?>",
        data : {id:id},
        success : function(response) {
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbGuru();
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            alertFailedDelete();
          }
        }
      });
    }

    function importGuru(){
      $("#frmImportGuru").show(500);
      $("#frmAddGuru").hide();
      $("#frmTbGuru").hide();
      $("#btnCancel").hide();
      $("#btnImport").show();
      $("#btnCancelImport").show();
    }

    $('#importDataGuru').submit(function(e){
      e.preventDefault(); 
      $.ajax({
        url:"<?php echo base_url('circle_student/main/importDataGuru');?>",
        type:"post",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
          if (jQuery.trim(response)==="success") {
            cancelAdd("Guru");
            alertSuccessSave();
            $("#excel_guru").val("");
          }else if(jQuery.trim(response)==="failed"){
            alertFailedSave();
          }
        }
      });
    });

    function dataTbKepsek() {
      $("#tbKepsek").dataTable().fnDestroy();
      $("#tbKepsek").dataTable({
        // "fixedHeader" : true,
        "pageLength" : 50,
        "autoWidth" : false,
        "ordering" : false,
        "bProcessing" : true,
        "bServerSide" : true,
        "bJQueryUI" : true,
        "sPaginationType" : "full_numbers",
        "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getDataKepsek/",
        "aoColumnDefs": [
          { "sWidth": "10%", "aTargets": [ -1 ] }
      ],
        "columns" : [
          {"data" : "nip", "name" : "a.nip"},
          {"data" : "nip", "name" : "a.nip"},
          {"data" : "nama_guru", "name" : "c.nama_guru"},
          {"data" : "unit", "name" : "b.unit"},
          {"data" : "nm_sekolah", "name" : "b.nm_sekolah"},
          {"data" : "nip", "name" : "a.nip"},
        ],
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
          $("td:eq(5)",nRow).html("<button class='btn btn-warning btn-sm' onclick=editKepsek('"+aData["kd_kepsek"]+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Kepsek','"+aData["kd_kepsek"]+"') title='Delete'><i class='fa fa-trash'></i></button>");
        }
      });
    }

    function selectKepsek(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataGuru'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#select_nmKepsek").empty();
          $("#select_nmKepsek").append(
              "<option selected>Pilih Kepsek</option>"
            );
          $.each(response, function(Index,Value){
            $("#select_nmKepsek").append(
              "<option value='"+Value.nip+"'>"+Value.nama_guru+"</option>"
            );
          })
        }
      });
    }

    $("#select_nmKepsek").select2({
      placeholder: 'Pilih Wali Kelas',
    });

    $('#select_nmKepsek').change(function(){
      $("#input_nip").val($(this).val());
    });

    function getDataSekolahByUnit() {
      var unit = $("#input_unit").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataSekolahByUnit'); ?>",
        data : {unit:unit},
        dataType : "JSON",
        success : function(response){
          $("#select_nmSekolah").empty();
          $("#select_nmSekolah").append(
              "<option selected>Pilih Sekolah</option>"
            );
          $.each(response, function(Index,Value){
            $("#select_nmSekolah").append(
              "<option value='"+Value.kd_sekolah+"'>"+Value.nm_sekolah+"</option>"
            );
          })
        }
      });
    }

    $("#select_nmSekolah").select2({
      placeholder: 'Pilih Sekolah',
    });

    function editKepsek(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDetailKepsek') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response){
          $("#btnAddKepsek").hide();
          $("#btnCancel").show();
          $("#btnUpdate").show();
          $("#frmTbKepsek").hide();
          $("#frmAddKepsek").show(500);

          $("#kd_kepsek").val(response[0].kd_kepsek);
          $("#input_nip").val(response[0].nip);
          $("#select_nmKepsek").val(response[0].nip).trigger('change.select2');
          $("#input_unit").val(response[0].unit);
          getDataSekolahByUnit()
          setTimeout (function(){
            $("#select_nmSekolah").val(response[0].kd_sekolah).trigger('change.select2');
          },100)
        }
      });
    }

    $("#inputDataKepsek").submit(function(e){
      e.preventDefault(); 
      var kd_kepsek = $("#kd_kepsek").val();
      if (!kd_kepsek) {
        $.ajax({
          url:"<?php echo base_url('circle_student/main/inputDataKepsek');?>",
          type:"post",
          data:new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              cancelAdd("Kepsek");
              alertSuccessSave();
              $("#excel_guru").val("");
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });  
      }else{
        $.ajax({
          url:"<?php echo base_url('circle_student/main/updateDataKepsek');?>",
          type:"post",
          data:new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              cancelAdd("Kepsek");
              alertSuccessUpdate();
              $("#excel_guru").val("");
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });  
      }
      
    });

    function deleteKepsek(id){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteKepsek') ?>",
        data : {id:id},
        success : function(response){
          if (jQuery.trim(response)==="success") {
              $("#confirmDelete").modal("hide");
              dataTbKepsek();
              alertSuccessDelete();
              $("#excel_guru").val("");
            }else if(jQuery.trim(response)==="failed"){
              $("#confirmDelete").modal("hide");
              alertFailedDelete();
            }
        }
      });
    }

    function dataTbAdmin() {
      $("#tbAdmin").dataTable().fnDestroy();
      $("#tbAdmin").dataTable({
        // "fixedHeader" : true,
        "pageLength" : 50,
        "autoWidth" : false,
        "ordering" : false,
        "bProcessing" : true,
        "bServerSide" : true,
        "bJQueryUI" : true,
        "sPaginationType" : "full_numbers",
        "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getAdminSekolah/",
        "aoColumnDefs": [
          { "sWidth": "10%", "aTargets": [ -1 ] }
      ],
        "columns" : [
          {"data" : "nip", "name" : "nip"},
          {"data" : "nip", "name" : "nip"},
          {"data" : "username", "name" : "username"},
          {"data" : "jabatan", "name" : "jabatan"},
          {"data" : "level", "name" : "level"},
          {"data" : "kd_user", "name" : "kd_user"},
        ],
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
          $("td:eq(5)",nRow).html("<button class='btn btn-warning btn-sm' onclick=editAdmin('"+aData["kd_user"]+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Admin','"+aData["kd_user"]+"') title='Delete'><i class='fa fa-trash'></i></button>");
        }
      });
    }

    function selectNmAdmin(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataGuru'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#select_nmAdmin").empty();
          $("#select_nmAdmin").append(
              "<option selected>Pilih Admin</option>"
            );
          $.each(response, function(Index,Value){
            $("#select_nmAdmin").append(
              "<option value='"+Value.nip+"'>"+Value.nama_guru+"</option>"
            );
          })
        }
      });
    }

    $("#select_nmAdmin").select2({
      placeholder: 'Pilih Admin',
    });

    $('#select_nmAdmin').change(function(){
      $("#input_nip").val($(this).val());
    });

    $("#inputDataAdmin").submit(function(e){
      e.preventDefault(); 
      var kd_user = $("#input_kdUser").val();
      if (!kd_user) {
        $.ajax({
          url:"<?php echo base_url('circle_student/main/inputDataAdminSekolah');?>",
          type:"post",
          data:new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              cancelAdd("Admin");
              dataTbAdmin();
              alertSuccessSave();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }else{
        $.ajax({
          url:"<?php echo base_url('circle_student/main/updateDataAdminSekolah');?>",
          type:"post",
          data:new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              cancelAdd("Admin");
              dataTbAdmin();
              alertSuccessSave();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }
    });  

    function editAdmin(id){
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('circle_student/main/getDataAdminSekolahById'); ?>",
            data : {id:id},
            dataType : "JSON",
            success : function(response){
              $("#frmTbAdmin").hide();
              $("#frmAddAdmin").show(500);
              $("#btnUpdate").show();
              $("#btnSave").hide();
              $("#btnCancel").show();

              $("#input_kdUser").val(response[0].kd_user);
              $("#input_nip").val(response[0].nip);
              $("#select_nmAdmin").val(response[0].nip).trigger("change.select2");
              $("#input_username").val(response[0].username);
              $("#input_jabatan").val(response[0].jabatan);
              $("#input_level").val(response[0].level);
            }
        });
      } 

      function deleteAdmin(id) {
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('circle_student/main/deleteAdmin'); ?>",
            data : {id:id},
            success : function(response) {
              if (jQuery.trim(response)==="success") {
                $("#confirmDelete").modal("hide");
                dataTbAdmin();
                alertSuccessDelete();
              }else if(jQuery.trim(response)==="failed"){
                $("#confirmDelete").modal("hide");
                alertFailedDelete();
              }
            }
        });
      }

      function dataTbKelompokMapel() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKelompokMapel') ?>",
        dataType : "JSON",
        success:function(response){
          $("#tbKelompokMapel > tbody").empty();var no=1;
          $.each(response, function(Index,Value){
            $("#tbKelompokMapel > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.kelompok+"</td>"+
                "<td>"+Value.keterangan+"</td>"+
                "<td align='center'><label class='custom-toggle'><input type='checkbox' "+ (Value.status == 'Aktif' ? 'checked' : '') +" onchange='changeStatusKelompokMapel("+Value.kd_kelompok_mapel+")'><span class='custom-toggle-slider rounded-circle'></span></label></td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editKelompokMapel('"+Value.kd_kelompok_mapel+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('KelompokMapel','"+Value.kd_kelompok_mapel+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    function changeStatusKelompokMapel(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/changeStatusKelompokMapel') ?>",
        dataType : "JSON",
        data : {id:id},
        success : function(response) {
          dataTbUnit()
        }
      })
    }

    function editKelompokMapel(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getKelompokMapelById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function (response) {
          $("#btnAddKelompokMapel").hide();
          $("#btnCancel").show();
          $("#btnUpdate").show();
          $("#frmTbKelompokMapel").hide();
          $("#frmAddKelompokMapel").show(500);

          $("#input_kdKelompokMapel").val(response[0].kd_kelompok_mapel);
          $("#input_kelompok").val(response[0].kelompok);
          $("#input_ket").val(response[0].keterangan);
          $("#input_status").val(response[0].status);
        }
      });
    }

    $("#inputDataKelompokMapel").submit(function(e) {
      e.preventDefault();
      var id = $("#input_kdKelompokMapel").val();
      if (!id) {
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/inputDataKelompokMapel') ?>",
          data : new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success : function(response) {
            if (jQuery.trim(response)==="success") {
              cancelAdd("KelompokMapel");
              alertSuccessSave();
              dataTbKelompokMapel();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });  
      }else{
        $.ajax({
        type : "POST",
          url  : "<?php echo base_url('circle_student/main/updateDataKelompokMapel') ?>",
          data : new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success : function(response) {
            if (jQuery.trim(response)==="success") {
              cancelAdd("KelompokMapel");
              alertSuccessUpdate();
              dataTbKelompokMapel(); 
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });
      }
    });

    function deleteKelompokMapel(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteKelompokMapel') ?>",
        data : {id:id},
        success : function(response) {
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            alertSuccessDelete();
            dataTbKelompokMapel(); 
          }else if(jQuery.trim(response)==="failed"){
            alertFailedDelete();
          }
        }
      });
    }

    function dataTbMapel() {
      $("#tbMapel").dataTable().fnDestroy();
      $("#tbMapel").dataTable({
        // "fixedHeader" : true,
        "pageLength" : 50,
        "autoWidth" : false,
        "ordering" : false,
        "bProcessing" : true,
        "bServerSide" : true,
        "bJQueryUI" : true,
        "sPaginationType" : "full_numbers",
        "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getDataMapel/",
        "aoColumnDefs": [
          { "sWidth": "10%", "aTargets": [ -1 ] }
      ],
        "columns" : [
          {"data" : "kd_mapel", "name" : "a.kd_mapel"},
          {"data" : "kd_mapel", "name" : "a.kd_mapel"},
          {"data" : "nm_mapel", "name" : "a.nm_mapel"},
          {"data" : "nama_guru", "name" : "b.nama_guru"},
          {"data" : "status_mapel", "name" : "a.status_mapel"},
          {"data" : "sub_mapel", "name" : "a.sub_mapel"},
          {"data" : "unit", "name" : "a.unit"},
          {"data" : "kelas", "name" : "a.kelas"},
          {"data" : "kkm", "name" : "a.kkm"},
          {"data" : "urutan", "name" : "a.urutan"},
          {"data" : "kd_mapel", "name" : "a.kd_mapel"},
        ],
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
          $("td:eq(10)",nRow).html("<button class='btn btn-warning btn-sm' onclick=editMapel('"+aData["kd_mapel"]+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Mapel','"+aData["kd_mapel"]+"') title='Delete'><i class='fa fa-trash'></i></button>");
        }
      });
    }

    function selectGuru(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataGuru'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#select_guru").empty();
          $("#select_guru").append(
              "<option selected>Pilih Guru Pengajar</option>"
            );
          $.each(response, function(Index,Value){
            $("#select_guru").append(
              "<option value='"+Value.nip+"'>"+Value.nama_guru+"</option>"
            );
          })
        }
      });
    }

    $("#select_guru").select2({
      placeholder: 'Pilih Wali Kelas',
    });

    function changeStsMapel() {
      var mapel = $("#input_stsMapel").val();
      if (mapel=="Mapel Sub") {
        $('#input_subMapel').prop("disabled", false);
      }else{
        $('#input_subMapel').prop('disabled', true);
      }
    }

    function changeUnit()
    {
      var unit = $("#input_unit").val().split(" ");
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKelasByUnit'); ?>",
        data : {unit:unit[0]},
        dataType : "JSON",
        success : function(response){
          $("#input_kelas").empty();
          $("#input_kelas").append(
              "<option selected>Pilih Kelas</option>"
            );
          $.each(response, function(Index,Value){
            $("#input_kelas").append(
              "<option value='"+Value.kd_kls+"'>"+Value.nm_kelas+" - ( "+Value.unit+" )</option>"
            );
          })
        }
      });

      if (unit=="SMA") {
        $("#input_jurusan").prop("disabled",false);
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/getDataJurusan') ?>",
          dataType : "JSON",
          success : function(response) {
            $("#input_jurusan").empty();
            $("#input_jurusan").append(
                "<option selected>Pilih Jurusan</option>"
              );
            $.each(response, function(Index,Value){
              $("#input_jurusan").append(
                "<option value='"+Value.jurusan+"'>"+Value.nm_jurusan+" ("+Value.jurusan+")</option>"
              );
            }) 
          }
        });
      }else{
        $("#input_jurusan").prop("disabled",true);
      }
    }

    $("#inputDataMapel").submit(function(e){
      e.preventDefault(); 
      var id = $("#input_kdMapel").val();
      if (!id) {
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/inputDataMapel') ?>",
          data : new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success : function(response) {
            if (jQuery.trim(response)==="success") {
              cancelAdd("Mapel");
              alertSuccessSave();
              dataTbMapel();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        }); 
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/updateDataMapel') ?>",
          data : new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success : function(response) {
            if (jQuery.trim(response)==="success") {
              cancelAdd("Mapel");
              alertSuccessUpdate();
              dataTbMapel();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        }); 
      }
        
    });

    function editMapel(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getMapelById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function (response) {
          $("#btnAddMapel").hide();
          $("#btnCancel").show();
          $("#btnUpdate").show();
          $("#frmTbMapel").hide();
          $("#frmAddMapel").show(500);

          $("#input_kdMapel").val(response[0].kd_mapel);
          $("#select_guru").val(response[0].nip_guru).trigger("change.select2");
          $("#input_nmMapel").val(response[0].nm_mapel);
          $("#input_nmMapelEng").val(response[0].nm_mapel_eng);
          $("#input_nmMapelArb").val(response[0].nm_mapel_arb);
          $("#input_stsMapel").val(response[0].status_mapel);
          $("#input_subMapel").val(response[0].sub_mapel);
          $("#input_unit").val(response[0].unit);
          changeUnit();
          setTimeout (function(){
            $("#input_kelas").val("VII").trigger("change.select2");
            $("#input_jurusan").val(response[0].jurusan);
          },100);
          $("#input_kkm").val(response[0].kkm); 
          $("#input_urutan").val(response[0].urutan); 
          $("#input_status").val(response[0].status);
        }
      });
    }

    function deleteMapel(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteMapel') ?>",
        data : {id:id},
        success : function(response) {
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            alertSuccessDelete();
            dataTbMapel(); 
          }else if(jQuery.trim(response)==="failed"){
            alertFailedDelete();
          }
        }
      }); 
    }

    function dataTbJadwal() {
      var unit = $("#selectUnit").val();
      var kd_kls_paralel = $("#selectKlsParalel").val();
      var kd_thn_akademik = $("#select_thnAkademik").val();
      if (!unit||!kd_kls_paralel) {
        alertEmptyImportanInput()
      }else{
        $("#tbJadwal").dataTable().fnDestroy();
        $("#tbJadwal").dataTable({
          // "fixedHeader" : true,
          "pageLength" : 50,
          "autoWidth" : false,
          "ordering" : false,
          "bProcessing" : true,
          "bServerSide" : true,
          "bJQueryUI" : true,
          "sPaginationType" : "full_numbers",
          "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getDataJadwal/",
          "aoColumnDefs": [
            { "sWidth": "10%", "aTargets": [ -1 ] }
        ],
          "columns" : [
            {"data" : "kd_jadwal", "name" : "a.kd_jadwal"},
            {"data" : "nm_hari", "name" : "f.nm_hari"},
            {"data" : "nm_mapel", "name" : "b.nm_mapel"},
            {"data" : "nama_guru", "name" : "c.nama_guru"},
            {"data" : "mulai", "name" : "a.mulai"},
            {"data" : "selesai", "name" : "a.selesai"},
            {"data" : "unit", "name" : "b.unit"},
            {"data" : "nm_kls_paralel", "name" : "d.nm_kls_paralel"},
            {"data" : "nm_ruangan", "name" : "e.nm_ruangan"},
            {"data" : "status", "name" : "a.status"},
            {"data" : "kd_jadwal", "name" : "a.kd_jadwal"}

          ],
          "fnServerData" : function(sSource,aoData,fnCallback){
            aoData.push({"name":"kd_kls_paralel","value":kd_kls_paralel});
            aoData.push({"name":"unit","value":unit});
            aoData.push({"name":"kd_thn_akademik","value":kd_thn_akademik});
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
            $("td:eq(10)",nRow).html("<button class='btn btn-warning btn-sm' onclick=editJadwal('"+aData["kd_jadwal"]+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Jadwal','"+aData["kd_jadwal"]+"') title='Delete'><i class='fa fa-trash'></i></button>");
          }
        });
      }
    }

    function editJadwal(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getJadwalById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function (response) {
          $("#btnAddJadwal").hide();
          $("#btnCancel").show();
          $("#btnUpdate").show();
          $("#frmTbJadwal").hide();
          $("#frmAddJadwal").show(500);

          $("#input_kdJadwal").val(response[0].kd_jadwal);
          $("#select_nmHari").val(response[0].hari).trigger("change.select2");
          $("#input_wktMulai").val(response[0].mulai);
          $("#input_wktSelesai").val(response[0].selesai);
          $("#input_mapel").val(response[0].kd_mapel).trigger("change.select2");
          $("#input_unit").val(response[0].unit);
          changeUnit();
          setTimeout(function() {
            $("#input_kelas").val(response[0].kd_kls).trigger("change.select2");
            $("#input_jurusan").val(response[0].jurusan);
          },500);
          setTimeout(function() {
            $("#input_klsParalel").val(response[0].kd_kls_paralel);
          },650);
          $("#select_ruangan").val(response[0].kd_ruangan);
          $("#select_thnAkademik").val(response[0].kd_thn_akademik);
          $("#input_status").val(response[0].status);
        }
      });
    }

    function selectHari() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataHari'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#select_nmHari").empty();
          $("#select_nmHari").append(
              "<option selected>Pilih Hari</option>"
            );
          $.each(response, function(Index,Value){
            $("#select_nmHari").append(
              "<option value='"+Value.kd_hari+"'>"+Value.nm_hari+"</option>"
            );
          })
        }
      });
    }

    $('#select_nmHari').select2({
      placeholder: 'Pilih Hari',
    });

    function changeKelas(){
      var kd_kls = $("#input_kelas").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataKlsParalelByKls') ?>",
        data : {kd_kls:kd_kls},
        dataType : "JSON",
        success : function (response) {
          $("#input_klsParalel").empty();
          $("#input_klsParalel").append(
             "<option selected value=''>Pilih Kelas Paralel</option>"
          );
          $.each(response, function(Index,Value) {
            $("#input_klsParalel").append(
              "<option value='"+Value.kd_kls_paralel+"'>"+Value.nm_kls_paralel+"</option>"
            );
          })
        }
      });
    }

    function selectRuangan() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url("circle_student/main/getDataRuangan"); ?>",
        dataType : "JSON",
        success : function (response) {
          $("#select_ruangan").empty();
          $("#select_ruangan").append(
            "<option value='' selected>Pilih Ruangan</option>"
          );
          $.each(response, function(Index,Value) {
            $("#select_ruangan").append(
            "<option value='"+Value.kd_ruangan+"'>"+Value.nm_ruangan+" </option>");
          });
        }
      });
    }

    function selectThnAkademik() {
      $.ajax({
        type : "POST",
        url  :  "<?php echo base_url('circle_student/main/getDataThnAkademik'); ?>",
        dataType : "JSON",
        success : function (response) {
          $("#select_thnAkademik").empty();
          $("#select_thnAkademik").append(
            "<option selected value=''>Pilih Tahun Akademik</optional>"
          );
          $.each(response, function(Index, Value) {
            $("#select_thnAkademik").append(
              "<option value='"+Value.kd_thn_akademik+"'>"+Value.nm_thn_akademik+"</option>"
            );
          });
        }
      });
    }

    $('#inputDataJadwal').submit(function(e){
      e.preventDefault(); 
      var kd_jadwal = $("#input_kdJadwal").val();
      if (!kd_jadwal) {
        $.ajax({
          url:"<?php echo base_url('circle_student/main/inputDataJadwal');?>",
          type:"post",
          data:new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              dataTbJadwal();
              cancelAdd('Jadwal');
              alertSuccessSave();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }else{
        $.ajax({
          url:"<?php echo base_url('circle_student/main/updateDataJadwal');?>",
          type:"post",
          data:new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              dataTbJadwal();
              cancelAdd('Jadwal');
              alertSuccessUpdate();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });
      }
    });

    function selectMapel() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getListMapel') ?>",
        dataType : "JSON",
        success : function (response) {
          $("#input_mapel").empty();
          $("#input_mapel").append(
            "<option selected value=''>Pilih Mata Pelajaran</option>"
          );

          $.each(response, function(Index, Value) {
            $("#input_mapel").append(
              "<option value='"+Value.kd_mapel+"'> ("+Value.kd_mapel+") "+Value.nm_mapel+"</option>"
            );
          });
        }
      });
    }

    function showGuruMapel() {
      var kd_mapel = $("#input_mapel").val();
      
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getGuruByMapel'); ?>",
        data : {kd_mapel:kd_mapel},
        dataType : "JSON",
        success :function (response) {
          $('#select_guru').val(response[0].nip_guru).trigger('change.select2');
        }
      });
    }

    function deleteJadwal(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteJadwal') ?>",
        data : {id:id},
        success : function(response) {
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            alertSuccessDelete();
            dataTbJadwal(); 
          }else if(jQuery.trim(response)==="failed"){
            alertFailedDelete();
          }
        }
      }); 
    }

    function dataTbPredikat() {
      var unit = $("#selectUnit").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataRentangNilai') ?>",
        data : {unit:unit},
        dataType : "JSON",
        success : function(response) {
          $("#tbPredikat > tbody").empty(); var no=1;
          $.each(response, function(Index,Value){
            $("#tbPredikat > tbody:last-child").append(
              "<tr>"+
                "<td>"+no++ +"</td>"+
                "<td>"+Value.unit+"</td>"+
                "<td>"+Value.int_awal+" ≤ "+Value.int_akhir+"</td>"+
                "<td>"+Value.predikat+"</td>"+
                "<td>"+Value.keterangan+"</td>"+
                "<td>"+Value.nm_thn_akademik+"</td>"+
                "<td><button class='btn btn-warning btn-sm' onclick=editPredikat('"+Value.kd_predikat+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Predikat','"+Value. kd_predikat+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      });
    }

    $('#inputDataPredikat').submit(function(e){
      e.preventDefault(); 
      var kd_predikat = $("#kd_predikat").val();
      if (!kd_predikat) {
        $.ajax({
          url:"<?php echo base_url('circle_student/main/inputDataPredikat');?>",
          type:"post",
          data:new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              cancelAdd('Predikat');
              dataTbJadwal();
              alertSuccessSave();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }else{
        $.ajax({
          url:"<?php echo base_url('circle_student/main/updateDataPredikat');?>",
          type:"post",
          data:new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              cancelAdd('Predikat');
              dataTbJadwal();
              alertSuccessUpdate();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });
      }
    });

    function editPredikat(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getPredikatById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function (response) {
          $("#btnAddPredikat").hide();
          $("#btnCancel").show();
          $("#btnUpdate").show();
          $("#frmTbPredikat").hide();
          $("#frmAddPredikat").show(500);

          $("#kd_predikat").val(response[0].kd_predikat);
          $("#input_unit").val(response[0].unit);
          $("#select_thnAkademik").val(response[0].kd_thn_akademik);
          $("#input_intAwal").val(response[0].int_awal);
          $("#input_intAkhir").val(response[0].int_akhir);
          $("#input_predikat").val(response[0].predikat);
          $("#input_keterangan").val(response[0].keterangan);


        }
      });
    }

    function deletePredikat(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deletePredikat') ?>",
        data : {id:id},
        success : function (response) {
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            dataTbPredikat()
            alertSuccessDelete();
          }else if(jQuery.trim(response)==="failed"){
            $("#confirmDelete").modal("hide");
            dataTbPredikat();
            alertFailedDelete();
          }
        }
      });
    }


    $("#bulanAbsen").datepicker({
      format : "yyyy-mm",
      minViewMode: 1,
      autoclose: true,
    })

    $("#bulanAbsen").datepicker().datepicker('setDate', 'today')

    function showAbsensi(guru,thnAkdmk,nmKls,idKls,idJdwl,idMpl) {
      var thn = $("#select_thnAkademik").val();
      var unit = $("#selectUnit").val();
      var bulan = $("#bulanAbsen").val();
      $("#thnAkdmk").val(thnAkdmk);
      $("#nmKls").val(nmKls);
      $("#idKls").val(idKls);
      $("#idJdwl").val(idJdwl);
      $("#idMpl").val(idMpl);
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/absensi_siswa'); ?>",
        data : {idKls:idKls,idJdwl:idJdwl,idMpl:idMpl,bulan:bulan,thn:thn},
        dataType : "JSON",
        success : function (response) {
          $(".card-header").hide();
          $("#lbUnit").text(unit);
          $("#lbKls").text(nmKls);
          $("#lbThnP").text(decodeURI(thnAkdmk));
          $("#lbBulan").text(bulan);
          $("#kd_jadwal").val(idJdwl);
          $("#kd_mapel").val(idMpl);
          $("#guru").val(guru);
          $("#frmTbAbsensiSiswa").hide();
          $("#frmAddAbsensiSiswa").show(500);

          $("#kd_kls_paralel").val(idKls);
          $("#kd_jadwal").val(idJdwl);
          $("#kd_mapel").val(idMpl);
          $('.main-table').empty();
          $("#tbAbsensiSiswa").append(response.table);
          $('#tanggal').datepicker({
              format: 'mm/dd/yyyy',
              autoclose: true,
          });
          $("#tanggal").datepicker().datepicker('setDate', 'today');
          $(".main-table").clone(true).appendTo('#table-scroll').addClass("clone");        
          $("#btnCancel").show()
        }
      });
    }


    function dataTbJadwalAbsensi() {
      var unit = $("#selectUnit").val();
      var kd_kls_paralel = $("#selectKlsParalel").val();
      var kd_thn_akademik = $("#select_thnAkademik").val();
      $("#kd_thn_akademik").val(kd_thn_akademik);
      if (!unit||!kd_kls_paralel) {
        alertEmptyImportanInput()
      }else{
        $("#tbJadwalAbsensi").dataTable().fnDestroy();
        $("#tbJadwalAbsensi").dataTable({
          // "fixedHeader" : true,
          "pageLength" : 50,
          "autoWidth" : false,
          "ordering" : false,
          "bProcessing" : true,
          "bServerSide" : true,
          "bJQueryUI" : true,
          "sPaginationType" : "full_numbers",
          "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getDataJadwal/",
          "aoColumnDefs": [
            { "sWidth": "10%", "aTargets": [ -1 ] }
        ],
          "columns" : [
            {"data" : "kd_jadwal", "name" : "a.kd_jadwal"},
            {"data" : "nm_hari", "name" : "f.nm_hari"},
            {"data" : "nm_mapel", "name" : "b.nm_mapel"},
            {"data" : "nama_guru", "name" : "c.nama_guru"},
            {"data" : "mulai", "name" : "a.mulai"},
            {"data" : "selesai", "name" : "a.selesai"},
            {"data" : "unit", "name" : "b.unit"},
            {"data" : "nm_kls_paralel", "name" : "d.nm_kls_paralel"},
            {"data" : "nm_ruangan", "name" : "e.nm_ruangan"},
            {"data" : "status", "name" : "a.status"},
            {"data" : "kd_jadwal", "name" : "a.kd_jadwal"}
          ],
          "fnServerData" : function(sSource,aoData,fnCallback){
            aoData.push({"name":"kd_kls_paralel","value":kd_kls_paralel});
            aoData.push({"name":"unit","value":unit});
            aoData.push({"name":"kd_thn_akademik","value":kd_thn_akademik});
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
            $("td:eq(10)",nRow).html("<button class='btn btn-success btn-sm' onclick=showAbsensi('"+aData["nip_guru"]+"','"+encodeURI(aData["nm_thn_akademik"])+"','"+aData["nm_kls_paralel"]+"','"+aData["kd_kls_paralel"]+"','"+aData["kd_jadwal"]+"','"+aData["kd_mapel"]+"') title='Show Absensi'><i class='fa fa-list'></i> Absensi</button>");
          }
        });
      }
    }

    $('#inputAbsenSiswa').submit(function(e){
      var guru = $("#guru").val();
      var thnAkdmk = $("#thnAkdmk").val();
      var nmKls = $("#nmKls").val();
      var idKls = $("#idKls").val();
      var idJdwl = $("#idJdwl").val();
      var idMpl = $("#idMpl").val();
      e.preventDefault(); 
      $.ajax({
        url:"<?php echo base_url('circle_student/main/inputAbsenSiswa');?>",
        type:"post",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
          if (jQuery.trim(response)==="success") {
            cancelAdd('Predikat');
            dataTbJadwal();
            alertSuccessSave();
            showAbsensi(guru,thnAkdmk,nmKls,idKls,idJdwl,idMpl);
          }else if(jQuery.trim(response)==="failed"){
            alertFailedSave();
          }
        }
      });
    });

    function dataTbJadwalAbsensiRekap() {
      var unit = $("#selectUnit").val();
      var kd_kls_paralel = $("#selectKlsParalel").val();
      var kd_thn_akademik = $("#select_thnAkademik").val();
      $("#kd_thn_akademik").val(kd_thn_akademik);
      if (!unit||!kd_kls_paralel) {
        alertEmptyImportanInput()
      }else{
        $("#tbJadwalAbsensi").dataTable().fnDestroy();
        $("#tbJadwalAbsensi").dataTable({
          // "fixedHeader" : true,
          "pageLength" : 50,
          "autoWidth" : false,
          "ordering" : false,
          "bProcessing" : true,
          "bServerSide" : true,
          "bJQueryUI" : true,
          "sPaginationType" : "full_numbers",
          "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getDataJadwal/",
          "aoColumnDefs": [
            { "sWidth": "10%", "aTargets": [ -1 ] }
        ],
          "columns" : [
            {"data" : "kd_jadwal", "name" : "a.kd_jadwal"},
            {"data" : "nm_hari", "name" : "f.nm_hari"},
            {"data" : "nm_mapel", "name" : "b.nm_mapel"},
            {"data" : "nama_guru", "name" : "c.nama_guru"},
            {"data" : "mulai", "name" : "a.mulai"},
            {"data" : "selesai", "name" : "a.selesai"},
            {"data" : "unit", "name" : "b.unit"},
            {"data" : "nm_kls_paralel", "name" : "d.nm_kls_paralel"},
            {"data" : "nm_ruangan", "name" : "e.nm_ruangan"},
            {"data" : "status", "name" : "a.status"},
            {"data" : "kd_jadwal", "name" : "a.kd_jadwal"}
          ],
          "fnServerData" : function(sSource,aoData,fnCallback){
            aoData.push({"name":"kd_kls_paralel","value":kd_kls_paralel});
            aoData.push({"name":"unit","value":unit});
            aoData.push({"name":"kd_thn_akademik","value":kd_thn_akademik});
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
            $("td:eq(10)",nRow).html("<button class='btn btn-success btn-sm' onclick=showRekapAbsensi('"+aData["nip_guru"]+"','"+encodeURI(aData["nm_thn_akademik"])+"','"+aData["nm_kls_paralel"]+"','"+aData["kd_kls_paralel"]+"','"+aData["kd_jadwal"]+"','"+aData["kd_mapel"]+"') title='Show Absensi'><i class='fa fa-list'></i> Absensi</button>");
          }
        });
      }
    }

    function showRekapAbsensi(guru,thnAkdmk,nmKls,idKls,idJdwl,idMpl) {
      var unit = $("#selectUnit").val();
      var thn = $("#select_thnAkademik").val();
      $("#thnAkdmk").val(thnAkdmk);
      $("#nmKls").val(nmKls);
      $("#idKls").val(idKls);
      $("#idJdwl").val(idJdwl);
      $("#idMpl").val(idMpl);
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/rekap_absensi_siswa'); ?>",
        data : {idKls:idKls,idJdwl:idJdwl,idMpl:idMpl,thn:thn},
        dataType : "JSON",
        success : function (response) {
          $(".card-header").hide();
          $("#lbUnit").text(unit);
          $("#lbKls").text(nmKls);
          $("#lbThnP").text(decodeURI(thnAkdmk));
          $("#kd_jadwal").val(idJdwl);
          $("#kd_mapel").val(idMpl);
          $("#guru").val(guru);
          $("#frmTbAbsensiSiswa").hide();
          $("#frmAddAbsensiSiswa").show(500);

          $("#kd_kls_paralel").val(idKls);
          $("#kd_jadwal").val(idJdwl);
          $("#kd_mapel").val(idMpl);
          $('.main-table').empty();
          $("#tbRekapAbsensiSiswa").append(response.table);
          $('#tanggal').datepicker({
              format: 'mm/dd/yyyy',
              autoclose: true,
          });
          $("#tanggal").datepicker().datepicker('setDate', 'today');
          $(".main-table").clone(true).appendTo('#table-scroll').addClass("clone");        
          $("#btnCancel").show()
          $("#btnPrint").show()
        }
      });
    }

    function printRekapAbsenSiswa() {
      var thn = $("#thnAkdmk").val();
      var thnAkdmk = $("#select_thnAkademik").val();
      var idKls = $("#idKls").val();
      var idJdwl = $("#idJdwl").val();
      var idMpl = $("#idMpl").val();
      var unit = $("#selectUnit").val();
      window.open("<?php echo base_url() ?>circle_student/main/printRekapAbsenSiswa/"+unit+"/"+thnAkdmk+"/"+idKls+"/"+idJdwl+"/"+idMpl+"",'_blank');
    }

    function dataTbMapelMateri() {
      var unit = $("#selectUnit").val();
      var kd_kls = $("#selectKlsByUnit").val();
      $("#frmTbMateri").hide();
      $("#frmTbMapelMateri").show(500);
      if (!unit||!kd_kls) {
        alertEmptyImportanInput()
      }else{
        $("#tbMapelMateri").dataTable().fnDestroy();
        $("#tbMapelMateri").dataTable({
          // "fixedHeader" : true,
          "pageLength" : 50,
          "autoWidth" : false,
          "ordering" : false,
          "bProcessing" : true,
          "bServerSide" : true,
          "bJQueryUI" : true,
          "sPaginationType" : "full_numbers",
          "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getDataMapelMateri/",
          "aoColumnDefs": [
            { "sWidth": "10%", "aTargets": [ -1 ] }
        ],
          "columns" : [
            {"data" : "kd_mapel", "name" : "a.kd_mapel"},
            {"data" : "kd_mapel", "name" : "a.kd_mapel"},
            {"data" : "nm_mapel", "name" : "a.nm_mapel"},
            {"data" : "nip", "name" : "b.nip"},
            {"data" : "nama_guru", "name" : "b.nama_guru"},
            {"data" : "kd_mapel", "name" : "a.kd_mapel"}

          ],
          "fnServerData" : function(sSource,aoData,fnCallback){
            aoData.push({"name":"kd_kls","value":kd_kls});
            aoData.push({"name":"unit","value":unit});
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
            $("td:eq(5)",nRow).html("<button class='btn btn-info btn-sm' onclick=showMateri('"+aData["kd_mapel"]+"') title='Lihat Materi'><i class='fa fa-search'></i> Materi</button>");
          }
        });
      }
    }

    function selectUnitSiswaForKls() {
      var unit = $("#selectUnit").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getdataKlsByUnit') ?>", 
        data : {unit:unit},
        dataType : "JSON",
        success : function(response) {
          $("#selectKlsByUnit").empty()
          $("#selectKlsByUnit").append("<option value=''>Pilih Kelas *</option>")
          $.each(response, function(Index,Value){
            $("#selectKlsByUnit").append("<option value='"+Value.kd_kls+"'>"+Value.nm_kelas+"</option>")
          });
        }
      });
    }

    function showMateri(id) {
      $("#btnAddMateri").show();
      $("#frmTbMapelMateri").hide();
      $("#frmTbMateri").show(500);
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataMateri') ?>",
        data : {id:id},
        success : function(response) {
          $("#frmTbMateri").empty();
          $("#frmTbMateri").append(response);
          $("#btnBack").show();
          $("#kdMapel").text(id)
          selectJdlBab()
        }
      });
    }

    if ($("#inputMateri").length) {
      CKEDITOR.replace( 'inputMateri' ,{
        filebrowserBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
      });
    }

    if ($("#inputSoalPg").length) {
      CKEDITOR.replace( 'inputSoalPg' ,{
        filebrowserBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
      });
    }

    if ($("#inputSoalEssay").length) {
      CKEDITOR.replace( 'inputSoalEssay' ,{
        filebrowserBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
      });
    }

    if ($("#jawabanA").length) {
      CKEDITOR.replace( 'jawabanA' ,{
        filebrowserBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
      });
    }

    if ($("#jawabanB").length) {
      CKEDITOR.replace( 'jawabanB' ,{
        filebrowserBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
      });
    }

    if ($("#jawabanC").length) {
      CKEDITOR.replace( 'jawabanC' ,{
        filebrowserBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
      });
    }

    if ($("#jawabanD").length) {
      CKEDITOR.replace( 'jawabanD' ,{
        filebrowserBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
      });
    }

    if ($("#jawabanE").length) {
      CKEDITOR.replace( 'jawabanE' ,{
        filebrowserBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
      });
    }

    if ($("#pembahasanPg").length) {
      CKEDITOR.replace( 'pembahasanPg' ,{
        filebrowserBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
      });
    }

    if ($("#pembahasanEssay").length) {
      CKEDITOR.replace( 'pembahasanEssay' ,{
        filebrowserBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url() ?>assets/plugin/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
      });
    }

    function selectJdlBab(){
      var kd_mapel = $("#kdMapel").text();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataJdlBab'); ?>",
        data : {kd_mapel:kd_mapel},
        dataType : "JSON",
        success : function(response){
          $("#select_jdlBab").empty();
          $("#select_jdlBab").append(
              "<option selected>Pilih Judul Bab</option>"
            );
          $.each(response, function(Index,Value){
            $("#select_jdlBab").append(
              "<option value='"+Value.kd_materi+"'>"+Value.judul_materi+"</option>"
            );
          })
        }
      });
    }

    $("#select_jdlBab").select2({
      placeholder: 'Pilih Judul Bab',
    });

    $('#saveDataMateri').submit(function(e){
      e.preventDefault();
      var id = $("#kdMapel").text();
      var kdSubMateri = $("#kdSubMateri").val();
      var content = CKEDITOR.instances['inputMateri'].getData();
      var form_data = new FormData(this);
      form_data.append('content', content)
      form_data.append('kdSubMateri', kdSubMateri)
      if (kdSubMateri !="") {
        $.ajax({
          url:"<?php echo base_url('circle_student/main/updateDataMateri');?>",
          type:"POST",
          data: form_data,
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              alertSuccessUpdate();
              showMateri(id);
              $("#frmAddMateri").hide();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });
      }else{
        $.ajax({
          url:"<?php echo base_url('circle_student/main/insertDataMateri');?>",
          type:"POST",
          data: form_data,
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              alertSuccessSave();
              showMateri(id);
              $("#frmAddMateri").hide();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });  
      }
    });

    function deleteMateri(id) {
      var kd_mapel = $("#kdMapel").text();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteMateri') ?>",
        data : {id:id},
        success : function(response) {
          if (jQuery.trim(response)==="success") {
            $("#confirmDelete").modal("hide");
            alertSuccessDelete();
            showMateri(kd_mapel);
          }else if(jQuery.trim(response)==="failed"){
            alertFailedDelete();
          }
        }
      });
    }

    function addMateri() {
      $('#btnBack').hide()
      CKEDITOR.instances['inputMateri'].setData('')
    }

    function editMateri(id){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataMateriById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response) {
          $("#kdSubMateri").val(response[0].kd_sub_materi);
          $("#select_jdlBab").val(response[0].kd_materi).trigger("change.select2");
          $("#inputJdlMateri").val(response[0].judul_sub_materi);
          CKEDITOR.instances['inputMateri'].setData(response[0].content)
          $("#frmTbMateri").hide();
          $("#frmAddMateri").show(500);
          $("#btnBack").hide();
          $("#btnCancel").show();
          $("#btnUpdate").show();
        }
      });
    }

    function addJnsCbt() {
      var jns_cbt = $("#inputJnsCbt").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/addJnsCbt') ?>",
        data : {jns_cbt:jns_cbt},
        success : function(response) {
          if (jQuery.trim(response)==="success") {
            alertSuccessSave();
            $("#addJnsCbtModal").modal("hide");
            selectJnsCbt()
          }else if(jQuery.trim(response)==="failed"){
            alertFailedSave();
          }
        }
      });
    }

    function selectJnsCbt(){
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataJnsCbt'); ?>",
        dataType : "JSON",
        success : function(response){
          $("#select_JnsCbt").empty();
          $("#select_JnsCbt").append(
              "<option selected>Pilih Jenis CBT</option>"
            );
          $.each(response, function(Index,Value){
            $("#select_JnsCbt").append(
              "<option value='"+Value.kd_jenis_cbt+"'>"+Value.nm_jenis_cbt+"</option>"
            );
          })
        }
      });
    }

    function dataTbMapelMateriSoal() {
      var unit = $("#selectUnit").val();
      var kd_kls = $("#selectKlsByUnit").val();
      if (!unit||!kd_kls) {
        alertEmptyImportanInput()
      }else{
        $("#tbBankSoal").dataTable().fnDestroy();
        $("#tbBankSoal").dataTable({
          // "fixedHeader" : true,
          "pageLength" : 50,
          "autoWidth" : false,
          "ordering" : false,
          "bProcessing" : true,
          "bServerSide" : true,
          "bJQueryUI" : true,
          "sPaginationType" : "full_numbers",
          "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getDataMapelMateri/",
          "aoColumnDefs": [
            { "sWidth": "10%", "aTargets": [ -1 ] }
        ],
          "columns" : [
            {"data" : "kd_mapel", "name" : "a.kd_mapel"},
            {"data" : "kd_mapel", "name" : "a.kd_mapel"},
            {"data" : "nm_mapel", "name" : "a.nm_mapel"},
            {"data" : "nama_guru", "name" : "b.nama_guru"},
            {"data" : "kd_mapel", "name" : "a.kd_mapel"}

          ],
          "fnServerData" : function(sSource,aoData,fnCallback){
            aoData.push({"name":"kd_kls","value":kd_kls});
            aoData.push({"name":"unit","value":unit});
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
            $("td:eq(4)",nRow).html("<button class='btn btn-info btn-sm' onclick=showSoal('"+aData["kd_mapel"]+"') title='Lihat Soal'><i class='fa fa-search'></i> Soal</button>");
          }
        });
      }
    }

    function showSoal(id) {
      $("#frmTbBankSoal").hide();
      $("#frmAddBankSoal").show(500);
      $("#selectUnit").hide();
      $("#selectKlsByUnit").hide();
      $("#btnCancel").show();
      changeTopikSoal();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getMapelById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response){
          $("#lbKelas").text(response[0].kelas);
          $("#lbMapel").text(response[0].nm_mapel);
          $("#lbKdMapel").text(response[0].kd_mapel);
          selectTopikSoal(id);
          dataTbBankSoalPg()
          dataTbBankSoalEssay()
        }
      });
    }

    function selectTopikSoal(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getDataTopikSoal'); ?>",
        dataType : "JSON",
        data :{id:id},
        success : function(response){
          $("#select_TopikSoal").empty();
          $("#select_TopikSoal").append(
              "<option value='' selected>Pilih Topik Soal *</option>"
            );
          $.each(response, function(Index,Value){
            $("#select_TopikSoal").append(
              "<option value='"+Value.kd_topik_soal+"'>"+Value.nm_topik_soal+"</option>"
            );
          })
        }
      });
    }

    function changeTopikSoal() {
      var topik = $("#select_TopikSoal").val();
      if (!topik) {
        $("#btnAddBankSoal").hide()
        $("#btnImportBankSoal").hide()
      }else{
        $("#btnAddBankSoal").show(10)
        $("#btnImportBankSoal").show(10)
        dataTbBankSoalPg()
        dataTbBankSoalEssay();
      }
    }

    function addTopikSoal() {
      var topik = $("#inputTopikSoal").val();
      var kd_mapel = $("#lbKdMapel").text();
      if (!topik) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/addTopikSoal') ?>",
          data : {topik:topik, kd_mapel:kd_mapel},
          success : function (response){
            $("#inputTopikSoal").val("")
            if (jQuery.trim(response)==="success") {
              alertSuccessSave();
              $("#addTopikSoalModal").modal("hide");
              selectTopikSoal(kd_mapel);
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }
    }

    function editTopikSoal() {
      var id = $("#select_TopikSoal").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getTopikSoalById'); ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response){
          $("#kdTopik").val(response[0].kd_topik_soal);
          $("#editTopikSoal").val(response[0].nm_topik_soal);
        }
      });
    }

    function updateTopikSoal() {
      var id = $("#kdTopik").val();
      var topik = $("#editTopikSoal").val();
      var kd_mapel = $("#lbKdMapel").text();
      if (!topik) {
        alertEmptyImportanInput();
      }else{
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('circle_student/main/updateTopikSoal') ?>",
          data : {id:id,topik:topik},
          success : function (response) {
            $("#editTopikSoal").val("")
            if (jQuery.trim(response)==="success") {
              alertSuccessUpdate();
              $("#editTopikSoalModal").modal("hide");
              selectTopikSoal(kd_mapel);
            }else if(jQuery.trim(response)==="failed"){
              alertFailedUpdate();
            }
          }
        });
      }
    }

    function confirmDeleteTopikSoal() {
      var id = $("#select_TopikSoal").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getTopikSoalById'); ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response){
          $("#kdTopikDel").val(response[0].kd_topik_soal);
          $("#deleteTopikSoal").text(response[0].nm_topik_soal);
        }
      });
    }

    function deleteTopikSoal() {
      var id = $("#kdTopikDel").val();
      var topik = $("#deleteTopikSoal").text();
      var kd_mapel = $("#lbKdMapel").text();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteTopikSoal') ?>",
        data : {id:id},
        success : function (response) {
          $("#deleteTopikSoal").val("")
          if (jQuery.trim(response)==="success") {
            alertSuccessDelete();
            $("#deleteTopikSoalModal").modal("hide");
            selectTopikSoal(kd_mapel);
          }else if(jQuery.trim(response)==="failed"){
            alertFailedDelete();
          }
        }
      });
    }

    $('#saveSoal').submit(function(e){
      e.preventDefault();
      var kdMapel = $("#lbKdMapel").text();
      var kdKls = $("#lbKelas").text();
      var topik = $("#select_TopikSoal").val();
      var soalPg = CKEDITOR.instances['inputSoalPg'].getData();
      var soalEs = CKEDITOR.instances['inputSoalEssay'].getData();
      var A = CKEDITOR.instances['jawabanA'].getData();
      var B = CKEDITOR.instances['jawabanB'].getData();
      var C = CKEDITOR.instances['jawabanC'].getData();
      var D = CKEDITOR.instances['jawabanD'].getData();
      var E = CKEDITOR.instances['jawabanE'].getData();
      var pembahasanPg = CKEDITOR.instances['pembahasanPg'].getData();
      var pembahasanEssay = CKEDITOR.instances['pembahasanEssay'].getData();
      var form_data = new FormData(this);
      form_data.append('kdMapel',kdMapel);
      form_data.append('kdKls',kdKls);
      form_data.append('kdTopik',topik);
      form_data.append('inputSoalPg', soalPg);
      form_data.append('inputSoalEssay', soalEs);
      form_data.append('A', A);
      form_data.append('B', B);
      form_data.append('C', C);
      form_data.append('D', D);
      form_data.append('E', E);
      form_data.append('pembahasanPg', pembahasanPg);
      form_data.append('pembahasanEssay', pembahasanEssay);
      if (!topik || !soalPg || !soalEssay) {
        alertEmptyImportanInput()
        $("#addSoalModal").modal("hide");
      }else{
        $.ajax({
          url:"<?php echo base_url('circle_student/main/insertDataSoal');?>",
          type:"POST",
          data: form_data,
          processData:false,
          contentType:false,
          cache:false,
          async:true,
          success: function(response){
            if (jQuery.trim(response)==="success") {
              CKEDITOR.instances['inputSoalPg'].setData("");
              CKEDITOR.instances['inputSoalEssay'].setData("");
              CKEDITOR.instances['jawabanA'].setData("");
              CKEDITOR.instances['jawabanB'].setData("");
              CKEDITOR.instances['jawabanC'].setData("");
              CKEDITOR.instances['jawabanD'].setData("");
              CKEDITOR.instances['jawabanE'].setData("");
              CKEDITOR.instances['pembahasanPg'].setData("");
              CKEDITOR.instances['pembahasanEssay'].setData("");
              $("#bobotSoalPg").val("");
              $("#kunciJawaban").val("");
              $("#bobotSoalEssay").val("");
              $("#addSoalModal").modal("hide");
              alertSuccessSave();
              dataTbBankSoalPg();
              dataTbBankSoalEssay();
            }else if(jQuery.trim(response)==="failed"){
              alertFailedSave();
            }
          }
        });
      }
    });

    function dataTbBankSoalPg() {
      var topik = $("#select_TopikSoal").val();
      var kdMapel = $("#lbKdMapel").text();
      var kdKls = $("#lbKelas").text();
      $("#tbBankSoalPg").dataTable().fnDestroy();
      $("#tbBankSoalPg").dataTable({
        // "fixedHeader" : true,
        "pageLength" : 50,
        "autoWidth" : false,
        "ordering" : false,
        "bProcessing" : true,
        "bServerSide" : true,
        "bJQueryUI" : true,
        "sPaginationType" : "full_numbers",
        "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getDataBankSoalPg/",
        "columnDefs": [

          { "width": "5%", "targets": 0 },
          { "width": "10%", "targets": 2 }
        ],
        "columns" : [
          {"data" : "kd_soal_pg", "name" : "a.kd_soal_pg"},
          {"data" : "pertanyaan_pg", "name" : "a.pertanyaan_pg"},
          {"data" : "kd_soal_pg", "name" : "a.kd_soal_pg"}

        ],
        "fnServerData" : function(sSource,aoData,fnCallback){
          aoData.push({"name":"topik","value":topik});
          aoData.push({"name":"kdMapel","value":kdMapel});
          aoData.push({"name":"kdKls","value":kdKls});
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
          if (aData["kunci"]=="A"){
            $("td:eq(1)",nRow).html(aData["pertanyaan_pg"]+"<p><font color='green'><b>A. "+aData["jawab_a"].replace("<p>", "") +"</b></font><p>"+"B. "+aData["jawab_b"].replace("<p>", "")+"<p>"+"C. "+aData["jawab_c"].replace("<p>", "")+"<p>"+"D. "+aData["jawab_d"].replace("<p>", "")+"<p>"+"E. "+aData["jawab_e"].replace("<p>", "")+"<p>"+"Pembahasan : "+aData["pembahasan_pg"].replace("<p>", "")+"<p>"); 
          }else if(aData["kunci"]=="B"){
            $("td:eq(1)",nRow).html(aData["pertanyaan_pg"]+"<p>A. "+aData["jawab_a"].replace("<p>", "") +"<p>"+"<font color='green'><b>B. "+aData["jawab_b"].replace("<p>", "")+"</b></font><p>"+"C. "+aData["jawab_c"].replace("<p>", "")+"<p>"+"D. "+aData["jawab_d"].replace("<p>", "")+"<p>"+"E. "+aData["jawab_e"].replace("<p>", "")+"<p>"+"Pembahasan : "+aData["pembahasan_pg"].replace("<p>", "")+"<p>"); 
          }else if(aData["kunci"]=="C"){
            $("td:eq(1)",nRow).html(aData["pertanyaan_pg"]+"<p>A. "+aData["jawab_a"].replace("<p>", "") +"<p>"+"B. "+aData["jawab_b"].replace("<p>", "")+"<p>"+"<font color='green'><b>C. "+aData["jawab_c"].replace("<p>", "")+"</b></font><p>"+"D. "+aData["jawab_d"].replace("<p>", "")+"<p>"+"E. "+aData["jawab_e"].replace("<p>", "")+"<p>"+"Pembahasan : "+aData["pembahasan_pg"].replace("<p>", "")+"<p>");
          }else if(aData["kunci"]=="D"){
            $("td:eq(1)",nRow).html(aData["pertanyaan_pg"]+"<p>A. "+aData["jawab_a"].replace("<p>", "") +"<p>"+"B. "+aData["jawab_b"].replace("<p>", "")+"<p>"+"C. "+aData["jawab_c"].replace("<p>", "")+"<p>"+"<font color='green'><b>D. "+aData["jawab_d"].replace("<p>", "")+"</b></font><p>"+"E. "+aData["jawab_e"].replace("<p>", "")+"<p>"+"Pembahasan : "+aData["pembahasan_pg"].replace("<p>", "")+"<p>");
          }else if(aData["kunci"]=="E"){
            $("td:eq(1)",nRow).html(aData["pertanyaan_pg"]+"<p>A. "+aData["jawab_a"].replace("<p>", "") +"<p>"+"B. "+aData["jawab_b"].replace("<p>", "")+"<p>"+"C. "+aData["jawab_c"].replace("<p>", "")+"<p>"+"D. "+aData["jawab_d"].replace("<p>", "")+"<p>"+"<font color='green'><b>E. "+aData["jawab_e"].replace("<p>", "")+"</b></font><p>"+"Pembahasan : "+aData["pembahasan_pg"].replace("<p>", "")+"<p>");
          }
          
          $("td:eq(2)",nRow).html("<button class='btn btn-warning btn-sm' onclick=editSoalPg('"+aData["kd_soal_pg"]+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Soal_Pg','"+aData["kd_soal_pg"]+"') title='Delete'><i class='fa fa-trash'></i></button>");
        }
      });
    }

    function dataTbBankSoalEssay() {
      var topik = $("#select_TopikSoal").val();
      var kdMapel = $("#lbKdMapel").text();
      var kdKls = $("#lbKelas").text();
      $("#tbBankSoalEssay").dataTable().fnDestroy();
      $("#tbBankSoalEssay").dataTable({
        // "fixedHeader" : true,
        "pageLength" : 50,
        "autoWidth" : false,
        "ordering" : false,
        "bProcessing" : true,
        "bServerSide" : true,
        "bJQueryUI" : true,
        "sPaginationType" : "full_numbers",
        "sAjaxSource" : "<?php echo base_url(); ?>circle_student/main/getDataBankSoalEssay/",
        "columnDefs": [

          { "width": "5%", "targets": 0 },
          { "width": "10%", "targets": 2 }
        ],
        "columns" : [
          {"data" : "kd_soal_essay", "name" : "a.kd_soal_essay"},
          {"data" : "pertanyaan_essay", "name" : "a.pertanyaan_essay"},
          {"data" : "kd_soal_essay", "name" : "a.kd_soal_essay"}

        ],
        "fnServerData" : function(sSource,aoData,fnCallback){
          aoData.push({"name":"topik","value":topik});
          aoData.push({"name":"kdMapel","value":kdMapel});
          aoData.push({"name":"kdKls","value":kdKls});
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
          $("td:eq(1)",nRow).html(aData["pertanyaan_essay"]+"<p>Pembahasan : "+aData["pembahasan_essay"].replace("<p>", "")+"<p>");
          $("td:eq(2)",nRow).html("<button class='btn btn-warning btn-sm' onclick=editSoalEssay('"+aData["kd_soal_essay"]+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Soal_Essay','"+aData["kd_soal_essay"]+"') title='Delete'><i class='fa fa-trash'></i></button>");
        }
      });
    }

    $('#uploadSoalPg').submit(function(e){
      var topik = $("#select_TopikSoal").val();
      var kdMapel = $("#lbKdMapel").text();
      var kdKls = $("#lbKelas").text();
      var form_data = new FormData(this);
      form_data.append('kdMapel',kdMapel);
      form_data.append('kdKls',kdKls);
      form_data.append('topik',topik);
      e.preventDefault(); 
      $.ajax({
        url:"<?php echo base_url('circle_student/main/uploadSoalPg');?>",
        type:"post",
        data:form_data,
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
          if (jQuery.trim(response)==="success") {
            dataTbBankSoalEssay();
            dataTbBankSoalPg();
            alertSuccessSave();
            $("#excel_soal_pg").val("");
            $("#excel_soal_essay").val("");
          }else if(jQuery.trim(response)==="failed"){
            alertFailedSave();
          }
        }
      });
    });

    $('#uploadSoalEssay').submit(function(e){
      var topik = $("#select_TopikSoal").val();
      var kdMapel = $("#lbKdMapel").text();
      var kdKls = $("#lbKelas").text();
      var form_data = new FormData(this);
      form_data.append('kdMapel',kdMapel);
      form_data.append('kdKls',kdKls);
      form_data.append('topik',topik);
      e.preventDefault(); 
      $.ajax({
        url:"<?php echo base_url('circle_student/main/uploadSoalEssay');?>",
        type:"post",
        data:form_data,
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        success: function(response){
          if (jQuery.trim(response)==="success") {
            dataTbBankSoalEssay();
            dataTbBankSoalPg();
            alertSuccessSave();
            $("#excel_soal_pg").val("");
            $("#excel_soal_essay").val("");
          }else if(jQuery.trim(response)==="failed"){
            alertFailedSave();
          }
        }
      });
    });

    function deleteSoal_Pg(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteSoalPg') ?>",
        data : {id:id},
        success : function (response) {
          if (jQuery.trim(response)==="success") {
            dataTbBankSoalEssay();
            dataTbBankSoalPg();
            alertSuccessDelete();
            $("#confirmDelete").modal("hide");
          }else if(jQuery.trim(response)==="failed"){
            alertFailedDelete();
          }
        }
      });
    }

    function deleteSoal_Essay(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteSoalEssay') ?>",
        data : {id:id},
        success : function (response) {
          if (jQuery.trim(response)==="success") {
            dataTbBankSoalEssay();
            dataTbBankSoalPg();
            alertSuccessDelete();
            $("#confirmDelete").modal("hide");
          }else if(jQuery.trim(response)==="failed"){
            alertFailedDelete();
          }
        }
      });
    }

    function editSoalEssay(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getSoalEssayById')?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response) {
          $("#kdSoal").val(response[0].kd_soal_essay);
          CKEDITOR.instances['inputSoalEssay'].setData(response[0].pertanyaan_essay)
          CKEDITOR.instances['pembahasanEssay'].setData(response[0].pembahasan_essay)
          $("#bobotSoalEssay").val(response[0].bobot_essay);
          $("#tabSoalPg").removeClass("active");
          $("#tabSoalEssay").addClass("active");
          $("#tabs-addSoalObjektif").removeClass("show active");
          $("#tabs-addSoalEssay").addClass('show active');
          $("#addSoalModal").modal('show');
        }
      });
    }

    function showSoalModal() {
      $("#kdSoal").val("")
      CKEDITOR.instances['inputSoalPg'].setData("");
      CKEDITOR.instances['inputSoalEssay'].setData("");
      CKEDITOR.instances['jawabanA'].setData("");
      CKEDITOR.instances['jawabanB'].setData("");
      CKEDITOR.instances['jawabanC'].setData("");
      CKEDITOR.instances['jawabanD'].setData("");
      CKEDITOR.instances['jawabanE'].setData("");
      CKEDITOR.instances['pembahasanPg'].setData("");
      CKEDITOR.instances['pembahasanEssay'].setData("");
    }

    function editSoalPg(id) {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getSoalPgById'); ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response) {
          $("#kdSoal").val(response[0].kd_soal_pg);
          CKEDITOR.instances['inputSoalPg'].setData(response[0].pertanyaan_pg)
          CKEDITOR.instances['jawabanA'].setData(response[0].jawab_a)
          CKEDITOR.instances['jawabanB'].setData(response[0].jawab_b)
          CKEDITOR.instances['jawabanC'].setData(response[0].jawab_c)
          CKEDITOR.instances['jawabanD'].setData(response[0].jawab_d)
          CKEDITOR.instances['jawabanE'].setData(response[0].jawab_e)
          CKEDITOR.instances['pembahasanPg'].setData(response[0].pembahasan_pg)
          $("#kunciJawaban").val(response[0].kunci);
          $("#bobotSoalPg").val(response[0].bobot_pg);
          $("#tabSoalEssay").removeClass("active");
          $("#tabSoalPg").addClass("active");
          $("#tabs-addSoalEssay").removeClass("show active");
          $("#tabs-addSoalObjektif").addClass('show active');
          $("#addSoalModal").modal('show');
        }
      })
    }

    function editJnsCbt(){
      var id = $("#select_JnsCbt").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getJenisCbtById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response) {
          $("#editJnsCbt").val("");
          $("#kdJnsCbt").val("");
          $("#kdJnsCbt").val(response[0].kd_jenis_cbt);
          $("#editJnsCbt").val(response[0].nm_jenis_cbt);
        }
      });
    }

    function updateJnsCbt() {
      var id = $("#kdJnsCbt").val();
      var jnsCbt = $("#editJnsCbt").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/updateJnsCbt'); ?>",
        data : {id:id, jnsCbt:jnsCbt},
        success : function(response) {
          if (jQuery.trim(response)==="success") {
            alertSuccessUpdate();
            $("#editJnsCbtModal").modal("hide");
            selectJnsCbt()
          }else if(jQuery.trim(response)==="failed"){
            alertFailedUpdate();
          }
        }
      });
    }

    function confirmDeleteJnsCbt(){
      var id = $("#select_JnsCbt").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/getJenisCbtById') ?>",
        data : {id:id},
        dataType : "JSON",
        success : function(response) {
          $("#lbJnsCBT").text(response[0].nm_jenis_cbt);
        }
      });
    }

    function deleteJnsCbt() {
      var id = $("#select_JnsCbt").val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/deleteJnsCbt') ?>",
        data : {id:id},
        success : function (response) {
          if (jQuery.trim(response)==="success") {
            alertSuccessDelete();
            $("#deleteJnsCbtModal").modal("hide");
            selectJnsCbt()
          }else if(jQuery.trim(response)==="failed"){
            alertFailedDelete();
          }   
        }
      });
    }

 function dataTbSlider() {
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('circle_student/main/get_data_slider'); ?>",
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
          url:'<?php echo base_url();?>circle_student/main/created_slider',
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
        url  : "<?php echo base_url('circle_student/main/deleteSlider') ?>",
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
        url  : "<?php echo base_url('circle_student/main/getSliderById'); ?>",
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