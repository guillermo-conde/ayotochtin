<?php

    function limpiarTexto($texto){
        $texto = filter_var($texto, FILTER_SANITIZE_STRING);
        return $texto;
    }

?>