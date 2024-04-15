<div class="card">
    <div class="card-body">
        <?php if (isset($_GET['tb']) && isset($_GET['type'])) { ?>
            <div class='alert alert-<?= $_GET['type'] ?>' role='alert'> <?= $_GET['tb'] ?? '' ?> </div>
        <?php } ?>
        <h5 class="card-title">Danh sách người dùng</h5>
        <a  href="index.php?url=admin/nguoidung">
            <button type="button" name="resset" class="btn btn-secondary ">
                Quay Lại
            </button>
        </a>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                        <th>Quyền</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $i = 1;
                    foreach ($listNguoiDung as $key => $NguoiDung) :


                        if ($NguoiDung['trang_thai'] == 0) {
                    ?>

                            <tr>

                                <td><?php echo $i ?></td>
                                <td>
                                    <img src="<?= IMAGES_URL . $NguoiDung['anh_dai_dien'] ?>" alt="ảnh sản phẩm" style="object-fit: cover; width: 60px; height:60px;">
                                </td>
                                <td><?= $NguoiDung['ho_va_ten'] ?></td>
                                <td><?= $NguoiDung['email'] ?></td>
                                <td><?= $NguoiDung['so_dien_thoai'] ?></td>
                                <td><?php

                                    if ($NguoiDung['quyen'] > 0) {
                                        echo "Quản Trị";
                                    } else {
                                        echo "Người Dùng";
                                    }
                                    ?></td>



                                < <!-- <td>Nguyen Huu Huy</td>
                                    <td>Áo Thun SUPIMA COTTON Cổ Tròn Ngắn Tay</td>
                                    <td>Quần</td>
                                    <td>Quần</td> -->
                                    <td>

                                        <a onclick="return confirm('Bạn có chắc muốn mở tài khoản không')" href="index.php?url=admin/nguoidung/hien&ma_nguoi_dung=<?= $NguoiDung['ma_nguoi_dung'] ?>">
                                            <button type="button" name="resset" class="btn btn-danger btn-sm">
                                                Mở khóa
                                            </button>
                                        </a>

                                    </td>
                                    <? ?>
                            </tr>



                    <?php $i++;
                        }
                    endforeach; ?>

                    </tr>




            </table>
        </div>

    </div>
</div>