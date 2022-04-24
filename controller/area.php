<?php
    require_once("../config/conexion.php");
    require_once("../models/Area.php");

    $area=new Area();

    switch($_GET["op"]){
        case "combo":
            $datos=$area->get_area();
            
            if(is_array($datos)==true and count($datos)>0)
            {
               
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['id_area']."'>".$row['nom_area']."</option>";
                }
                echo $html;
            }
        break;    
    }
?>