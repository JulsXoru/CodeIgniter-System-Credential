<?php
  class Credential_mdl extends CI_Model{
    public function check_students($id,$table,$campo){
      $query = "SELECT * FROM ".$table." WHERE ".$campo." = '".$id."'";
      $result = $this->db->query($query);
      $result = $this->db->affected_rows();
      if(!$result){
        return false;
      }else{
        return true;
      }
    }
    function register_students($id_students, $first_name, $last_name, $phone, $email, $gender, $university, $faculty, $grade, $birth, $city, $country, $address, $data){
      $arrayData = array('id_students'=>$id_students,'name'=>$first_name,'last_name'=>$last_name,'phone'=>$phone,
          'email'=>$email,'gender'=>$gender,'university'=>$university,
          'faculty'=>$faculty,'grade'=>$grade,'birthdate'=>$birth,'city_by_birth'=>$city,
          'State_by_birth'=>$country,'address'=>$address, 'photo'=>json_encode($data));//,'photo'=>$photo);
      $this->db->insert('students',$arrayData);
    }
    function register_employee($id, $name, $lastname, $rfc, $curp, $email, $address, $home, $personal, $emergency, $gender, $position, $department, $company, $birth, $city, $country, $data){
      $arrayData = array('id_employee'=>$id,'name'=>$name,'last_name'=>$lastname,'rfc'=>$rfc, 'curp'=>$curp,
          'email'=>$email, 'address'=>$address,'home_phone'=>$home, 'personal_phone'=>$personal,'emergency_phone'=>$emergency,
          'gender'=>$gender,'position'=>$position,'department'=>$department,'company_name'=>$company,'birthdate'=>$birth,
          'city_by_birth'=>$city, 'State_by_birth'=>$country, 'photo'=>json_encode($data));//,'photo'=>$photo);
      $this->db->insert('employee',$arrayData);
    }
    public function get_all(){
      $query = $this->db->get('students');
      return $query->result();
    }
    public function get_where($id, $table, $campo){
      $query = $this->db->get_where($table, array($campo => $id));
      return $query->result();
    }
    function update_grade($id_students){
      $query = "SELECT grade FROM students WHERE id_students = '".$id_students."'";
      $grade = $this->db->query($query);
      $res = $grade->result()[0];
      $sum = $res->grade;
      $sum = $sum + 1;
      $data = array('grade'=>$sum);
      $result = $this->db->update('students', $data, array('id_students' => $id_students));
      $result = $this->db->affected_rows();
      return $result;
    }
  }
?>
