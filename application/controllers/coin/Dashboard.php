<?php

class Dashboard extends CI_Controller{
  public function index(){
    $data['title'] = "Dashboard";
    $coin = $this->db->query("SELECT * FROM data_coin");
    $data['jcoin'] = $coin->num_rows();
    $data['coin'] = $this->coin_model->get_data('data_coin')->result();
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('coin/dashboard', $data);
    $this->load->view('templates_admin/footer', $data);
  }

}

?>