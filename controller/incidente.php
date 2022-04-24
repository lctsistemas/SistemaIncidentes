<?php
    require_once("../config/conexion.php");
    require_once("../models/Incidente.php");

    $incidente=new Incidente();
   
    switch($_GET["op"]){
        case "insert":
            $filename=$_FILES['arch_inc'];
            $incidente->insert_incid($_POST["nom_inci"],$_POST["desc_incid"],$filename['name'],$_POST["id_usu"],$_POST["id_area"]);
            
        break;  
        
        case "listar":
            $datos=$incidente->listar_incid();
            $data=Array();

            
            foreach($datos as $row)
            {

                $sub_array=array();
                
                $sub_array[]=$row['id_incidencia'];
                $sub_array[]=$row['nom_incidencia'];
                $sub_array[]=$row['nom_area'];
                $sub_array[]=$row['nom_estado'];
                $sub_array[]=$row['nivel_prioridad'];
                $sub_array[]=date('d/m/Y H:i',strtotime($row['fecha_ini']));
                $sub_array[]=$row['nombres'];

                $sub_array[] = '<button type="button" onClick="ver('.$row["id_incidencia"].');"  id="'.$row["id_incidencia"].'" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';
                $data[]=$sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;
    }
?>