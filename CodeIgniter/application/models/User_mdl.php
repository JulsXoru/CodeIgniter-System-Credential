<?php
  class User_mdl extends CI_Model{
    //funcion para ver si existe el usuario y contraseña dentro de la base de datos.
    public function check_if_exists($user, $password){
      $query = "SELECT id, first_name, last_name, last_login, role FROM users WHERE user_name ='".$user."' AND password ='".$password."'";
      //echo $query;
      //die();
      $result = $this->db->query($query);
      if(!$result){
        return false;
      }else{
        $result = $result->result()[0];
        $this->update_last_login($result->id);
        return $result;
      }
    }
    public function check_register($user, $email){
      $query = "SELECT * FROM users WHERE user_name ='".$user."' AND email ='".$email."'";
      $result = $this->db->query($query);
      if(!$result){
        return false;
      }else{
        return true;
      }
    }
    //Esta funcion optiene todos los registros de la base de datos.
    public function get_all(){
      $query = $this->db->get('users');
      return $query->result();
    }
    //funcion para actualizar el last_login
    private function update_last_login($user_id){
      $today=date("Y-m-d H:i:s");
      $this->db->set('last_login',$today);
      $this->db->where('id',$user_id);
      $this->db->update('users');
      //$this->db->replace('users',array('last_login'=>$today))->where('id',$user_id);
    }
    //funcion para registrar
    public function register_user($username, $firstname, $lastname, $password, $email, $secquestion1, $secanswer1, $role){
        $arrayData = array('user_name'=>$username,'first_name'=>$firstname, 'last_name'=>$lastname, 'password'=>$password,'email'=>$email, 'sec_question1'=>$secquestion1, 'sec_answer1'=>$secanswer1, 'role'=>$role);
        $this->db->insert('users',$arrayData);
    }
    public function delete($user_id){
      //if(){
        //$this->db->where('id', $user_id);
        //$this->db->delete('users');
        $result = $this->db->delete('users', array('id' => $user_id));
        $result = $this->db->affected_rows();
        return $result;
      //}else{

      //}
    }
  }
?>
