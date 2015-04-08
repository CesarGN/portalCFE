<?php

class Principal_controlador extends Modelo {

    function Principal_controlador() {
        parent::Modelo();
    }

    function regresa_dpto() {
        parent::Modelo();
        $sql = "SELECT CVEDPTO, URLFOTO, NOMBRE FROM DEPARTAMENTO WHERE FKCVETIPO=1";
        $rs = $this->consulta_sql($sql);
        $rows = $rs->GetArray();
        return $rows;
    }

}

?>
