<?php if(! defined('BASEPATH')) exit('No direct scipt access allowed');
class Home extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $data = array('menu' => 1); //rencananya untuk nampilin pilihan menu
    //$this->load->model('sales_billing_model');
    //$this->DB2 = $this->load->database('acumatica', TRUE);
    $this->load->helper(array('form'));
    $this->load->library('form_validation');
  }

  public function index($selected_page){
    $data['page_title'] = 'VariaBaru ITMS Logged Area';
    if ($this->session->logged_in){
      $session_data = $this->session->userdata();
      $data['username'] = $session_data['username'];
      $this->load->view('templates/header', $data);
      $this->load->view('templates/menu');
      switch ($selected_page) {
        case 'statistic':
          $this->load->view('home_view',$data);
          break;
        case 'salesbilling':
          $this->load->view('acumatica/sales_billing_view');
          break;
        case 'user':
          $this->load->view('settings/user_view');
          break;
        default:
          $this->load->view('home_view', $data);
          break;
      }
    $this->load->view('templates/footer');
    }
  }

  public function index_old($selected_page){
    $data['page_title'] = 'VariaBaru ITMS Logged Area';
    //$data['selected_page'] = '0';
    //echo $selected_page;
    if ($this->session->logged_in){
      $session_data = $this->session->userdata();
      $data['username'] = $session_data['username'];
      $this->load->view('templates/header', $data);
      $this->load->view('menu_view');
      switch ($selected_page) {
        case 'statistic':
          $this->load->view('home_view', $data);
          break;
        case 'salesbilling':
          $this->load->view('acumatica/sales_billing_view');
          break;
        default:
          $this->load->view('home_view', $data);
          break;
      }
      //pengen bikin if untuk pilihan menu, if 1 ke statistik, if 2 ke acumatica, dst
      $this->load->view('templates/footer');

    }
    else{
      $this->session->unset_userdata('logged_in');
      redirect('login', 'refresh');
    }
  }

  /*public function logout(){
    $this->session->unset_userdata('logged_in');
    redirect('login', 'refresh');
  }*/

  public function menu_display($menu){
    //$this->load->view('home_view');
    //$this->load->view('panel_menu_view');
    if ($menu == '1'){
      $this->load->view('acumatica_request_view');
    }
  }
}
