<?php if(! defined('BASEPATH')) exit('No direct scipt access allowed');
class Barcode extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->library(array('fpdf/fpdf','pagination'));
    $this->load->helper('form');
    $this->load->model(array('barcode_model','user_model'));
    $this->DB1 = $this->load->database('default', TRUE);
  }

  public function index($page = NULL){
    $data['page_title'] = 'VariaBaru ITMS Logged Area';
    if ($this->session->logged_in){
      $session_data = $this->session->userdata();
      $data['username'] = $session_data['username'];

      $data['user_status'] = $this->user_model->get_user_status($data);

      $this->load->view('templates/header', $data);
      $this->load->view('templates/menu');

      $jml_barcode = $this->DB1->get('barcode');

      $config['base_url'] = base_url().'index.php/barcode/index/';
      $config['per_page'] = '5';
      $config['total_rows'] = $jml_barcode->num_rows();//count($data['barcode']);
      $config['query_string_segment'] = 'start';
      //override tampilan pagination
      $config['full_tag_open'] = '<nav><ul class="pagination" style="margin-top:0px">';
      $config['full_tag_close'] = '</ul></nav>';

      $config['first_link'] = 'First';
      $config['first_tag_open'] = '<li>';
      $config['first_tag_close'] = '</li>';

      $config['last_link'] = 'Last';
      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';

      $config['next_link'] = 'Next';
      $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';

      $config['prev_link'] = 'Prev';
      $config['prev_tag_open'] = '<li>';
      $config['prev_tag_close'] = '</li>';

      $config['cur_tag_open'] = '<li class="active"><a>';
      $config['cur_tag_close'] = '</a></li>';

      $config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';
      //override end

      $data['barcode'] = $this->barcode_model->get_all_barcode($config['per_page'], $page);


      $this->pagination->initialize($config);
      $data['page'] = $this->pagination->create_links();

      $this->load->view('barcode/barcode_view', $data);

      $this->load->view('templates/footer');
    }
    else {
      $this->session->unset_userdata('logged_in');
      redirect('login', 'refresh');
    }
  }

  public function create_pdf($name, $path){
    $path = base_url().'images/barcode/'.$path;
    $deskripsi = str_replace('%20',' ',$name);
    $this->fpdf->AddPage('P','A4');
    $this->fpdf->SetFont('Arial','',10);          //Rumus :
    $this->fpdf->Image($path,19,6,50,'PNG');      //lokasi,posisi x->19, posisi y->6, width->50, type
    $this->fpdf->Cell(68,45,$deskripsi,0,0,'C');  //panjang,tinggi,isi,border,break_line,align
    $this->fpdf->Image($path,98,6,50,'PNG');
    $this->fpdf->Cell(92,45,$deskripsi,0,1,'C');
    $this->fpdf->Image($path,19,49,50,'PNG');
    $this->fpdf->Cell(68,42,$deskripsi,0,0,'C');
    $this->fpdf->Image($path,98,49,50,'PNG');
    $this->fpdf->Cell(92,42,$deskripsi,0,1,'C');
    $this->fpdf->Image($path,19,91,50,'PNG');
    $this->fpdf->Cell(68,41,$deskripsi,0,0,'C');
    $this->fpdf->Image($path,98,91,50,'PNG');
    $this->fpdf->Cell(92,41,$deskripsi,0,1,'C');
    $this->fpdf->Image($path,19,132,50,'PNG');
    $this->fpdf->Cell(68,41,$deskripsi,0,0,'C');
    $this->fpdf->Image($path,98,132,50,'PNG');
    $this->fpdf->Cell(92,41,$deskripsi,0,1,'C');
    $this->fpdf->Image($path,19,175,50,'PNG');
    $this->fpdf->Cell(68,45,$deskripsi,0,0,'C');
    $this->fpdf->Image($path,98,175,50,'PNG');
    $this->fpdf->Cell(92,45,$deskripsi,0,1,'C');
    $this->fpdf->Output('','printout.pdf');

    //$this->load->view('barcode/output');
  }

  public function update_barcode($id){
    if ($this->session->logged_in){
      $session_data = $this->session->userdata();
      $data['username'] = $session_data['username'];

      $data['user_status'] = $this->user_model->get_user_status($data);

      $this->load->view('templates/header', $data);
      $this->load->view('templates/menu');

      $data['barcode'] = $this->barcode_model->get_barcode($id);

      $this->load->view('barcode/barcode_detail_view', $data);

      $this->load->view('templates/footer');
    }
    else {
      $this->session->unset_userdata('logged_in');
      redirect('login', 'refresh');
    }
  }

  public function cari_barcode($keyword){

  }
}
