<?php

    class ObtenerSeccion{
        public $data;
        public function __construct($url){
            $url = $this->quitarSlash($url);

            $this->data = explode('/', $url);

            // if (isset($url[3]) && $url[3] == 'login' && $url[2] == 'panel') {
            //     return $this->data = 'login';
            // }

            // if (isset($url[3]) && $url[2] == 'blog'  && $url[3] == null) {
            //     return $this->data = 'blog';
            // }elseif (isset($url[3]) && $url[2] == 'blog') {
            //     return $this->data = 'post';
            // }

            // if($url[2] == null || $url[2] == 'index.php'){
            //     return $this->data = 'inicio';
            // } 

            // for ($i=0; $i < count($paginas); $i++) { 
            //     if ($paginas[$i] == $url[2] && !isset($url[3])) {
            //         $this->data = $url[2];
            //         break;
            //     }else{
            //         $this->data = '404';
            //     }
            // }
            // return $this->data;
        }

        private function quitarSlash($url){
            if (substr($url, -1) == '/') {
                $url = rtrim($url, '/');
                return $url;
            }else{
                return $url;
            }
        }

        public function validarPagina($pagina, $paginasValidas){
            for ($i=0; $i < count($paginasValidas); $i++) { 
                if ($paginasValidas[$i] == $pagina) {
                    $direccion = $pagina;
                    break;
                }else{
                    $direccion = '404';
                }
            }
            return $direccion;
        }

        // public function extraerPost($url){
        //     $url = explode('/', $url);
        //     return $url[4];
        // }
    }

?>