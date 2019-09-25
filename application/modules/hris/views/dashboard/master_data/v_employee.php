<div class="card shadow" id="mainFormEmployee">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddJadwal" onclick="add('Jadwal')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Master Employee
      <select class="form-control-sm" id="selectUnit" onchange="selectUnitSiswa()">
        <option selected="selected" value="">Pilih Unit *</option>
        <option value="TK">TK</option>
        <option value="SD">SD</option>
        <option value="SMP PUTRA">SMP PUTRA</option>
        <option value="SMP PUTRI">SMP PUTRI</option>
        <option value="SMA PUTRA">SMA PUTRA</option>
        <option value="SMA PUTRI">SMA PUTRI</option>
      </select>
      Kelas
      <select class="form-control-sm" id="selectKlsParalel">
        <option selected="selected" value="">Pilih Kelas *</option>
      </select>
      Tahun
      <select type="text" class="form-control-sm" name="select_thnAkademik" id="select_thnAkademik" onchange="dataTbJadwal()">
        <option selected value="">Pilih Tahun Akademik</option>
      </select>
    </h3>
  </div>
  <div class="table-responsive" id="frmTbJadwal">
    <table class="table align-items-center table-flush" id="tbEmployee">
      <thead class="thead-light">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Foto</th>
          <th scope="col" width="50">Biodata Pegawai</th>
          <th scope="col">Pangkat Jabatan</th>        
          <th scope="col">Status</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>