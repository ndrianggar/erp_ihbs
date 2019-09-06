  <main class="profile-page">
    <section class="section-profile-cover section-shaped my-0">
      <!-- Circles background -->
      <div class="shape shape-style-1 shape-dark alpha-4">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                  <?php if (empty($photo)) { ?>
                    <img src="<?php echo base_url() ?>/assets/home/img/avatar.jpg" class="boxed-circle">
                  <?php }else{ ?>
                    <img src="<?php echo base_url() ?>/assets/home/img/theme/team-1-800x800.jpg" class="rounded-circle">
                  <?php } ?>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                <div class="card-profile-actions py-5 mt-lg-0">
                  <button class="btn btn-sm btn-info" onclick="editProfil()"><i class="fa fa-edit mr-1"></i> Profile</button>
                  <button class="btn btn-sm btn-default float-right" data-toggle="modal" data-target="#modal_changePass"><i class="fa fa-edit mr-1"></i> Password</button>
                </div>
              </div>
              <div class="col-lg-4 order-lg-1">
                <div class="card-profile-stats d-flex justify-content-center">
                  <!-- <div>
                    <span class="heading">22</span>
                    <span class="description">Friends</span>
                  </div>
                  <div>
                    <span class="heading">10</span>
                    <span class="description">Photos</span>
                  </div>
                  <div>
                    <span class="heading">89</span>
                    <span class="description">Comments</span>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="text-center mt-5">
              <h3><?php echo $this->session->userdata("nama"); ?></h3>
            </div>
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                  <li class="nav-item show" id="ds" onclick="changeData('ds')">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-user mr-2"></i>Data Siswa</a>
                  </li>
                  <li class="nav-item" id="do" onclick="changeData('do')">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fa fa-group mr-2"></i>Data Orang Tua</a>
                  </li>
                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                  <table class="table">
                    <tbody>
                      <tr>
                        <th style="width: 21%;">Nama :</th>
                        <td style="width: 29%;">
                          <span id="label1"><?php echo $nama; ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $nama; ?>" class="form-control form-control-alternative" style="display:none;" id="edit_nama" disabled />
                          </div>
                        </td>
                        <th style="width: 21%;">NIK :</th>
                        <td style="width: 29%;">
                          <span id="label2"><?php echo $nik; ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $nik; ?>" class="form-control form-control-alternative" style="display:none;" id="edit_nik" disabled/>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>NIPD :</th>
                        <td>
                          <span id="label3"><?php echo $nipd?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $nipd?>" class="form-control form-control-alternative" style="display:none;" id="edit_nipd" disabled/>
                          </div>
                        </td>
                        <th>NISN :</th>
                        <td>
                          <span id="label4"><?php echo $nisn?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $nisn?>" class="form-control form-control-alternative" style="display:none;" id="edit_nisn" disabled/>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>Tempat Lahir :</th>
                        <td>
                          <span id="label5"><?php echo $tempat_lahir ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $tempat_lahir ?>" class="form-control form-control-alternative" style="display:none;" id="edit_tmptLahir" />
                          </div>
                        </td>
                        <th>Tanggal Lahir :</th>
                        <td>
                          <span id="label6"><?php echo date('d/m/Y',strtotime($tanggal_lahir)) ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $tanggal_lahir?>" class="form-control form-control-alternative datepicker" style="display:none;" id="edit_tglLahir" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin :</th>
                        <td>
                          
                          <div class="form-group">
                            <span id="label7"><?php echo $gender ?></span>
                            <select class="form-control" id="edit_gender" style="display: none;">
                              <option selected="selected" value="<?php echo $gender ?>"><?php echo $gender ?></option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>  
                        </td>
                        <th>Agama :</th>
                        <td>
                         
                          <div class="form-group">
                             <span id="label8"><?php echo $agama ?></span>
                            <select class="form-control form-control-alternative" style="display:none;" id="edit_agama">
                              <option value="<?php echo $agama ?>" selected="selected"><?php echo $agama ?></option>
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Katolik">Katolik</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Budha">Budha</option>
                            </select>
                          </div>  
                        </td>
                      </tr>
                      <tr>
                        <th>Kelas :</th>
                        <td>
                          <span id="label9"><?php echo $kd_kls ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $kd_kls ?>" class="form-control form-control-alternative" style="display:none;" id="edit_kls" />
                          </div>
                        </td>
                        <th>Kelas Paralel :</th>
                        <td>
                          <span id="label10"><?php echo $nm_kls_paralel; ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $nm_kls_paralel; ?>" class="form-control form-control-alternative" style="display:none;" id="edit_klsParalel" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>Jurusan :</th>
                        <td>
                          <div class="form-group">
                            <span id="label11"></span>
                            <input type="text" value="" class="form-control form-control-alternative" style="display:none;" id="edit_jurusan" />
                          </div>
                        </td>
                        <th>Angkatan :</th>
                        <td>
                          <span id="label12"><?php echo $angkatan ?></span>
                            <div class="form-group">
                            <input type="text" value="<?php echo $angkatan ?>" class="form-control form-control-alternative" style="display:none;" id="edit_angkatan" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>Alamat :</th>
                        <td>
                          <span id="label13"><?php echo $alamat ?></span>
                          <div class="form-group">
                            <textarea class="form-control form-control-alternative" style="display: none;" id="edit_alamat"><?php echo $alamat ?></textarea>
                          </div>
                        </td>
                        <th>No Telepon :</th>
                        <td>
                          <span id="label14"><?php echo $no_tlp ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $no_tlp ?>" class="form-control form-control-alternative" style="display:none;" id="edit_tlp" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>Rt / Rw :</th>
                        <td>
                          <span id="label15"><?php echo $rt. "/" .$rw ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $rt. "/" .$rw ?>" class="form-control form-control-alternative" style="display:none;" id="edit_RtRw" />
                          </div>
                        </td>
                        <th>Desa / Kelurahan :</th>
                        <td>
                          <span id="label16"><?php echo $desa; ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $desa; ?>" class="form-control form-control-alternative" style="display:none;" id="edit_desa" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>Kecamatan :</th>
                        <td>
                          <span id="label17"><?php echo $kecamatan; ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $kecamatan; ?>" class="form-control form-control-alternative" style="display:none;" id="edit_kecamatan" />
                          </div>
                        </td>
                        <th>Kabupaten / Kota :</th>
                        <td>
                          <span id="label18"><?php echo $kota ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $kota ?>" class="form-control form-control-alternative" style="display:none;" id="edit_kota" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>Kode Pos :</th>
                        <td>
                          <span id="label19"><?php echo $kd_pos; ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $kd_pos; ?>" class="form-control form-control-alternative" style="display:none;" id="edit_kdPos" />
                          </div>
                        </td>
                        <th>Penerima KPS :</th>
                        <td>
                          <span id="label20"><?php echo $status_kps; ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $status_kps; ?>" class="form-control form-control-alternative" style="display:none;" id="edit_statusKPS" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>No KPS :</th>
                        <td>
                          <span id="label21"><?php echo $no_kps; ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $no_kps; ?>" class="form-control form-control-alternative" style="display:none;" id="edit_noKPS" />
                          </div>
                        </td>
                        <th>SKHUN :</th>
                        <td>
                          <span id="label22"><?php echo $skhun; ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $skhun; ?>" class="form-control form-control-alternative" style="display:none;" id="edit_skhun" />
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                  <table class="table">
                    <thead>
                      <tr style="text-align: center; background-color: #ced4da;">
                        <th colspan="2">AYAH</th>
                        <th colspan="2">IBU</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Nama :</th>
                        <td>
                          <span id="label23"><?php echo $nm_bpk ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $nm_bpk ?>" class="form-control form-control-alternative" style="display:none;" id="edit_nmBpk" />
                          </div>
                        </td>
                        <th>Nama :</th>
                        <td>
                          <span id="label24"><?php echo $nm_ibu ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $nm_ibu ?>" class="form-control form-control-alternative" style="display:none;" id="edit_nmIbu" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>Tanggal Lahir :</th>
                        <td>
                          <span id="label25"><?php echo date("d/m/Y",strtotime($thn_lahir_bpk))?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $thn_lahir_bpk?>" class="form-control form-control-alternative datepicker" style="display:none;" id="edit_thnLhrBpk" />
                          </div>
                        </td>
                        <th>Tanggal Lahir :</th>
                        <td>
                          <span id="label26"><?php echo date("d/m/Y",strtotime($thn_lahir_ibu))?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $thn_lahir_ibu?>" class="form-control form-control-alternative datepicker" style="display:none;" id="edit_thnLhrIbu" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>Pendidikan :</th>
                        <td>
                          <span id="label27"><?php echo $pendidikan_bpk ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $pendidikan_bpk ?>" class="form-control form-control-alternative" style="display:none;" id="edit_pendidikanBpk" />
                          </div>
                        </td>
                        <th>Pendidikan :</th>
                        <td>
                          <span id="label28"><?php echo $pendidikan_ibu ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $pendidikan_ibu ?>" class="form-control form-control-alternative" style="display:none;" id="edit_pendidikanIbu" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>Pekerjaan :</th>
                        <td>
                          <span id="label29"><?php echo $pekerjaan_bpk ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $pekerjaan_bpk ?>" class="form-control form-control-alternative" style="display:none;" id="edit_pekerjaanBpk" />
                          </div>
                        </td>
                        <th>Pekerjaan :</th>
                        <td>
                          <span id="label30"><?php echo $pekerjaan_ibu ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $pekerjaan_ibu ?>" class="form-control form-control-alternative" style="display:none;" id="edit_pekerjaanIbu" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>No Telepon :</th>
                        <td>
                          <span id="label31"><?php echo $no_tlp_bpk ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $no_tlp_bpk ?>" class="form-control form-control-alternative" style="display:none;" id="edit_noTlpBpk" />
                          </div>
                        </td>
                        <th>No Telepon :</th>
                        <td>
                          <span id="label32"><?php echo $no_tlp_ibu ?></span>
                          <div class="form-group">
                            <input type="text" value="<?php echo $no_tlp_ibu ?>" class="form-control form-control-alternative" style="display:none;" id="edit_noTlpIbu" />
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="mb-sm-3 pull-right">
                  <button class="btn btn-warning" id="btnCancel" onclick="cancelEditPrfl()" style="display: none;">CANCEL</button>
                  <button class="btn btn-primary" id="btnUpdate" onclick="updateProfil()" style="display: none;">UPDATE</button>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
  </main>