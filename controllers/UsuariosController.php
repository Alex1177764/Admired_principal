<?php

class UsuariosController {
    public function pqr(){
       require_once('views/components/layout/headd.php');
       require_once('views/usuarios/pqr.php');
       require_once('views/components/layout/footer.php');
    }
    public function reservas_areas(){
        require_once('views/components/layout/headd.php');
        require_once('views/usuarios/reservas_areas.php');
        require_once('views/components/layout/footer.php');
     }
     public function cuota(){
        require_once('views/components/layout/headd.php');
        require_once('views/usuarios/cuota.php');
        require_once('views/components/layout/footer.php');
     }
     
    
}