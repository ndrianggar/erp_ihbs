<body <?php if (!empty($this->session->userdata("unit"))) {echo 'onload="dataTbGuru()"';}?>>
<div class="card shadow" id="mainFormGuru">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddKelas" onclick="add('Guru')"><i class="fa fa-plus"></i> Tambah</button>
    <button class="btn btn-sm btn-primary pull-right mr-2" id="btnAddKelas" onclick="importGuru()"><i class="fa fa-upload"></i> Import Guru</button>
    <h3 class="mb-0">Data Guru
      <select class="form-control-sm" id="selectUnit" onchange="dataTbGuru()" <?php if (!empty($this->session->userdata("unit"))) { echo 'style=display:none'; }?>>
        <option selected="selected" value="">Pilih Unit *</option>
      </select>
    </h3>
  </div>
  <div class="table-responsive" id="frmTbGuru">
    <table class="table align-items-center table-flush" id="tbGuru">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">NIP</th>
          <th scope="col">Nama</th>
          <th scope="col">No Telepon</th>
          <th scope="col">Status Pegawai</th>
          <th scope="col">Jenis PTK</th>
          <th scope="col">Unit</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmImportGuru" style="display: none;">
    <div class="nav-wrapper">
      <form id="importDataGuru">
        <a href="<?php echo base_url('assets/file_format/format_guru.xlsx') ?>" ><button class="btn btn-success" type="button"><i class="fa fa-download"></i> Download Format Excel</button></a>
        <input type="file" name="excel_guru" style="height:50px">
    </div>
  </div>
  <div class="card-footer py-4">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnImport" style="display: none;">Import</button>
    </form>
    <button class="btn btn-warning pull-right" id="btnCancelImport" style="display: none;" onclick="cancelAdd('Guru')">Cancel</button>
  </div>
  <div class="container" id="frmAddGuru" style="display: none;">
    <form id="inputDataGuru">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Unit *</label>
          <select class="form-control form-control-alternative" id="input_unit" name="input_unit">
            <option selected="selected" value="">Pilih Unit *</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP PUTRA">SMP PUTRA</option>
            <option value="SMP PUTRI">SMP PUTRI</option>
            <option value="SMA PUTRA">SMA PUTRA</option>
            <option value="SMA PUTRI">SMA PUTRI</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nip *</label>
          <input type="text" id="input_nip" name="input_nip" class="form-control form-control-alternative" placeholder="NIP">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nik *</label>
          <input type="text" id="input_nik" name="input_nik" class="form-control form-control-alternative" placeholder="NIK">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama *</label>
          <input class="form-control form-control-alternative" type="text" id="input_nama" name="input_nama" placeholder="Nama">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Tempat Lahir *</label>
          <input type="text" id="input_tmptLahir" name="input_tmptLahir" class="form-control form-control-alternative" placeholder="Tempat Lahir">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Tanggal Lahir *</label>
          <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
              </div>
              <input class="form-control form-control-alternative datepicker" placeholder="Pilih Tanggal Lahir" type="text" id="input_tglLahir" name="input_tglLahir" autocomplete="off">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Jenis Kelamin *</label>
          <select type="text" id="input_gender" name="input_gender" class="form-control form-control-alternative">
            <option value="" selected>Pilih Jenis Kelamin *</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Agama *</label>
          <select class="form-control form-control-alternative" type="text" id="input_agama" name="input_agama">
            <option selected="selected" value="">Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
          </select> 
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kewarganegaraan *</label>
          <input type="text" class="form-control form-control-alternative" id="input_kewarganegaraan" name="input_kewarganegaraan" placeholder="Kewarganegaraan">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">No Telepon *</label>
          <input class="form-control form-control-alternative" type="text" id="input_tlp" name="input_tlp" placeholder="No Telepon">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Email *</label>
          <input type="email" class="form-control form-control-alternative" id="input_email" name="input_email" placeholder="Email">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">NPWP *</label>
          <input class="form-control form-control-alternative" type="text" id="input_npwp" name="input_npwp" placeholder="NPWP">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Alamat *</label>
          <textarea type="text" class="form-control form-control-alternative" id="input_alamat" name="input_alamat" placeholder="Alamat"></textarea>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Rt / Rw *</label>
          <div class="row">
            <div class="form-group col-lg-6">
              <input type="text" value="" class="form-control form-control-alternative" name="input_rt" id="input_rt" placeholder="Rt" />
            </div>
            <div class="form-group col-lg-6">
              <input type="text" value="" class="form-control form-control-alternative" name="input_rw" id="input_rw" placeholder="Rw" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kecamatan *</label>
          <input type="text" class="form-control form-control-alternative" id="input_kecamatan" name="input_kecamatan" placeholder="Kecamatan">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Desa  / Kelurahan *</label>
          <input class="form-control form-control-alternative" type="text" id="input_desa" name="input_desa" placeholder="Desa / Kelurahan">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kabupaten / Kota *</label>
          <input type="text" class="form-control form-control-alternative" id="input_kota" name="input_kota" placeholder="Kabupaten / Kota">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kode Pos *</label>
          <input class="form-control form-control-alternative" type="text" id="input_kdPos" name="input_kdPos" placeholder="Kode Pos">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">NUPTK</label>
          <input type="text" class="form-control form-control-alternative" id="input_nuptk" name="input_nuptk" placeholder="NUPTK">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Bidang Studi</label>
          <input class="form-control form-control-alternative" type="text" id="input_bidangStudi" name="input_bidangStudi" placeholder="Bidang Studi">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Jenis PTK</label>
          <select type="text" class="form-control form-control-alternative" id="input_ptk" name="input_ptk">
            <option selected="selected" value="">Pilih Jenis PTK</option>
            <option value="Tenaga Administrasi Sekolah">Tenaga Administrasi Sekolah</option>
            <option value="Guru Mapel">Guru Mapel</option>
            <option value="Guru BK">Guru BK</option>
            <option value="Guru Kelas">Guru Kelas</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Tugas Tambahan</label>
          <input class="form-control form-control-alternative" type="text" id="input_tgsTambahan" name="input_tgsTambahan" placeholder="Tugas Tambahan">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Status Kepegawaian</label>
          <select type="text" class="form-control form-control-alternative" id="input_stsKepegawaian" name="input_stsKepegawaian">
            <option selected value="">Pilih Status Kepegawaian</option>
            <option value="Tenaga Honor Sekolah">Tenaga Honor Sekolah</option>
            <option value="Guru Honor Sekolah">Guru Honor Sekolah</option>
            <option value="GTY/PTY">GTY/PTY</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Status Keaktifan *</label>
          <select class="form-control form-control-alternative" type="text" id="input_stsKeaktifan" name="input_stsKeaktifan">
            <option selected value="">Pilih Status Keatifan</option>
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Status Nikah *</label>
          <select type="text" class="form-control form-control-alternative" id="input_stsNikah" name="input_stsNikah">
            <option selected value="">Pilih Status Nikah</option>
            <option value="Single">Single</option>
            <option value="Nikah">Nikah</option>
            <option value="Duda/Janda">Duda/Janda</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">SK CPNS </label>
          <input class="form-control form-control-alternative" type="text" id="input_skCpns" name="input_skCpns" placeholder="SK CPNS">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Tanggal CPNS</label>
          <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
              </div>
              <input type="text" class="form-control form-control-alternative datepicker" id="input_tglCpns" name="input_tglCpns" placeholder="Tanggal CPNS" autocomplete="off">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">SK Pengangkatan</label>
          <input class="form-control form-control-alternative" type="text" id="input_skPengangkatan" name="input_skPengangkatan" placeholder="SK Pengangkatan">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">TMT Pengangkatan</label>
          <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
              </div>
              <input type="text" class="form-control form-control-alternative datepicker" id="input_tmtPengangkatan" name="input_tmtPengangkatan" placeholder="TMT Pengangkatan" autocomplete="off">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Lembaga Pengangkatan</label>
          <input class="form-control form-control-alternative" type="text" id="input_lbPengangkatan" name="input_lbPengangkatan" placeholder="Lembaga Pengangkatan">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Golongan</label>
          <input type="text" class="form-control form-control-alternative" id="input_golongan" name="input_golongan" placeholder="Golongan">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Sumber Gaji</label>
          <input class="form-control form-control-alternative" type="text" id="input_sumberGaji" name="input_sumberGaji" placeholder="Sumber Gaji">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Ahli Laboratorium</label>
          <input type="text" class="form-control form-control-alternative" id="input_ahliLaborat" name="input_ahliLaborat" placeholder="Ahli Laboratorium">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Ibu Kandung</label>
          <input class="form-control form-control-alternative" type="text" id="input_ibu" name="input_ibu" placeholder="Nama Ibu Kandung">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Suami / Istri</label>
          <input type="text" class="form-control form-control-alternative" id="input_nmSuamiIstri" name="input_nmSuamiIstri" placeholder="Nama Suami Istri">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nip Suami / Istri</label>
          <input class="form-control form-control-alternative" type="text" id="input_nipSuamiIstri" name="input_nipSuamiIstri" placeholder="Nama Ibu Kandung">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Pekerjaan Suami / Istri</label>
          <input type="text" class="form-control form-control-alternative" id="input_pekerjaanSuamiIstri" name="input_pekerjaanSuamiIstri" placeholder="Pekerjaan Suami Istri">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">TMT PNS</label>
          <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
              </div>
              <input type="text" class="form-control form-control-alternative datepicker" id="input_tmtPns" name="input_tmtPns" placeholder="TMT PNS" autocomplete="off">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Lisensi Kepsek</label>
          <input type="text" class="form-control form-control-alternative" id="input_lisensiKepsek" name="input_lisensiKepsek" placeholder="Lisensi Kepsek">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Jumlah Sekolah Binaan</label>
          <input class="form-control form-control-alternative" type="text" id="input_sekolahBinaan" name="input_sekolahBinaan" placeholder="Jumlah Sekolah Binaan">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Diklat Kepengawasan</label>
          <input type="text" class="form-control form-control-alternative" id="input_diklatKepengawasan" name="input_diklatKepengawasan" placeholder="Lisensi Kepsek">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Mampu Handle KK</label>
          <input class="form-control form-control-alternative" type="text" id="input_handleKk" name="input_handleKk" placeholder="Mampu Handle KK">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Keahlian Breile</label>
          <input type="text" class="form-control form-control-alternative" id="input_keahlianBreile" name="input_keahlianBreile" placeholder="Keahlian Breile">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Keahlian Bahasa Isyarat</label>
          <input class="form-control form-control-alternative" type="text" id="input_keahlianBhsIsyarat" name="input_keahlianBhsIsyarat" placeholder="Keahlian Bahasa Isyarat">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">NIY NIGK</label>
          <input type="text" class="form-control form-control-alternative" id="input_niyNigk" name="input_niyNigk" placeholder="NIY NIGK">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Photo</label>
          <input class="form-control form-control-alternative" type="file" id="input_photo" name="input_photo" placeholder="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Password Akun</label>
          <input type="password" class="form-control form-control-alternative" id="input_password" name="input_password" placeholder="Password">
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
    </form>
    <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Guru')">Cancel</button>
  </div>
