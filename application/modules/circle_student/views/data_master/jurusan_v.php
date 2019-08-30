<div class="card shadow">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddJurusan" onclick="add('Jurusan')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Jurusan</h3>
  </div>
  <div class="table-responsive" id="frmTbJurusan">
    <table class="table align-items-center table-flush" id="tbJurusan">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kode Jurusan</th>
          <th scope="col">Nama Jurusan</th>
          <th scope="col">Bidang Keahlian</th>
          <th scope="col">Kopetensi Umum</th>
          <th scope="col">Kopetensi Khusus</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddJurusan" style="display: none;">
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Jurusan *</label>
          <input type="text" id="jurusan" class="form-control form-control-alternative" placeholder="Jurusan">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Jurusan *</label>
          <input type="text" id="nmJurusan" class="form-control form-control-alternative" placeholder="Nama Jurusan">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Bidang Keahlian</label>
          <input type="text" id="keahlian" class="form-control form-control-alternative" placeholder="Bidang Keahlian">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kopetensi Umum</label>
          <textarea id="kopetensi_umum" class="form-control form-control-alternative" placeholder="Kopetensi Umum"></textarea>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kopetensi Khusus</label>
          <textarea id="kopetensi_khusus" class="form-control form-control-alternative" placeholder="Kopetensi Khusus"></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
      <button class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;" onclick="saveJurusan()">Save</button>
      <button class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
      <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Jurusan')">Cancel</button>
  </div>
</div>
