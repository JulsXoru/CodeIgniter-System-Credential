<?php
Class User extends CI_Controller {
  function __construct(){
        parent:: __construct();
        $this->load->helper('form');
  }
  function authenticate(){
    //para ver si estan entrando los datos.
    //print_r($this->input->post());
    //die();
    /*Asignacion de variable
    *$usarname se le asigna $this->input->post("username"); que es lo que esta en el input del login
    */
    $username = $this->input->post("username");
    $password = $this->input->post("password");
    $this->load->model("User_mdl","User_mdl",true);
    $this->load->model("Credential_mdl","Credential_mdl",true);
    //A $user se el resultado del query del funcion check_if_exists(); el cual verifica si existe el usario o no.
    $user = $this->User_mdl->check_if_exists($username, $password);
    $role = $user->role;
    if($user){
      $admin["user_list"] = $this->User_mdl->get_all();
      $admin["students_list"] = $this->Credential_mdl->get_all();
      if($role=='"admin"'){
        $this->load->view('head');
        $this->load->view('user_view', $admin);
        $this->load->view('footer');
      }else{
        if ($role=='"students"') {
            $this->load->view('head');
            $this->load->view('credential_students');
            $this->load->view('footer');
            return;
        }
            $this->load->view('head');
            $this->load->view('credential_employee');
            $this->load->view('footer');
      }
    }else{
      $this->load->helper('url');
      redirect('/');
    }
  }

  /*Funcion que extrae datos de la vista welcome_message.php y los pone en una variable,
    Luego esas variables las manda a otra funcion que esta en el modelo para registrarlas
    en la base de datos.*/
  function register(){
    //El $this->load->view(); sirve para cargar una vista en el navegador.(
    $this->load->model("User_mdl","User_mdl",true);
    $username = $this->input->post("user");
    $firstname = $this->input->post("first_name");
    $lastname = $this->input->post("last_name");
    $password = $this->input->post("password");
    $confirmPassword = $this->input->post("confirmpassword");
    $email = $this->input->post("email");
    $secquestion1 = $this->input->post("secquestion1");
    $secanswer1 = $this->input->post("secanswer1");
    $code = $this->input->post("codeemployee");
    $confirm = $this->input->post("confirmcode");
    $check = $this->User_mdl->check_register($username, $email);
    if(!$check){
    if($username!="" || $firstname!="" || $lastname!="" || $password!="" || $confirmPassword!="" || $email!="" ||  $secanswer1!=""){
      if($confirmPassword == $password){
        if($code == $confirm && $code == "empleado"){
          $rolebd = '"employee"';
          $this->User_mdl->register_user($username, $firstname, $lastname, $password, $email, $secquestion1, $secanswer1, $rolebd);
          $this->load->helper('url');
          redirect('/');
          return;
        }
        $rolebd = '"students"';
        $this->User_mdl->register_user($username, $firstname, $lastname, $password, $email, $secquestion1, $secanswer1, $rolebd);
        $this->load->helper('url');
        redirect('/');
        }
      }
    }else{
      echo "<h4 class='text-center danger'>Usuario y Email Existentes</h4>";
      $this->load->view('head');
      $this->load->view('welcome_message');
      $this->load->view('footer');
    }
  }
  function delete(){

    $this->load->model("User_mdl","User_mdl",true);
    if($this->input->post("user_id")){
      if($this->User_mdl->delete($this->input->post("user_id"))){
        //json_encode(); resibe un arreglo con los formatos para convertirlos de HTML a JSON
        $this->output->set_content_type('application/json')->set_output(json_encode(array("status"=>"success", "message"=>"OK")));
        return;
      }
      $this->output->set_content_type('application/json')->set_output(json_encode(array("status"=>"fail", "message"=>"No se pudo :C")));
    }
  }
  function upgrade(){
    $this->load->model("Credential_mdl","Credential_mdl",true);
    if($this->input->post("id_students")){
      if($this->Credential_mdl->update_grade($this->input->post("id_students"))){
        //json_encode(); resibe un arreglo con los formatos para convertirlos de HTML a JSON
        $this->output->set_content_type('application/json')->set_output(json_encode(array("status"=>"success", "message"=>"OK")));
        return;
      }
      $this->output->set_content_type('application/json')->set_output(json_encode(array("status"=>"fail", "message"=>"No se pudo :C")));
    }
  }
  function exit_btn(){
    $this->load->helper('url');
    redirect('/');
  }
}
?>
