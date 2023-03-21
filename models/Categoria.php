<?php

    class Categoria extends Conectar{
        public function get_categoria(){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE estado=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>