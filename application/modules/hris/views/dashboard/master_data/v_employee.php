<body <?php if (!empty($sess_unit)) {echo 'onload="selectUnitEmployeeForKls()"';}?>>
<div class="card shadow" id="mainFormEmployee">
  <div class="card-header border-0">
    <li class="nav-item dropdown pull-right ">
                    <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button class="btn btn-sm btn-primary pull-right"><i class="far fa-caret-square-down"></i> Add Employee</button>
                        <span class="nav-link-inner--text d-lg-none">Settings</span> 
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                        <button onclick="inputEmployee(), AddLblForm('Form Tambah Employee')"class="dropdown-item"><i class="fas fa-file-signature"></i>Input Manual</button>
                        <button onclick="importEmployee(), ImportLblForm('Form Import Employee')" class="dropdown-item"id="btnAddKelas" ><i class="fas fa-file-import"></i>Import Employee</button>
                    <!--     <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>

<!--     <h3 class="mb-0">Data Employee <?php echo $this->session->userdata("unit")?>
      <select class="form-control-sm" id="selectUnit" onchange="selectUnitEmployee()" <?php if (!empty($sess_unit)) { echo 'style=display:none'; }?>>
        <option selected="selected" value="">Pilih Unit *</option>
      </select>
      Kelas
      <select class="form-control-sm" id="selectKlsParalel" onchange="dataTbEmployee()">
        <option selected="selected" value="">Pilih Kelas *</option>
      </select>
    </h3> -->
  </div>
  <div class="table-responsive" id="frmTbEmployee">
    <table class="table align-items-center table-flush" id="tbEmployee">
      <thead class="thead-light">
        <tr>

          <th scope="col" width="10%">No</th>
          <th scope="col" width="25%">Photo</th>
          <th scope="col" width="20%">Biography Employee</th>
          <th scope="col" width="20%">Grade Postion</th>        
          <th scope="col" width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>

