<div class="card shadow">
   <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddJadwal" onclick="add('Jadwal')"><i class="fa fa-plus"></i> Tambah</button>
    <!-- <h3 class="mb-0">Data Payroll Employee -->
      <!-- <select class="form-control-sm ml-2" id="selectUnit" onchange="selectUnitSiswa()" <?php if (!empty($this->session->userdata("unit"))) { echo 'style=display:none'; }?>> -->

         Divisi<select  class="form-control-sm ml-2" id="input_idselectDivisi" name="id_divisi"  required="required" onchange="input_selectunit()">>                 
        <option selected="selected" value="">Pilih Divisi *</option>
      </select>
      Unit
      <select type="text" class="form-control-sm" id="input_idselectunit" name="id_unit"  onchange="Searchemployeeid()">
        <option selected value="">Pilih Unit</option>
      </select>

      
 <!--     <input type="text" id="test2">  -->
    
  </div>
  <div class="table-responsive" id="frmTbUnit">

    <!-- <div class="container emp-profile" id="AddPayrollEmployee" style="display: none;">
    <div class="row">
      <div class="col-md-4">
                      <table>
                        <tr>
                          <th>Nama Lengkap</th>
                           <td width="30" align="center">:</td>
                           <td id="nama-detail"></td>
                        </tr> 
                         <tr>
                           <th>Nama Panggilan</th>
                            <td width="30" align="center">:</td>
                            <td id="namap-detail"></td>
                         </tr>                       
                         <tr>
                          <th>Nip</th>
                            <td width="30" align="center">:</td>
                            <td id="nip-detail"></td>
                         </tr>  
                         <tr>
                            <th>Tempat Lahir</th>
                            <td width="30" align="center">:</td>
                            <td id="tempat_lahir-detail"></td>
                         </tr>                       
                         
                                                           
                     </table>                     
                    </div> 
            <div class="profile-work text-center">
               <p><h1 id="h3nama-detail"></h1></p>
                 <h5 id="Jbtn-detail"></h5>
                 <h5 id="JobTitle-detail"></h5>
            </div>
        </div>    

                     
            </div>
        </div>   -->
  <table class="table align-items-center table-flush" id="tbDataPayroll">
   <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nomor Karyawan</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Unit</th>
                <th>Masa Kerja</th>
                <th>Jabatan</th>
                <th width="18%">Jumlah Hari</th>
                <th>Jumlah Anak</th>
                <th>Gaji Pokok</th>
                <th>TUNJANGAN KESEHATAN</th>
                <th>TUNJANGAN LAIN</th>
                <th>TUNJANGAN JABATAN</th>
                <th>TUNJANGAN RANGKAP JABATAN</th>
                <th>SATUAN TRANSPORT</th>
                <th>SATUAN KEHADIRAN</th>
                <th>TUNJANGAN TRANSPORT</th>
                <th>TUNJANGAN KEHADIRAN</th>
                <th>TUNJANGAN PIKET</th>
                <th>TAMBAHAN MENGAJAR</th>
                <th>TUNJ Tmt TINGGAL</th>
                <th>TUNJANGAN MAKAN</th>
                <th>IURAN KOPERASI</th>
                <th>TUNJANGAN HARI TUA</th>
                <th>TUNJANGAN PENGGANTI MAKAN</th>
                <th>PINJAMAN PRIBADI</th>
                <th>PINJAMAN KENDARAAN</th>
                <th>PINJAMAN RUMAH</th>
                <th>TAKE HOME PAY</th>
            </tr>
        </thead>
           <tbody>
          
      
      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="SearchEmployee" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modal-title-default">Search Employee</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
             <label for="message-text" class="col-form-label">Divisi*</label>
                 <select id="input_idselectDivisi" name="id_divisi" class="form-control" onchange="input_selectunit()" required="required">>                 
                   </select>
        </div> 
        <div class="form-group">
             <label for="message-text" class="col-form-label">Unit*</label>
                 <select id="input_idselectunit" name="id_unit" class="form-control" required="required">>                 
                   </select>
        </div>
       <!--   <div class="form-group">
             <label for="message-text" class="col-form-label">Nama*</label>
                 <select id="input_idemployee" name="nip" class="form-control" required="required">>                 
                   </select>
        </div> -->
      </div>
      <div class="modal-footer">
      <!--   <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button> -->
        <button type="button" class="btn btn-primary ml-auto" onclick="Searchemployeeid()">Search</button>
      </div>
    </div>
  </div>
</div>




