<div class="card shadow" id="mainFormKepsek">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddKepsek" onclick="add('Kepsek')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Kepala Sekolah</h3>
  </div>
  <div class="table-responsive" id="frmTbKepsek">
    <table class="table align-items-center table-flush" id="tbKepsek">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">NIP</th>
          <th scope="col">Nama</th>
          <th scope="col">Unit</th>
          <th scope="col">Nama Sekolah</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddKepsek" style="display: none;">
    <form id="inputDataKepsek">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nip *</label>
          <input type="hidden" name="kd_kepsek" id="kd_kepsek">
          <input type="text" id="input_nip" name="input_nip" class="form-control form-control-alternative" placeholder="NIP" readonly>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama *</label>
          <select class="form-control form-control-alternative" type="text" id="select_nmKepsek" name="select_nmKepsek">
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Unit *</label>
          <select class="form-control form-control-alternative" id="input_unit" name="input_unit" onchange="getDataSekolahByUnit()">
            <option selected="selected" value="">Pilih Unit *</option>
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
          <label class="form-control-label" for="input-username">Nama Sekolah *</label>
          <select class="form-control form-control-alternative" type="text" id="select_nmSekolah" name="select_nmSekolah">
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
    </form>
    <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Kepsek')">Cancel</button>
  </div>
</div>