<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile" id="view_profile_employe" style="display: none;">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Kshiti Ghelani
                                    </h5>
                                    <h6>
                                        Web Developer and Designer
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti Ghelani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>kshitighelani@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    

  <div class="row" id="frmImportEmployee" style="display: none;">
    <div class="nav-wrapper">
      <form id="importDataEmployee">
        <a href="<?php echo base_url('assets/file_format/format_Employee.xlsx') ?>" ><button class="btn btn-outline-warning ml-5" type="button"><i class="fa fa-download"></i> Download Format Excel</button></a>
        <input type="file" class="ml-3" name="excel_employee" style="height:50px">
    </div>
  </div>
  <div class="card-footer py-4">
    <button type="submit" class="btn btn-success pull-right ml-3" id="btnImport" style="display: none;">Import</button>
    <button type="button" class="btn btn-warning pull-right" id="btnCancelImport" style="display: none;" onclick="cancelAdd('Employee'), ImportLblForm('')">Cancel</button>
    </form>
  </div>
  <div class="container" id="frmAddEmployee" style="display: none;">
    <div class="nav-wrapper">
      <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item show" id="ds1" onclick="changeData('ds1')">
          <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#input-Employee" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Data Employee</a>
        </li>
        <li class="nav-item" id="do1" onclick="changeData('do1')">
          <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#input-Pendidikan" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Data Pendidikan</a>
        </li>
        <li class="nav-item" id="do2" onclick="changeData('do2')">
          <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#input-File" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Data File</a>
        </li>
        <li class="nav-item" id="do3" onclick="changeData('do3')">
          <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#input-akses-aplikasi" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Data Akses Aplikasi</a>
        </li>
      </ul>
      </div>
        <form id="inputDataEmployee">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="input-Employee" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                   <label class="form-control-label" for="input-username">Nip<font color="red">*</font></label>
                    <input type="hidden" id="kd_karyawan" name="kd_karyawan">
                     <input type="text" id="input_nip" name="nip" readonly="" class="form-control form-control-alternative">
                  </div>
                </div>
               <div class="col-lg-6">
                 <div class="form-group">
                   <label class="form-control-label" for="input-username">Nama<font color="red">*</font></label>
                    <input type="text" id="input_nama" name="nama" class="form-control form-control-alternative" placeholder="Nama" required="">
                 </div>
              </div>
             </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Nama Panggilan</label>
                <input type="text" id="input_namap" name="nm_pnggilan" class="form-control form-control-alternative" placeholder="Nama Panggilan">
              </div>
            </div>
           <div class="col-lg-4">
               <div class="form-group">
                 <label class="form-control-label" for="input-username">Nomor Kartu Keluarga (NKK)<font color="red">*</font></label>
                 <input type="text" id="input_no_kk" name="no_kk" class="form-control form-control-alternative" placeholder="Nomor Kartu Keluarga (NKK)"  required="">
               </div>
           </div>
            <div class="col-lg-4">
               <div class="form-group">
                 <label class="form-control-label" for="input-username">Nomor Identitas (KTP)<font color="red">*</font></label>
                 <input type="text" id="input_no_ktp" name="no_ktp" class="form-control form-control-alternative" placeholder="Nomor Identitas (KTP)"  required="">
               </div>
           </div>
          </div>
          <div class="row">
             <div class="col-lg-6">
               <div class="form-group">
                <label class="form-control-label" for="input-username">Tempat Lahir<font color="red">*</font></label>
                <input type="text" id="input_tempat_lahir" name="tempat_lahir" class="form-control form-control-alternative" placeholder="Tempat Lahir"  required="">
               </div>
             </div>
          <div class="col-lg-6">
             <div class="form-group">
               <label class="form-control-label" for="input-username">Tanggal Lahir<font color="red">*</font></label>
               <input type="text" id="input_tanggal_lahir" name="tgl_lahir" class="form-control form-control-alternative datepicker" placeholder="Tanggal Lahir" autocomplete="off"  required=""> 
             </div>
            </div>
          </div>
          <div class="row">
             <div class="col-lg-6">
               <div class="form-group">
                  <label class="form-control-label" for="input-username">Status Pernikahan<font color="red">*</font></label>
                   <select class="form-control form-control-alternative" id="input_status_nikah" name="status_nikah"  required="">
                      <option value = "" selected>-- Pilih Status --</option>
                      <option value="Menikah">Menikah</option>
                      <option value="Belum Menikah">Belum Menikah</option>
                      <option value="Duda">Duda</option>
                      <option value="Janda">Janda</option>
                  </select>
               </div>
            </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Jenis Kelamin<font color="red">*</font></label>
                  <select class="form-control form-control-alternative" id="input_gender" name="gender" onchange="selectGenderForCode()"  required="">
                  <option value ="" selected>Jenis Kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
             </div>
          </div>
          <div class="row">
           <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-username">Agama<font color="red">*</font></label>
                <select class="form-control form-control-alternative" id="input_agama" name="agama"  required="">
                  <option value ="" selected>-- Pilih Agama -- </option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
               </select>
            </div>
          </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Jumlah Anak<font color="red">*</font></label>
                 <input type="number" id="input_jml_anak" name="jml_anak" class="form-control form-control-alternative" placeholder="Jumlah Anak"  required="">
              </div>
            </div>

          </div>
          <div class="row">
              <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label" for="input">Negara<font color="red">*</font></label>
               <div class="form-group">
                  <select id="idselectCountries" name="id_negara" class="form-control" required="">
                    
                  
                   </select>
               </div>
            </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Provinsi<font color="red">*</font></label>
                 <select id="input_idselectProvinsi" name="id_prov" class="form-control" required="" onchange="selectKabupaten()">
                    
                   </select>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Kabupaten / Kota<font color="red">*</font></label>
                   <select id="input_idselectKabupaten" name="id_kab" class="form-control" required="" onchange="selectKecamatan()">
                    
                   </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Kecamatan<font color="red">*</font> </label>
              <select id="input_idselectKecamatan" name="id_kec" class="form-control" required="" onchange="selectKelurahan()">
                    
                   </select>
              </div>
           </div>
           <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Desa / Kelurahan<font color="red">*</font></label>
                  <select type="text" id="input_idselectKelurahan" name="id_kel" class="form-control form-control-alternative" placeholder="Desa / Kelurahan" required="">
                  </select>
                </div>
              </div>
          </div>
         <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Alamat <font color="red">*</font></label>
                  <input type="text" id="input_alamat" name="alamat" placeholder="Alamat" class="form-control form-control-alternative" required="">
                </div>
           </div>
            <div class="col-lg-6">
              <div class="row">
                  <div class="form-group col-lg-5">
                    <label class="form-control-label" for="input-username">RT<font color="red">*</font></label>
                     <input type="text" id="input_rt" name="rt" class="form-control form-control-alternative" placeholder="RT" required="">
                  </div>
                  <div class="form-group col-lg-2">
                        <label class="form-control-label">&nbsp;</label>
                         <input type="text" class="form-control form-control-alternative" placeholder="/" readonly style="background: #fff;">
                  </div>
                 <div class="form-group col-lg-5">
                    <label class="form-control-label" for="input-username">RW<font color="red">*</font></label>
                      <input type="text" id="input_rw" name="rw" class="form-control form-control-alternative" placeholder="RW" required="">
                 </div>
             </div>
            </div>
          </div>
         <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-kode-pos">Kodepos<font color="red">*</font></label>
              <input type="text" id="input_kd_pos" name="kd_pos" class="form-control form-control-alternative" placeholder="Kodepos" required="">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
               <label class="form-control-label" for="input-golongan-darah">Golongan Darah</label>
                <select class="form-control form-control-alternative" id="input_gol_darah" name="gol_darah">
                 <option value="" selected>-- Pilih Darah --</option>
                  <option value="O">O</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
              </select>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Keahlian Bahasa English</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ">
                      <input class="custom-control-input" id="customCheck1" type="checkbox" value="Aktif" name="sts_eng[]">
                      <label class="custom-control-label" for="customCheck1">Aktif</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="customCheck2" type="checkbox" value="Pasif" name="sts_eng[]">
                      <label class="custom-control-label" for="customCheck2">Pasif</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ">
                      <input class="custom-control-input" id="customCheck3" type="checkbox" value ="Bersertifikat" name="sts_brs[]">
                      <label class="custom-control-label" for="customCheck3">Bersertifikat</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="customCheck4" type="checkbox" value ="Tidak Bersertifikat" name="sts_brs[]">
                      <label class="custom-control-label" for="customCheck4">Tidak Bersertifikat</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Keahlian Bahasa Arab</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ">
                      <input class="custom-control-input" id="customCheck5" type="checkbox" value="Aktif" name="sts_arb[]">
                      <label class="custom-control-label" for="customCheck5">Aktif</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="customCheck6" type="checkbox" value="Pasif" name="sts_arb[]">
                      <label class="custom-control-label" for="customCheck6">Pasif</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ">
                      <input class="custom-control-input" id="customCheck7" type="checkbox" value ="Bersertifikat" name="sts_brs_arb[]">
                      <label class="custom-control-label" for="customCheck7">Bersertifikat</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="customCheck8" type="checkbox"  value ="Tidak Bersertifikat" name="sts_brs_arb[]">
                      <label class="custom-control-label" for="customCheck8">Tidak Bersertifikat</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
             <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-status_pegawai">Status Kepegawaian</label>
                    <select id="idselectStatusKrywan" name="id_status_karyawan" class="form-control" required="required">
                    
                  
                   </select>
                 </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-jabatan">Jabatan<font color="red">*</font></label>
                    <select id="idselectJbtn" name="id_jabatan" class="form-control" required="" >                 
                   </select>
                 </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-status_pegawai">Job Title <font color="red">*</font></label>
                    <select id="input_idselectJobTitle" name="id_job_title" class="form-control" required="">
                    
                  
                   </select>
                 </div>
               </div>
          </div>
           <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-cabang">Cabang<font color="red">*</font></label>
                    <select id="idselectCbg" name="id_cbg" class="form-control" required="">
                    
                  
                   </select>
                 </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-divisi">Divisi/Biro<font color="red">*</font></label>
                    <select id="input_idselectDivisi" name="id_divisi" class="form-control" required="">                 
                   </select>
                 </div>
              </div>
          </div>
         <div class="row">
            <div class="col-lg-6">
              <label class="form-control-label" for="input-seragam">Seragam</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio1" type="radio" value="S" name="seragam[]">
                      <label class="custom-control-label" for="customRadio1">S</label>
                    </div>
                  </div>
                </div>
               <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="customRadio2" type="radio" value="M" name="seragam[]">
                      <label class="custom-control-label" for="customRadio2">M</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio6" type="radio" value="L" name="seragam[]">
                      <label class="custom-control-label" for="customRadio6">L</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio3" type="radio" value="XL" name="seragam[]">
                      <label class="custom-control-label" for="customRadio3">XL</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="customRadio4" type="radio" value="XXL" name="seragam[]">
                      <label class="custom-control-label" for="customRadio4">XXL</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label" for="input-unit">Tanggal Bergabung<font color="red">*</font> </label>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                      </div>
                       <input class="form-control datepicker" id="input_mulai_brgbg" name="mulai_brgbg" placeholder="Mulai Bergabung" required="">
                   </div>
                  </div>
               </div>
              </div>
            </div>
         <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input">Email</label>
               <div class="form-group">
                 <input type="email" class="form-control" id="input_email" name="email" placeholder="name@example.com" autocomplete="off">
               </div>
            </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
               <label class="form-control-label" for="input">Nomor Tel<font color="red">*</font></label>
              <input type="text" class="form-control" id="input_no_tlp" name="no_tlp" placeholder="Nomor Telp" required="">
          </div>
        </div>
      </div>
      <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
               <label class="form-control-label" for="input">Kontak Darurat<font color="red">*</font></label>
              <input type="text" class="form-control" id="input_nmr_darurat1" name="nmr_darurat1" placeholder=" Kontak Darurat" required="">
          </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
               <label class="form-control-label" for="input">Nama Kontak Darurat<font color="red">*</font></label>
              <input type="text" class="form-control" id="input_nm_nmr_darurat1" name="nm_nmr_darurat1" placeholder=" Nama Kontak Darurat" required="">
          </div>
        </div>
      </div>

      </div>
    <div class="tab-pane fade" id="input-Pendidikan" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
        <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                  <label class="form-control-label" for="input-username">Pendidikan Terakhir<font color="red">*</font></label>
                    <select class="form-control form-control-alternative" id="input_idselectPndkkanterakhir" name="id_jnjng_pddk" required="">
                     
                   </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Tahun Lulus</label>
                  <input type="text" id="input_thn_lulus" name="thn_lulus" class="form-control form-control-alternative" placeholder="Tahun Lulus">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label class="form-control-label" for="input-username">Nama Sekolah/Universitas<font color="red">*</font> </label>
                <div class="input-group">
                  <!-- <select class="form-control form-control-alternative" id="idselectUniversitas" name="nm_college_krywn" style="width: 80%">
                   </select> -->
                   <select type="text" id="input_idselectUniversitas" class="form-control" name="id_college_krywn" required=""></select>
                  <div class="input-group-append">
                  <!--   <button type="button" class="btn btn-success">Action</button> -->
                     <button type="button" class="btn btn-outline-primary mr-4 dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                     </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add-univ"x>Add</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#import-univ">Import</a>
                    <!-- <a class="dropdown-item" href="#">Something else here</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a> -->
                  </div>
                </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="input-username">Fakultas<font color="red">*</font> </label>
                  <select class="form-control form-control-alternative" id="input_idselectFakultas" name="id_fakultas_krywn" required="">
                     
                   </select>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                   <label class="form-control-label" for="input-username">Jurusan<font color="red">*</font></label>
                  <select class="form-control form-control-alternative" id="input_idselectJurusan" name="id_jurusan_krywn" required="">
                     
                   </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">IPK<font color="red">*</font></label>
                  <input type="text" id="input_ipk" name="ipk" class="form-control form-control-alternative" placeholder="IPK" required="">
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Tilawah Al-Qur'an</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio66" type="radio" value="Cukup"name="tilawah[]">
                      <label class="custom-control-label" for="customRadio66">Cukup</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="customRadio7" type="radio" value="Bisa" name="tilawah[]">
                      <label class="custom-control-label" for="customRadio7">Bisa</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio8" type="radio" value="Mahir" name="tilawah[]">
                      <label class="custom-control-label" for="customRadio8">Mahir</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>           
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Pengisi Kajian</label>
                  <input type="text" id="input_p_kajian" name="p_kajian" class="form-control form-control-alternative" placeholder="Pengisi Kajian">
                </div>
              </div>
            </div>
             <div class="row">
            <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Komputer</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio10" type="radio" value="Cukup" name="komputer[]">
                      <label class="custom-control-label" for="customRadio10">Cukup</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="customRadio11" type="radio" value="Bisa" name="komputer[]">
                      <label class="custom-control-label" for="customRadio11">Bisa</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio12" type="radio" value="Mahir" name="komputer[]">
                      <label class="custom-control-label" for="customRadio12">Mahir</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Pelatihan yang diinginkan</label>
                  <input type="text" id="input_pelatihan" name="pelatihan" class="form-control form-control-alternative" placeholder="Pelatihan">
                </div>
              </div>
            </div>      
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Halafalan Qur'an</label>
                  <input type="number" id="input_hfln_quran" name="hfln_quran" class="form-control form-control-alternative" placeholder="">
                </div>
              </div>
               <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Aktivitas Kajian</label>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3 ">
                      <input class="custom-control-input" id="customRadio22" type="radio" value="Aktif" name="aktifitas_kajian[]">
                      <label class="custom-control-label" for="customRadio22">Aktif</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="customRadio23" type="radio" value="Pasif" name="aktifitas_kajian[]">
                      <label class="custom-control-label" for="customRadio23">Pasif</label>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>      
      <div class="tab-pane fade" id="input-File" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">  
         <div class="form-group">
             <label class="col-md-4 col-sm-4 col-xs-12 label-control">Foto Pegawai</label>
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <input id="photo_pegawai" name="photo_pegawai" type="file" class="form-control" accept="image/x-png,image/jpeg" onchange="readURL(this);">
               </div>
         </div>
            <div class="row">
               <div class="form-group">
                   <label class="col-md-4 col-sm-4 col-xs-12 label-control"></label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <img id="PrevPhoto_pgwi" src="<?php echo base_url('assets/file_karyawan/user.png')?>" style="width: 300px;max-width: 300px;">
                     </div>
               </div>
            </div>
          <div class="form-group">
             <label class="col-md-4 col-sm-4 col-xs-12 label-control">Gambar KTP</label>
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <input id="file_ktp" name="file_ktp" type="file" class="form-control" accept="image/x-png,image/jpeg" onchange="readURL2(this);">
               </div>
         </div>
               <div class="form-group">
                   <label class="col-md-4 col-sm-4 col-xs-12 label-control"></label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <img id="Prevfile_ktp" src="<?php echo base_url('assets/file_karyawan/KTP elektronik.jpg')?>" style="width: 150px;max-width: 150px;">
                     </div>
               </div>
        <div class="form-group">
             <label class="col-md-4 col-sm-4 col-xs-12 label-control">Gambar KK</label>
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <input id="file_kk" name="file_kk" type="file" class="form-control" accept="image/x-png,image/jpeg" onchange="readURL3(this);">
               </div>
         </div>
              <div class="form-group">
                 <label class="col-md-4 col-sm-4 col-xs-12 label-control"></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <img id="Prevfile_kk" src="<?php echo base_url('assets/file_karyawan/kk2.png')?>" style="width: 150px;max-width: 150px;">
                    </div>
              </div>
      </div>
  <div class="tab-pane fade" id="input-akses-aplikasi" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
    <div class="form-group">
      <div class="row">
         <div class="col-lg-6">
              <label class="form-control-label" for="input-nik">Hak Akses Aplikasi<font color="red">*</font></label>
              <div class="row">
                <div class="col-lg-5">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3 ">
                      <input class="custom-control-input" id="customCheck28" type="checkbox" name="hak_akses[]" value="CIRCLE">
                      <label class="custom-control-label" for="customCheck28">Circle Student<font color="red">*</font></label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="customCheck29" type="checkbox" name="hak_akses[]" value="HRD" required="">
                      <label class="custom-control-label" for="customCheck29">HRD<font color="red">*</font></label>
                    </div>
                  </div>
                </div>   
              </div>          
         </div>
              <div class="col-lg-4">
                  <label for="validationTooltipUsername">Password<font color="red">*</font></label>
                  <div class="input-group">   
                   <input type="password" class="form-control" id="password-field" placeholder="Password" name="password" required="">
                   <div class="input-group-prepend">
                  <span class="input-group-text"><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span></span>
                </div>
               </div>
             </div>
       </div>
    </div> 
    <?php
      if ($this->session->userdata("level")==="1"){
        ?>
    <div class="row">
      <div class="form-group">
        <div class ="col-lg-6">
          <label class="form-control-label">Level</label>
          <input type="text" id='input_level' name="level" class="form-control form-control-alternative">
        </div>
      </div>
    </div>
  <?php }?>
      </div>
  </div>
