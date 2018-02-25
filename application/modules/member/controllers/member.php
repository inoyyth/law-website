<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends MX_Controller{

    public function __construct() {
        parent::__construct();
        
        $this->load->model('main_model');
        $this->load->model('m_member');
    }
        
    function register() {
        $data['view'] = 'member/register';
        $this->load->view('template',$data);
    }

    function save_register() {
        if ($_POST) {
            if(!$this->member->duplicate_email()) {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan email sudah pernah didaftarkan!');
                redirect("register");
            }
            if ($this->m_member->save_register()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan, silahkan periksa email anda untuk melakukan aktivasi!');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("register");
        } else {
            show_404();
        }
    }

}