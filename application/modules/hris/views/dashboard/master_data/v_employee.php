<body <?php if (!empty($sess_unit)) {echo 'onload="selectUnitEmployeeForKls()"';}?>>
<div class="card shadow" id="mainFormEmployee">
  <div class="card-header border-0">
    <li class="nav-item dropdown pull-right ">
                    <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button class="btn btn-sm btn-primary pull-right"><i class="far fa-caret-square-down"></i> Tambah Employee</button>
                        <span class="nav-link-inner--text d-lg-none">Settings</span> 
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                        <a class="dropdown-item" href="#"><i class="fas fa-file-signature"></i>Input Manual</a>
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
          <th scope="col" width="10%">Status</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmImportEmployee" style="display: none;">
    <div class="nav-wrapper">
      <form id="importDataEmployee">
        <a href="<?php echo base_url('assets/file_format/format_Employee.xlsx') ?>" ><button class="btn btn-outline-warning" type="button"><i class="fa fa-download"></i> Download Format Excel</button>&nbsp;&nbsp;</a>
        <input type="file" name="excel_employee" style="height:50px">
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
          <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#input-ortu" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Data Orang Tua</a>
        </li>
      </ul>
      </div>
      <form id="saveDataEmployee">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="input-Employee" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">NIPD *</label>
                <input type="text" id="nipd" name="nipd" class="form-control form-control-alternative" placeholder="NIPD">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">NISN *</label>
                <input type="text" id="nisn" name="nisn" class="form-control form-control-alternative" placeholder="NISN">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Nama *</label>
                <input type="text" id="nama" name="nama" class="form-control form-control-alternative" placeholder="Nama Employee">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">NIK *</label>
                <input type="text" id="nik" name="nik" class="form-control form-control-alternative" placeholder="NIK">
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
                <label class="form-control-label" for="input-username">Jenis Kelamin *</label>
                <select class="form-control form-control-alternative" id="gender" name="gender">
                  <option selected>Jenis Kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>
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
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Unit *</label>
                <select class="form-control form-control-alternative" id="input_unit" name="unit" onchange="getKelasByUnit(),changeUnit()">
                  <option>Pilih Unit *</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Kelas</label>
                <select id="input_kls" name="kd_kls" class="form-control form-control-alternative" onchange="getKelasParalerByKls()">
                  <option>Pilih Kelas *</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Kelas Paralel</label>
                <select id="input_klsParalel" name="kd_kls_paralel" class="form-control form-control-alternative">
                  <option>Pilih Kelas Paralel *</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Jurusan</label>
                <select  id="input_jurusan" name="kd_jurusan" class="form-control form-control-alternative" disabled>
                  <option>Pilih Jurusan</option>
                </select>  
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Angkatan</label>
                <input type="text" id="angkatan" name="angkatan" placeholder="Angkatan" class="form-control form-control-alternative">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">SKHUN</label>
                <input type="text" id="skhun" name="skhun" placeholder="SKHUN" class="form-control form-control-alternative">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Penerima KPS</label>
                <input type="text" id="status_kps" name="status_kps" placeholder="Penerima KPS" class="form-control form-control-alternative">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">No KPS</label>
                <input type="text" id="no_kps" name="no_kps" placeholder="No KPS" class="form-control form-control-alternative">
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
              <div class="form-group">
                <label class="form-control-label" for="input-username">No Telepon</label>
                <input type="text" id="no_tlp" name="no_tlp" placeholder="No Telepon" class="form-control form-control-alternative">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="row">
                <div class="form-group col-lg-5">
                  <label class="form-control-label" for="input-username">RT</label>
                  <input type="text" id="rt" name="rt" class="form-control form-control-alternative" placeholder="RT">
                </div>
                <div class="form-group col-lg-2">
                  <label class="form-control-label">&nbsp;</label>
                  <input type="text" class="form-control form-control-alternative" placeholder="    /" readonly style="background: #fff;">
                </div>
                <div class="form-group col-lg-5">
                  <label class="form-control-label" for="input-username">RW</label>
                  <input type="text" id="rw" name="rw" class="form-control form-control-alternative" placeholder="RW">
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Desa / Kelurahan</label>
                <input type="text" id="desa" name="desa" class="form-control form-control-alternative" placeholder="Desa / Kelurahan">
              </div>
            </div>
          </div>
          <div class="row">
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
                <label class="form-control-label" for="input-username">Kode Pos </label>
                <input type="text" id="kd_pos" name="kd_pos" class="form-control form-control-alternative" placeholder="Kode Pos">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Photo </label>
                <input type="file" id="photo_Employee" name="photo_Employee" class="form-control form-control-alternative" placeholder="photo">
              </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="input-ortu" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Nama Ayah *</label>
                  <input type="text" id="nm_bpk" name="nm_bpk" class="form-control form-control-alternative" placeholder="Nama Ayah">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Nama Ibu *</label>
                  <input type="text" id="nm_ibu" name="nm_ibu" class="form-control form-control-alternative" placeholder="Nama Ibu">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Tanggal Lahir Ayah *</label>
                  <input type="text" id="thn_lahir_bpk" name="thn_lahir_bpk" class="form-control form-control-alternative datepicker" placeholder="Tanggal Lahir Ayah" autocomplete="off">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Tanggal Lahir Ibu *</label>
                  <input type="text" id="thn_lahir_ibu" name="thn_lahir_ibu" class="form-control form-control-alternative datepicker" placeholder="Tanggal Lahir Ibu" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Pendidikan Ayah *</label>
                  <input type="text" id="pendidikan_bpk" name="pendidikan_bpk" class="form-control form-control-alternative" placeholder="Pendidikan Ayah">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Pendidikan Ibu *</label>
                  <input type="text" id="pendidikan_ibu" name="pendidikan_ibu" class="form-control form-control-alternative" placeholder="Pendidikan Ibu">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Pekerjaan Ayah *</label>
                  <input type="text" id="pekerjaan_bpk" name="pekerjaan_bpk" class="form-control form-control-alternative" placeholder="Pekerjaan Ayah">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Pekerjaan Ibu *</label>
                  <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control form-control-alternative" placeholder="Pekerjaan Ibu">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">No Telepon Ayah *</label>
                  <input type="text" id="no_tlp_bpk" name="no_tlp_bpk" class="form-control form-control-alternative" placeholder="No Telepon Ayah">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">No Telepon Ibu *</label>
                  <input type="text" id="no_tlp_ibu" name="no_tlp_ibu" class="form-control form-control-alternative" placeholder="No Telepon Ibu">
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="mb-sm-3 pull-right">
            <button type="button" class="btn btn-warning" id="btnCancelEdit" onclick="cancelEditDataEmployee()" style="display: none;">CANCEL</button>
            <button type="submit" class="btn btn-primary mr-4" id="btnUpdate" style="display: none;">UPDATE</button>
            </form>
          </div> -->
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
