<?php

    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");
    $categoria = new Categoria();
    
    switch($_GET["op"]){
       
        case "category":
            $datos=$categoria->get_categoria();
            if (is_array($datos)==true and count($datos)){
                $html = "<option label value=0>Seleccione</option>";
                foreach($datos as $row){
                    $html.= "<option value=" . $row["cat_id"] . ">" . $row["cat_name"] . "</option>";
                }
                echo $html;
            }
        break;
    }

?>