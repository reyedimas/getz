<?php
class model_operator extends CI_Model{
 
    function login($username,$password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $chek = $this->db->get();
        $hasil=$chek->row();
        if($hasil)
        {
            $this->session->set_userdata('userdata',$hasil);
            return 1;
        }
        else 
        {
            return 0;
        }
    }
}