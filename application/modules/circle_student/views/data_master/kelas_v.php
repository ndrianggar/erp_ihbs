<div class="card shadow">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddKelas" onclick="add('Kelas')"><i class="fa fa-plus"></i> Tambah</button>    
    <h3 class="mb-0">Data Kelas</h3>
  </div>
  <div class="table-responsive" id="frmTbKelas">
    <table class="table align-items-center table-flush" id="tbKelas">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kode Kelas</th>
          <th scope="col">Nama Kelas</th>
          <th scope="col">Tingkat</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddKelas" style="display: none;">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kode Kelas *</label>
          <input type="text" id="kd_kls" class="form-control form-control-alternative" placeholder="Kode Kelas">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Angka Kelas *</label>
          <input type="number" id="angka" class="form-control form-control-alternative" placeholder="Angka Kelas">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Kelas *</label>
          <input type="text" id="nm_kelas" class="form-control form-control-alternative" placeholder="Nama Kelas">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Tingkat *</label>
          <Select id="unit" class="form-control form-control-alternative">
            <option selected="selected">Pilih Tingkat</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
          </Select>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
      <button class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;" onclick="saveKelas()">Save</button>
      <button class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
      <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Kelas')">Cancel</button>
  </div>
</div>
