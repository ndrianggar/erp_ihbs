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
                    <a href="<?php echo base_url('hris/main/employee_data') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Master Employee</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/main/position_data') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Master Position</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/admin/data_kurikulum'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Master Division</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/main/data_tahun_akademik'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Job Title</a>
                </li>
               
            </ul>
          </li>
          <li class="nav-item">
            <a href="#data-pengguna" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i>Payroll Employee</a>
            <ul class="collapse list-inline" id="data-pengguna">
                <li>
                    <a href="<?php echo base_url('hris/main/data_siswa') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Payroll Employee</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/main/data_guru'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Input Salary</a>
                </li>
               
            </ul>
          </li>
          <li class="nav-item">
            <a href="#data-akademik" data-toggle="collapse" aria-expanded="false" class="nav-link"><i class="ni ni-tv-2 text-primary"></i> Data Karyawan</a>
            <ul class="collapse list-inline" id="data-akademik">
                <li>
                    <a href="<?php echo base_url('hris/main/data_kelompok_mapel') ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>View Employee</a>
                </li>
                <li>
                    <a href="<?php echo base_url('hris/main/data_mapel'); ?>" class="nav-link"><i class="fa fa-book text-primary ml-3"></i>Approval Employee</a>
                </li>
               
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
  <script>
    $(function () {
      if ($("#tbEmployee").length) {
        dataTbEmployee();
      }

     /* $('#input_wktMulai').inputmask(
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
      );*/
    });

   function dataTbEmployee(){
    $('#tbEmployee').dataTable().fnDestroy();
    $('#tbEmployee').dataTable({
      
      "pageLength" : 50,
      "responsive" : true,
      "autoWidth" : false,
      "ordering" : true,
      "bProcessing" : true,
      "bServerSide" : true,
      "bJQueryUI" : true,
      "sPaginationType" : "full_numbers",
      "sAjaxSource" : "<?php echo base_url(); ?>hris/main/getEmployee/",
        "aoColumnDefs": [
           /* { "sWidth": "10%", "aTargets": [ -1 ] }*/
        ],

      
     "columns" : [
                    {"data" : "photo_pegawai", "name" : "photo_pegawai"},
                    {"data" : "photo_pegawai", "name" : "photo_pegawai"},            
                    {"data" : "biodata_pegawai", "name" : "biodata_pegawai"},
                    {"data" : "pangkat_jabatan", "name" : "pangkat_jabatan"},
                    {"data" : "pangkat_jabatan", "name" : "pangkat_jabatan"},
                    {"data" : "pangkat_jabatan", "name" : "pangkat_jabatan"}
               
    
                  ],
                

       "columnDefs":   [
                  { className: "text-center", "targets": [0,1] },
                  { width: 30, targets: 0},
                  { width: 100, targets: 1},
                  { width: 100, targets: 2},
                  { width: 100, targets: 3},
                  { width: 100, targets: 4},
                ],
        "fixedColumns": true,           

              "fnRowCallback" : function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
            $("td:eq(0)",nRow).text(++iDisplayIndex);
            $("td:eq(1)",nRow).html("<img src='<?php echo base_url();?>assets/photo_karyawan/"+aData['photo_pegawai']+"' width='100'>");
            $("td:eq(5)",nRow).html("<button class='btn btn-info btn-sm' onclick=detailkaryawan('"+aData["nip"]+"') title='Detail'><i class='fa fa-list'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Siswa','"+aData["nip"]+"') title='Delete'><i class='fa fa-trash'></i></button>");
 
          }

    });
   }

    $(function () {
      if ($("#tbDataPosition").length) {
        dataTbPosition()
      }
    });
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
                "<td><button class='btn btn-warning btn-sm' onclick=editUnit('"+Value.kd_unit+"') title='Edit'><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-sm' onclick=confirmDelete('Unit','"+Value.kd_unit+"') title='Delete'><i class='fa fa-trash'></i></button></td>"+
              "</tr>"
            );
          })
        }
      })
    }
 
  </script>
</body>

</html>