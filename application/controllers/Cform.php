<?php
class Cform extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Mform');
        $this->load->database();
    }

    public function index(){
        $this->load->view('validasi/index');
    }

    public function admin(){
        $this->load->view('validasi/admin');
    }

    public function user(){
        $this->load->view('validasi/user');
    }

    public function ubah(){
        $this->load->view('validasi/edit');
    }

    public function tambah(){
        $this->load->view('validasi/tambah');
    }
    
    public function logout(){
        $this->session->unset_userdata(array('username' => ''));
        redirect('Cform/index');
    }

    public function action(){
        if(isset($_POST['submit'])){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            if ($berhasil=$this->Mform->login($username, $password) == true) {
                $userdata = $this->Mform->getUserData();   

                $session = array(
                    'username' => $this->input->post('username'), 
                );

                $this->session->set_userdata($session);

                if ($userdata->level == 1) {
                    redirect('Cform/admin');
                } else {
                    redirect('Cform/user');
                }
            } else {
                echo "Username atau password salah";
            }
        }elseif(isset($_POST['daftar'])){
            $this->load->view('validasi/daftar');
        }else{
            $this->load->view('index');
        }
    }

    public function create(){         
        $this->load->helper('form');         
        $this->load->library('form_validation');                    
        $this->form_validation->set_rules('nama', 'nama', 'required');         
        $this->form_validation->set_rules('sekolah', 'sekolah', 'required');
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required');
        $this->form_validation->set_rules('agama', 'agama', 'required');
        $this->form_validation->set_rules('no', 'no', 'required');
        
        if ($this->form_validation->run() === FALSE){             
            $this->load->view('templates/header', $data);             
            $this->load->view('Cform/create');             
            $this->load->view('templates/footer');           
        }else{             
            $this->Mform->add();             
            $this->load->view('templates/header', $data);             
            $this->load->view('validasi/admin');             
            $this->load->view('templates/footer');   
            //
            +redirect('Cform/admin');               
        }           
    }
    
    public function addnew(){         
        $this->load->helper('form');         
        $this->load->library('form_validation');                  
        $this->form_validation->set_rules('username', 'username', 'required');         
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');

        if ($this->form_validation->run() === FALSE){             
            $this->load->view('templates/header', $data);             
            $this->load->view('Cform/addnew');             
            $this->load->view('templates/footer');           
        }else{             
            $this->Mform->add_();             
            $this->load->view('templates/header', $data);             
            $this->load->view('validasi/index');             
            $this->load->view('templates/footer');   
            //
            +redirect('Cform/index');               
        }           
    }

    public function aded(){
        $data['Cform'] = $this->Mform->add();                   
        $this->load->view('templates/header', $data);         
        $this->load->view('Cform/create', $data);         
        $this->load->view('templates/footer'); 
    }

    public function edit($id){         
        $id = $this->uri->segment(3);                  
        
        if (empty($id)){             
            show_404();         
        }                  
        
        $this->load->helper('form');
        $this->load->library('form_validation');                                  
        $data['item'] = $this->Mform->get_by_id($id);
        $this->form_validation->set_rules('nama', 'nama');         
        $this->form_validation->set_rules('sekolah', 'sekolah');
        $this->form_validation->set_rules('jurusan', 'jurusan');
        $this->form_validation->set_rules('agama', 'agama');
        $this->form_validation->set_rules('no', 'no');       
        
        if ($this->form_validation->run() === FALSE){             
            $this->load->view('templates/header', $data);             
            $this->load->view('validasi/edit', $data);     
            $this->load->view('templates/footer');
        }else{             
            $this->Mform->set($id);        
            //$this->load->view('news/success');             
            redirect('Cform/admin');       
        }     
    }
    
    
    public function view($slug = NULL){ 
        $query = $this->db->query('SELECT * FROM mahasiswa');
        $this->load->view('validasi/view',['query'=>$query]);
    }
    
    public function viewu($slug = NULL){ 
        $queryu = $this->db->query('SELECT * FROM mahasiswa');
        $this->load->view('validasi/user',['query'=>$queryu]);
    }


    public function delete(){         
        $id = $this->uri->segment(3);                  
        
        if (empty($id)){        
            show_404();
        }                          
        
        $item = $this->Mform->get_by_id($id);                  
        $this->Mform->delete_($id);                 
        
        redirect('Cform/view');             
    } 

}