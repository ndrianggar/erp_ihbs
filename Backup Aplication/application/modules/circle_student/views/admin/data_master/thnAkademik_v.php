<div class="card shadow">
  <div class="card-header border-0">
    <h3 class="mb-0">Data Tahun Akademik</h3>
    <button class="btn btn-sm btn-primary pull-right" id="btnAddThnAkademik" onclick="addThnAkademik()"><i class="fa fa-plus"></i> Tambah</button>
  </div>
  <div class="table-responsive" id="frmTbThnAkademik">
    <table class="table align-items-center table-flush" id="tbThnAkademik">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tahun Akademik</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Unit</th>
          <th scope="col">Status</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddThnAkademik" style="display: none;">
    <div class="row">
      <div class="col-lg-3">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Unit *</label>
          <select class="form-control form-control-alternative" id="unit">
            <option selected="selected">Pilih Unit</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
          </select>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Tahun Akademik *</label>
          <input type="text" id="nmThn" class="form-control form-control-alternative" placeholder="Nama Tahun Akademik">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Keterangan *</label>
          <input type="text" id="ket" class="form-control form-control-alternative" placeholder="Keterangan">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Status *</label>
          <select class="form-control form-control-alternative" id="stat">
            <option value="Aktif">Aktif</option>
            <option value="Non_aktif">Non_aktif</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
      <button class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;" onclick="saveThnAkademik()">Save</button>
      <button class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
      <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAddThnAkademik()">Cancel</button>
  </div>
</div>
