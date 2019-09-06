<body <?php if (!empty($this->session->userdata("unit"))) {echo 'onload="selectUnitSiswa()"';}?>>
<div class="card shadow" id="mainFormAbsensiSiswa">
  <div class="card-header border-0">
    <h3 class="mb-0">Data Absensi Siswa
      <select class="form-control-sm" id="selectUnit" onchange="selectUnitSiswa()" <?php if (!empty($this->session->userdata("unit"))) { echo 'style=display:none'; }?>>
        <option selected="selected" value="">Pilih Unit *</option>
      </select>
      Kelas
      <select class="form-control-sm" id="selectKlsParalel">
        <option selected="selected" value="">Pilih Kelas *</option>
      </select>
      Tahun Akademik
      <select type="text" class="form-control-sm" name="select_thnAkademik" id="select_thnAkademik" onchange="dataTbJadwalAbsensiRekap()">
        <option selected value="">Pilih Tahun Akademik</option>
      </select>
    </h3>
  </div>
  <div class="table-responsive" id="frmTbAbsensiSiswa">
    <table class="table align-items-center table-flush" id="tbJadwalAbsensi">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Hari</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Guru</th>
          <th scope="col">Mulai</th>
          <th scope="col">Selesai</th>
          <th scope="col">Unit</th>
          <th scope="col">Kelas</th>
          <th scope="col">Ruangan</th>
          <th scope="col">Aktif/Tidak</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
  <div class="table-responsive" id="frmAddAbsensiSiswa" style="display: none;">
    <h4 align="center">REKAP DAFTAR HADIR SISWA <span id="lbUnit"></span> </h4>
    <h4 align="center"><span id="lbThnP"></span></h4>
    <h4 align="center">KELAS <span id="lbKls"></span> </h4>
    <input type="hidden" name="thnAkdmk" id="thnAkdmk">
    <input type="hidden" name="nmKls" id="nmKls">
    <input type="hidden" name="idKls" id="idKls">
    <input type="hidden" name="idJdwl" id="idJdwl">
    <input type="hidden" name="idMpl" id="idMpl">

    <div id="table-scroll" class="table-scroll">
      <div class="table-wrap">
        <form id="inputAbsenSiswa" method="POST">
        <input type="hidden" name="kd_kls_paralel" id="kd_kls_paralel">
        <input type="hidden" name="kd_jadwal" id="kd_jadwal">
        <input type="hidden" name="kd_mapel" id="kd_mapel">
        <input type="hidden" name="kd_thn_akademik" id="kd_thn_akademik">
        <input type="hidden" name="guru" id="guru">
        <table class="table align-items-center table-flush main-table" id="tbRekapAbsensiSiswa">

        </table>
        </form>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
    </form>
    <button class="btn btn-success pull-right" id="btnPrint" onclick="printRekapAbsenSiswa()" style="display: none;"><i class="fa fa-print"></i> Print</button>
    <button class="btn btn-warning pull-right mr-3" id="btnCancel" style="display: none;" onclick="cancelAdd('AbsensiSiswa'),$('.card-header').show(500),$('#btnPrint').hide()">Cancel</button>
  </div>
</div>

