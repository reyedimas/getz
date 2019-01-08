<section class="content-header">
      <h1>
        Data Produk
        <small>Getz Seat Cover</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th style="text-align:center">Nama Produk</th>
                    <th style="text-align:center">Foto</th>
                    <th style="text-align:center">Deskripsi</th>
                    <th style="text-align:center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = $this->uri->segment('3');
                    foreach ($record->result() as $r) { ?>
                        <tr class="gradeU">
                            <td style="width: 250px;"><?php echo $r->nama_product ?></td>
                            <td style="width: 200px;"><img style="width: 100%;" src="<?php echo base_url('assets/img/').$r->foto?>"></td>
                            <td style="text-align:center"><?php echo $r->deskripsi ?></td>
                            <td style="width: 250px;" align="center">
                                <?php echo anchor('product/edit/'.$r->id_product,'Edit','class="btn btn-primary"'); ?> 
                                <?php echo anchor('product/delete/'.$r->id_product,'Delete','class="btn btn-danger"'); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
    <div class="modal modal-primary fade" id="modal-primary">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Preview Image</h4>
              </div>
              <div class="modal-body">
              <div id="bodyimage" class="row">
                    
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-right" data-dismiss="modal">Close</button>
          
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

  <script>
    function previewimage(id)
{
	$.ajax({
			url  :"<?php echo base_url('product/previewImage');?>",
			type : 'POST',
			data : {
				id : id
			},
			success : function(data)
			{
        console.log(data);
				var img= $.parseJSON(data);
				$('#bodyimage').empty();
				for (var i=0; i<img.length ; i++)
				{
					$("#bodyimage").append(
					"<div class='col-sm-6' align='center' style='margin-bottom:10px;'>"+
						"<img src='<?php echo base_url().'assets/img_product/'?>"+img[i]['name']+"' alt='Nature' style='width:200px; height:300px; display:flex;' onclick='myFunction(this);'>"+
					"</div>"
					);
				}

			}
		});

}
  </script>