</div>
          <div class="card-footer py-4">
          <button type="submit" class="btn btn-success pull-right ml-3" id="btnImport" style="display: none;">Import</button>
          <button type="submit" class="btn btn-success pull-right ml-3" id="btnSave" style="display: none;">Save</button>
          <button type="button" class="btn btn-warning pull-right" id="btnCancel" style="display: none;" onclick="cancelAdd('Employee'), AddLblForm('')">Cancel</button>
          </form>
          </div>
          </div> 


 
            <div class="mb-sm-3 pull-right">
              <button type="button" class="btn btn-warning" id="btnCancelEdit" onclick="cancelEditDataEmployee()" style="display: none;">CANCEL</button>
              <button type="submit" class="btn btn-primary mr-4" id="btnUpdate" style="display: none;">UPDATE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>



<div class="modal fade" id="add-univ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH UNIVERSITAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-university"></i></span>

                    </div>
                    <input class="form-control" placeholder="Universitas" type="text" name="">
                </div>

                <div class="container">
  <img src="<?php echo base_url();?>assets/file_karyawan/user.png" alt="Avatar" class="image">
  <div class="overlay">
  <a href="#" class="icon" title="User Profile">
    <i class="fa fa-user"></i>
  </a>
  </div>
</div>
            </div>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="import-univ" tabindex="-1" role="dialog" aria-labelledby="import-univ" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="import-univ">FORM IMPORT UNIVERSITAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <!--  <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      

                    </div>
              </div>
            </div>  
            <div class="input-group">
  <div class="custom-file">
    <form id="importDataUniv">
    <input type="file" class="custom-file-input" id="inputGroupFile04" name="excel_univ">
    <label class="custom-file-label" for="inputGroupFile04"><i class="ni ni-cloud-upload-96"></i> Choose file</label>
  </div>
  <div class="input-group-append">
    <button type="submit" class="btn btn-outline-primary">Upload</button>
  </form>
  </div>  
