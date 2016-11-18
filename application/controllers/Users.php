<?php if(! defined('BASEPATH')) exit('No direct scipt access allowed');
class Users extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('form');
  }

  public function index($fungsi,$userid){
    if ($this->session->logged_in){
      $session_data = $this->session->userdata();
      $data['username'] = $session_data['username'];

      $data['user_status'] = $this->user_model->get_user_status($data);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/menu');
      switch ($fungsi) {
        case "detail":
          $this->detail_user($userid);
        break;
        case "create":
          $this->tambah_user();
        break;
        default:
          $data['users'] = $this->user_model->get_all_user();
          $this->load->view('settings/user_view', $data);
      }
    }
    $this->load->view('templates/footer');
  }

  public function detail_user($userid){
    $data['detailuser'] = $this->user_model->get_user_details($userid);
    $this->load->view('settings/user_detail_view', $data);
  }

  public function tambah_user(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('firstname', 'First Name', 'required');
    $this->form_validation->set_rules('lastname', 'Last Name', 'required');
    $this->form_validation->set_rules('email', 'e-mail', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('password2', 'Ulang Password', 'required');
    if ($this->form_validation->run() === FALSE){
      //$this->session->set_flashdata('message','Cek kembali data yang diinput');
      $this->load->view('settings/user_create_view');
    }
    else{
      $this->user_model->create_user();
      //header('Location: http://'.base_url().'index.php/users/view/all');
      //$this->index('view','all');
    }


  }

}
