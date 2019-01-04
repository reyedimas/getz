<div class="content-wrapper"  style="margin-left: 0px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Product
        <small>Getz Seat Cover</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <?php echo form_open_multipart('product/post'); ?>
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input id="inputnamaproduk" class="form-control" name="nama_produk" placeholder="Nama produk" required>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input required id="inputfoto" accept="image/x-png,image/gif,image/jpeg" type="file" class="form-control" name="berkas" placeholder="upload">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control"name="deskripsi" placeholder="deskripsi" required>
                                </div>
                                <button type="submit" id="btnsimpanproduk" name="submit" class="btn btn-primary btn-sm" >Simpan</button> | 
                                <?php echo anchor('produk','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                           </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
