<table>
  <thead>
    <th>Lunes</th>
    <th>Martes</th>
    <th>Miercoles</th>
    <th>Jueves</th>
    <th>Viernes</th>
    <th>Sábado</th>
    <th>Domingo</th>
  </thead>
  <tbody>
  <?php
    $contenidoDias = array (
                            "16"=>array(0=>150,1=>110),
                            "21"=>array(0=>375,1=>280)
                            );
    for ($i=1;$i<=$numeroSemanas;$i++)
    {        
         ?><tr><?php
         for ($d=1;$d<=7;$d++)
         {
                if($i == 1)
                {
                    if ($d>=$diaSemana)
                    {
                       $dia = isset ($dua) ? $dia +1 : 1; 
                    }
                }
            
         
        elseif (isset($dia)&& $dia < $numeroDias)   
        {
            $dia++;
        }
        else
        {
            unset ($dia);
        }
     
     if (isset($dia));
     {
        ?>
        <td class="dianormal" width="100" height ="90" padding="0">
            <table width="100%" height="100%">
                <tbody>
                    <tr>
                        <td class="diacal"><?php echo $dia ?></td>
                    </tr>
                    <tr>
                        <td class= "pretachcal">
                            <?php echo $contenidoDias[$dia][0] ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="precio">
                            <?php echo $contenidoDias [$dia][1] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td><?php
     }
      else
     {
        ?><td class="dianomes">&nbsp;</td><?php
     }
    }
    ?></tr>
    </tbody>
</table>