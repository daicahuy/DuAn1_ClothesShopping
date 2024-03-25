<?php

    function getAllMauSac() {
        $sql = "SELECT * FROM mau_sac";
        return getData($sql);
    }

    function getMauSacID($id) {
        $sql = "SELECT * FROM mau_sac WHERE ma_mau_sac = $id";
        return getData($sql,false);
    }


?>