<body <?php if (!empty($this->session->userdata("unit"))) {echo 'onload="selectUnitSiswaForKls()"';}?>>
<style type="text/css">
  .files input {
      outline: 2px dashed #92b0b3;
      outline-offset: -10px;
      -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
      transition: outline-offset .15s ease-in-out, background-color .15s linear;
      padding: 120px 0px 85px 35%;
      text-align: center !important;
      margin: 0;
      width: 100% !important;
  }
  .files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
      -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
      transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
   }
  .files{ position:relative}
  .files:after {  pointer-events: none;
      position: absolute;
      top: 60px;
      left: 0;
      width: 50px;
      right: 0;
      height: 56px;
      content: "";
      background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
      display: block;
      margin: 0 auto;
      background-size: 100%;
      background-repeat: no-repeat;
  }
  .color input{ background-color:#f1f1f1;}
  .files:before {
      position: absolute;
      bottom: 2px;
      left: 0;  pointer-events: none;
      width: 100%;
      right: 0;
      height: 57px;
      content: "drag it here.";
      display: block;
      margin: 0 auto;
      color: #2ea591;
      font-weight: 600;
      text-transform: capitalize;
      text-align: center;
  }
</style>
<div class="card shadow" id="mainFormBankSoal">
  <div class="card-header border-0">
    <h3 class="mb-0">Bank Soal
      <select class="form-control-sm" id="selectUnit" onchange="selectUnitSiswaForKls()"  <?php if (!empty($this->session->userdata("unit"))) { echo 'style=display:none'; }?>>
        <option selected="selected" value="">Pilih Unit *</option>
        <option value="TK">TK</option>
        <option value="SD">SD</option>
        <option value="SMP PUTRA">SMP PUTRA</option>
        <option value="SMP PUTRI">SMP PUTRI</option>
        <option value="SMA PUTRA">SMA PUTRA</option>
        <option value="SMA PUTRI">SMA PUTRI</option>
      </select>
    <select class="form-control-sm ml-2" id="selectKlsByUnit" onchange="dataTbMapelMateriSoal()">
      <option selected="selected" value="">Pilih Kelas *</option>
    </select>
    </h3>
  </div>
  <div class="table-responsive" id="frmTbBankSoal">
    <table class="table align-items-center table-flush" id="tbBankSoal">
      <thead class="thead-light">
        <tr>
          <th scope="col" width="10px">#</th>
          <th scope="col">Kode</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Guru</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddBankSoal" style="display: none;">
    <table class="table">
      <thead class="thead-light">
          <tr>
              <td scope="col" width="50px">Kelas :</td>
              <td scope="col" id="lbKelas"></td>
              <td scope="col" width="50px">Kode Mapel :</td>
              <td scope="col" id="lbKdMapel"></td>
          </tr>
          <tr>
            <td scope="col" width="50px">Nama Mapel :</td>
              <td scope="col" id="lbMapel"></td>
              <td scope="col" width="50px">Topik Soal :</td>
              <td scope="col">
                <div class="input-group ">
                  <div class="input-group-prepend">
                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addTopikSoalModal"><i class="fa fa-plus"></i>Add</a>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editTopikSoalModal" onclick="editTopikSoal()"><i class="fa fa-edit"></i>Edit</a>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteTopikSoalModal" onclick="confirmDeleteTopikSoal()"><i class="fa fa-trash"></i>Delete</a>
                    </div>
                  </div>
                  <select class="form-control-sm" id="select_TopikSoal" onchange="changeTopikSoal()">
                    <option selected="selected" value="">Pilih Topik Soal *</option>
                  </select>
                  <button type="button" class="btn btn-sm btn-primary pull-right ml-3" id="btnAddBankSoal" style="display: none;"  data-toggle="modal" data-target="#addSoalModal" onclick="showSoalModal()"><i class="fa fa-plus"></i> Tambah Soal</button>
                  <button class="btn btn-sm btn-primary pull-right ml-3" id="btnImportBankSoal" data-toggle="modal" data-target="#importSoalModal" style="display: none;"><i class="fa fa-upload"></i> Import Soal</button>
                </div>
              </td>
          </tr>
      </thead>
    </table>
    <div class="nav-wrapper">
      <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
          <li class="nav-item">
              <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-list mr-2"></i>Soal Objektif</a>
          </li>
          <li class="nav-item">
              <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-list mr-2"></i>Soal Essay</a>
          </li>
      </ul>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                  <div class="table-responsive" id="frmTbSoalPg">
                    <table class="table align-items-center table-flush" id="tbBankSoalPg">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Pertanyaan</th>
                          <th scope="col" width="10%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                  <div class="table-responsive" id="frmTbSoalEssay">
                    <table class="table align-items-center table-flush" id="tbBankSoalEssay">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Pertanyaan</th>
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
  <div class="card-footer py-4 mt-2">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
    </form>
    <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('BankSoal')">Cancel</button>
  </div>
</div>

<div class="modal fade" id="addTopikSoalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Tambah Topik Soal</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control form-control-alternative" name="inputTopikSoal" id="inputTopikSoal" placeholder="Input Topik Soal">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="addTopikSoal()">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editTopikSoalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Edit Topik Soal</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden"  id="kdTopik" name="kdTopik">
        <input type="text" class="form-control form-control-alternative" name="editTopikSoal" id="editTopikSoal" placeholder="Input Jenis CBT">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="updateTopikSoal()">Update</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteTopikSoalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <input type="hidden" id="kdTopikDel" name="kdTopikDel">
        Hapus Topik Soal <span class="text-yellow" id="deleteTopikSoal"></span> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" onclick="deleteTopikSoal()">Delete</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addSoalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-top" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Tambah Soal</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-secondary">
        <div class="nav-wrapper">
          <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabSoalPg" data-toggle="tab" href="#tabs-addSoalObjektif" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-list mr-2"></i>Soal Objektif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabSoalEssay" data-toggle="tab" href="#tabs-addSoalEssay" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-list mr-2"></i>Soal Essay</a>
            </li>
          </ul>
        </div>
        <div class="card shadow">
          <div class="card-body">
            <form id="saveSoal">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabs-addSoalObjektif" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                  <div class="row">
                    <div class="form-group col-md-12">
                      <input type="hidden" name="kdSoal" id="kdSoal">
                      <label class="form-control-label">Pertanyaan *:</label>
                      <textarea id="inputSoalPg" ></textarea>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Bobot *:</span>
                          </div>
                          <input class="form-control" type="text" name="bobotSoalPg" id="bobotSoalPg">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Kunci Jawaban *:</span>
                          </div>
                          <input type="text" class="form-control" name="kunciJawaban" id="kunciJawaban">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-control-label">Jawaban A</label>
                      <textarea class="form-control" id="jawabanA" ></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-control-label">Jawaban B</label>
                      <textarea class="form-control" id="jawabanB" ></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-control-label">Jawaban C</label>
                      <textarea class="form-control" id="jawabanC" ></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-control-label">Jawaban D</label>
                      <textarea class="form-control" id="jawabanD" ></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-control-label">Jawaban E</label>
                      <textarea class="form-control" id="jawabanE" ></textarea>
                    </div>
                     <div class="form-group col-md-6">
                      <label class="form-control-label">Pembahasan</label>
                      <textarea class="form-control" id="pembahasanPg" ></textarea>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-addSoalEssay" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                  <div class="form-group col-md-12">
                    <label class="form-control-label">Pertanyaan :</label>
                    <textarea id="inputSoalEssay" name="inputSoalEssay"></textarea>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Bobot :</span>
                          </div>
                          <input class="form-control" type="text" name="bobotSoalEssay" id="bobotSoalEssay">
                        </div>
                      </div>
                    </div>
                  <div class="form-group col-md-12">
                    <label class="form-control-label">Pembahasan :</label>
                    <textarea id="pembahasanEssay" name="pembahasanEssay"></textarea>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="importSoalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Import Soal</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-upload1" role="tab" aria-controls="tabs-upload1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Soal Objektif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-upload2" role="tab" aria-controls="tabs-upload2" aria-selected="false"><i class="ni ni-cloud-upload-96 mr-2"></i>Soal Essay</a>
                </li>
            </ul>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="tabs-upload1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                    <form id="uploadSoalPg">
                      <a href="<?php echo base_url('assets/file_format/format_soal_pg.xlsx')?>"><i class="fa fa-file"></i> Download Format File Soal Objektif</a><i class="fa fa-info-circle ml-2" data-toggle="tooltip" data-placement="top" title=" Download Format File Terlebih Dahulu"></i>
                      <div class="form-group">
                        <div class="form-group files">
                          <label>Upload Your File </label>
                          <input type="file" class="form-control" name="excel_soal_pg">
                        </div>
                      </div>
                      <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-success">Upload</button>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="tabs-upload2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                    <form id="uploadSoalEssay">
                      <a href="<?php echo base_url('assets/file_format/format_soal_essay.xlsx')?>"><i class="fa fa-file"></i> Download Format File Soal Essay</a><i class="fa fa-info-circle ml-2" data-toggle="tooltip" data-placement="top" title=" Download Format File Terlebih Dahulu"></i>
                      <div class="form-group">
                        <div class="form-group files">
                          <label>Upload Your File </label>
                          <input type="file" class="form-control" name="excel_soal_essay">
                        </div>
                      </div>
                      <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-success">Upload</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
      </div> -->
    </div>
  </div>
</div>

