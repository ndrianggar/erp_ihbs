<div class="card shadow" id="mainFormKepsek">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddAdmin" onclick="add('Admin')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Admin</h3>
  </div>
  <div class="table-responsive" id="frmTbAdmin">
    <table class="table align-items-center table-flush" id="tbAdmin">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">NIP</th>
          <th scope="col">Username</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Level</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddAdmin" style="display: none;">
    <form id="inputDataAdmin">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nip *</label>
          <input type="hidden" name="input_kdUser" id="input_kdUser">
          <input type="hidden" name="kd_kepsek" id="kd_kepsek">
          <input type="text" id="input_nip" name="input_nip" class="form-control form-control-alternative" placeholder="NIP" readonly>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama *</label>
          <select class="form-control form-control-alternative" type="text" id="select_nmAdmin" name="select_nmAdmin">
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Username *</label>
          <input type="text" class="form-control form-control-alternative" name="input_username" id="input_username" placeholder="Username">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Jabatan *</label>
          <input type="text" class="form-control form-control-alternative" id="input_jabatan" name="input_jabatan" placeholder="Jabatan">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Level *</label>
          <select class="form-control form-control-alternative" name="input_level" id="input_level">
            <option selected>Pilih Level</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Password *</label>
          <input type="password" class="form-control form-control-alternative" type="password" id="input_password" name="input_password" placeholder="Password">
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
    </form>
    <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Admin')">Cancel</button>
  </div>
</div>

