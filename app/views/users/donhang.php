<main id="main" class="" style="padding-bottom: 50px;">



    <div class="my-account-header page-title normal-title">


        <div class="page-title-inner flex-row container text-left">
            <div class="flex-col flex-grow medium-text-center">
                <h1 class="uppercase mb-0">My Account</h1>
            </div>
        </div>
    </div>

    <div class="page-wrapper my-account" style="margin-top: 30px;">
        <div class="container" role="main">


            <div class="row vertical-tabs">
                <div class="col-md-3" style="border-right: 1px solid #ccc;">
                    <div class="account-user circle">
                        <span class="image mr-half inline-block">
                            <img alt="" src="<?php echo IMAGES_URL . $_SESSION["user"]["anh_dai_dien"] ?>" height="70" width="70" style="border-radius: 50%;">
                        </span>
                        <span class="user-name inline-block" style="margin-left: 10px;">
                            <?php echo $_SESSION["user"]["email"] ?>
                        </span>

                    </div>


                    <ul class="nav nav-line nav-uppercase nav-vertical" style="margin-top: 15px;">

                        <li style="border-bottom: 1px solid #ccc;">
                            <a href="?url=taikhoan">Tài khoản</a>
                        </li>
                        <li style="border-bottom: 1px solid #ccc;">
                            <a href="?url=taikhoan/donhang">Đơn hàng</a>
                        </li>
                        <li style="border-bottom: 1px solid #ccc;">
                            <a href="">Thoát</a>
                        </li>
                    </ul>

                </div>

                <div class="col-md-9">

                    <style>
                        .actions-search-container {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            margin: 20px 10px;
                        }

                        .action-buttons a {
                            margin-right: 10px;
                            /* Tạo khoảng cách giữa các nút */
                        }

                        .search-container form {
                            display: flex;
                        }

                        .search-container input[type="text"] {
                            padding: 5px 10px;
                            border: 1px solid #ccc;
                            border-radius: 5px 0 0 5px;
                            /* Bo tròn góc bên trái */
                        }

                        .search-container button {
                            padding: 5px 10px;
                            border: none;
                            background: #007bff;
                            color: white;
                            border-radius: 5px;
                            /* Bo tròn góc bên phải */
                            cursor: pointer;
                        }

                        .search-container button:hover {
                            background: #0056b3;
                        }
                    </style>

                    <div class="content-wrapper">
                        <div class="card" style="border: 1px solid gray; width: 98%; margin: 10px auto;">
                            <div class="card-header border-0">
                                <h3 style="margin: 15px;">Chờ xác nhận</h3>
                            </div>
                            <div class="actions-search-container" style="display: flex; justify-content: space-between; align-items: center; margin: 20px 10px;">
                                <div class="action-buttons">
                                    <a href="#" class="btn btn-primary">Chờ xác nhận</a>
                                    <a href="#" class="btn btn-warning">Đang đóng gói</a>
                                    <a href="#" class="btn btn-info">Đang vận chuyển</a>
                                    <a href="#" class="btn btn-success">Đã giao</a>
                                    <a href="#" class="btn btn-danger">Hủy</a>
                                </div>
                                <div class="search-container">
                                    <form action="#" method="GET">
                                        <input type="text" placeholder="Tìm kiếm..." name="searchQuery" style="margin-right: 5px;">
                                        <button type="submit">Tìm</button>
                                    </form>
                                </div>
                            </div>



                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ngày lập hóa đơn</th>
                                            <th>Tên khách hàng</th>
                                            <!-- <th>Tổng hóa đơn</th> -->
                                            <th>Tổng tiền</th>
                                            <th>Trạng thái</th>
                                            <th>Hành động</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <!-- Dữ liệu mẫu -->
                                        <tr>
                                            <td>1</td>
                                            <td>2022-01-01</td>
                                            <td>Nguyễn Văn A</td>
                                            <!-- <td>2</td> -->
                                            <td>500,000 VND</td>
                                            <td>Chờ xác nhận</td>
                                            <td>
                                                <a href="?url=taikhoan/chitiet" class="btn btn-primary">
                                                    <i class="bi bi-eye-fill"></i>
                                                </a>
                                                <a href="GiaoKhongThanhCong.html" class="btn btn-danger" style="margin: 0 10px;">
                                                    <i class="bi bi-x-circle-fill"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>2022-01-01</td>
                                            <td>Nguyễn Văn A</td>
                                            <!-- <td>2</td> -->
                                            <td>500,000 VND</td>
                                            <td>Chờ xác nhận</td>
                                            <td>
                                                <a href="?url=admin/donhang/chitietdonhang" class="btn btn-primary">
                                                    <i class="bi bi-eye-fill"></i>
                                                </a>
                                                <a href="GiaoKhongThanhCong.html" class="btn btn-danger" style="margin: 0 10px;">
                                                    <i class="bi bi-x-circle-fill"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>2022-01-01</td>
                                            <td>Nguyễn Văn A</td>
                                            <!-- <td>2</td> -->
                                            <td>500,000 VND</td>
                                            <td>Chờ xác nhận</td>
                                            <td>
                                                <a href="?url=admin/donhang/chitietdonhang" class="btn btn-primary">
                                                    <i class="bi bi-eye-fill"></i> <!--Chi tiết-->
                                                </a>
                                                <a href="GiaoKhongThanhCong.html" class="btn btn-danger" style="margin: 0 10px;">
                                                    <i class="bi bi-x-circle-fill"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <!-- Thêm các hàng khác theo mẫu trên nếu cần -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <div class="pagination-container" style="display: flex; justify-content: center;">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#">&laquo; Trước</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Tiếp theo &raquo;</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>


        </div>
    </div>



</main>