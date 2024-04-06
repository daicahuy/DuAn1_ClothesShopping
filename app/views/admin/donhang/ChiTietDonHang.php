<div class="content-wrapper">
  <div class="invoice p-3 mb-3" style="border: 1px solid gray; width: 98%; margin: 10px auto">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h4><i class="fas fa-globe"></i> Chi tiết đơn hàng</h4>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>Tên khách hàng: </strong>Nguyễn Văn A<br />
          <strong>Địa chỉ: </strong>123 Đường ABC, Quận 1, TP.HCM<br />
          <strong>Số điện thoại: </strong>0909123456<br />
          <!-- <strong>Email: </strong>email@example.com<br> -->
        </address>
      </div>
      <!-- /.col -->
      <div style="margin-top: 10px" class="col-sm-4 invoice-col">
        <!-- <b>Mã Khuyến Mại:# MKM-01</b><br> -->
        <b>Mã DH(id_don_hang):</b> HD-02<br />
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Mã-SP(ma_chi_tiet_san_pham)</th>
              <th>Tên SP</th>
              <th>Màu Sắc</th>
              <th>Size</th>
              <th>Số lượng</th>
              <th>Đơn giá</th>
              <!-- <th>Giảm giá</th> -->
              <th>Thành tiền</th>
              <th>Trạng thái</th>
            </tr>
          </thead>
          <tbody>
            <!-- Dữ liệu mẫu -->
            <tr>
              <td>1</td>
              <td>Áo Thun</td>
              <td>Đen</td>
              <td>L</td>
              <td>2</td>
              <td>150,000 VND</td>
              <!-- <td>-30000 VND</td> -->
              <td>300,000 VND</td>
              <td>Đã giao</td>
            </tr>
            <!-- Thêm các hàng khác theo mẫu trên nếu cần -->
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Phương thức thanh toán:</p>
        <img src="<?= IMAGES_URL . 'payment/visa.png' ?>" alt="Visa" />
        <img src="<?= IMAGES_URL . 'payment/mastercard.png' ?>" alt="Mastercard" />
        <img src="<?= IMAGES_URL . 'payment/american-express.png' ?>" alt="American Express" />
        <img src="<?= IMAGES_URL . 'payment/paypal2.png' ?>" alt="Paypal" />
      </div>
      <!-- /.col -->
      <div class="col-6">
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width: 50%">Tổng Tiền:</th>
              <td>300,000 VND</td>
            </tr>
            <tr>
              <th style="width: 50%">Phí vận chuyển:</th>
              <td>30,000 VND</td>
            </tr>
            <tr>
              <th>Số Tiền Phải Trả:</th>
              <td>330,000 VND</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-12">
        <a href="?url=admin/donhang">
          <button type="button" class="btn btn-success float-right">
            Danh Sách
          </button></a>
      </div>
    </div>
  </div>
</div>