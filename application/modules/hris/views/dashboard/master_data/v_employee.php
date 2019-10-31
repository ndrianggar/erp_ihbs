<body <?php if (!empty($sess_unit)) {echo 'onload="selectUnitEmployeeForKls()"';}?>>
<div class="card shadow" id="mainFormEmployee">
  <div class="card-header border-0">
    <li class="nav-item dropdown pull-right ">
                    <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button class="btn btn-sm btn-primary pull-right"><i class="far fa-caret-square-down"></i> Tambah Employee</button>
                        <span class="nav-link-inner--text d-lg-none">Settings</span> 
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                        <button onclick="inputEmployee()"class="dropdown-item"><i class="fas fa-file-signature"></i>Input Manual</button>
                        <button onclick="importEmployee()" class="dropdown-item"id="btnAddKelas" ><i class="fas fa-file-import"></i>Import Employee</button>
                    <!--     <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>

    <h3 class="mb-0">Data Employee <?php echo $this->session->userdata("unit")?>
      <select class="form-control-sm" id="selectUnit" onchange="selectUnitEmployee()" <?php if (!empty($sess_unit)) { echo 'style=display:none'; }?>>
        <option selected="selected" value="">Pilih Unit *</option>
      </select>
      Kelas
      <select class="form-control-sm" id="selectKlsParalel" onchange="dataTbEmployee()">
        <option selected="selected" value="">Pilih Kelas *</option>
      </select>
    </h3>
  </div>
  <div class="table-responsive" id="frmTbEmployee">
    <table class="table align-items-center table-flush" id="tbEmployee">
      <thead class="thead-light">
        <tr>

          <th scope="col" width="10%">No</th>
          <th scope="col" width="25%">Foto</th>
          <th scope="col" width="20%">Biodata Pegawai</th>
          <th scope="col" width="20%">Pangkat Jabatan</th>        
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="row" id="frmImportEmployee" style="display: none;">
    <div class="nav-wrapper">
      <form id="importDataEmployee">
        <a href="<?php echo base_url('assets/file_format/format_Employee.xlsx') ?>" ><button class="btn btn-outline-warning ml-5" type="button"><i class="fa fa-download"></i> Download Format Excel</button></a>
        <input type="file" class="ml-3" name="excel_employee" style="height:50px">
    </div>
  </div>
  <div class="card-footer py-4">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnImport" style="display: none;">Import</button>
    <button type="button" class="btn btn-warning pull-right" id="btnCancelImport" style="display: none;" onclick="cancelAdd('Employee')">Cancel</button>
    </form>
  </div>
  <div class="container" id="frmAddEmployee" style="display: none;">
    <div class="nav-wrapper">
      <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item show" id="ds1" onclick="changeData('ds1')">
          <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#input-Employee" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Data Employee</a>
        </li>
        <li class="nav-item" id="do1" onclick="changeData('do1')">
          <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#input-Pendidikan" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Data Pendidikan</a>
        </li>
        <li class="nav-item" id="do2" onclick="changeData('do2')">
          <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#input-File" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Data File</a>
        </li>
      </ul>
      </div>
        <form id="saveDataEmployee">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="input-Employee" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                   <label class="form-control-label" for="input-username">Nip *</label>
                     <input type="text" id="nip" name="nip" value="" readonly class="form-control form-control-alternative">
                  </div>
                </div>
               <div class="col-lg-6">
                 <div class="form-group">
                   <label class="form-control-label" for="input-username">Nama *</label>
                    <input type="text" id="nama" name="nama" class="form-control form-control-alternative" placeholder="Nama">
                 </div>
              </div>
             </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Nama Panggilan*</label>
                <input type="text" id="nama" name="nama" class="form-control form-control-alternative" placeholder="Nama Panggilan">
              </div>
            </div>
           <div class="col-lg-6">
               <div class="form-group">
                 <label class="form-control-label" for="input-username">Nomor Identitas (KTP)*</label>
                 <input type="text" id="no_ktp" name="no_ktp" class="form-control form-control-alternative" placeholder="Nomor Identitas (KTP)">
               </div>
           </div>
          </div>
          <div class="row">
             <div class="col-lg-6">
               <div class="form-group">
                <label class="form-control-label" for="input-username">Tempat Lahir *</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control form-control-alternative" placeholder="Tempat Lahir">
               </div>
             </div>
          <div class="col-lg-6">
             <div class="form-group">
               <label class="form-control-label" for="input-username">Tanggal Lahir *</label>
               <input type="text" id="tanggal_lahir" name="tanggal_lahir" class="form-control form-control-alternative datepicker" placeholder="Tanggal Lahir" autocomplete="off">
             </div>
            </div>
          </div>
          <div class="row">
             <div class="col-lg-6">
               <div class="form-group">
                  <label class="form-control-label" for="input-username">Status Pernikahan *</label>
                   <select class="form-control form-control-alternative" id="gender" name="gender">
                      <option selected>Status</option>
                      <option value="Laki-laki">Menikah</option>
                      <option value="Perempuan">Belum Menikah</option>
                      <option value="Perempuan">Duda</option>
                      <option value="Perempuan">Janda</option>
                  </select>
               </div>
            </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Jenis Kelamin *</label>
                  <select class="form-control form-control-alternative" id="gender" name="gender">
                  <option selected>Jenis Kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
             </div>
          </div>
          <div class="row">
           <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-username">Agama *</label>
                <select class="form-control form-control-alternative" id="agama" name="agama">
                  <option selected>Agama</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
               </select>
            </div>
          </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Jumlah Anak *</label>
                 <input type="number" id="jml_anak" name="jml_anak" class="form-control form-control-alternative" placeholder="Jumlah Anak">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Provinsi</label>
                 <select id="idselectProvinsi" name="id_prov" class="form-control" required="required">
                    
                   </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Desa / Kelurahan</label>
                  <input type="text" id="desa" name="desa" class="form-control form-control-alternative" placeholder="Desa / Kelurahan">
                </div>
              </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Kecamatan </label>
                <input type="text" id="kecamatan" name="kecamatan" class="form-control form-control-alternative" placeholder="Kecamatan">
              </div>
           </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Kabupaten / Kota</label>
                    <input type="text" id="kota" name="kota" class="form-control form-control-alternative" placeholder="Kabupaten / Kota">
                </div>
              </div>
          </div>
         <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Alamat </label>
                  <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control form-control-alternative">
                </div>
           </div>
            <div class="col-lg-6">
              <div class="row">
                  <div class="form-group col-lg-5">
                    <label class="form-control-label" for="input-username">RT</label>
                     <input type="text" id="rt" name="rt" class="form-control form-control-alternative" placeholder="RT">
                  </div>
                  <div class="form-group col-lg-2">
                        <label class="form-control-label">&nbsp;</label>
                         <input type="text" class="form-control form-control-alternative" placeholder="/" readonly style="background: #fff;">
                  </div>
                 <div class="form-group col-lg-5">
                    <label class="form-control-label" for="input-username">RW</label>
                      <input type="text" id="rw" name="rw" class="form-control form-control-alternative" placeholder="RW">
                 </div>
             </div>
            </div>
          </div>
         <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-kode-pos">Kodepos</label>
              <input type="text" name="kodepos" class="form-control form-control-alternative" placeholder="Kodepos">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
               <label class="form-control-label" for="input-golongan-darah">Golongan Darah</label>
                <select class="form-control form-control-alternative" id="gol_darah" name="gol_darah">
                 <option selected>Pilih Darah</option>
                  <option value="O">O</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
              </select>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Keahlian Bahasa English</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ">
                      <input class="custom-control-input" id="customCheck1" type="checkbox" name="status[]">
                      <label class="custom-control-label" for="customCheck1">Aktif</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="customCheck2" type="checkbox" name="status[]">
                      <label class="custom-control-label" for="customCheck2">Pasif</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ">
                      <input class="custom-control-input" id="customCheck3" type="checkbox">
                      <label class="custom-control-label" for="customCheck3">Bersertifikat</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="customCheck4" type="checkbox">
                      <label class="custom-control-label" for="customCheck4">Tidak Bersertifikat</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Keahlian Bahasa Arab</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ">
                      <input class="custom-control-input" id="customCheck5" type="checkbox">
                      <label class="custom-control-label" for="customCheck5">Aktif</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="customCheck6" type="checkbox">
                      <label class="custom-control-label" for="customCheck6">Pasif</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ">
                      <input class="custom-control-input" id="customCheck7" type="checkbox">
                      <label class="custom-control-label" for="customCheck7">Bersertifikat</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="customCheck8" type="checkbox">
                      <label class="custom-control-label" for="customCheck8">Tidak Bersertifikat</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
             <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-unit">Status Kepegawaian</label>
                    <select id="idselectStatusKrywan" name="id_status_karyawan" class="form-control" required="required">
                    
                  
                   </select>
                 </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label" for="input-unit">Jabatan</label>
                    <select id="idselectJbtn" name="id_jabatan" class="form-control">                 
                   </select>
                 </div>
              </div>
          </div>
         <div class="row">
            <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Ukuran Seragam</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio1" type="radio" name="seragam[]">
                      <label class="custom-control-label" for="customRadio1">S</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="customRadio2" type="radio" name="seragam[]">
                      <label class="custom-control-label" for="customRadio2">M</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio3" type="radio" name="seragam[]">
                      <label class="custom-control-label" for="customRadio3">XL</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="customRadio4" type="radio" name="seragam[]">
                      <label class="custom-control-label" for="customRadio4">XXL</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label" for="input-unit">Tanggal Bergabung</label>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                      </div>
                       <input class="form-control datepicker" placeholder="Mulai Bergabung">
                   </div>
                </div>
               </div>
              </div>
            </div>
         <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input">Email</label>
               <div class="form-group">
                 <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
               </div>
            </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
               <label class="form-control-label" for="input">Nomor Telp</label>
              <input type="text" class="form-control" name="no_tlp" placeholder="Nomor Telp">
          </div>
        </div>
      </div>
    <div class="row">
      <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Hak Akses Aplikasi</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ">
                      <input class="custom-control-input" id="customCheck28" type="checkbox">
                      <label class="custom-control-label" for="customCheck28">Circle Student</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="customCheck29" type="checkbox">
                      <label class="custom-control-label" for="customCheck29">HRD</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    <div class="tab-pane fade" id="input-Pendidikan" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
        <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                  <label class="form-control-label" for="input-username">Pendidikan Terakhir</label>
                    <select class="form-control form-control-alternative" id="idselectPndkkanterakhir" name="nm_jnjng_pddk">
                     
                   </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Tahun Lulus</label>
                  <input type="text" id="thn_lulus" name="thn_lulus" class="form-control form-control-alternative" placeholder="Tahun Lulus">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label class="form-control-label" for="input-username">Nama Sekolah/Universitas </label>
                <div class="input-group">
                  <!-- <select class="form-control form-control-alternative" id="idselectUniversitas" name="nm_college_krywn" style="width: 80%">
                   </select> -->
                   <select type="text" id="idselectUniversitas" class="form-control"></select>
                  <div class="input-group-append">
                  <!--   <button type="button" class="btn btn-success">Action</button> -->
                     <button type="button" class="btn btn-outline-primary mr-4 dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                     </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add-univ"x>Add</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#import-univ">Import</a>
                    <!-- <a class="dropdown-item" href="#">Something else here</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a> -->
                  </div>
                </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Fakultas </label>
                  <select class="form-control form-control-alternative" id="idselectFakultas" name="">
                     
                   </select>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                   <label class="form-control-label" for="input-username">Jurusan</label>
                  <select class="form-control form-control-alternative" id="idselectJurusan" name="">
                     
                   </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">IPK</label>
                  <input type="text" id="ipk" name="ipk" class="form-control form-control-alternative" placeholder="IPK">
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Tilawah Al-Qur'an</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio6" type="radio" name="seragam[]">
                      <label class="custom-control-label" for="customRadio6">Cukup</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="customRadio7" type="radio" name="seragam[]">
                      <label class="custom-control-label" for="customRadio7">Bisa</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio8" type="radio" name="seragam[]">
                      <label class="custom-control-label" for="customRadio8">Mahir</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>           
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Pengisi Kajian</label>
                  <input type="text" id="p_kjian" name="p_kjian" class="form-control form-control-alternative" placeholder="Pengisi Kajian">
                </div>
              </div>
            </div>
             <div class="row">
            <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Komputer</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio10" type="radio" name="seragam[]">
                      <label class="custom-control-label" for="customRadio10">Cukup</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="customRadio11" type="radio" name="seragam[]">
                      <label class="custom-control-label" for="customRadio11">Bisa</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio12" type="radio" name="seragam[]">
                      <label class="custom-control-label" for="customRadio12">Mahir</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Pelatihan yang diinginkan</label>
                  <input type="text" id="" name="" class="form-control form-control-alternative" placeholder="Pelatihan">
                </div>
              </div>
            </div>      
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Halafalan Qur'an</label>
                  <input type="number" id="hfln_quran" name="hfln_quran" class="form-control form-control-alternative" placeholder="">
                </div>
              </div>
               <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Aktivitas Kajian</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio22" type="radio" name="status[]">
                      <label class="custom-control-label" for="customRadio22">Aktif</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="customRadio23" type="radio" name="status[]">
                      <label class="custom-control-label" for="customRadio23">Pasif</label>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>      
      <div class="tab-pane fade" id="input-File" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">  
       
         <div class="form-group">
             <label class="col-md-4 col-sm-4 col-xs-12 label-control">Foto Pegawai</label>
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <input id="photo_pegawai" name="photo_pegawai" type="file" class="form-control" accept="image/x-png,image/jpeg" onchange="readURL(this);">
               </div>
         </div>
            <div class="row">
               <div class="form-group">
                   <label class="col-md-4 col-sm-4 col-xs-12 label-control"></label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <img id="PrevPhoto_pgwi" src="<?php echo base_url('assets/photo_karyawan/avatar.png')?>" style="width: 300px;max-width: 300px;">
                     </div>
               </div>
            </div>
          <div class="form-group">
             <label class="col-md-4 col-sm-4 col-xs-12 label-control">Gambar KTP</label>
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <input id="file_ktp" name="file_ktp" type="file" class="form-control" accept="image/x-png,image/jpeg" onchange="readURL2(this);">
               </div>
         </div>
               <div class="form-group">
                   <label class="col-md-4 col-sm-4 col-xs-12 label-control"></label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <img id="Prevfile_ktp" src="<?php echo base_url('assets/photo_karyawan/KTP elektronik.jpg')?>" style="width: 150px;max-width: 150px;">
                     </div>
               </div>
        <div class="form-group">
             <label class="col-md-4 col-sm-4 col-xs-12 label-control">Gambar KK</label>
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <input id="file_kk" name="file_kk" type="file" class="form-control" accept="image/x-png,image/jpeg" onchange="readURL3(this);">
               </div>
         </div>
               <div class="form-group">
                   <label class="col-md-4 col-sm-4 col-xs-12 label-control"></label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <img id="Prevfile_kk" src="<?php echo base_url('assets/photo_karyawan/kk2.png')?>" style="width: 150px;max-width: 150px;">
                     </div>
               </div>
      </div>
  </div>
