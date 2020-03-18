<?php
class Mform extends CI_Model{
    public function __construct(){
        
        $this->load->database();
		
    }

    public function get_session_by_id($id){
        // $this->db->select('password');
        $query =$this->db->get_where('akun', array('username' => $id));
        return $query->result();
    }

    public function login($username, $password){
        $cek = $this->db->get_where('akun', array('username' => $username, 'password' => $password));
        if ($cek->num_rows() == 1){
            return true;
        }
        else {
            return false;
        }
    }

    public function getUserData()
    {
        return $this->db->query($this->db->last_query())->row();
    }
	
	public function get($slug = FALSE){
		if ($slug === FALSE){
			$query = $this->db->get('mahasiswa');
			
			return $query->result_array();
		}
		
		$query = $this->db->get_where('mahasiswa', array('slug' => $slug));
	
		return $query->row_array();
	}
	
	public function get_by_id($id = 0){
		if ($id === 0){
			$query = $this->db->get('mahasiswa');
			
			return $query->result_array();
		}
		
		$query = $this->db->get_where('mahasiswa', array('id' => $id));
		
		return $query->row_array();	
	}
	
	public function add($id = 0){
		$this->load->helper('url');
		$slug = url_title($this->input->post('id'), 'dash', TRUE);
		$data = array('id' => $this->input->post('id'), 'nama' => $this->input->post('nama'), 'sekolah' => $this->input->post('sekolah'), 'jurusan' => $this->input->post('jurusan'), 'agama' => $this->input->post('agama'),  'no' => $this->input->post('no'));
		
		if ($id == 0){
			return $this->db->insert('mahasiswa', $data);
		} else {
			$this->db->where('id', $kode);
		
			return $this->db->update('mahasiswa', $data);
		}
	}
	
	public function add_($id = 0){
		$this->load->helper('url');
		$slug = url_title($this->input->post('id'), 'dash', TRUE);
		$data = array('id' => $this->input->post('id'), 'username' => $this->input->post('username'), 'password' => $this->input->post('password'), 'level' => $this->input->post('level'));
		
		if ($id == 0){
			return $this->db->insert('akun', $data);
		} else {
			$this->db->where('id', $kode);
		
			return $this->db->update('akun', $data);
		}
	}
		
	public function delete_($id){
		$this->db->where('id', $id);
		
		return $this->db->delete('mahasiswa');
		}
}