<?php

    class vistasModelo{
        //MODELO a obtener las vistas
        protected static function obteber_vistas_modelo($vistas){
            $listaBlanca = [];
            if(in_array($vistas,$listaBlanca)){
                if(is_file("./vistas/contenidos/".$vistas."-view.php")){
                    $contenido = "./vistas/contenidos/".$vistas."-view.php";
                }else {
                    $contenido = "404";
                }
            }elseif ($vistas == "login" || $vistas == "index") {
                $contenido = "login";
            }else {
                $contenido="404";
            }
            return $contenido;
        }
    }
