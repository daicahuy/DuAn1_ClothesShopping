<!-- 
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pie Chart</h5>
        <div class="pie" style="height: 400px;"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Line Chart</h5>
        <div class="bars" id="pieChart" style="height: 400px;"></div>
      </div>
    </div>
  </div>
</div> -->




<div class="row">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div class="container mt-3">
    <!-- Nút chuyển đổi giới tính -->
    <a href="?url=admin/thongke&ma_loai=1"> <button class="btn gender-btn" >Nam</button> </a>
    <a href="?url=admin/thongke&ma_loai=2"> <button class="btn gender-btn" >Nữ</button> </a>
   
  </div>
  <div class="container">
    <div id="piechart" class="mt-5" style="width: 900px; height: 500px;"></div>
  
  </div>

  <script type="text/javascript">
    // Load Google Charts
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Vẽ biểu đồ
    function drawChart() {

      // Tạo dữ liệu
      var data = google.visualization.arrayToDataTable([
        ['Danh Mục', 'Số lượng']
        <?php foreach ($thongKe as $key => $tk) : ?>
          ,['<?=$tk['ten_danh_muc']?>', <?=$tk['so_luong']?>]
         <?php endforeach ?>
      
        // ['Danh Mục', 'Số lượng'],
        // ['Danh Mục 1', 11],
        // ['Danh Mục 2', 2],
        // ['Danh Mục 3', 2],
        // ['Danh Mục 4', 2],
        // ['Danh Mục 5', 7]
      ]);

      // Tùy chỉnh biểu đồ
      var options = {
        title: 'Biểu Đồ Thống Kê Sản Phẩm Theo Danh Mục'
      };

      // Vẽ biểu đồ trên element có id là 'piechart'
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
</div>

<style>
  /* Định nghĩa màu mặc định và màu hover cho nút */
  .gender-btn {
    background-color: #007bff; /* Màu nền mặc định */
    color: white; /* Màu chữ */
    border-color: #007bff; /* Màu viền */
  }

  .gender-btn:hover {
    background-color: #0056b3; /* Màu nền khi hover */
    border-color: #0056b3; /* Màu viền khi hover */
  }
</style>