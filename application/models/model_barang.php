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

    function tampil_data_bestseller()
    {
        $query= "SELECT*FROM Barang where status='bestseller'";
        return $this->db->query($query);
    }
    function tampil_data_new()
    {
        $query= "SELECT*FROM Barang where status='new'";
        return $this->db->query($query);
    }
    function tampil_data_sale()
    {
        $query= "SELECT*FROM Barang where status='sale'";
        return $this->db->query($query);
    }
   

    function tampil_data_by_stok()
    {
        $query= "SELECT*FROM Barang where stok<=10";
        return $this->db->query($query);
    }

    function tampilkan_data_detail($id)
    {
        $query= "SELECT a.*, b.jenis_barang , c.name FROM Barang as a inner join kategori as b on b.id_kategori = a.id_kategori  inner join imageproduct as c on a.id_barang = c.id_barang where a.id_barang='".$id."' ";
        return $this->db->query($query);
    }

    function tampilkan_image_detail($id)
    {
        $query= "SELECT * FROM imageproduct where id_barang='".$id."' ";
        return $this->db->query($query);
    }

    function tampilkan_data_paging($config, $halaman)
    {
        $query= "SELECT distinct(a.id_barang)as id, a.*, b.jenis_barang FROM Barang as a inner join kategori as b on b.id_kategori = a.id_kategori limit ".($halaman * $config['per_page']).", ".$config['per_page']." ";
        return $this->db->query($query);
    }

    function tampilkan_data_paging_home($config, $halaman)
    {
        $query= "SELECT distinct(a.id_barang)as id, a.*, b.jenis_barang  FROM Barang as a inner join kategori as b on b.id_kategori = a.id_kategori  limit ".($halaman * $config['per_page']).", ".$config['per_page']." ";
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
    function tampil_data_by_name()
    {
        $nama =$this->input->post('nama');
        $query= "SELECT*FROM Barang where nama_barang like '%".$nama."%'";
        return $this->db->query($query);
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
		$noUrut = (int) substr($id_product,3,3);
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
    
    function post_stok()
    {
        
            $query = "SELECT max(id_detail_pembelian) as maxKode from detail_pembelian";
            $check = $this->db->query($query);
            $data = $check->row();
            $id_detail_pembelian = $data->maxKode;
            $noUrut = (int) substr($id_detail_pembelian,3,3);
            $noUrut++;
            $char = "dtlpemb";
            $newID = $char. sprintf("%03s",$noUrut);
            
            $id_order = $newID;
            $id_barang       =   $this->input->post('id_barang');
            $jumlah   =   $this->input->post('jumlah');
            $harga   =   $this->input->post('harga');
            $total = $jumlah*$harga;
            $data       = array('id_order'=>$id_order,
                                'jumlah'=>$jumlah,
                                'harga'=> $harga,
                                'total_bayar'=>$total,
                                'id_barang'=>$id_barang);
            $this->db->insert('orderbarang',$data);
           redirect("pembelian");
    }
    
    function get_one($id)
    {
        $param  =   array('barang_id'=>$id);
        return $this->db->get_where('barang',$param);
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

    function tambah_stok($id,$jml)
    {
        $this->db->where('id_barang',$id);
        $this->db->update('barang','stok');
    }

    function kurang_stok_cartpending($id)
    {
        $query= "UPDATE Barang set stok=stok-1 where id_barang='".$id."'";
        $this->db->query($query);
    }

    function tampil_data_stok_byId($id)
    {
        $query= "SELECT stok FROM Barang where id_barang='".$id."'";
        return $this->db->query($query)->row();
    }
    
}