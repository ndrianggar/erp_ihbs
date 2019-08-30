<div class="card shadow" id="mainFormAbsensiSiswa">
  <div class="card-header border-0">
    <h3 class="mb-0">Data Absensi Siswa
      <select class="form-control-sm" id="selectUnit" onchange="selectUnitSiswa()">
        <option selected="selected" value="">Pilih Unit *</option>
        <option value="TK">TK</option>
        <option value="SD">SD</option>
        <option value="SMP PUTRA">SMP PUTRA</option>
        <option value="SMP PUTRI">SMP PUTRI</option>
        <option value="SMA PUTRA">SMA PUTRA</option>
        <option value="SMA PUTRI">SMA PUTRI</option>
      </select>
      Kelas
      <select class="form-control-sm" id="selectKlsParalel">
        <option selected="selected" value="">Pilih Kelas *</option>
      </select>
      Tahun
      <select type="text" class="form-control-sm" name="select_thnAkademik" id="select_thnAkademik" onchange="dataTbJadwalAbsensi()">
        <option selected value="">Pilih Tahun Akademik</option>
      </select>
    </h3>
    <input type="hidden" name="kd_jadwal" id="kd_jadwal">
    <input type="hidden" name="kd_mapel" id="kd_mapel">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddAbsensiSiswa" onclick="add('AbsensiSiswa')"><i class="fa fa-plus"></i> Tambah</button>
  </div>
  <div class="table-responsive" id="frmTbAbsensiSiswa">
    <div id="table-scroll" class="table-scroll">
      <div class="table-wrap">
        <table class="table align-items-center table-flush main-table" id="tbAbsensiSiswa">
          <thead>
            <tr>
              <th class="fixed-side" scope="col" style="background: #91e38e; color: black; text-align: center;" rowspan="2">#</th>
              <th class="fixed-side" scope="col" style="background: #91e38e; color: black; text-align: center;" rowspan="2">NIPD</th>
              <th class="fixed-side" scope="col" style="background: #91e38e; color: black; text-align: center;" rowspan="2">Nama</th>
              <?php $tahun = date('Y'); $bulan = date('m'); $jmlHr = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun); $day = date("d")?>
              <th scope="col" style="text-align: center; background: #91e38e; color: black;" colspan="31">Kehadiran</th>
            </tr>
            <?php echo $table; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="container" id="frmAddAbsensiSiswa" style="display: none;">
    <form id="inputDataAbsensiSiswa">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-username">Unit *</label>
          <input type="hidden" name="kd_AbsensiSiswa" id="kd_AbsensiSiswa">
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
          <label class="form-control-label" for="input-username">AbsensiSiswa</label>
          <input type="text" class="form-control form-control-alternative" name="input_AbsensiSiswa" id="input_AbsensiSiswa" placeholder="AbsensiSiswa">
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
    <button class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('AbsensiSiswa')">Cancel</button>
  </div>
</div>
