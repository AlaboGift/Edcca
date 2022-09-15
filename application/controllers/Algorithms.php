<?php
class Algorithms extends CI_Controller {
        public function index(){

        if(!$this->session->userdata('logged_in')){
				redirect('index.php/users/login');
			}
			
        $data['title'] = 'Algorithm'; // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/leftbar', $data);
        $this->load->view('algorithms/index', $data);
        $this->load->view('templates/footer', $data);
    }
}
?>