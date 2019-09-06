<div class="card shadow" id="mainFormMapel">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddMapel" onclick="add('Mapel')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Mata Pelajaran</h3>
  </div>
  <div class="table-responsive" id="frmTbMapel">
    <table class="table align-items-center table-flush" id="tbMapel">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kode</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Guru</th>
          <th scope="col">Status Mapel</th>
          <th scope="col">Sub Mapel</th>
          <th scope="col">Unit</th>
          <th scope="col">Kelas</th>
          <th scope="col">KKM</th>
          <th scope="col">Urutan Raport</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddMapel" style="display: none;">
    <form id="inputDataMapel">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Mata Pelajaran *</label>
          <input type="hidden" name="input_kdMapel" id="input_kdMapel">
          <input type="text" id="input_nmMapel" name="input_nmMapel" class="form-control form-control-alternative" placeholder="Nama Mata Pelajaran">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Guru Pengajar *</label>
          <select type="text" class="form-control form-control-alternative" name="select_guru" id="select_guru">
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Mata Pelajaran (English) *</label>
          <input type="text" id="input_nmMapelEng" name="input_nmMapelEng" class="form-control form-control-alternative" placeholder="Nama Mata Pelajaran English">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Mata Pelajaran (Arab) *</label>
          <input type="text" id="input_nmMapelArb" name="input_nmMapelArb" class="form-control form-control-alternative" placeholder="Nama Mata Pelajaran Arab">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Status Mapel *</label>
          <select type="text" class="form-control form-control-alternative" name="input_stsMapel" id="input_stsMapel" onchange="changeStsMapel()">
            <option value="" selected>Pilih Status</option>
            <option value="Tunggal">Tunggal</option>
            <option value="Mapel Induk">Mapel Induk</option>
            <option value="Mapel Sub">Mapel Sub</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Sub Mapel</label>
          <input type="text" class="form-control form-control-alternative" name="input_subMapel" id="input_subMapel" placeholder="Sub Mapel" disabled>
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
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kelas *</label>
          <select type="text" class="form-control form-control-alternative" name="input_kelas" id="input_kelas">
            <option selected value="">Pilih Kelas</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Jurusan *</label>
          <select type="text" class="form-control form-control-alternative" name="input_jurusan" id="input_jurusan" disabled>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">KKM *</label>
          <input type="text" class="form-control form-control-alternative" name="input_kkm" id="input_kkm" placeholder="KKM" placeholder="KKM">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Urutan Raport *</label>
          <input type="text" class="form-control form-control-alternative" name="input_urutan" id="input_urutan" placeholder="Urutan Raport">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Aktif / Tidak Aktif *</label>
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
    <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Mapel')">Cancel</button>
  </div>
</div>

