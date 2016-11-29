<div class="col-xs-6 col-xs-offset-3 text-center">
  <h1>SISTEMA DE CREDENCIALIZACION<small> Visualizacion Estudiante</small></h1>
</div>
<div class="col-xs-6 col-xs-offset-3" style="margin-top: 40px;">
  <table id="table" class="col-xs-offset-2" width="420"  height="155" border="1" cellpadding="0">
    <tr>
          <?php
          foreach ($students_list as $row){
            $array = json_decode($row->photo);
            $path = $array->file_name;
            echo '<td width="200" height="123">
                  <table id="margin" width="260"  height="155" border="1" cellpadding="2">
                    <tr>
                      <td id="text" class="text-center" width="150" height="45">'.$row->university.'</td>
                        </tr>
                      <tr>
                      <td>  Matricula: '.$row->id_students.'</td>
                        </tr>
                      <tr>
                      <td id="text" width="150"> Alumno: '.$row->name." ".$row->last_name.'</td>
                        </tr>
                      <tr>
                      <td> Facultad: '.$row->faculty.'</td>
                        </tr>
                      <tr>
                      <td> Semestre: '.$row->grade.'</td>
                        </tr>
                      </table>
                    </td>
                 <td width="200">
                 <table id="margin" width="150" border="1" cellpadding="0">
                 <tr>';
                  echo '<td width="150" height="150"><img src="src="views\uploads'.$path.'"" width="150px" height="150px"/></td>
                     </tr>
                   </table>
                 </td>';
          }
          ?>
  </tr>
</table>
</div>
<div class="col-xs-12">
  <form action="/CodeIgniter/index.php/User/exit_btn" method="post">
    <button class="btn btn-danger" type="submit" name="button">Salir</button>
  </form>
</div>
