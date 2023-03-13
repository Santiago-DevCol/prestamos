<?php

    class vistasModelo{
        //MODELO a obtener las vistas
        protected static function obteber_vistas_modelo($vistas){
            $listaBlanca = ["home","client-new","client-list",
                            "client-search","client-update","item-new",
                            "item-list","item-search","item-update",
                            "reservation-new","reservation-reservation","reservation-pending",
                            "reservation-list","reservation-search","reservation-update",
                            "user-new","user-list","user-search","user-update","company"];
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
