<?php
Class Credential extends CI_Controller {
  function students_view(){
      $id = $this->input->post("id_students");
      $this->load->model("Credential_mdl","Credential_mdl",true);
      $tabla = "students";
      $campo = "id_students";
      $students = $this->Credential_mdl->check_students($id, $tabla, $campo);
      if($students){
        $data["students_list"] = $this->Credential_mdl->get_where($id, $tabla, $campo);
        $this->load->view('head');
        $this->load->view('students_view', $data);
        $this->load->view('footer');
      }else{
        $this->load->view('head');
        $this->load->view('credential_students');
        $this->load->view('footer');
      }
    }
    function employee_view(){
        $id = $this->input->post("id_employee");
        $this->load->model("Credential_mdl","Credential_mdl",true);
        $tabla = "employee";
        $campo = "id_employee";
        $employee = $this->Credential_mdl->check_employee($id, $tabla,$campo);
          if($employee){
            $data["employee_list"] = $this->Credential_mdl->get_where($id, $tabla, $campo);
            $this->load->view('head');
            $this->load->view('employee_view', $data);
            $this->load->view('footer');
          }else{
            $this->load->view('head');
            $this->load->view('credential_students');
            $this->load->view('footer');
          }
        }
  public function register_ctrl_students(){
      $this->load->model("Credential_mdl","Credential_mdl",true);
      $id = $this->input->post('id_students');
      $name = $this->input->post('name');
      $lastname = $this->input->post('lastname');
      $phone = $this->input->post('phone');
      $email = $this->input->post('email');
      $gender = $this->input->post('gender');
      $university = $this->input->post('university');
      $faculty = $this->input->post('faculty');
      $grade = $this->input->post('grade');
      $birth = $this->input->post('birthday');
      $city = $this->input->post('city');
      $country = $this->input->post('country');
      $address = $this->input->post('address');

      $config['upload_path']          = 'C:\xampp\htdocs\CodeIgniter\application\uploads';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 100;
      $config['max_width']            = 1376;
      $config['max_height']           = 768;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('file')){
              $error = $this->upload->display_errors();
              echo $error;
      }else{
              $data = $this->upload->data();

      if($id!=""||$name!=""||$lastname!=""||$university!=""||$faculty!=""||$grade!=""){
        $this->Credential_mdl->register_students($id, $name, $lastname, $phone, $email, $gender, $university, $faculty, $grade, $birth, $city, $country, $address, $data); //$file_name);
        $this->load->view('head');
        $this->load->view('credential_students');
        $this->load->view('footer');
      }
    }
  }
    public function register_ctrl_employee(){
        $this->load->model("Credential_mdl","Credential_mdl",true);
        $id = $this->input->post('id_employee');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $rfc = $this->input->post('rfc');
        $curp = $this->input->post('curp');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $home = $this->input->post('home');
        $personal = $this->input->post('personal');
        $emergency = $this->input->post('emergency');
        $gender = $this->input->post('gender');
        $position = $this->input->post('position');
        $department = $this->input->post('departament');
        $company = $this->input->post('company_name');
        $birth = $this->input->post('birthdate');
        $city = $this->input->post('city');
        $country = $this->input->post('country');

        $config['upload_path']          = 'C:\xampp\htdocs\CodeIgniter\application\uploads';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1376;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file')){
                $error = $this->upload->display_errors();
                echo $error;
        }else{
                $data = $this->upload->data();

          if($id!=''||$name!=''||$lastname!=''||$rfc!=''||$curp!=''||$email!=''||$address!=''||$home!=''||$personal!=''||$emergency!=''||$position!=''||$departament!=''||$company!=''||$birth!=''||$city!=''||$country!=''){
            $this->Credential_mdl->register_employee($id, $name, $lastname, $rfc, $curp, $email, $address, $home, $personal, $emergency, $gender, $position, $department, $company, $birth, $city, $country, $data); //$file_name);
            $this->load->view('head');
            $this->load->view('Credential_employee');
            $this->load->view('footer');
          }
        }
      }
  }
?>
