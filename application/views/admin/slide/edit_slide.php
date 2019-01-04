<div class="content-wrapper"  style="margin-left: 0px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Slide
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
                            <?php echo form_open_multipart('product/editslide'); ?>
                            <input type="hidden" name="id" value="<?php echo $record->id_slide?>">
                                <div class="form-group">
                                    <label>Nama Slide</label>
                                    <input id="inputnamaslide" class="form-control" name="nama_slide" placeholder="Nama Slide" value="<?php echo $record->nama_slide?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input id="inputfoto" accept="image/x-png,image/gif,image/jpeg" type="file" class="form-control" name="berkas" placeholder="upload">
                                </div>
                                <button type="submit" id="btnsimpanslide" name="submit" class="btn btn-primary btn-sm" >Update</button> | 
                                <?php echo anchor('barang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
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