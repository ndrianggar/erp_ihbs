<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<button type="button" id="btn-tambah-jabatan" class="btn btn-primary pull-right">Tambah</button>
		<button type="button" id="btn-tambah-jabatan" class="btn btn-primary pull-right">Tambah</button>
		<div class="x_panel">
			
			<div class="card-header border-0">
						
				<h2>Pendidikan Formal</h2>
				
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

						<a class="collapse-link">
						<!-- 	<i class="fa fa-chevron-up"></i> -->
						</a>
					</li>
				</ul>
			<div class="table-responsive">
				<table id="data-jabatan-tambahan" Class="table table-bordered table-striped table-hover ">
					<thead>
						<th>No.</th>
						<th>Jabatan</th>
						<th>Nama Jabatan</th>
						<th>Surat Keputusan</th>
						<th>Tanggal Menjabat</th>
						<th>Berkakhir Menjabat</th>
						<th>Action</th>
					</thead>
					<tbody>
					</tbody>									
				</table>
			  </div>
			</div>
		</div>
	</div>


	
	<!-- Modal Tambah Pendidikan-->

	<!-- <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Pendidikan NonFormal</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li>
						<button type="button" id="btn-tambah-kursus" class="btn btn-primary">Tambah</button>
					</li>
					<li>
						<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="data-kursus" Class="table table-bordered table-striped table-hover">
					<thead>
						<th>No.</th>
						<th>Jenis</th>
						<th>Nama Pendidikan</th>
						<th>Durasi</th>
						<th>Ijazah</th>
						<th>Tempat</th>
						<th>Penyelenggara</th>
						<th>Durasi (Jam)</th>
						<th>Status</th>
						<th>Action</th>
					</thead>
					<tbody>
					</tbody>									
				</table>
			</div>
		</div>
	</div>
 -->
	<!-- Modal Tambah Kursus -->
	<!-- <div class="modal fade" id="modal-kursus">
		<div class="modal-dialog">
			<form name="form-kursus" id="form-kursus" data-parsley-validate method="POST" class="form-horizontal" enctype="multipart/form-data" action="">
				<div class="modal-content">
					<div class="modal-header">
						<div class="modal-title">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h2><span id="title-kurus">Tambah Data Pendidikan Non-Formal</span></h2>
						</div>
					</div>
					<div class="modal-body scroll_modal">
						<div class="form-horizontal">
							<div class="form-group">
								<label class="label-control col-md-4 col-sm-4 col-xs-12">Jenis Pendidikan *</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<select id="id_jenis_kursus" name="id_jenis_kursus" class="form-control selectpicker" title="--Pilih Jenis--" required="required">
										<?php
										foreach ($jenis_kursus as $jenis_kursus) {
											echo '<option value="' . $jenis_kursus->id_jenis_kursus . '">' . $jenis_kursus->nm_jenis_kursus . '</option>';
										}
										?>
									</select>
									<span  id="jenis_k" ></span>
									<input id="jenis_k" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="label-control col-md-4 col-sm-4 col-xs-12">Nama Pendidikan *</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input id="kode_kursus" name="kode_kursus" type="hidden">
									<input id="id_pegawai_kursus" name="id_pegawai" type="hidden">
									<input id="nama_kursus" name="nama_kursus" class="form-control" placeholder="Nama Pendidikan" required="required">
									<span  id="nama_k" ></span>
									<input id="nama_k" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="label-control col-md-4 col-sm-4 col-xs-12">Tanggal Mulai *</label>
								<div class="col-md-8 col-sm-8 col-xs-12 has-feedback">
									<input id="awal_kursus" name="awal_kursus" class="form-control has-feedback-right tanggal" placeholder="Tanggal Mulai (dd-mm-yyyy)" required="required">
									<span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
									<span  id="awal_k" ></span>
									<input id="awal_k" name="" class="form-control has-feedback-right tanggal" placeholder="Tanggal Mulai (dd-mm-yyyy)" required="required">
									<span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
								</div>
							</div>
							<div class="form-group">
								<label class="label-control col-md-4 col-sm-4 col-xs-12">Tanggal Selesai *</label>
								<div class="col-md-8 col-sm-8 col-xs-12 has-feedback">
									<input id="akhir_kursus" name="akhir_kursus" class="form-control has-feedback-right tanggal" placeholder="Tanggal Mulai (dd-mm-yyyy)" required="required">
									<span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
									<span  id="akhir_k" ></span>
									<input id="akhir_k" name="" class="form-control has-feedback-right tanggal" placeholder="Tanggal Mulai (dd-mm-yyyy)" required="required">
									<span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
								</div>
							</div>
							<div class="form-group">
								<label class="label-control col-md-4 col-sm-4 col-xs-12">Nomor Ijazah *</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input id="ijazah_kursus" name="ijazah_kursus" class="form-control" placeholder="Nomor Ijazah" required="required">
									<span  id="ijazah_k" ></span>
									<input id="ijazah_k" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="label-control col-md-4 col-sm-4 col-xs-12">Tempat *</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input id="tempat_kursus" name="tempat_kursus" class="form-control" placeholder="Tempat" required="required">
									<span  id="tempat_k" ></span>
									<input id="tempat_k" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="label-control col-md-4 col-sm-4 col-xs-12">Penyelenggara *</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input id="kepala_kursus" name="kepala_kursus" class="form-control" placeholder="Penyelenggara" required="required">
									<span  id="kepala_k" ></span>
									<input id="kepala_k" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="label-control col-md-4 col-sm-4 col-xs-12">Durasi (Jam) *</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input id="durasi_kursus" name="durasi_kursus" class="form-control" placeholder="Durasi (Jam)" required="required">
									<span  id="durasi_k" ></span>
									<input id="durasi_k" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="label-control col-md-4 col-sm-4 col-xs-12">File (pdf)</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input id="file_kursus" name="file_kursus" class="form-control" type="File" accept="application/pdf">
									<a id="lihat_file_kursus" class="form-control" href="" target="_blank">Lihat File</a>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="navbar-right">
							<div class="btn-group">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
								<button type="button" id="btn-simpan-kursus" class="btn btn-success">Simpan</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div> -->
	<!-- Modal Tambah Kursus -->
</div>