<?php

    class Consultas{
        private $conexion;

        public function __construct(){
            try {
                return $this->conexion = new PDO(datosBD['controlador'], datosBD['usuarioBD'], datosBD['passBD']);
            } catch (PDOException $e) {
                echo 'Error '.$e->getMessage();
            }
        }

        public function iniciarSesion($usuario, $password){
            $bandera;

            try {
                $query = 'SELECT * FROM usuarios where usuarios.usuario = :usuario';
                $preparada = $this->conexion->prepare($query);
                $preparada->execute(array(':usuario'=>$usuario));
                $resultados = $preparada->fetchAll();
                foreach ($resultados as $resultado) {
                    echo $resultado['password'];
                    if (password_verify($password, $resultado['password'])) {
                        $bandera = true;
                    }else{
                        $bandera = false;
                    }
                }
                return $bandera;
            } catch (PDOException $e) {
                echo 'Error '.$e->getMessage();
            }

             
        }
    }


?>