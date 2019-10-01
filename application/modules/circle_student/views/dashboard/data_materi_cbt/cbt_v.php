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
        <li style="width:20%"><a href="#step-1">Step 1<br /><small>Jenis CBT</small></a></li>
        <li style="width:20%"><a href="#step-2">Step 2<br /><small>Kelas</small></a></li>
        <li style="width:20%"><a href="#step-3">Step 3<br /><small>Mata Pelajaran</small></a></li>
        <li style="width:20%"><a href="#step-4">Step 4<br /><small>Judul CBT</small></a></li>
        <li style="width:20%"><a href="#step-5">Step 5<br /><small>KKM</small></a></li>
    </ul>
    <div>
      <div id="step-1" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <select class="form-control form-control-alternative">
              <option>Pilih Jenis CBT</option>
            </select>
          </div>
        </div>
      </div>
      <div id="step-2" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <select class="form-control form-control-alternative">
              <option>Pilih Kelas</option>
            </select>
          </div>
        </div>
      </div>
      <div id="step-3" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <select class="form-control form-control-alternative">
              <option>Pilih Jenis CBT</option>
            </select>
          </div>
        </div>
      </div>
      <div id="step-4" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <select class="form-control form-control-alternative">
              <option>Pilih Jenis CBT</option>
            </select>
          </div>
        </div>
      </div>
      <div id="step-5" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <select class="form-control form-control-alternative">
              <option>Pilih Jenis CBT</option>
            </select>
          </div>
        </div>
      </div>
      <div id="step-6" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <select class="form-control form-control-alternative">
              <option>Pilih Jenis CBT</option>
            </select>
          </div>
        </div>
      </div>
      <div id="step-7" class="">
        <div class="col-md-6 col-centered">
          <div class="form-group">
            <select class="form-control form-control-alternative">
              <option>Pilih Jenis CBT</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <!-- <div> -->
      <button class="btn btn-md btn-primary sw-btn-save" style="margin-bottom: 20px; margin-right: 50px; margin-left: 10px;  float: right; display: none;">Save</button>
      <button class="btn btn-md btn-primary sw-btn-next" style="margin-bottom: 20px; margin-right: 50px; margin-left: 10px;  float: right;">Next</button>
      <button class="btn btn-md btn-primary sw-btn-prev" style="margin-bottom: 20px; float: right;">Prev</button>
    <!-- </div> -->
  </div>
</div>