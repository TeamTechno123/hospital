<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Master extends CI_Controller{
    public function __construct(){
      parent::__construct();
      date_default_timezone_set('Asia/Kolkata');
    }

   /********************************* Purpose  Information ***********************************/

  // Add Purpose ...
  public function purpose(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('purpose_name', 'purpose Name', 'trim|required');
    
      $data['page'] = 'Purpose';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/purpose', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Complain Type  Information ***********************************/

  // Add Complain Type ...
  public function complain_type(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('complain_type_name', 'complain_type Name', 'trim|required');
    
      $data['page'] = 'Complain Type';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/complain_type', $data);
    $this->load->view('Admin/Include/footer', $data);
  }

  /********************************* Source  Information ***********************************/

  // Add Source ...
  public function source(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('source_name', 'source Name', 'trim|required');
    
      $data['page'] = 'Source';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/source', $data);
    $this->load->view('Admin/Include/footer', $data);
  }

  /********************************* Priority  Information ***********************************/

  // Add Priority ...
  public function priority(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('priority_name', 'priority Name', 'trim|required');
    
      $data['page'] = 'Priority';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/priority', $data);
    $this->load->view('Admin/Include/footer', $data);
  }



  /********************************* Bed Status  Information ***********************************/

  // Add Bed Status ...
  public function bed_status(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_status_name', 'bed_status Name', 'trim|required');
    
      $data['page'] = 'Bed Status';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/bed_status', $data);
    $this->load->view('Admin/Include/footer', $data);
  }

  /********************************* Bed Type   Information ***********************************/

  // Add Bed Type  ...
  public function bed_type(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_type', 'bed Name', 'trim|required');
    
      $data['page'] = 'Bed Type ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/bed_type', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Bed Group   Information ***********************************/

  // Add Bed Group  ...
  public function bed_group(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed_group Name', 'trim|required');
    
      $data['page'] = 'Bed Group ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/bed_group', $data);
    $this->load->view('Admin/Include/footer', $data);
  }

  /********************************* floor   Information ***********************************/

  // Add floor  ...
  public function floor(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('floor_name', 'floor Name', 'trim|required');
    
      $data['page'] = 'floor ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/floor', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Bed   Information ***********************************/

  // Add Bed  ...
  public function bed(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Bed ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/bed', $data);
    $this->load->view('Admin/Include/footer', $data);
  }



/********************************* Birth Record  Information ***********************************/

  // Add Birth Record  ...
  public function birth_record(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Birth Record ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/birth_record', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Death Record  Information ***********************************/

  // Add Death Record  ...
  public function death_record(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Death Record ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/death_record', $data);
    $this->load->view('Admin/Include/footer', $data);
  }



  /********************************* Incone Head  Information ***********************************/

  // Add Incone Head  ...
  public function income_head(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Incone Head ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/income_head', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Expence Head  Information ***********************************/

  // Add Expence Head  ...
  public function expence_head(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Expence Head ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/expence_head', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Charges  Information ***********************************/

  // Add Charges  ...
  public function charges(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Charges ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/charges', $data);
    $this->load->view('Admin/Include/footer', $data);
  }

  /********************************* Charges Category ***********************************/

  // Add Charges Category  ...
  public function charges_category(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Charges Category ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/charges_category', $data);
    $this->load->view('Admin/Include/footer', $data);
  }

  /********************************* Doctor OPD Charges  ***********************************/

  // Add Doctor OPD Charges  ...
  public function doctor_opdcharge(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Doctor OPD Charges ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/doctor_opdcharge', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Charges  Type Information ***********************************/

  // Add Charges  Type ...
  public function charges_type(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Charges Type ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/charges_type', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Leave Type Information ***********************************/

  // Add Leave Type ...
  public function leave(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Leave Type ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/leave', $data);
    $this->load->view('Admin/Include/footer', $data);
  }



  /********************************* Department Information ***********************************/

  // Add Department ...
  public function department(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Department ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/department', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Designation Information ***********************************/

  // Add Designation ...
  public function designation(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Designation ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/designation', $data);
    $this->load->view('Admin/Include/footer', $data);
  }

  /********************************* Pathology Category  ***********************************/

  // Add Pathology Category ...
  public function pathology_category(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Pathology Category ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/pathology_category', $data);
    $this->load->view('Admin/Include/footer', $data);
  }

/********************************* Pathology parameter  ***********************************/
  // Add Pathology parameter ...
  public function pathology_parameter(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Pathology parameter ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/pathology_parameter', $data);
    $this->load->view('Admin/Include/footer', $data);
  }



  /********************************* Unit  ***********************************/
  // Add Unit ...
  public function pathology_unit(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Unit ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/pathology_unit', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Medicine Category  ***********************************/
  // Add Medicine Category ...
  public function medicine_category(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Medicine Category ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/medicine_category', $data);
    $this->load->view('Admin/Include/footer', $data);
  }

  /********************************* Supplier  ***********************************/
  // Add Supplier ...
  public function supplier(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Supplier ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/supplier', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Medicine Dosage  ***********************************/
  // Add Medicine Dosage ...
  public function medicine_dosage(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Medicine Dosage ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/medicine_dosage', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


   /********************************* Radiology Category  ***********************************/

  // Add Radiology Category ...
  public function radiology_category(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Radiology Category ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/radiology_category', $data);
    $this->load->view('Admin/Include/footer', $data);
  }

/********************************* Radiology parameter  ***********************************/
  // Add Radiology parameter ...
  public function radiology_parameter(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Radiology parameter ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/radiology_parameter', $data);
    $this->load->view('Admin/Include/footer', $data);
  }



  /********************************* Unit  ***********************************/
  // Add Unit ...
  public function radiology_unit(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Unit ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/radiology_unit', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Symptoms Head   ***********************************/
  // Add Symptoms  ...
  public function symptoms_head(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Symptoms Head ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/symptoms_head', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


  /********************************* Symptoms Type   ***********************************/
  // Add Symptoms  ...
  public function symptoms_type(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Symptoms Type ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/symptoms_type', $data);
    $this->load->view('Admin/Include/footer', $data);
  }

   /********************************* Zoom API Setting   ***********************************/
  // Add Symptoms  ...
  public function zoom_api(){
    $pharma_user_id = $this->session->userdata('pharma_user_id');
    $pharma_company_id = $this->session->userdata('pharma_company_id');
    $pharma_role_id = $this->session->userdata('pharma_role_id');
    if($pharma_user_id == '' && $pharma_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('bed_name', 'bed Name', 'trim|required');
    
      $data['page'] = 'Zoom API Setting ';
    $this->load->view('Admin/Include/head', $data);
    $this->load->view('Admin/Include/navbar', $data);
    $this->load->view('Admin/Master/zoom_api', $data);
    $this->load->view('Admin/Include/footer', $data);
  }


}
?>
