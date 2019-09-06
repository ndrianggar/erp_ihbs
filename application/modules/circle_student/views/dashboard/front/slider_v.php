<div class="card shadow">
  <div class="card-header border-0">
    <h3 class="mb-0">Data Slider</h3>
    <button class="btn btn-sm btn-primary pull-right" id="btnAddSlider" onclick="addSlider()"><i class="fa fa-plus"></i> Tambah</button>
  </div>
  <div class="table-responsive" id="frmTbSlider">
    <table class="table align-items-center table-flush" id="tbDataSlider">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Slider</th>
          <th scope="col">Gambar</th>
          <th scope="col">Urutan</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Status</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddSlider" style="display: none;">
    <div class="row">
      <form id="submitDataSlider">
      <div class="">
        <div class="form-group">
          <label class="form-control-label" for="input-username data-toggle="tooltip data-placement="top" title="Tooltip on top">Gambar*</label>
          <div class="form-group">
            <input type="file" class="form-control" id="gbr" name="gambar"> 
            <input type="hidden" class="form-control" id="statinput" name="statinput">
            <input type="hidden" class="form-control" id="id_slider" name="id_slider">
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Nama Slider*</label>
          <input type="text" id="nm_slider" name="nm_slider" class="form-control form-control-alternative tn btn-sm btn-white" placeholder="Nama Slider" ata-toggle="tooltip" data-placement="top" title="Isi Dengan Teks">
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Keterangan *</label>
          <input type="text" id="keterangan" name="keterangan" class="form-control form-control-alternative" placeholder="Keterangan">
        </div>
      <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Urutan *</label>
          <input type="text" id="urutan" name="urutan" class="form-control form-control-alternative" placeholder="urutan">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Status *</label>
          <select class="form-control form-control-alternative" id="status" name="status">
            <option value="active">Aktif</option>
            <option value="non_active">Non_aktif</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="card-footer py-4">
      <button class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;" type="submit">Save</button>
      <button class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;" type="submit" >Update</button>
      <button type="button" class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAddSlider()">Cancel</button>
    </div>
  </form>
  </div>
</div>
