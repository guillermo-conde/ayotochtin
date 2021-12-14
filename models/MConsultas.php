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
            $bandera = false;
            try {
                $query = 'SELECT * FROM usuarios where usuarios.usuario = :usuario';
                $preparada = $this->conexion->prepare($query);
                $preparada->execute(array(':usuario'=>$usuario));
                $resultados = $preparada->fetchAll();
                foreach ($resultados as $resultado) {
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

        public function obtenerPosts(){
            try {
                $query = 'SELECT * FROM post ORDER BY post.id_post DESC';
                $resultado = $this->conexion->query($query)->fetchAll();
                return $resultado;
            } catch (PDOException $e) {
                echo 'Error '.$e->getMessage();
            }
        }

        public function obtenerPost($id){
            try {
                $query = 'SELECT * FROM post WHERE post.id_post = :id';
                $preparada = $this->conexion->prepare($query);
                $preparada->execute(array(':id'=>$id));
                $resultado = $preparada->fetch();
                if (!$resultado) {
                    $resultado = array('titulo_post'=>'Post no encontrado', 'contenido_post'=>'El post que estas buscando no existe.');
                }
                return $resultado;
            } catch (PDOException $e) {
                echo 'Error '.$e->getMessage();
            }
        }
    }


?>