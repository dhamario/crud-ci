<?php

class dataCoin extends CI_Controller{
  public function index()
  {
    $data['title'] = "Tambah Data Coin";
    $data['coin'] = $this->coin_model->get_data('data_coin')->result();
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('coin/dataCoin', $data);
    $this->load->view('templates_admin/footer', $data);
  }

  public function tambahData()
  {
    $data['title'] = "Tambah Data Coin";
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('coin/tambahCoin', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambahDataAksi()
  {
    $this->_rules();

    if($this->form_validation->run() == FALSE)
    {
      $this->tambahData();
    }else{
      $nama_coin = $this->input->post('nama_coin');
      $harga_entry = $this->input->post('harga_entry');
      $harga_tp = $this->input->post('harga_tp');
      $moonbag = $this->input->post('moonbag');
      $photo = $_FILES['photo']['name'];
      if($photo = ''){
      }else{
        $config ['upload_path'] = './assets/photo';
        $config ['allowed_types'] = 'jpg|jpeg|png|tiff';
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('photo')){
          echo "Photo Gagal diupload";
        }else{
          $photo = $this->upload->data('file_name');
        }
      }

      $data = array(
        'nama_coin' => $nama_coin,
        'harga_entry' => $harga_entry,
        'harga_tp' => $harga_tp,
        'moonbag' => $moonbag,
        'photo' => $photo,
        
      );

      $this->coin_model->insert_data($data,'data_coin');
      $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Data coin berhasil ditambah</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
      redirect('coin/Dashboard');
    }
  }

  public function updateData($id)
  {
    $where = array('id_coin' => $id);
    $data['coin'] = $this->db->query("SELECT * FROM data_coin
        WHERE id_coin = '$id'")->result();
    // $data['coin'] = $this->coin_model->get_data('data_coin')->result();
    $data['title'] = "Update Data Coin";
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('coin/updateCoin', $data);
    $this->load->view('templates_admin/footer');
  }

  public function updateDataAksi()
  {
    $this->_rules();

    if($this->form_validation->run() == FALSE)
    {
      $this->updateData();
    }else{
      $id = $this->input->post('id_coin');
      $nama_coin = $this->input->post('nama_coin');
      $harga_entry = $this->input->post('harga_entry');
      $harga_tp = $this->input->post('harga_tp');
      $moonbag = $this->input->post('moonbag');
      $photo = $_FILES['photo']['name'];
      if($photo){
        $config ['upload_path'] = './assets/photo';
        $config ['allowed_types'] = 'jpg|jpeg|png|tiff';
        $this->load->library('upload',$config);
        if($this->upload->do_upload('photo')){
          $photo = $this->upload->data('file_name');
          $this->db->set('photo', $photo);
        }else{
          echo $this->upload->display_errors();
        }
      }

      $data = array(
        'nama_coin' => $nama_coin,
        'harga_entry' => $harga_entry,
        'harga_tp' => $harga_tp,
        'moonbag' => $moonbag,
      );

      $where = array(
        'id_coin' => $id
      );

      $this->coin_model->update_data('data_coin',$data,$where);
      $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Data coin berhasil diupdate</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
      redirect('coin/Dashboard');
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('nama_coin','nama coin','required');
    $this->form_validation->set_rules('harga_entry','harga entry','required');
    
    $this->form_validation->set_rules('harga_tp','harga tp','required');
    
    $this->form_validation->set_rules('moonbag','moonbag','required');
    
    // $this->form_validation->set_rules('photo','photo','required');
  }

  public function deleteData($id)
  {
    $where = array('id_coin' => $id);
    $this->coin_model->delete_data($where, 'data_coin');
     $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Data coin berhasil dihapus</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
    redirect('coin/Dashboard');
  }
}


?>