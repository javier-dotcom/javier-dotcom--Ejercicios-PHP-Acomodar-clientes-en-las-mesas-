
<style>
    h2,h1,h3{
        color:rgb(30, 108, 88);
        font-size:bold;
        background-color:black;
        text-align:center;
    }
h4{
    color:rgb(108, 30, 50);
    text-align:center;
    background-color:rgb(30, 108, 88);
    width: 50%;
    margin:auto;
    border-top:3px solid rgb(108, 30, 50);
}

    table,tr,td{
        text-align:center;
border: rgb(108, 30, 50) solid 5px;
padding:8px;
background-color:rgb(30, 108, 88);
margin:auto;
    }
    span{
        color:white;
        font-weight:bold;
        padding:2px;
        border-radius:4px;
    text-align:center;
    }
    body{

        background-color:black;
        color:white;
    }
    .cos{
        text-align:left;
    }
    h3 spam{
        width: 60%;
        background-color:rgb(108, 30, 50, 0.5);
        padding:4px;
    }
    .div{
        background-color:rgb(108, 30, 50, 0.5);
    }
   
</style>
<?php
/*EJERCICIO 113 Dalessandro javier */


echo "<h1> Aplicación para colocar a los clientes en sus mesas </h1>";

$cliente[]=$_GET["grupo1"];
$cliente[]=$_GET["grupo2"];
$cliente[]=$_GET["grupo3"];
$cliente[]=$_GET["grupo4"];
$mesas=[];
for($q=0;$q<=3;$q++){
$sillas=4;
echo"<div class='div'>";
if($cliente["$q"]>$sillas){
echo "<h4>“Lo siento, cliento ". (int)($q+1)   ." no admitimos grupos de " . $cliente[$q] .", haga
grupos de 4 personas como máximo e intente de nuevo” </h4><br> ";
}else{
   
echo "<table><tr>"  ;
echo"<h4>Ocupación actual de las mesas</h4></tr><tr>";
  $suma=0;
  $ban=0;
for($e=1;$e<=10;$e++){
    $mesas[$e]=rand(0,4);
   
echo " <td class='cos'> Mesa $e <br><br> Lugares <br> Ocupados : <span>$mesas[$e]</span><br><br> Libres:<span>"  .(int)(4-$mesas[$e]) ."<span>" ;
echo " </td> " ;
$suma=$cliente[$q]+$mesas[$e];
if($suma<=$sillas){
$a="<h3><spam>Grupo " .( $q+1 ). " ustedes son " . $cliente[$q]. " usen la mesa " ." $e</pam> </h3>";

$sillas=0;
$ban=1;
}
}

if($ban==1){

    echo $a;
}else{
     
    echo "<h2>Lo siento Grupo " . (int)($q+1) . ", en estos momentos no queda sitio.</h2>";
}
echo "</tr></table>";
echo "<br>";
echo"</div>";
echo "<br><br><br>";

}
}

?>
