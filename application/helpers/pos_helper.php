<?php


function get_current_date()
{
    $CI= & get_instance();
    $date= $CI->db->query('Select NOW() as date')->row();
    return date('Ymd_His', strtotime($date->date));
}

?>
