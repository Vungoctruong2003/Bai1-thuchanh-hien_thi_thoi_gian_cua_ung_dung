
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <caption><h1>Danh sách khách hàng</h1></caption>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $customerList = [
        "1" => [
            "ten" => "Jisoo",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Hà Nội",
            "anh" => "images/img1.jpeg"
        ],
        "2" => [
            "ten" => "Lisa",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Bắc Giang",
            "anh" => "images/img2.jpeg"
        ],
        "3" => [
            "ten" => "Jennie",
            "ngaysinh" => "1983-08-21",
            "diachi" => "Nam Định",
            "anh" => "images/img3.jpeg"
        ],
        "4" => [
            "ten" => "IU",
            "ngaysinh" => "1983-08-22",
            "diachi" => "Hà Tây",
            "anh" => "images/img4.jpeg"
        ],
        "5" => [
            "ten" => "Rose",
            "ngaysinh" => "1983-08-17",
            "diachi" => "Hà Nội",
            "anh" => "images/img5.jpeg"
        ]
    ];

    ?>
    <?php foreach ($customerList as $key => $value): ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value['ten'] ?></td>
            <td><?php echo $value['ngaysinh'] ?></td>
            <td><?php echo $value['diachi'] ?></td>
            <td><img src="<?php echo $value['anh'] ?>" alt="" width="200"></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>

