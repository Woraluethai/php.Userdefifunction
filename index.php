<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>รายชื่อพนักงานทั้งหมด</title>

  <style>
    body {
      background-color: #f4f6f9;
    }

    .table thead {
      background-color: #343a40;
      color: white;
    }

    .table th, .table td {
      text-align: center;
      vertical-align: middle;
    }

    .table-striped tbody tr:nth-child(odd) {
      background-color: #f9f9f9;
    }

    .btn-warning, .btn-danger, .btn-info {
      font-size: 14px;
    }

    .btn-warning {
      background-color: #ffc107;
      border-color: #ffc107;
    }

    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-info {
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }

    .container {
      margin-top: 20px;
    }

    .form-control {
      height: 40px;
      font-size: 16px;
    }

    h1 {
      color: #343a40;
      font-family: 'Arial', sans-serif;
    }

    .text-center {
      text-align: center;
    }

    .table td {
      word-wrap: break-word;
    }

    .table-hover tbody tr:hover {
      background-color: #e9ecef;
    }
  </style>
</head>

<body>
  <div class="container">
    <?php
    require("nav.php");
    ?>
    <h1 class="text-center mt-3">รายชื่อพนักงานทั้งหมด</h1>
    <form action="searchdata.php" class="form-group my-3" method="POST">
      <div class="row">
        <div class="col-6">
          <input type="text" placeholder="กรอกชื่อหรือนามสกุลที่ต้องการค้น" class="form-control" name="emp_data" required>
        </div>
        <div class="col-6">
          <input type="submit" value="ค้นหาข้อมูลพนักงาน" class="btn btn-info">
        </div>
      </div>
    </form>

    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>คำนำหน้า</th>
          <th>ชื่อ</th>
          <th>สกุล</th>
          <th>วันเกิด</th>
          <th>ที่อยู่ปัจจุบัน</th>
          <th>ทักษะความสามารถ</th>
          <th>เบอร์โทรศัพท์</th>
          <th>จัดการ</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $order++; ?></td>
            <td><?php echo $row["emp_title"]; ?></td>
            <td><?php echo $row["emp_name"]; ?></td>
            <td><?php echo $row["emp_surname"]; ?></td>
            <td><?php echo $row["emp_birthday"]; ?></td>
            <td><?php echo $row["emp_adr"]; ?></td>
            <td><?php echo $row["emp_skill"]; ?></td>
            <td><?php echo $row["emp_tel"]; ?></td>
            <td>
              <a href="editformdata.php?id=<?php echo $row["emp_id"]; ?>" class="btn btn-warning btn-sm">แก้ไข</a>
              <a href="deletedata.php?id=<?php echo $row["emp_id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่?');">ลบ</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <a href="insertform.php" class="btn btn-success">กรอกข้อมูลพนักงาน</a>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
