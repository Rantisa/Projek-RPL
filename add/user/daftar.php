<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar User</h3>

            </div>
            <!-- /.box-header -->
           <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>username</th>
                  <th>nama</th>
                  <th>email</th>
                  <th>status</th>          
                  <th align="center" >Action</th>
                  <th align="center">Action</th>
                </tr>
              </thead>
                <tfoot>
                <tr>
                   <?php
                  $no=1;
                  $qdatagrid = "select * from user join daftaranggota
                                  where user.id = daftaranggota.user_id";
                  $rdatagrid = mysqli_query($mysqli,$qdatagrid);
                  while($ddatagrid = mysqli_fetch_assoc($rdatagrid)){
                    echo "
                    <tr>
                      <td>$no</td>
                      <td>$ddatagrid[username]</td>
                      <td>$ddatagrid[nama]</td>
                      <td>$ddatagrid[email]</td>
                      <td>$ddatagrid[status]</td>                     
                      <td><a href=?unit=user&action=update&id=$ddatagrid[id] class='btn btn-warning'>Update</td>
                      <td><a href=?unit=user&action=delete&id=$ddatagrid[id] class='btn btn-danger' onClick= 'return confirm(\"Yakin akan menghapus User?\")'>Delete</td>
                    
                    </tr>
                    ";
                    $no++;
                  }
                  ?>      
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->