<div class="content-wrapper"  style="margin-left: 0px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Product
        <small>Getz Seat Cover</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <?php echo form_open_multipart('product/edit'); ?>
                            <input type="hidden" name="id" value="<?php echo $record->id_product?>">
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input id="inputnamabarang" class="form-control" name="nama_produk" placeholder="Nama barang" value="<?php echo $record->nama_product?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input id="inputfoto" accept="image/x-png,image/gif,image/jpeg" type="file" class="form-control" name="berkas" placeholder="upload">
                                </div>                                
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input required type="text" id="deskripsi" class="form-control" name="deskripsi" placeholder="deskripsi" value="<?php echo $record->deskripsi?>" >
                                </div>
                                <button type="submit" id="btnsimpanbarang" name="submit" class="btn btn-primary btn-sm" >Update</button> 
                                <?php echo anchor('product','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
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
  <script>

</script>