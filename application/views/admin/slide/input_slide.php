<div class="content-wrapper"  style="margin-left: 0px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Slide
        <small>Getz Seat Cover</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <?php echo form_open_multipart('product/postslide'); ?>
                                <div class="form-group">
                                    <label>Nama Slide</label>
                                    <input id="inputnamaslide" class="form-control" name="nama_slide" placeholder="Nama slide" required>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input required id="inputfoto" accept="image/x-png,image/gif,image/jpeg" type="file" class="form-control" name="berkas" placeholder="upload">
                                </div>
                                <button type="submit" id="btnsimpanslide" name="submit" class="btn btn-primary btn-sm" >Simpan</button> 
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
