<div class="card shadow">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddRuangan" onclick="add('Ruangan')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Ruangan</h3>
  </div>
  <div class="table-responsive" id="frmTbRuangan">
    <table class="table align-items-center table-flush" id="tbRuangan">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Ruangan</th>
          <th scope="col">Kapasitas</th>
          <th scope="col">Unit</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddRuangan" style="display: none;">
    <div class="row">
      <div class="col-lg-6">
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
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Gedung *</label>
          <select class="form-control form-control-alternative" id="nmGedung">

          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Ruangan *</label>
          <input type="text" id="nmRuangan" class="form-control form-control-alternative" placeholder="Nama Ruangan">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kapasitas *</label>
          <input type="number" id="kapasitas" class="form-control form-control-alternative" placeholder="Kapasitas">
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
      <button class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;" onclick="saveRuangan()">Save</button>
      <button class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
      <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Ruangan')">Cancel</button>
  </div>
</div>
