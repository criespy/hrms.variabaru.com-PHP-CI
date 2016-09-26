<?php if(! defined('BASEPATH')) exit('No direct scipt access allowed');
class Users extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('form');
  }

  public function index($fungsi,$userid){
    $this->load->view('templates/header');
    $this->load->view('templates/menu');
    switch ($fungsi) {
      case "detail":
        $this->detail_user($userid); //belum dikasih view nih, $data juga belum diset
        $this->load->view('settings/user_detail_view');
      break;
      default:
        $data['users'] = $this->user_model->get_all_user();
        $this->load->view('settings/user_view', $data);
    }
    $this->load->view('templates/footer');
  }

  public function detail_user($userid){
    $data['users'] = $this->user_model->get_user_details($userid);
  }

}
