<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias de la Semana</title>
</head>
<body>
    <h2>Dias de la semana_ array</h2>
<?php
$Dias_sem = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");

for ($i=0; $i<count($Dias_sem); $i++) { 
    echo "$Dias_sem[$i]<br>";
} 
?>
<h2>Tabla de 5 filas y 10 Columnas</h2>
<?php

echo "<table border=1>"; 
$n=1;
for ($n1=1; $n1<=5; $n1++)
{
     for ($n2=1; $n2<=10; $n2++)
            {
                echo "<td>", $n, "</td>"; //creamos una celda y mostramos el número
                $n=$n+1; //sumamos 1 al número mostrado para la siguiente vuelta del bucle
            }
 echo "</tr>"; //cerramos la fila
}
echo "</table>"; //cerramos la tabla
?>
<h2>Calendario Enero 2022</h2>
<?php
    $Dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
    //encontrar el primer dia de la semana
    $primer_dia=mktime(0,0,0,1,1,2022);
    $saltear= date("w", $primer_dia);
    $cant_dias=31;
    $fila=ceil($cant_dias/7);
    $can_celdas=$fila*7;
    $diferencia=$can_celdas- $cant_dias;
    $cant_dias+=$saltear;
    
    //empezar la numeracion 
    echo "<table border=1>"; 
         for ($j=0; $j<count($Dias); $j++) { 
            echo "<td>",$Dias[$j],"</td>";
        }
          echo "</tr>";
                for ($i=1; $i<=$cant_dias; $i++) { 
                    if ($i<=$saltear) {
                        echo"<td></td>";
                    }else {
                        $num_dias=$i-$saltear;
                        echo "<td>",$num_dias,"</td>";
                    }
                    

                   if ($i % 7 == 0){
                       echo"</tr><tr>";
                     }
                    
                }

                 for ($i=1; $i <=$diferencia ; $i++) { 
                    echo "<td></td>";
                 }   
            
    echo"</table>"
    
?>


</body>
</html>