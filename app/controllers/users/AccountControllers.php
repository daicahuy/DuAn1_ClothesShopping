<?php

    function taiKhoan() {
        $email = $_SESSION["user"]["email"];
        $user = getNguoiDungEmail($email);

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $hoVaTen = trim($_POST["hoVaTen"]);
            $soDienThoai = trim($_POST["soDienThoai"]);
            $diaChi = trim($_POST["diaChi"]);
            $matKhauHienTai = $_POST["matKhauHienTai"];
            $matKhau1 = $_POST["matKhau1"];
            $matKhau2 = $_POST["matKhau2"];

            $regexNumber = "/(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/";

            $errors = [];

            if($soDienThoai !== "") {
                if(!preg_match($regexNumber,$soDienThoai)) {
                    $errors[] = "Sai định dạng số điện thoại";
                }
            }

            if(!($matKhauHienTai == "")) {
                if($matKhauHienTai == $user["mat_khau"]) {
                    if($matKhau1 == "") {
                        $errors[] = "Vui lòng nhập mật khẩu mới";
                    }
                    else {
                        if(strlen($matKhau1) < 6) {
                            $errors[] = "Mật khẩu mới phải lớn hơn hoặc bằng 6 kí tự";
                        }
                        else {
                            if($matKhau1 == $matKhauHienTai) {
                                $errors[] = "Mật khẩu mới không được trùng với mật khẩu hiện tại";
                            }
                            else {
                                if($matKhau2 == "") {
                                    $errors[] = "Vui lòng xác nhận mật khẩu mới";
                                }
                                else {
                                    if($matKhau2 !== $matKhau1) {
                                        $errors[] = "Mật khẩu xác nhận không giống";
                                    }
                                }
                            }
                        }
                    }
                }
                else {
                    $errors[] = "Mật khẩu hiện tại không chính xác";
                }
            }

            if(empty($errors)) {
                updateThongTinNguoiDung($hoVaTen,$soDienThoai,$diaChi,$email);
                if($matKhau1 !== "") {
                    updatePasswordNguoiDung($matKhau1,$email);
                    $matKhauHienTai = "";
                    $matKhau1 = "";
                    $matKhau2 = "";
                }
                $thongbao = "Cập nhật thông tin thành công";
                $type = "success";
                $user = getNguoiDungEmail($email);
                $_SESSION["user"] = $user;
            }
        }

        include VIEWS_URL . "users/taikhoan.php";
    }

?>