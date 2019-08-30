<div class="card shadow">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddKelas" onclick="add('KlsParalel')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Kelas</h3>
  </div>
  <div class="table-responsive" id="frmTbKlsParalel">
    <table class="table align-items-center table-flush" id="tbKlsParalel">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kode Kelas</th>
          <th scope="col">Nama Kelas</th>
          <th scope="col">Kelas Paralel</th>
          <th scope="col">Tingkat</th>
          <th scope="col">Wali Kelas</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddKlsParalel" style="display: none;">
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Kelas *</label>
          <select type="text" id="kd_kls_select" class="form-control form-control-alternative">

          </select>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Kelas Paralel *</label>
          <input type="text" id="kls_paralel" class="form-control form-control-alternative" placeholder="Nama Kelas Paralel">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Wali Kelas *</label>
          <select id="wali_kelas" class="form-control form-control-alternative">
          </select> 
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
      <button class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;" onclick="saveKlsParalel()">Save</button>
      <button class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
      <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('KlsParalel')">Cancel</button>
  </div>
</div>
