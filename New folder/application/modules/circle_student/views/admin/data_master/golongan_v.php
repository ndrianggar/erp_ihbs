
<div class="card shadow">
  <div class="card-header border-0">
    <h3 class="mb-0">Data Golongan</h3>
  </div>

  <div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="">
            
        <tr><td ><button class="btn btn-outline-info btn-sm" id="btnTambahgolongan"><i class="far fa-plus-square"></i><span class="btn-inner--text">Tambah</span></button></td>
           <th> </th>
           <th></th>
           <th><a class="pull-right"> <span class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal-default"><i class="fas fa-info"></i>&nbsp;Informasi</button></td>
         </tr>
             </div>
             <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true"><div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Petunjuk pengisian</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                <p>Data Golongan ialah berisi tentang macam-macam golongan yang digunakan oleh tenaga pengajar</p>
                <p>Untuk menambah data bisa meng-klik tombol <i class="far fa-plus-square"></i> yang ada di sebelah kiri apabila telah selesai tinggal menekan enter maka data otomatis sudah tersimpan</p>
                <p>Untuk mengedit langsung mengarahkan kepada data yang ingin diupdate apabila telah selesai tinggal menekan data yang dimaksud</p>

            </div>

            <div class="modal-footer">
               <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>

     <thead class="thead-light">
      <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Golongan </th>
           <th scope="col">Keterangan </th>
          <th scope="col">Action</th>
      </tr>
      </thead>   
      <tbody id="table-body">

      <?php $no=1; foreach ($d_golongan as $data){
       echo "<tr data-id='$data[kd_gol]'>
        <td width='10%'><span class='span'  data-id=''>".$no++."</span>
        <td  ><span class='span-nm_gol caption' data-id='$data[kd_gol]'>$data[nm_gol]</span> <input type='text' class='field-nm_gol form-control editor' value='$data[nm_gol]' data-id='$data[kd_gol]' /></td> 
        <td  ><span class='span-keterangan caption' data-id='$data[kd_gol]'>$data[keterangan]</span> <input type='text' class='field-keterangan form-control editor' value='$data[keterangan]' data-id='$data[kd_gol]' /></td>
         <td width='5%'><button class='btn btn-sm btn-danger hapus-data-gol' data-id='$data[kd_gol]'><i class='glyphicon glyphicon-remove'></i> Hapus</button></td>

        </tr>";
          }
       ?>
      
      </tbody>
    </table>
  </div>
 
</div>
