<?php

class departameto_controlador extends Modelo {

    public function regresa_dpto($id) {
        parent::Modelo();
        $sql = "SELECT * FROM DEPARTAMENTO WHERE CVEDPTO=" . $id;
        $rs = $this->consulta_sql($sql);
        $rows = $rs->GetArray();
        return $rows;
    }

    public function regresa_jefedpto($id) {
        parent::Modelo();
        $sql = "SELECT NOMBRE, APELLIDO, CORREO, URLFOTO,TELEFONO FROM JEFES WHERE CVEDPTO=" . $id . " AND PUESTO=1";
        $rs = $this->consulta_sql($sql);
        $rows = $rs->GetArray();
        return $rows;
    }

    public function regresa_jefeofi($id) {
        parent::Modelo();
        $sql = "SELECT NOMBRE, APELLIDO, CORREO, URLFOTO,TELEFONO FROM JEFES WHERE CVEDPTO=" . $id . " AND PUESTO=2";
        $rs = $this->consulta_sql($sql);
        $rows = $rs->GetArray();
        return $rows;
    }

    public function regresa_aplicaciones($id) {
        parent::Modelo();
        $sql = "select APL.NOMBRE,APL.URL from APLICACION AS APL JOIN DPTO_APLIC AS DTAP ON APL.CVEAPLIC=DTAP.FKCVEAPLIC WHERE DTAP.FKCVEDPTO=".$id;
        $rs = $this->consulta_sql($sql);
        $rows = $rs->GetArray();
        return $rows;
    }

}

?>
