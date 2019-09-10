<body <?php if (!empty($this->session->userdata("unit"))) {echo 'onload="selectUnitSiswaForKls()"';}?>>
<div class="card shadow" id="mainFormCBT">
  <div class="card-header border-0">
    <div class="input-group pull-left">
      <h3 class="mb-0">Data CBT</h3>
      <select class="form-control-sm ml-2" id="selectUnit" onchange="selectUnitSiswaForKls()" <?php if (!empty($this->session->userdata("unit"))) { echo 'style=display:none'; }?>>
        <option selected="selected" value="">Pilih Unit *</option>
      </select>
      <select class="form-control-sm ml-2" id="selectKlsByUnit">
        <option selected="selected" value="">Pilih Kelas *</option>
      </select>
      <div class="input-group-prepend ml-2">
        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-top-left-radius: 4px; border-bottom-left-radius: 4px"></button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addJnsCbtModal"><i class="fa fa-plus"></i>Add</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editJnsCbtModal" onclick="editJnsCbt()"><i class="fa fa-edit"></i>Edit</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteJnsCbtModal" onclick="confirmDeleteJnsCbt()"><i class="fa fa-trash"></i>Delete</a>
        </div>
      </div>
      <select class="form-control-sm" id="select_JnsCbt" onchange="dataTbCbt()">
        <option selected="selected" value="">Pilih Jenis CBT *</option>
      </select>
    </div>
    <button class="btn btn-sm btn-primary pull-right" id="btnAddCbt" onclick="add('Cbt')"><i class="fa fa-plus"></i> Tambah</button>
  </div>
  <!-- <div class="table-responsive" id="frmTbCbt"> -->
    <table class="table align-items-center table-flush" id="tbCbt">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Nama CBT</th>
          <th scope="col">Kelas</th>
          <th scope="col">KKM</th>
          <th scope="col">Durasi</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  <!-- </div> -->
  <div class="container" id="frmAddCbt" style="display: none;">
    <form id="inputDataCbt">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Jenis CBT *</label>
          <input type="hidden" name="input_kdCbt" id="input_kdCbt">
          <select  id="select_nmHari" name="select_nmHari" class="form-control form-control-alternative">
          </select>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Kelas *</label>
          <input type="text" class="form-control form-control-alternative" name="input_wktMulai" id="input_wktMulai" placeholder="Waktu Mulai">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Mata Pelajaran *</label>
          <input type="text" class="form-control form-control-alternative" name="input_wktSelesai" id="input_wktSelesai" placeholder="Waktu Selesai">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Judul CBT *</label>
          <select type="text" id="input_mapel" name="input_mapel" class="form-control form-control-alternative" placeholder="Mata Pelajaran" onchange="showGuruMapel()">
            <option selected value="">Pilih Mata Pelajaran</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">KKM *</label>
          <select type="text" id="select_guru" name="select_guru" class="form-control form-control-alternative" placeholder="Guru">
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Durasi</label>
          <select type="text" class="form-control form-control-alternative" name="input_klsParalel" id="input_klsParalel">
            <option selected value="">Pilih Kelas Paralel</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Ruangan</label>
          <select type="text" class="form-control form-control-alternative" name="select_ruangan" id="select_ruangan" placeholder="Ruangan">
            <!-- <option value="" selected>Pilih Ruangan</option> -->
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Tahun Akademik</label>
          <select type="text" class="form-control form-control-alternative" name="select_thnAkademik" id="select_thnAkademik">
            <!-- <option selected value="">Pilih Tahun Akademik</option> -->
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Aktif/Tidak Aktif</label>
          <select type="text" class="form-control form-control-alternative" name="input_status" id="input_status">
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
    </form>
    <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Cbt')">Cancel</button>
  </div>
</div>

<div class="modal fade" id="addJnsCbtModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Jenis CBT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control form-control-alternative" name="inputJnsCbt" id="inputJnsCbt" placeholder="Input Jenis CBT">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="addJnsCbt()">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editJnsCbtModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Edit Jenis CBT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="kdJnsCbt" id="kdJnsCbt">
        <input type="text" class="form-control form-control-alternative" name="editJnsCbt" id="editJnsCbt" placeholder="Input Jenis CBT">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="updateJnsCbt()">Update</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteJnsCbtModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h3>Hapus Jenis CBT <span id="lbJnsCBT"></span> ? </h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="deleteJnsCbt()">Delete</button>
      </div>
    </div>
  </div>
</div>