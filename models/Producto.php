<?php

    class Producto extends Conectar{
        public function get_producto(){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_producto WHERE estado=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function get_producto_x_id($prod_id){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_producto WHERE prod_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$prod_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_producto($prod_id){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql="UPDATE tm_producto 
                    SET
                        estado=0,
                        fech_delete=now()
                    WHERE
                        prod_id = ?
                 ";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$prod_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_producto($prod_name,$prod_desc){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO tm_producto (prod_id, prod_name, prod_desc, fech_create, fech_mod, fech_delete, estado) VALUES (NULL, ?, ?, now(), NULL, NULL, 1);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$prod_name);
            $sql->bindValue(2,$prod_desc);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_producto($prod_id, $prod_name, $prod_desc){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql="UPDATE tm_producto 
                    SET
                        prod_name=?,
                        prod_desc=?,
                        fech_mod=now()
                    WHERE
                        prod_id = ?
                 ";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$prod_name);
            $sql->bindValue(2,$prod_desc);
            $sql->bindValue(3,$prod_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>