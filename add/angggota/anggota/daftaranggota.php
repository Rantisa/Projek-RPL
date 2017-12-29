<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Anggota</h3>
              <div class="input-data"><a class="button" href="?unit=anggota&action=input">Input Data </a></div>

            </div>
            <!-- /.box-header -->
           <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>nama</th>
                  <th>tgl Lahir</th>
                  <th>Nbp</th>
                  <th>jabatan</th>
                  <th>Fakultas</th>                
                  <th>jurusan</th>
                  <th>Foto</th>                 
                  <th colspan="2" align="center">Action</th>
                  
                </tr>
                </thead>
                <?php
                  $no=1;
                  $qdatagrid = "select * from daftaranggota where status = 2";
                  $rdatagrid = mysqli_query($mysqli,$qdatagrid);
                  while($ddatagrid = mysqli_fetch_assoc($rdatagrid)){
                    echo "
                    <tr>
                      <td>$no</td>
                      <td>$ddatagrid[nama]</td>
                      <td>$ddatagrid[tanggal_lahir]</td>
                      <td>$ddatagrid[nbp]</td>
                      <td>$ddatagrid[jabatan]</td>
                      <td>$ddatagrid[fakultas]</td>
                      <td>$ddatagrid[jurusan]</td>
                       <td>
                      <div class=widget-user-image>
                        <img class=profile-user-img img-responsive img-circle src=foto_anggota/$ddatagrid[foto] alt=Message User  Image>
                      </div>    
                      </td>
                     
                      <td><a href=?unit=anggota&action=updateanggota&id=$ddatagrid[id] class='btn btn-warning'>Update</td>
                      <td><a href=?unit=anggota&action=deleteanggota&id=$ddatagrid[id] class='btn btn-danger' onClick= 'return confirm(\"Yakin akan menghapus data Anggota?\")'>Delete</td>
                      <td><a href=?unit=anggota&action=detailanggota&id=$ddatagrid[id] class='btn btn-success')'>Detail</td>
                    
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