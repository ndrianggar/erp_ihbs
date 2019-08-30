<div class="card shadow" id="mainFormJadwal">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddJadwal" onclick="add('Jadwal')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Jadwal Pelajaran
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
    <table class="table align-items-center table-flush" id="tbJadwal">
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
  <div class="container" id="frmAddJadwal" style="display: none;">
    <form id="inputDataJadwal">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Hari *</label>
          <input type="hidden" name="input_kdJadwal" id="input_kdJadwal">
          <select  id="select_nmHari" name="select_nmHari" class="form-control form-control-alternative">
          </select>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Waktu Mulai *</label>
          <input type="text" class="form-control form-control-alternative" name="input_wktMulai" id="input_wktMulai" placeholder="Waktu Mulai">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Waktu Selesai *</label>
          <input type="text" class="form-control form-control-alternative" name="input_wktSelesai" id="input_wktSelesai" placeholder="Waktu Selesai">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Mata Pelajaran *</label>
          <select type="text" id="input_mapel" name="input_mapel" class="form-control form-control-alternative" placeholder="Mata Pelajaran" onchange="showGuruMapel()">
            <option selected value="">Pilih Mata Pelajaran</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Guru *</label>
          <select type="text" id="select_guru" name="select_guru" class="form-control form-control-alternative" placeholder="Guru">
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Unit *</label>
          <select class="form-control form-control-alternative" name="input_unit" id="input_unit" onchange="changeUnit()">
            <option value="" selected>Pilih Unit</option>
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
          <label class="form-control-label" for="input-username">Kelas</label>
          <select type="text" class="form-control form-control-alternative" name="input_kelas" id="input_kelas" onchange="changeKelas()">
            <option selected value="">Pilih Kelas</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kelas Paralel</label>
          <select type="text" class="form-control form-control-alternative" name="input_klsParalel" id="input_klsParalel">
            <option selected value="">Pilih Kelas Paralel</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Ruangan</label>
          <select type="text" class="form-control form-control-alternative" name="select_ruangan" id="select_ruangan" placeholder="Ruangan">
            <!-- <option value="" selected>Pilih Ruangan</option> -->
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Tahun Akademik</label>
          <select type="text" class="form-control form-control-alternative" name="select_thnAkademik" id="select_thnAkademik">
            <!-- <option selected value="">Pilih Tahun Akademik</option> -->
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Aktif/Tidak Aktif</label>
          <select type="text" class="form-control form-control-alternative" name="input_status" id="input_status">
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
    </form>
    <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Jadwal')">Cancel</button>
  </div>
</div>

