<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
</head>
    
<body>

    <div class="container">
        <nav class="navbar navbar-default navbar-static-top"> 
            <div class="navbar-header">
                <a class="navbar-brand" href="#">BikeShop</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">หน้าแรก</a></li>
                    <li><a href="#">ข้อมูลสินค้า</a></li>
                    <li><a href="#">รายงาน</a></li>
                </ul>
            </div>
        </nav>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>รหัสสินค้า </th>
                    <th>ชื่อสินค้า </th>
                    <th>ราคาขาย</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P001</td>
                        <td>ชุดจักรยาน ขนาด XL</td>
                        <td>2500.00</td>
                    </tr>
                    <tr>
                        <td>P002</td>
                        <td>หมวกกันน็อก รุ่น DL330</td>
                        <td>1500.00</td>
                    </tr>
                    <tr>
                        <td>P003</td>
                        <td>ชุดเกียร์Shimano รุ่น SH-001</td>
                        <td>4500.00</td>
                    </tr>
                </tbody>
                </table>

                <a href="#" class="btn btn-default"><i class="fa fa-home"></i> หน้าหลัก </a>
                <a href="#" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก</a>
                <a href="#" class="btn btn-info"><i class="fa fa-edit"></i> แก้ไข</a>
                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> ลบ</a>

                <script>
                    toastr.success("บันทึกข้อมูลสําเร็จ");
                    toastr.error("ไม่สามารถบันทึกข้อมูลได้" );
                </script>

    </div>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>