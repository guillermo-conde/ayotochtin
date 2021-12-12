<?php

    class ObtenerSeccion{
        public $data;
        public function __construct($url, $paginas){
            $url = explode('/', $url);

            if($url[2] == null || $url[2] == 'index.php'){
                return $this->data = 'inicio';
            } 

            for ($i=0; $i < count($paginas); $i++) { 
                if ($paginas[$i] == $url[2]) {
                    $this->data = $url[2];
                    break;
                }else{
                    $this->data = '404';
                }
            }
            return $this->data;
        }
    }

?>