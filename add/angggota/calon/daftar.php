<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Calon Anggota</h3>
              <div class="input-data"><a class="button" href="?unit=calon&action=input">Input Data </a></div>

            </div>
            <!-- /.box-header -->
           <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>nama</th>
                  <th>tgl Lahir</th>
                  <th>jurusan</th>
                  <th>Status</th>
                  <th>Foto</th>                 
                  <th colspan="2" align="center">Action</th>
                  
                </tr>
                </thead>
                <?php
                  $no=1;
                  $qdatagrid = "select * from daftaranggota where status = 1";
                  $rdatagrid = mysqli_query($mysqli,$qdatagrid);
                  while($ddatagrid = mysqli_fetch_assoc($rdatagrid)){
                    echo "
                    <tr>
                      <td>$no</td>
                      <td>$ddatagrid[nama]</td>
                      <td>$ddatagrid[tanggal_lahir]</td>
                      <td>$ddatagrid[jurusan]</td>
                      <td>$ddatagrid[status]</td>
                       <td>
                      <div class=widget-user-image>
                        <img class=profile-user-img img-responsive img-circle src=foto_anggota/$ddatagrid[foto] alt=Message User  Image>
                      </div>    
                      </td>
                     
                      <td><a href=?unit=anggota&action=update&id=$ddatagrid[id] class='btn btn-warning'>Update</td>
                      
                    
                    </tr>
                    ";
                    $no++;
                  }
                  ?>      
                <tfoot>
                <tr>
                  
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