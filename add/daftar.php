<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
             <div class="box-header">
              <h3 class="box-title">Daftar Kegiatan</h3>
              <div class="input-data"><a class="button" href="?unit=giat&action=input">Input Data </a></div>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No </th>
                  <th>judul</th>
                  <th>Isi</th>
                  <th>Tanggal</th>
                  <th>Tampilkan</th>
                  <th>Foto</th>                 
                  <th colspan="2" align="center" ">Action</th>
                </tr>
                </thead>
               <?php
                  $no=1;
                  $qdatagrid = "select * from kegiatan";
                  $rdatagrid = mysqli_query($mysqli,$qdatagrid);
                  while($ddatagrid = mysqli_fetch_assoc($rdatagrid)){
                    echo "
                    <tr>
                      <td>$no</td>
                      <td>$ddatagrid[judul]</td>
                      <td>$ddatagrid[isi]</td>
                      <td>$ddatagrid[tanggal]</td>
                      <td>$ddatagrid[tampil]</td>
                       <td>
                      <div class=widget-user-image>
                        <img class=profile-user-img img-responsive img-circle src=foto/$ddatagrid[gambar] alt=Message User  Image>
                      </div>    
                      </td>
                     
                      <td><a href=?unit=giat&action=update&id=$ddatagrid[id] class='btn btn-warning' >Update</td>
                      <td><a href=?unit=giat&action=delete&id=$ddatagrid[id] class='btn btn-danger' onClick= 'return confirm(\"Yakin akan menghapus data?\")' >Delete</td>
                    
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
