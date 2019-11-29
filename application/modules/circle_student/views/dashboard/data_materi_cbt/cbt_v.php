<body <?php if (!empty($this->session->userdata("unit"))) {echo 'onload="selectUnitSiswaForKls()"';}?>>
<div class="card shadow" id="mainFormCBT">
  <div class="card-header border-0">
    <div class="input-group pull-left" id="formShowCbt">
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
      <select class="form-control-sm"  onchange="dataTbCbt()" id="select_JnsCbt">
        <option selected="selected" value="">Pilih Jenis CBT *</option>
      </select>
    </div>
    <button class="btn btn-sm btn-primary pull-right" id="btnAddCbt" onclick="add('Cbt'),$('#formShowCbt').hide()"><i class="fa fa-plus"></i> Tambah</button>
  </div>
  <div class="table-responsive" id="frmTbCbt">
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
  </div>
  <div class="smartwizard" id="frmAddCbt" style="display: none;">
    <ul>
        <li style="width:11%"><a href="#step-1">Step 1<br /><small>Jenis CBT</small></a></li>
        <li style="width:11%"><a href="#step-2">Step 2<br /><small>Kelas</small></a></li>
        <li style="width:11%"><a href="#step-3">Step 3<br /><small>Mapel</small></a></li>
        <li style="width:11%"><a href="#step-4">Step 4<br /><small>Judul CBT</small></a></li>
        <li style="width:11%"><a href="#step-5">Step 5<br /><small>Ketuntasan</small></a></li>
        <li style="width:11%"><a href="#step-6">Step 6<br /><small>Durasi</small></a></li>
        <li style="width:11%"><a href="#step-7">Step 7<br /><small>Soal</small></a></li>
        <li style="width:12%"><a href="#step-8">Step 8<br /><small>Pembobotan</small></a></li>
        <li style="width:11%"><a href="#step-9">Step 9<br /><small>Finish</small></a></li>
    </ul>
    <div>
      <div id="step-1" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <input type="hidden" name="" id="kd_cbt">
            <select class="form-control form-control-alternative" id="input_JnsCbt">
              <option>Pilih Jenis CBT</option>
            </select>
          </div>
        </div>
      </div>
      <div id="step-2" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <select class="form-control form-control-alternative" id="input_kelas" onchange="selectMapel()">
              <option>Pilih Kelas</option>
            </select>
          </div>
        </div>
      </div>
      <div id="step-3" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <select class="form-control form-control-alternative" id="input_mapel" onchange="selectTopikSoal($('#input_mapel').val())">
              <option>Pilih Mata Pelajaran</option>
            </select>
          </div>
        </div>
      </div>
      <div id="step-4" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <input type="text" name="jdl_cbt" class="form-control form-control-alternative" placeholder="Judul CBT" id="input_jdl_cbt" >
          </div>
        </div>
      </div>
      <div id="step-5" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <input type="text" name="jdl_cbt" class="form-control form-control-alternative" placeholder="Ketuntasan" id="input_kkm">
          </div>
        </div>
      </div>
      <div id="step-6" class="">
        <div class="col-md-6 col-centered">
          <div class="input-group input-group-alternative">            
            <input class="form-control form-control-alternative datepicker" placeholder="Durasi" type="text" id="input_tglLahir" name="input_tglLahir" autocomplete="off">
            <div class="input-group-prepend">
                <span class="input-group-text">Menit</span>
            </div>
          </div>
        </div>
      </div>
      <div id="step-7" class="">
        <div class="row">
          <div class="form-group col-md-6">
            <select class="form-control" id="select_TopikSoal" onchange="changeTopikSoal()">
              <option>--Pilih Topik Soal--</option> 
            </select>
          </div>
          <div class="form-group col-md-6">
            <select class="form-control">
              <option>--Pilih Jenis Soal--</option> 
              <option value="pg">Objektif</option>
              <option value="essay">Essay</option>
            </select>
          </div>
          <div class="col-md-6" style="overflow-y: scroll;">
            <h3>Bank Soal</h3>
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="tbBankSoalPg">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Soal</th>
                    <th scope="col" width="10%">
                      <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="customCheck1" type="checkbox">
                        <label class="custom-control-label mt-1" for="customCheck1"></label>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
            <!-- <button class="btn btn-success btn-md mt-1 btn-block" >Tambah Soal <i class="fa fa-angle-double-right "></i></button> -->
          </div>
          <div class="col-md-6">
            <h3>Daftar Soal</h3>
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="tbCbt">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Soal</th>
                    <th scope="col" width="10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div><hr>
    </div>
    <!-- <div> -->
      <button class="btn btn-warning pull-left" id="btnCancel" style="display: none; margin-left: 50px" onclick="cancelAdd('Cbt'),$('#formShowCbt').show()">Cancel</button>
      <button class="btn btn-md btn-primary sw-btn-save" style="margin-bottom: 20px; margin-right: 50px; margin-left: 10px;  float: right; display: none;" onclick="saveCBT()">Save</button>
      <button class="btn btn-md btn-primary sw-btn-next" style="margin-bottom: 20px; margin-right: 50px; margin-left: 10px;  float: right;">Next</button>
      <button class="btn btn-md btn-primary sw-btn-prev" style="margin-bottom: 20px; float: right;">Prev</button>

    <!-- </div> -->
  </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Edit CBT</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="icon icon-lg icon-shape icon-shape-success bg-gradient-white shadow rounded-circle mb-5" style="cursor: pointer; position: fixed;
  top: 64%; 
  left: 56%;
  /*-webkit-transform: translateY(-50%);*/
  /*-ms-transform: translateY(-50%);*/
  /*transform: translateY(-50%);*/
  width: 50px; height: 50px;
  ">
        <i class="fa fa-angle-double-right "></i>
      </div>