</div>

          <div class="card-footer py-4">
          <button type="submit" class="btn btn-success pull-right ml-3" id="btnImport" style="display: none;">Import</button>
          <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
          <button type="button" class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Employee')">Cancel</button>
          </form>
          </div>
          </div> 


  <div class="container-fluid" style="display: none;" id="formDetailEmployee">
    <div class="card card-profile shadow">
      <div class="row justify-content-center">
        <div class="col-lg-3 order-lg-2">
          <div class="card-profile-image">
            <a href="#">
              <img src="" class="boxed-circle" id="photo">
            </a>
          </div>
        </div>
      </div>
      <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
          <a href="#" class="btn btn-sm btn-default mr-4 float-left" onclick="backPreviewEmployee()"><i class="fa fa-angle-left"></i> Back</a>
          <a href="#" class="btn btn-sm btn-default float-right" style="margin-left:10px;" onclick="editDataEmployee()"><i class="fa fa-edit text-info"></i> Edit</a>
          <a href="#" class="btn btn-sm btn-default float-right"><i class="ni ni-key-25 text-info"></i> Change Password</a>&nbsp;&nbsp;
      </div>
      <div class="text-center mt-5">
        <h3 class="mt-3" id="hdNamaEmployee"></h3>
      </div>
        <div class="nav-wrapper">
          <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
            <li class="nav-item show" id="ds" onclick="changeData('ds')">
              <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Data Employee</a>
            </li>
            <li class="nav-item" id="do" onclick="changeData('do')">
              <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Data Orang Tua</a>
            </li>
          </ul>
        </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <form id="updateDataEmployee">
              <table class="table">
                <tbody>
                  <tr>
                    <th>NIPD :</th>
                    <td>
                      <span id="lbNIPD"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_nipd" id="edit_nipd" readonly />
                      </div>
                    </td>
                    <th>NISN :</th>
                    <td>
                      <span id="lbNISN"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_nisn" id="edit_nisn"/>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th style="width: 21%;">Nama :</th>
                    <td style="width: 29%;">
                      <span id="lbNmEmployee"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_nmEmployee" id="edit_nmEmployee"/>
                      </div>
                    </td>
                    <th style="width: 21%;">NIK :</th>
                    <td style="width: 29%;">
                      <span id="lbNIK"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_nik" id="edit_nik"/>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Tempat Lahir :</th>
                    <td>
                      <span id="lbTmptLahir"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_tmptLahir" id="edit_tmptLahir" />
                      </div>
                    </td>
                    <th>Tanggal Lahir :</th>
                    <td>
                      <span id="lbTglLahir"></span>
                      <div class="form-group">
                        <input class="form-control form-control-alternative datepicker" style="display: none;" placeholder="Pilih Tanggal Lahir" type="text" name="edit_tglLahir" id="edit_tglLahir" autocomplete="off">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Jenis Kelamin :</th>
                    <td>
                      <div class="form-group">
                        <span id="lbGender"></span>
                        <select class="form-control form-control-alternative" name="edit_gender" id="edit_gender" style="display: none;">
                          <option selected="selected">Jenis Kelamin</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>  
                    </td>
                    <th>Agama :</th>
                    <td>
                      <div class="form-group">
                         <span id="lbAgama"></span>
                        <select class="form-control form-control-alternative" style="display:none;" name="edit_agama" id="edit_agama">
                          <option value="" selected="selected"></option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                        </select>
                      </div>  
                    </td>
                  </tr>
                  <tr>
                    <th>Unit :</th>
                    <td>
                      <span id="lbUnit"></span>
                      <div class="form-group">
                        <select value="" class="form-control form-control-alternative" style="display:none;" name="edit_unit" id="edit_unit" onchange="selectEditUnit()" />
                          <option selected="selected">Unit</option>
                        </select>
                      </div>
                    </td>
                    <th>Kelas :</th>
                    <td>
                      <span id="lbKls"></span>
                      <div class="form-group">
                        <select value="" class="form-control form-control-alternative" style="display:none;" name="edit_kls" id="edit_kls" onchange="selectedEditKls()" /></select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Kelas Paralel :</th>
                    <td>
                      <span id="lbKlsParalel"></span>
                      <div class="form-group">
                        <select  class="form-control form-control-alternative" style="display:none;" name="edit_klsParalel" id="edit_klsParalel" />
                        </select>
                      </div>
                    </td>
                    <th>Jurusan :</th>
                    <td>
                      <div class="form-group">
                        <span id="lbJurusan"></span>
                        <select class="form-control form-control-alternative" style="display:none;" name="edit_jurusan" id="edit_jurusan" disabled />
                            <option>Pilih Jurusan</option>
                        </select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Angkatan :</th>
                    <td>
                      <span id="lbAngkatan"></span>
                        <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_angkatan" id="edit_angkatan" />
                      </div>
                    </td>
                    <th>SKHUN :</th>
                    <td>
                      <span id="lbSkhun"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_skhun" id="edit_skhun" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Penerima KPS :</th>
                    <td>
                      <span id="lbStatusKPS"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_statusKPS" id="edit_statusKPS" />
                      </div>
                    </td>
                    <th>No KPS :</th>
                    <td>
                      <span id="lbNoKPS"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_noKPS" id="edit_noKPS" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Alamat :</th>
                    <td>
                      <textarea class="form-control textarea-hiden" id="lbAlamat" disabled="disabled" style="background-color: #fff;"></textarea>
                      <div class="form-group">
                        <textarea class="form-control form-control-alternative" style="display: none;" name="edit_alamat" id="edit_alamat"></textarea>
                      </div>
                    </td>
                    <th>No Telepon :</th>
                    <td>
                      <span id="lbTlp"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_tlp" id="edit_tlp" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Rt / Rw :</th>
                    <td class="row">
                      <span id="lbRtRw"></span>
                      <div class="form-group col-lg-6">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_rt" id="edit_rt" placeholder="Rt" />
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_rw" id="edit_rw" placeholder="Rw" />
                      </div>
                    </td>
                    <th>Desa / Kelurahan :</th>
                    <td>
                      <span id="lbDesa"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_desa" id="edit_desa" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Kecamatan :</th>
                    <td>
                      <span id="lbKecamatan"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_kecamatan" id="edit_kecamatan" />
                      </div>
                    </td>
                    <th>Kabupaten / Kota :</th>
                    <td>
                      <span id="lbKota"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_kota" id="edit_kota" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Kode Pos :</th>
                    <td>
                      <span id="lbPos"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_kdPos" id="edit_kdPos" />
                      </div>
                    </td>
                    <th>Photo :</th>
                    <td>
                      <span id="lbPhoto"></span>
                      <input type="file" class="form-control form-control-alternative" name="edit_photo_Employee" id="edit_photo" style="display: none;">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
              <table class="table">
                <thead>
                  <tr style="text-align: center; background-color: #ced4da;">
                    <th colspan="2">AYAH</th>
                    <th colspan="2">IBU</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Nama :</th>
                    <td>
                      <span id="lbNmBpk"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_nmBpk" id="edit_nmBpk" />
                      </div>
                    </td>
                    <th>Nama :</th>
                    <td>
                      <span id="lbNmIbu"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_nmIbu" id="edit_nmIbu" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Tanggal Lahir :</th>
                    <td>
                      <span id="lbTglLahirBpk"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative datepicker" style="display:none;" name="edit_thnLhrBpk" id="edit_thnLhrBpk" autocomplete="off" />
                      </div>
                    </td>
                    <th>Tanggal Lahir :</th>
                    <td>
                      <span id="lbTglLahirIbu"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative datepicker" style="display:none;" name="edit_thnLhrIbu" id="edit_thnLhrIbu" autocomplete="off"/>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Pendidikan :</th>
                    <td>
                      <span id="lbPendidikanBpk"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_pendidikanBpk" id="edit_pendidikanBpk" />
                      </div>
                    </td>
                    <th>Pendidikan :</th>
                    <td>
                      <span id="lbPendidikanIbu"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_pendidikanIbu" id="edit_pendidikanIbu" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Pekerjaan :</th>
                    <td>
                      <span id="lbPekerjaanBpk"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_pekerjaanBpk" id="edit_pekerjaanBpk" />
                      </div>
                    </td>
                    <th>Pekerjaan :</th>
                    <td>
                      <span id="lbPekerjaanIbu"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_pekerjaanIbu" id="edit_pekerjaanIbu" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>No Telepon :</th>
                    <td>
                      <span id="lbTlpBpk"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_noTlpBpk" id="edit_noTlpBpk" />
                      </div>
                    </td>
                    <th>No Telepon :</th>
                    <td>
                      <span id="lbTlpIbu"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_noTlpIbu" id="edit_noTlpIbu" />
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="mb-sm-3 pull-right">
              <button type="button" class="btn btn-warning" id="btnCancelEdit" onclick="cancelEditDataEmployee()" style="display: none;">CANCEL</button>
              <button type="submit" class="btn btn-primary mr-4" id="btnUpdate" style="display: none;">UPDATE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>



