<div class="">
  <div class="col-xs-6 col-xs-offset-1">
    <h1>Datos Usuarios:</h1>
  </div>
  <table class="table">
    <tbody class="">
      <tr>
        <th>ID</th><th>User Name</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Security Question</th><th>Last Login</th><th>Borrar Registro</th>
      </tr>
      <?php
      foreach ($user_list as $row){
        echo '<tr id="user'.$row->id.'">';
        echo '<td>'.$row->id.'</td>'.
        '<td>'.$row->user_name.'</td>'.
        '<td>'.$row->first_name.'</td>'.
        '<td>'.$row->last_name.'</td>'.
        '<td>'.$row->email.'</td>'.
        '<td>'.$row->sec_question1.'</td>'.
        '<td>'.$row->last_login.'</td>'.
        '<td>'.form_button(array("name"=>"user_id","class"=>"btn btn-primary","content"=>"Borrar","onClick"=>"Delete(".$row->id.")")) .'</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</div>
<div class="col-xs-6 col-xs-offset-1">
  <h1>Datos Credenciales Estudiante:</h1>
</div>
<div class="">
  <table class="table">
    <tbody>
      <tr>
        <th>ID Students</th><th>Name</th><th>Last Name</th><th>Gender</th><th>University</th>
        <th>Faculty</th><th>Grade</th><th>Birthdate</th><th>City by Birth</th><th>State by Birth</th>
        <th>Phone</th><th>Email</th><th>Subir de Semestre</th>
      </tr>
      <?php
      foreach ($students_list as $row){
        echo '<tr id="student'.$row->id_students.'">';
        echo '<td>'.$row->id_students.'</td>'.
        '<td>'.$row->name.'</td>'.
        '<td>'.$row->last_name.'</td>'.
        '<td>'.$row->gender.'</td>'.
        '<td>'.$row->university.'</td>'.
        '<td>'.$row->faculty.'</td>'.
        '<td id="grade'.$row->id_students.'">'.$row->grade.'</td>'.
        '<td>'.$row->birthdate.'</td>'.
        '<td>'.$row->city_by_birth.'</td>'.
        '<td>'.$row->State_by_birth.'</td>'.
        '<td>'.$row->phone.'</td>'.
        '<td>'.$row->email.'</td>'.
        '<td>'.form_button(array("name"=>"id_students","class"=>"btn btn-primary","content"=>"Asender de Grado","onClick"=>"Upgrade(".$row->id_students.")")) .'</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</div>
<script>
  function Delete(user){
    //alert("Delete user:"+ user);
    //{"user_id": user} es un objeto json
    $.post('delete',{"user_id": user}, function (response, status){
      console.log(respnse);
        if(response.status!="success"){
          alert(response);
          return;
        }
        $("#user"+user.toString()).remove();
    });
  }
  function Upgrade(students){
    //alert("Delete user:"+ user);
    //{"user_id": user} es un objeto json
    $.post('upgrade',{"id_students": students}, function (response, status){
        if(response.status!="success"){
          alert("Error al ascender al estudiante.");
          return;
        }
    });
  }
</script>
