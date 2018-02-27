<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logo extends MX_Controller{
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('logged_in')==false){
            redirect('login');    
       }
        $this->load->model('m_logo');
    }
        
    function index(){
        $this->session->unset_userdata('page_sr');
        $this->session->unset_userdata('id_sr');
        $this->session->unset_userdata('name_sr');
        $this->session->unset_userdata('status_sr');
        $config['base_url'] = base_url().'logo/index/';
        $config['total_rows'] = $this->db->query("select * from t_logo")->num_rows();
        $config['per_page'] = 10;
        $config['num_links'] = 2;
        $config['uri_segment'] = 3;
        $config['first_page'] = 'Awal';
        $config['last_page'] = 'Akhir';
        $config['next_page'] = '&laquo;';
        $config['prev_page'] = '&raquo;';
        $pg = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0 ;
        //inisialisasi config
        $this->pagination->initialize($config);
        //buat pagination
        $data['halaman'] = $this->pagination->create_links();
        //tamplikan data
        $data['total_data']=$this->db->query("select * from t_logo")->num_rows();
        $data['data'] = $this->db->query("select * from t_logo order by id desc limit ".$pg.",".$config['per_page']."")->result();
        $data['view']='main';
        $this->load->view('template',$data);
    }
    
    public function search()
	{
            $page_sr = $this->m_logo->handler0($this->input->get_post('page_sr', TRUE));
            $id_sr = $this->m_logo->handler1($this->input->get_post('id_sr', TRUE));
            $name_sr = $this->m_logo->handler2($this->input->get_post('name_sr', TRUE));
            $status_sr = $this->m_logo->handler3($this->input->get_post('status_sr', TRUE));
            //echo $id_sr,$name_sr,$status_sr;
            $limit = ($this->uri->segment(3) > 0)?$this->uri->segment(3):0;

            $config['base_url'] = base_url() .'logo/search';
            $config['total_rows'] = $this->db->query("select * from  t_logo where id LIKE '%$id_sr%' and logo_title LIKE '%$name_sr%' and status LIKE '%$status_sr%'")->num_rows();
            $config['per_page'] = ($page_sr > 0)?$page_sr:10;
            $config['uri_segment'] = 3;
            $choice = $config['total_rows']/$config['per_page'];
            $config['num_links'] = 2;		
            $this->pagination->initialize($config);

            $data['data'] = $this->db->query("select * from  t_logo where id LIKE '%$id_sr%' and logo_title LIKE '%$name_sr%' and status LIKE '%$status_sr%' order by id desc limit ".$limit.",".$config['per_page']."")->result();
            $data['halaman'] = $this->pagination->create_links();
            $data['total_data']= $this->db->query("select * from  t_logo where id LIKE '%$id_sr%' and logo_title LIKE '%$name_sr%' and status LIKE '%$status_sr%'")->num_rows();
            $data['page_sr'] = $page_sr;
            $data['id_sr'] = $id_sr;
            $data['name_sr'] = $name_sr;
            $data['status_sr'] = $status_sr;
            $data['view']='search';
            $this->load->view('template',$data);
	}
    
    function add(){
        $data['list_attributes'] = $this->db->query("select * from attributes where status='Y'")->result();
        $data['view']='add';
        $this->load->view('template',$data);
    }
    function add_proses(){
        $session_data = $this->session->userdata('logged_in');
        $datetime=date("Y-m-d h:i:s");
        $title=$this->input->post('title');
        $image=$this->input->post('image');
        $media_description=$this->input->post('description');
        $status=$this->input->post('status');
        
         //upload File
        $config['upload_path']	= "../userfiles/Image/logo/";
        $config['upload_url']	= "../userfiles/Image/logo/";
        $config['allowed_types']= '*';
        $config['max_size']     = '2000';
        $config['max_width']  	= '2000';
        $config['max_height']  	= '2000';
        $this->load->library('upload');
        $this->upload->initialize($config);

        if($this->upload->do_upload('image'))
         {
        $image_data1 = $this->upload->data();    
         }
        
        $data=array("logo_title"=>$title,
                    "logo_description"=>$media_description,
                    "status"=>$status,
                    "sys_create_date"=>  date("Y-m-d"),
                    "logo_image"=>$image_data1['file_name'],
                    "sys_create_user"=>$session_data['user_id'],
                    "sys_create_date"=>$datetime);
        
        $this->db->insert("t_logo",$data);
        
        redirect("logo/search");
    }
    
    function update($id,$page){
        $data['list_detail']=$this->m_logo->select_where("t_logo","id",$id)->row();
         $data['posisi']=$page;
        $data['view']='edit';
        $this->load->view('template',$data);
    }
    
    function update_proses(){
        $session_data = $this->session->userdata('logged_in');
        $datetime=date("Y-m-d h:i:s");
        $posisi=$this->input->post("posisi");
        $id=$this->input->post("id");
        $title=$this->input->post('title');
        $image=$this->input->post('image');
        $media_description=$this->input->post('description');
        $status=$this->input->post('status');
        $image_hidden=$this->input->post('image_hidden');
        
        //upload File
        $config['upload_path']	= "../userfiles/Image/logo/";
        $config['upload_url']	= "../userfiles/Image/logo/";
        $config['allowed_types']= '*';
        $config['max_size']     = '2000';
        $config['max_width']  	= '2000';
        $config['max_height']  	= '2000';
        $this->load->library('upload');
        $this->upload->initialize($config);

        if($this->upload->do_upload('image'))
         {
            $image_data1 = $this->upload->data();  
            $img1=$image_data1['file_name'];
         }else{
            $img1=$image_hidden;
         }
        
        $data=array("logo_title"=>$title,
                    "logo_description"=>$media_description,
                    "status"=>$status,
                    "logo_image"=>$img1,
                    "sys_update_user"=>$session_data['user_id'],
                    "sys_update_date"=>$datetime);
        
        $this->m_logo->update("t_logo","id",$id,$data);
        
        redirect("logo/search/".$posisi);
    }
    
    function delete($id,$page){
        $this->m_logo->delete("t_logo","id",$id);
        redirect("logo/search/".$page);
    }
}