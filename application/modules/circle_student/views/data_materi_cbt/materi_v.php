<body <?php if (!empty($this->session->userdata("unit"))) {echo 'onload="selectUnitSiswaForKls()"';}?>>
<div class="card shadow" id="mainFormAbsensiSiswa">
  <div class="card-header border-0">
    <h3 class="mb-0">Data Materi
      <select class="form-control-sm ml-2" id="selectUnit" onchange="selectUnitSiswaForKls()" <?php if (!empty($this->session->userdata("unit"))) { echo 'style=display:none'; }?>>
          <option selected="selected" value="">Pilih Unit *</option>
      </select>
      Kelas
      <select class="form-control-sm" id="selectKlsByUnit" onchange="dataTbMapelMateri()">
        <option selected="selected" value="">Pilih Kelas *</option>
      </select>
      <button class="btn btn-sm btn-primary pull-right" id="btnAddMateri" onclick="add('Materi'),addMateri()" style="display: none;"><i class="fa fa-plus"></i> Tambah</button>
    </h3>
  </div>
  <div class="container" id="frmAddMateri" style="display: none;">
    <form id="saveDataMateri">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <input type="hidden" name="kdSubMateri" id="kdSubMateri">
          <label class="form-control-label">Judul Bab *</label>
          <span id="kdMapel" style="display: none;"></span>
          <select class="form-control form-control-alternative" id="select_jdlBab" name="select_jdlBab">
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label">Nama Materi *</label>
          <input type="text" class="form-control form-control-alternative"  name="inputJdlMateri" id="inputJdlMateri" placeholder="Nama Materi">
        </div>
      </div>
    </div>
    <div class="nav-wrapper">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-archive-2 mr-2"></i>Materi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-ruler-pencil mr-2"></i>Latihan</a>
            </li>
        </ul>
    </div>
    <div class="card shadow">
      <div class="card-body">
          <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                   <textarea id="inputMateri" name="inputMateri"></textarea>
              </div>
              <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addSoalObjektifModal"><i class="fa fa-plus"></i> Soal Objektif</button>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addSoalEssayModal"><i class="fa fa-plus"></i> Soal Essay</button>
                <div class="table-responsive mt-2" id="frmTbJadwal">
                  <table class="table align-items-center table-flush" id="tbJadwal">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pertanyaan</th>
                        <th scope="col">Jenis</th>
                        <th scope="col" width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="table-responsive" id="frmTbMapelMateri">
    <table class="table align-items-center table-flush" id="tbMapelMateri">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kode Mapel</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Nip Guru</th>
          <th scope="col">Nama Guru</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
  <div class="table-responsive" id="frmTbMateri" style="display: none;">
    
  </div>
  <div class="card-footer py-4">
    <button type="button" class="btn btn-success" id="btnBack" style="display: none;" onclick="dataTbMapelMateri(),$('#btnBack').hide()"><i class="fa fa-angle-left"></i> Back</button>
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
    </form>
    <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Materi')">Cancel</button>
  </div>
</div>


<div class="modal fade" id="addSoalObjektifModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus"></i> Soal Objektif</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addSoalEssayModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus"></i> Soal Essay</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
