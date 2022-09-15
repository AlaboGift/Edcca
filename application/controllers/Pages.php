<?php
class Pages extends CI_Controller {

    public function index(){
        if(!$this->session->userdata('logged_in')){
				redirect('index.php/users/login');
			}
        $data['title'] = 'Home'; // Capitalize the first letter
        $data['users'] = $this->db->get('users')->num_rows();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/leftbar', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer', $data);
    }
}
?>