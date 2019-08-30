<div class="card shadow">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddSekolah" onclick="add('Sekolah')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Identitas Sekolah</h3>
  </div>
  <div class="table-responsive" id="frmTbSekolah">
    <table class="table align-items-center table-flush" id="tbDataSekolah">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Sekolah</th>
          <th scope="col">Alamat</th>
          <th scope="col">Unit</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddSekolah" style="display: none;">
    <div class="row">
      <div class="col-lg-3">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Unit *</label>
          <select class="form-control form-control-alternative" id="unit">
            <option selected="selected" value="">Pilih Unit *</option>
          </select>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Sekolah *</label>
          <input type="text" id="nmSekolah" class="form-control form-control-alternative" placeholder="Nama Sekolah">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">NPSN</label>
          <input type="text" id="npsn" class="form-control form-control-alternative" placeholder="NPSN">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">NSS</label>
          <input type="text" id="nss" class="form-control form-control-alternative" placeholder="NSS">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Alamat *</label>
          <textarea class="form-control form-control-alternative" placeholder="Alamat" id="alamat"></textarea>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kode Pos *</label>
          <input type="text" id="kdPos" class="form-control form-control-alternative" placeholder="Kode Pos">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Desa *</label>
          <input type="text" id="desa" class="form-control form-control-alternative" placeholder="Desa">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kecamatan *</label>
          <input type="text" id="kec" class="form-control form-control-alternative" placeholder="Kecamatan">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kabupaten/Kota *</label>
          <input type="text" id="kota" class="form-control form-control-alternative" placeholder="Kabupaten/Kota">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">No Telepon *</label>
          <input type="text" id="tlp" class="form-control form-control-alternative" placeholder="No Telepon">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">No Fax</label>
          <input type="text" id="fax" class="form-control form-control-alternative" placeholder="No Fax">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Email *</label>
          <input type="email" id="email" class="form-control form-control-alternative" placeholder="Email">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Website</label>
          <input type="text" id="web" class="form-control form-control-alternative" placeholder="Website">
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
      <button class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;" onclick="saveSekolah()">Save</button>
      <button class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
      <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAddSekolah()">Cancel</button>
  </div>
</div>
