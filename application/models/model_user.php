<?php
class model_user extends ci_model
{
    function register($datauser)
    {
        $this->db->select('username');
        $this->db->from('admin');
        $this->db->where('username',$datauser['username']);
        $chek = $this->db->get();
        $data=$chek->row();
        if ($data)
        {
            return 1;
        }
        else
        {
            $query = "SELECT max(id_admin) as maxKode from admin";
            $check = $this->db->query($query);
            $data = $check->row();
            $id_admin = $data->maxKode;
            $noUrut = (int) substr($id_admin,3,3);
            $noUrut++;
            $char = "ADM";
            $newID = $char. sprintf("%03s",$noUrut);
            $datauser['id_admin']=$newID;
            $this->db->insert('admin',$datauser);
            return 0;
        }
    }
}
?>