<?php
    class Usuario extends Conectar{
        public function login(){
            $conectar=parent::conexion();
            parent::set_names();

            if(isset($_POST["enviar"])){
                $nom_usu = $_POST['nom_usu'];
                $pass = $_POST['pass_usu'];
                if(empty($nom_usu) and empty($pass)){
                    header("Location: ".conectar::ruta()."index.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuario WHERE nom_usu=? and pass_usu=?";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1,$nom_usu);
                    $stmt->bindValue(2,$pass);
                    $stmt->execute();

                    $resultado=$stmt->fetch();
                    
                    if (is_array($resultado) and count($resultado)>0) {
                        $_SESSION["id_usuario"]=$resultado["id_usuario"];
                        $_SESSION["nombres"]=$resultado["nombres"];
                        $_SESSION["apellidos"]=$resultado["apellidos"];
                        $_SESSION["id_rol"]=$resultado["id_rol"];
                        header("Location:".Conectar::ruta()."views/Home/");
                        exit(); 
                    }else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }
?>