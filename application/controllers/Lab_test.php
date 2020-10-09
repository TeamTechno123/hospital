<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Lab_test extends CI_Controller{
    public function __construct(){
      parent::__construct();
      date_default_timezone_set('Asia/Kolkata');
    }

   public function index(){    
    $this->load->view('Lab_test/lab_header');
    $this->load->view('Lab_test/index');
    $this->load->view('Lab_test/lab_footer');
  }
}
?>
