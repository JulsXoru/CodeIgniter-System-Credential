<?php
Class User extends CI_Controller {
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
    //A $user se el resultado del query del funcion check_if_exists(); el cual verifica si existe el usario o no.
    $user = $this->User_mdl->check_if_exists($username, $password);
    if($user){
      $data = array("user"=>$user->first_name.' '.$user->last_name);
      $data["user_list"] = $this->User_mdl->get_all();
      $this->load->view('head');
      $this->load->view('credential_main_view', $data);
      $this->load->view('footer');
    }else{
      $this->load->helper('url');
      redirect('/');
    }
  }
  function register_view(){
    $this->load->view('head');
    $this->load->view('register_view');
    $this->load->view('footer');
  }
  /*Funcion que extrae datos de la vista welcome_message.php y los pone en una variable,
    Luego esas variables las manda a otra funcion que esta en el modelo para registrarlas
    en la base de datos.*/
  function register(){
    //El $this->load->view(); sirve para cargar una vista en el navegador.
    $this->load->model("User_mdl","User_mdl",true);
    // Es como si fuera el if($username = ""){}
    // if(this->post()){}
    $username = $this->input->post("user");
    $firstname = $this->input->post("firstname");
    $lastname = $this->input->post("lastname");
    $password = $this->input->post("password");
    $confirmPassword = $this->input->post("confirmpassword");
    $email = $this->input->post("email");
    $secquestion1 = $this->input->post("secquestion1");
    $secanswer1 = $this->input->post("secanswer1");

    if($username=="" || $firstname=="" || $lastname=="" || $password=="" || $confirmPassword=="" || $email=="" ||  $secanswer1==""){
      echo "Favor de introducir algo :C";
    }else{
      if($confirmPassword == $password){
          $this->User_mdl->register_user($username, $firstname, $lastname, $password, $email, $secquestion1, $secanswer1);
          $this->load->helper('url');
          redirect('/');
      }else{
        echo "...";
      }
    }
  }
}
?>
