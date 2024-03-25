<?php

    function getAllGiamGia() {
        $sql = "SELECT * FROM giam_gia";
        return getData($sql);
    }

?>