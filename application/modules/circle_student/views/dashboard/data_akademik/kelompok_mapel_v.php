<div class="card shadow" id="mainFormKelompokMapel">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddKelompokMapel" onclick="add('KelompokMapel')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Kelompok Mata Pelajaran</h3>
  </div>
  <div class="table-responsive" id="frmTbKelompokMapel">
    <table class="table align-items-center table-flush" id="tbKelompokMapel">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kelompok</th>
          <th scope="col">Keterangan</th>
          <th scope="col" style="text-align: center;">Status</th>
          <th scope="col" width="10%" style="text-align: center;">Action</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddKelompokMapel" style="display: none;">
    <form id="inputDataKelompokMapel">
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kelompok *</label>
          <input type="hidden" name="input_kdKelompokMapel" id="input_kdKelompokMapel">
          <input type="text" id="input_kelompok" name="input_kelompok" class="form-control form-control-alternative" placeholder="Kelompok">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Keterangan *</label>
          <input type="text" class="form-control form-control-alternative" name="input_ket" id="input_ket" placeholder="Keterangan">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Status *</label>
          <select type="text" class="form-control form-control-alternative" name="input_status" id="input_status" placeholder="Username">
            <option value="" selected>Pilih Status</option>
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
          </select>
        </div>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Status *</label>
          <input type="text" class="form-control form-control-alternative" name="input_status" id="input_status" placeholder="Username">
        </div>
      </div>
    </div> -->
  </div>
  <div class="card-footer py-4">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
    </form>
    <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('KelompokMapel')">Cancel</button>
  </div>
</div>

