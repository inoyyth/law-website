<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_member extends CI_Model{

    function save_register() {

        $data = array(
            'firstname_custdetail' => $this->input->post('first_name'),
            'lastname_custdetail' => $this->input->post('first_name'),
            'email_custdetail' => $this->input->post('first_name'),
            'mobile_custdetail' => $this->input->post('first_name'),
            'password_custdetail' => md5($this->input->post('first_name')),
            'sys_create_date' => date('Y-m-d H:i:s')
        );

        if ($this->db->insert('cust_detail', $data)) {
            return true;
        }
        
        return false;

    }

    function duplicate_email() {
        $where = array(
            'email_custdetail' => $this->input->post('email')
        );
        $this->db->where($where);
        $this->db->from('cust_detail');
        $count = $this->db->count_all_results();
        if ($count > 0) {
            return false;
        }
        return true;
    }

}