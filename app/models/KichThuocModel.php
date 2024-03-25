<?php
    // Lay tat ca kich thuoc
    function getAllKichThuoc() {
        $sql = "SELECT * FROM kich_thuoc";
        return getData($sql);
    }

    // Lay kich thuoc bang id kich thuoc
    function getKichThuocID($id) {
        $sql = "SELECT * FROM kich_thuoc WHERE ma_kich_thuoc = $id";
        return getData($sql,false);
    }

?>