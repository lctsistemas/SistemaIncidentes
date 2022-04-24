<?php
    class Incidente extends Conectar{

        public function insert_incid($nom_inci,$desc_incid,$arch_inc,$id_usu,$id_area){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="call sp_registrarIncidente(?,?,?,?,?)";
            $sql=$conectar ->prepare($sql);
            $sql->bindValue(1,$nom_inci);
            $sql->bindValue(2,$desc_incid);
            $sql->bindValue(3,$arch_inc);
            $sql->bindValue(4,$id_usu);
            $sql->bindValue(5,$id_area);

            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function listar_incid(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="call sp_listarIncidente()";
            $sql=$conectar ->prepare($sql);      
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>