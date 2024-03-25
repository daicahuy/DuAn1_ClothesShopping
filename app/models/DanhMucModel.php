<?php

    // Lay danh muc theo ma loai
    function getAllDanhMucIDLoai($id) {
        $sql = "SELECT A.*, B.ten_loai FROM danh_muc A
                JOIN loai B ON A.ma_loai = B.ma_loai
                WHERE A.ma_loai = $id";
        return getData($sql);
    }


?>