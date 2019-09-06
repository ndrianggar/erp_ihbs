<div class="card shadow" id="mainFormPredikat">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddPredikat" onclick="add('Predikat')"><i class="fa fa-plus"></i> Tambah</button>
    <h3 class="mb-0">Data Rentang Nilai
      <select class="form-control-sm" id="selectUnit" onchange="dataTbPredikat()">
        <option selected="selected" value="">Pilih Unit *</option>
        <option value="TK">TK</option>
        <option value="SD">SD</option>
        <option value="SMP PUTRA">SMP PUTRA</option>
        <option value="SMP PUTRI">SMP PUTRI</option>
        <option value="SMA PUTRA">SMA PUTRA</option>
        <option value="SMA PUTRI">SMA PUTRI</option>
      </select>
    </h3>
  </div>
  <div class="table-responsive" id="frmTbPredikat">
    <table class="table align-items-center table-flush" id="tbPredikat">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Unit</th>
          <th scope="col">Interval Nilai</th>
          <th scope="col">Predikat</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Tahun Akademik</th>
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
  <div class="container" id="frmAddPredikat" style="display: none;">
    <form id="inputDataPredikat">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Unit *</label>
          <input type="hidden" name="kd_predikat" id="kd_predikat">
          <select class="form-control form-control-alternative" name="input_unit" id="input_unit">
            <option value="" selected>Pilih Unit</option>
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
          <label class="form-control-label" for="input-username">Tahun Akademik</label>
          <select type="text" class="form-control form-control-alternative" name="select_thnAkademik" id="select_thnAkademik">
            <!-- <option selected value="">Pilih Tahun Akademik</option> -->
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Interval Awal</label>
          <input type="text" class="form-control form-control-alternative"  name="input_intAwal" id="input_intAwal" placeholder="Interval Awal">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Interval Akhir</label>
          <input type="text" class="form-control form-control-alternative"  name="input_intAkhir" id="input_intAkhir" placeholder="Interval Akhir">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Predikat</label>
          <input type="text" class="form-control form-control-alternative" name="input_predikat" id="input_predikat" placeholder="Predikat">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Keterangan</label>
          <input type="text" name="input_keterangan" id="input_keterangan" class="form-control form-control-alternative" placeholder="Keterangan">
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer py-4">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnUpdate" style="display: none;">Update</button>
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
    </form>
    <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Predikat')">Cancel</button>
  </div>
</div>