<div class="modal fade" id="add-univ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH UNIVERSITAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-university"></i></span>

                    </div>
                    <input class="form-control" placeholder="Universitas" type="text" name="">
                </div>
            </div>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="import-univ" tabindex="-1" role="dialog" aria-labelledby="import-univ" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="import-univ">FORM IMPORT UNIVERSITAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <!--  <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      

                    </div>
              </div>
            </div>  
            <div class="input-group">
  <div class="custom-file">
    <form id="importDataUniv">
    <input type="file" class="custom-file-input" id="inputGroupFile04" name="excel_univ">
    <label class="custom-file-label" for="inputGroupFile04"><i class="ni ni-cloud-upload-96"></i> Choose file</label>
  </div>
  <div class="input-group-append">
    <button type="submit" class="btn btn-outline-primary">Upload</button>
  </form>
  </div>  
</div>    
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
   <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">         
              <div class="card bg-secondary shadow border-0">
                 <div class="card-header bg-transparent pb-5">
                  <div class="text-muted text-center mt-2 mb-3"><h1>Form Tambah Universitas</h1> <button type="button" class="close" data-dismiss="modal" aria-label="Close"></div>

                    <!-- <div class="btn-wrapper text-center">
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon"><img src="../../assets/img/icons/common/github.svg"></span>
                      <span class="btn-inner--text">Github</span>
                   </a>
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon"><img src="../../assets/img/icons/common/google.svg"></span>
                      <span class="btn-inner--text">Google</span>
                   </a>
                 </div> -->
               </div>
      <div class="card-body px-lg-5 py-lg-5">
           <!--  <div class="text-center text-muted mb-4">
                  <small>Or sign in with credentials</small>
            </div> -->
           <form role="form">
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nama Universitas :</span>

                    </div>
                    <input class="form-control" placeholder="Universitas" type="text">
                </div>
            </div>
            <!-- <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                </div>
            </div>
            <div class="custom-control custom-control-alternative custom-checkbox">
                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                </label>
            </div> -->
            <div class="text-center">
                <button type="button" class="btn btn-primary my-4">Simpan</button>
            </div>
        </form>
    </div>
</div>
   </div>
    </div>
    </div>
</div>
  </div>
</div>