<?php
class auth extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
        $this->load->model('model_user');
         
        
    }

    
    function loginadmin()
    {
      
        if(isset($_SESSION['userdata']))
           {
               redirect('product');
           }
           else
           { 
             $this->load->view('admin/login');
           }
    }
    function login()
    {
        
           
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
           
                $hasil=  $this->model_operator->login($username,$password);
                if($hasil==0)
                {
                    // update last login
                  echo 0;
          
                }
                else if($hasil==1)
                {
                    echo 1;
                }
    }

    
    
    function logout()
    {
        
                
                //$this->db->query("update user set isLogin='N', gagallogin=0 where id_user='".$_SESSION['userdata']->id_user."'") ;
                $this->session->sess_destroy();
                $this->load->view('admin/login');
          
    }

    function register()
    {
       
     
            // proses login disini
            $nama   =   $this->input->post('nama');
            $password   =   $this->input->post('password');
            $username    =   $this->input->post('username');
            $datauser = array('id_admin'=>'','username'=>$username,'nama'=>$nama,'password'=>$password);
            $hasil=  $this->model_user->register($datauser); 
            //echo json_encode($hasil);
            if($hasil==0)
            {
               echo 0;
                
            }
            else{
                echo 1;
                
            } 
      
    }
   
    function lupapasswordadmin()
    {
        $id_user=$this->input->post('id_user');
        $hasil = $this->model_operator->getUser($id_user)->row();
        echo json_encode($hasil);
    }

    function resetadmin()
    {
        $i=$this->input->post('id_user');
        $p=$this->input->post('pertanyaannya');
        $j=$this->input->post('jawabannya');
        $hasil = $this->model_operator->getUserCek($i,$p,$j)->num_rows();
        echo $hasil;

    }

    function resetpassadmin()
    {
        $i=$this->input->post('id_user');
        $p=$this->input->post('passbaru');

        $this->model_operator->resetpasswordbaru($i,$p);
        echo 1;

    }


    function daftar()
    {
        $this->load->view('form_daftar');
    }

    function lupapassword()
    {
        $this->load->view('userinterface/form_lupapassword');
    }
    function lupapasswordadminview()
    {
        $this->load->view('form_adminlupapassword');
    }

}