</div>    
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
   <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">         
              <div class="card bg-secondary shadow border-0">
                 <div class="card-header bg-transparent pb-5">
                  <div class="text-muted text-center mt-2 mb-3"><h1>Form Tambah Universitas</h1> <button type="button" class="close" data-dismiss="modal" aria-label="Close"></div>

                    <!-- <div class="btn-wrapper text-center">
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon"><img src="../../assets/img/icons/common/github.svg"></span>
                      <span class="btn-inner--text">Github</span>
                   </a>
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon"><img src="../../assets/img/icons/common/google.svg"></span>
                      <span class="btn-inner--text">Google</span>
                   </a>
                 </div> -->
               </div>
      <div class="card-body px-lg-5 py-lg-5">
           <!--  <div class="text-center text-muted mb-4">
                  <small>Or sign in with credentials</small>
            </div> -->
           <form role="form">
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nama Universitas :</span>

                    </div>
                    <input class="form-control" placeholder="Universitas" type="text">
                </div>
            </div>
            <!-- <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                </div>
            </div>
            <div class="custom-control custom-control-alternative custom-checkbox">
                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                </label>
            </div> -->
            <div class="text-center">
                <button type="button" class="btn btn-primary my-4">Simpan</button>
            </div>
        </form>
    </div>
 



</div>
   </div>
    </div>
    </div>
</div>
  </div>
</div>