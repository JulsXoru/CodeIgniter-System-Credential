<div class="col-xs-6 col-xs-offset-3 text-center">
  <h1>SISTEMA DE CREDENCIALIZACION<small> Visualizacion Empleado</small></h1>
</div>
<div class="row col-xs-10 col-xs-offset-1" style="margin-top: 40px;">
      <?php
      foreach ($employee_list as $row){
        $array = json_decode($row->photo);
        $path = $array->full_path;
        echo '<div class="col-xs-3 col-xs-offset-2">
                <table id="table2" width="200" height="200" border="1" cellpadding="0">
                  <tr>
                    <td>Compañia: '.$row->company_name.'</td>
                  </tr>
                  <tr>
                    <td>
                      <table align="center" width="150" height="200" border="1" cellpadding="0">
                        <tr>
                          <td><img src="'.$path.'" width="150" height="200"/></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td> Empleado: '.$row->name." ".$row->last_name.'</td>
                  </tr>
                  <tr>
                    <td> Cargo: '.$row->position.'</td>
                  </tr>
                  <tr>
                    <td> Departamento: '.$row->department.'</td>
                  </tr>
                </table>
              </div>';
          echo '<div class="col-xs-3 col-xs-offset-2">
                  <table id="table2" width="200" height="220" border="1" cellpadding="0">
                    <tr>
                      <td>Compañia: '.$row->company_name.'</td>
                    </tr>
                    <tr>
                      <td>
                        <table align="center" width="150" height="200" border="0" cellpadding="0">
                          <tr>
                            <td> RFC: '.$row->rfc.'</td>
                          </tr>
                          <tr>
                            <td> CURP: '.$row->curp.'</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center"> Telefono Emergencia: '.$row->emergency_phone.'</td>
                    </tr>
                  </table>
                </div>';
      }
    ?>
</div>
