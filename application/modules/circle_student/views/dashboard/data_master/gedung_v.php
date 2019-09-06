<div class="card shadow">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddGedung" onclick="add('Gedung')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Gedung</h3>
  </div>
  <div class="table-responsive" id="frmTbGedung">
    <table class="table align-items-center table-flush" id="tbGedung">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Gedung</th>
          <th scope="col">Jumlah Lantai</th>
          <th scope="col">Panjang</th>
          <th scope="col">Tinggi</th>
          <th scope="col">Lebar</th>
          <th scope="col">Unit</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddGedung" style="display: none;">
    <div class="row">
      <div class="col-lg-4">
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
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Gedung *</label>
          <input type="text" id="nmGedung" class="form-control form-control-alternative" placeholder="Nama Gedung">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Jumlah lantai</label>
          <input type="text" id="jmlLantai" class="form-control form-control-alternative" placeholder="Jumlah Lantai">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Panjang</label>
          <input type="text" id="panjang" class="form-control form-control-alternative" placeholder="Panjang">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Tinggi</label>
          <input type="text" id="tinggi" class="form-control form-control-alternative" placeholder="Tinggi">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Lebar</label>
          <input type="text" id="lebar" class="form-control form-control-alternative" placeholder="Lebar">
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
      <button class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;" onclick="saveGedung()">Save</button>
      <button class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
      <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Gedung')">Cancel</button>
  </div>
</div>
