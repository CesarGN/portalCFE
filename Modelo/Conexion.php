

<?php

class Conexion {

    function Conexion() {
        $this->db = ADONewConnection('mysql');
        $this->db->debug = false;
        $this->db->Connect('10.12.71.248', 'userportal', 'passportal', 'PORTAL');
    }

}