</div>

<div class="container-fluid" style="display: none;" id="formDetailGuru">
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
          <a href="#" class="btn btn-sm btn-default mr-4 float-left" onclick="backPreviewGuru()"><i class="fa fa-angle-left"></i> Back</a>
          <a href="#" class="btn btn-sm btn-default float-right" style="margin-left:10px;" onclick="editDataGuru()"><i class="fa fa-edit text-info"></i> Edit</a>
          <a href="#" class="btn btn-sm btn-default float-right" data-toggle="modal" data-target="#modal_changePass"><i class="ni ni-key-25 text-info"></i> Change Password</a>&nbsp;&nbsp;
      </div>
      <div class="text-center mt-5">
        <h3 class="mt-3" id="hdNamaSiswa"></h3>
      </div>
        <div class="nav-wrapper">
          <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
            <li class="nav-item show" id="ds" onclick="changeData('ds')">
              <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Data Guru</a>
            </li>
          </ul>
        </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <form id="updateDataGuru">
              <table class="table">
                <tbody>
                  <tr>
                    <th>Unit :</th>
                    <td>
                      <span id="lbUnit"></span>
                      <div class="form-group">
                        <select class="form-control form-control-alternative" style="display:none;" name="edit_unit" id="edit_unit">
                          <option selected="selected" value="">Pilih Unit *</option>
                          <option value="TK">TK</option>
                          <option value="SD">SD</option>
                          <option value="SMP PUTRA">SMP PUTRA</option>
                          <option value="SMP PUTRI">SMP PUTRI</option>
                          <option value="SMA PUTRA">SMA PUTRA</option>
                          <option value="SMA PUTRI">SMA PUTRI</option>
                        </select>
                      </div>
                    </td>
                    <th>NIP :</th>
                    <td>
                      <span id="lbNip"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_nip" id="edit_nip"/>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th style="width: 21%;">Nama :</th>
                    <td style="width: 29%;">
                      <span id="lbNama"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_nama" id="edit_nama"/>
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
                        <input type="text" value="" class="form-control form-control-alternative datepicker" style="display:none;" name="edit_tglLahir" id="edit_tglLahir" autocomplete="off" />
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
                    <th>Kewarganegaraan :</th>
                    <td>
                      <span id="lbKewarganegaraan"></span>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-alternative" name="edit_kewarganegaraan" id="edit_kewarganegaraan" style="display:none;">
                      </div>
                    </td>
                    <th>No Telepon :</th>
                    <td>
                      <span id="lbTlp"></span>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-alternative" name="edit_tlp" id="edit_tlp" style="display:none;">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Email :</th>
                    <td>
                      <span id="lbEmail"></span>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-alternative" name="edit_email" id="edit_email" style="display:none;">
                      </div>
                    </td>
                    <th>NPWP :</th>
                    <td>
                      <span id="lbNpwp"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_npwp" id="edit_npwp" />
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
                  </tr>
                  <tr>
                    <th>Kecamatan :</th>
                    <td>
                      <span id="lbKecamatan"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_kecamatan" id="edit_kecamatan" />
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
                    <th>Kabupaten / Kota :</th>
                    <td>
                      <span id="lbKota"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_kota" id="edit_kota" />
                      </div>
                    </td>
                    <th>Kode Pos :</th>
                    <td>
                      <span id="lbPos"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_kdPos" id="edit_kdPos" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>NUPTK :</th>
                    <td>
                      <span id="lbNuptk"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_nuptk" id="edit_nuptk" />
                      </div>
                    </td>
                    <th>Bidang Studi :</th>
                    <td>
                      <span id="lbBidangStudi"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_bidangStudi" id="edit_bidangStudi" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Jenis PTK :</th>
                    <td>
                      <span id="lbPtk"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_ptk" id="edit_ptk" />
                      </div>
                    </td>
                    <th>Tugas Tambahan :</th>
                    <td>
                      <span id="lbTgsTambahan"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_tgsTambahan" id="edit_tgsTambahan" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Status Pegawai :</th>
                    <td>
                      <span id="lbStsPegawai"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_stsPegawai" id="edit_stsPegawai" />
                      </div>
                    </td>
                    <th>Status Keaktifan :</th>
                    <td>
                      <span id="lbStsKeaktifan"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_stsKeaktifan" id="edit_stsKeaktifan" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Status Nikah :</th>
                    <td>
                      <span id="lbStsNikah"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_stsNikah" id="edit_stsNikah" />
                      </div>
                    </td>
                    <th>SK CPNS :</th>
                    <td>
                      <span id="lbSkCpns"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_skCpns" id="edit_skCpns" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Tanggal CPNS :</th>
                    <td>
                      <span id="lbTglCpns"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative datepicker" style="display:none;" name="edit_tglCpns" id="edit_tglCpns" autocomplete="off" />
                      </div>
                    </td>
                    <th>SK Pengangkatan :</th>
                    <td>
                      <span id="lbSkPengangkatan"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_skPengangkatan" id="edit_skPengangkatan" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>TMT Pengangkatan :</th>
                    <td>
                      <span id="lbTmtPengangkatan"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative datepicker" style="display:none;" name="edit_tmtPengangkatan" id="edit_tmtPengangkatan" autocomplete="off" />
                      </div>
                    </td>
                    <th>Lembaga Pengangkatan :</th>
                    <td>
                      <span id="lbLbPengangkatan"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_lbPengangkatan" id="edit_lbPengangkatan" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Golongan :</th>
                    <td>
                      <span id="lbGolongan"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_golongan" id="edit_golongan" />
                      </div>
                    </td>
                    <th>Sumber Gaji :</th>
                    <td>
                      <span id="lbSumberGaji"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_sumberGaji" id="edit_sumberGaji" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Ahli Laboratorium :</th>
                    <td>
                      <span id="lbAhliLaboratorium"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_ahliLaboratorium" id="edit_ahliLaboratorium" />
                      </div>
                    </td>
                    <th>Nama Ibu Kandung :</th>
                    <td>
                      <span id="lbIbu"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_ibu" id="edit_ibu" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Nama Suami/Istri :</th>
                    <td>
                      <span id="lbNmSuamiIstri"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_nmSuamiIstri" id="edit_nmSuamiIstri" />
                      </div>
                    </td>
                    <th>Nip Suami/Istri :</th>
                    <td>
                      <span id="lbNipSuamiIstri"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_nipSuamiIstri" id="edit_nipSuamiIstri" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Pekerjaan Suami/Istri :</th>
                    <td>
                      <span id="lbPekerjaanSuamiIstri"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_pekerjaanSuamiIstri" id="edit_pekerjaanSuamiIstri" />
                      </div>
                    </td>
                    <th>TMT PNS :</th>
                    <td>
                      <span id="lbTmtPns"></span>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-alternative datepicker" style="display:none;" name="edit_tmtPns" id="edit_tmtPns" autocomplete="off" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Lisensi Kepsek :</th>
                    <td>
                      <span id="lbLisensiKepsek"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_lisensiKepsek" id="edit_lisensiKepsek" />
                      </div>
                    </td>
                    <th>Jumlah Sekolah Binaan :</th>
                    <td>
                      <span id="lbSekolahBinaan"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_sekolahBinaan" id="edit_sekolahBinaan" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Diklat Kepengawasan :</th>
                    <td>
                      <span id="lbDiklatKepengawasan"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_diklatKepengawasan" id="edit_diklatKepengawasan" />
                      </div>
                    </td>
                    <th>Mampu Handle KK :</th>
                    <td>
                      <span id="lbHandleKk"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_handleKk" id="edit_handleKk" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Keahlian Breile :</th>
                    <td>
                      <span id="lbBreile"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_breile" id="edit_breile" />
                      </div>
                    </td>
                    <th>Keahlian Bahasa Isyarat :</th>
                    <td>
                      <span id="lbBhsIsyarat"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_bhsIsyarat" id="edit_bhsIsyarat" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>NIY NIG :</th>
                    <td>
                      <span id="lbNiyNig"></span>
                      <div class="form-group">
                        <input type="text" value="" class="form-control form-control-alternative" style="display:none;" name="edit_niyNig" id="edit_niyNig" />
                      </div>
                    </td>
                    <th>Photo :</th>
                    <td>
                      <span id="lbPhoto"></span>
                      <input type="file" class="form-control form-control-alternative" name="edit_photo_guru" id="edit_photo" style="display: none;">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="mb-sm-3 pull-right">
              <button type="button" class="btn btn-warning" id="btnCancelEdit" onclick="cancelEditDataGuru()" style="display: none;">CANCEL</button>
              <button type="submit" class="btn btn-primary mr-4" id="btnUpdate" style="display: none;">UPDATE</button>
              </form>
            </div>
          </div>
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
                  <button type="button" class="btn btn-primary my-4" onclick="changePassGuru()" style="width: 100%">Change Password</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

