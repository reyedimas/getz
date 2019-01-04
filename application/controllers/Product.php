<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('model_barang');

	}

	function index()
    {    
          
            $data['record']     =    $this->model_barang->tampil_data();
            $this->template->load('templateadmin','admin/view_product',$data);
            

    }

    function viewslide()
    {    
          
            $data['record']     =    $this->model_barang->tampil_data_slide();
            $this->template->load('templateadmin','admin/slide/view_slide',$data);
            

    }

    function previewImage()
    {
        $id=$this->input->post('id');
        $image= $this->model_barang->tampilkan_image_detail($id)->result();
        echo json_encode($image);
    }


	public function userindex()
	{
        if(ceksession())
        {
        $this->template->load('template1','user/view_product');
        }
	}

	function post()
{
        if(isset($_POST['submit'])){
            // proses barang
            $id = $this->model_barang->post();
            $this->aksi_upload();
            redirect('product');
            
        }
        else{
           
     
            //$this->load->view('barang/form_input',$data);
            $this->template->load('templateadmin','admin/input_product');
        }
        
    }

    function postslide()
{
        if(isset($_POST['submit'])){
            // proses barang
            $id = $this->model_barang->postslide();
            $this->aksi_upload();
            redirect('product/viewslide');
        }
        else{
            $this->template->load('templateadmin','admin/slide/input_slide');
        }
        
    }

    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_barang->deleteimg($id);
        $this->model_barang->delete($id);
        redirect('product');
        
    }

    function deleteslide()
    {
        $id=  $this->uri->segment(3);
        $this->model_barang->deleteimgslide($id);
        $this->model_barang->deleteslide($id);
        redirect('product/viewslide');
        
    }

    function edit()
    { 
       if(isset($_POST['submit'])){
            // proses barang
            $id         =   $this->input->post('id');
            $nama       =   $this->input->post('nama_produk');
            $deskripsi      =   $this->input->post('deskripsi');
            $foto       =   'GSC'.get_current_date().$_FILES['berkas']['name'];
            if ($_FILES['berkas']['name'][0]!="")
            {
                $this->model_barang->deleteimg($id);
                $data       = array('nama_product'=>$nama,
                'deskripsi'=>$deskripsi,
                'foto'=>$foto);
                $this->aksi_upload();

            }
            else
            {
                $data       = array('nama_product'=>$nama,
                'deskripsi'=>$deskripsi);
            }
    
            $this->model_barang->edit($data,$id);
            redirect('product');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']     =  $this->model_barang->tampil_data_by_id($id);
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('templateadmin','admin/edit_product',$data);
        }
        
    }

    function editslide()
    { 
       if(isset($_POST['submit'])){
            // proses barang
            $id         =   $this->input->post('id');
            $nama       =   $this->input->post('nama_slide');
            $foto       =   'GSC'.get_current_date().$_FILES['berkas']['name'];
            if ($_FILES['berkas']['name'][0]!="")
            {
                $this->model_barang->deleteimg($id);
                $data       = array('nama_slide'=>$nama,
                'foto'=>$foto);
                $this->aksi_upload();

            }
            else
            {
                $data       = array('nama_slide'=>$nama);
            }
    
            $this->model_barang->edit($data,$id);
            redirect('slide');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']     =  $this->model_barang->tampil_data_by_id_slide($id);
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('templateadmin','admin/slide/edit_slide',$data);
        }
        
    }

    public function aksi_upload(){
        $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = '*';
                $config['file_name'] = 'GSC'.get_current_date().$_FILES['berkas']['name'];
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('berkas'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                }

                

        }
		
        
    

}
