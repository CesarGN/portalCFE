<?php

class revista_controlador extends Modelo {

    public function regresa_noticia($id) {
        parent::Modelo();
        $sql = "SELECT CVENOTICIA,TITULO,URL,DESCRIPCION FROM NOTICIAS WHERE FKCVETIPO=" . $id;
        $rs = $this->consulta_sql($sql);
        $rows = $rs->GetArray();
        return $rows;
    }

}

?>
