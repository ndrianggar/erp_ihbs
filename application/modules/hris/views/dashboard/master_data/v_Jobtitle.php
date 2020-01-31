<div class="card shadow">
  <div class="card-header border-0">
    <button class="btn btn-sm btn-primary pull-right" id="btnAddUnit" data-toggle="modal" data-target="#modalAddUnit"><i class="fa fa-plus"></i> Add</button>
    
    <h3 class="mb-0">Data Divisi</h3>
  </div>
  <div class="table-responsive" id="frmtbDivision">
    <table class="table align-items-center table-flush" id="tbDataJbtitle">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col" class="text-center">Code Job title</th>
          <th scope="col" class="text-center">Job Title</th>
          <th scope="col" class="text-center">Jabatan</th>
       <!--    <th scope="col" class="text-center">Status</th> -->
       
          <th scope="col" width="10%" class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="modalAddUnit" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modal-title-default">Add Divisi</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" name="inputUnit" id="inputDivisi" placeholder="Nama Divisi *">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary ml-auto" onclick="saveUnit()">Save</button>
      </div>
    </div>
  </div>
</div>

