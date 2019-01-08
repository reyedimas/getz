<?php
class model_barang extends ci_model{
    
    function tampil_data()
    {
        $query= "SELECT*FROM product";
        return $this->db->query($query);
    }

    function tampil_data_slide()
    {
        $query= "SELECT*FROM slide";
        return $this->db->query($query);
    }

    function tampil_data_by_id($id)
    {
        $query= "SELECT * FROM product where id_product='".$id."'";
        return $this->db->query($query)->row();
    }

    function tampil_data_by_id_slide($id)
    {
        $query= "SELECT * FROM slide where id_slide='".$id."'";
        return $this->db->query($query)->row();
    }
    
    function post()
    {
        $query = "SELECT max(id_product) as maxKode from product";
        $check = $this->db->query($query);
        $data = $check->row();
		$id_product = $data->maxKode;
		$noUrut = (int) substr($id_product,3,3);
		$noUrut++;
		$char = "GSC";
        $newID = $char. sprintf("%03s",$noUrut);
        
        $id_product = $newID;
        $nama       =   $this->input->post('nama_produk');
        $deskripsi      =   $this->input->post('deskripsi');
        $foto =  $this->input->post('berkas');
        $data       = array('nama_product'=>$nama,
                            'deskripsi'=>$deskripsi,
                            'id_product'=> $id_product,
                            'foto'=>'GSC'.get_current_date().$_FILES['berkas']['name']);
        $this->db->insert('product',$data);
        return $id_product;
    }

    function postslide()
    {
        $query = "SELECT max(id_slide) as maxKode from slide";
        $check = $this->db->query($query);
        $data = $check->row();
		$id_slide = $data->maxKode;
		$noUrut = (int) substr($id_slide,3,3);
		$noUrut++;
		$char = "SLD";
        $newID = $char. sprintf("%03s",$noUrut);
        
        $id_slide = $newID;
        $nama       =   $this->input->post('nama_slide');
        $foto =  $this->input->post('berkas');
        $data       = array('nama_slide'=>$nama,
                            'id_slide'=> $id_slide,
                            'foto'=>'GSC'.get_current_date().$_FILES['berkas']['name']);
        $this->db->insert('slide',$data);
        return $id_slide;
    }

    function inserttabelproduct($id,$nama)
    {
        $query = "SELECT max(id_image) as maxKode from imageproduct";
        $check = $this->db->query($query);
        $data = $check->row();
		$id_image = $data->maxKode;
		$noUrut = (int) substr($id_image,3,3);
		$noUrut++;
		$char = "IMG";
        $newID = $char. sprintf("%03s",$noUrut);
        $data       = array('id_image'=>$newID,
                            'id_barang'=>$id,
                            'name'=> $nama);
        $this->db->insert('imageproduct',$data);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_product',$id);
        $this->db->update('product',$data);
    }
    
    function delete($id)
    {   
        $query= "SELECT*FROM product where id_product='".$id."'";
        $data=$this->db->query($query)->row();
        $this->db->where('id_product',$id);
        $this->db->delete('product');
    }

    function deleteimg($id)
    {
        $detail= "SELECT*FROM product where id_product='".$id."'";
        $img=$this->db->query($detail)->result();
        foreach($img as $r)
        {
            unlink('assets/img/'.$r->foto);
        }
    }

    function deleteslide($id)
    {   
        $query= "SELECT*FROM slide where id_slide='".$id."'";
        $data=$this->db->query($query)->row();
        $this->db->where('id_slide',$id);
        $this->db->delete('slide');
    }

    function deleteimgslide($id)
    {
        $detail= "SELECT*FROM slide where id_slide='".$id."'";
        $img=$this->db->query($detail)->result();
        foreach($img as $r)
        {
            unlink('assets/img/'.$r->foto);
        }
    }
}