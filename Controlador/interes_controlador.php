<?php

class interes_controlador extends Modelo {

    public function regresa_interes($id) {
        parent::Modelo();
        $sql = "SELECT * FROM NOTICIAS WHERE FKCVETIPO=" . $id;
        $rs = $this->consulta_sql($sql);
        $rows = $rs->GetArray();
        return $rows;
    }

}

?>
