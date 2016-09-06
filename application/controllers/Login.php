<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('Login_model', '', TRUE);
    $this->load->helper(array('form','url'));
    $this->load->library('form_validation');
  }

  function index(){
    if($this->session->userdata('logged_in') == TRUE){
      redirect('home');
    }
    else{
      $data['page_title'] = 'VariaBaru ITMS Login';
      $this->load->view('templates/header', $data);
      $this->load->view('login_view');
      $this->load->view('templates/footer');
    }
  }

  function verifikasi_login(){
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run() == TRUE){
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      if($this->Login_model->cek_user($username, $password) == TRUE){
        $data = array('username' => $username, 'logged_in' => TRUE);
        $this->session->set_userdata($data);
        redirect('home/statistic');
      }
      else {
        $this->session->set_flashdata('message', 'Username atau password salah!');
        redirect('login');
      }
    }
    else{
      $this->load->view('login_view');
    }
  }

  function logout(){
    $this->session->sess_destroy();
    redirect('login', 'refresh');
  }
}
