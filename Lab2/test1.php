<?php
// 1. Mảng menu
$menus = [
    "Trang chủ",
    "Tin tức",
    "Liên hệ",
    "Giới thiệu"
];

// 2. Mảng danh sách môn học
$subjects = [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "MySQL"
];

// 3. Mảng nhiều chiều danh sách sinh viên
$students = [
    [
        "ma_sv" => "SV001",
        "ho_ten" => "Nguyễn Văn An",
        "gioi_tinh" => "Nam",
        "lop" => "CNTT1"
    ],
    [
        "ma_sv" => "SV002",
        "ho_ten" => "Trần Thị Bình",
        "gioi_tinh" => "Nữ",
        "lop" => "CNTT2"
    ],
    [
        "ma_sv" => "SV003",
        "ho_ten" => "Lê Văn Cường",
        "gioi_tinh" => "Nam",
        "lop" => "CNTT1"
    ],
    [
        "ma_sv" => "SV004",
        "ho_ten" => "Phạm Thị Dung",
        "gioi_tinh" => "Nữ",
        "lop" => "CNTT3"
    ]
];

// 4. Dữ liệu cho Form đăng ký thông tin sinh viên
$faculties = [
    "Công nghệ thông tin",
    "Quản trị kinh doanh",
    "Kế toán",
    "Ngôn ngữ Anh"
];

$classes = [
    "A1" => "CNTT1",
    "A2" => "CNTT2",
    "A3" => "CNTT3",
    "A4" => "CNTT4"
];

$genders = ["Nam", "Nữ", "Khác"];

$hobbies = [
    "LT" => "Lập trình",
    "DS" => "Đọc sách",
    "AN" => "Âm nhạc",
    "DL" => "Du lịch",
    "TT" => "Thể thao"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 - test1.php</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            background-color: #ffffff;
            color: #111111;
            padding-bottom: 40px;
        }

        /* ===== 1. Menu ngang ===== */
        nav {
            background: rgb(4, 40, 94);
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav li {
            flex: 1;
            transition: background 0.3s ease;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            display: block;
            padding: 15px;
            text-align: center;
        }

        nav ul li:hover {
            background: #084298;
        }

        /* ===== 2. Section 1: Danh sách môn học ===== */
        .s1 {
            max-width: 560px;
            margin: 28px auto;
            background: #fff;
            padding: 24px 28px;
            border-radius: 14px;
            box-shadow: 0 0 18px rgba(0, 0, 0, 0.12);
        }

        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .s1 ul {
            list-style: none;
        }

        .s1 li {
            padding: 12px 16px;
            margin-bottom: 12px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            font-size: 17px;
            transition: 0.3s;
        }

        .s1 li:last-child {
            margin-bottom: 0;
        }

        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }

        /* ===== 3. Section 2: Danh sách sinh viên ===== */
        .s2 {
            max-width: 860px;
            margin: 28px auto;
            background: #fff;
            padding: 20px 24px;
            box-shadow: 0 0 16px rgba(0, 0, 0, 0.12);
        }

        .s2 h3 {
            margin-bottom: 12px;
            font-size: 18px;
            font-weight: bold;
        }

        .s2 table {
            width: 100%;
            border-collapse: collapse;
        }

        .s2 table th,
        .s2 table td {
            border: 1px solid gainsboro;
            text-align: center;
            padding: 10px;
        }

        .s2 thead {
            background-color: blue;
            color: white;
        }

        .s2 tbody tr:nth-child(odd) {
            background-color: #0000ff0c;
        }

        .s2 tbody tr:hover {
            background-color: #0000ff57;
        }

        /* ===== 4. Section 3: Form đăng ký thông tin sinh viên ===== */
        .s3 {
            max-width: 680px;
            margin: 28px auto;
            background: #fff;
            padding: 24px 28px;
            border-radius: 12px;
            box-shadow: 0 0 16px rgba(0, 0, 0, 0.12);
        }

        .s3 h3 {
            text-align: center;
            color: #0d6efd;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .s3 .form-row {
            margin-bottom: 15px;
        }

        .s3 .form-label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .s3 input[type="text"],
        .s3 select {
            width: 100%;
            padding: 9px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 15px;
            background: #fff;
        }

        .s3 input[type="text"]:focus,
        .s3 select:focus {
            outline: none;
            border-color: #0d6efd;
        }

        .s3 .choice-group {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .s3 .choice-item {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
        }

        .s3 .choice-item:hover {
            background: #e7f1ff;
        }

        .s3 .btn-group {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .s3 button {
            flex: 1;
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .s3 button[type="submit"] {
            background: #0d6efd;
            color: #fff;
        }

        .s3 button[type="submit"]:hover {
            background: #084298;
        }

        .s3 button[type="reset"] {
            background: #e2e8f0;
            color: #111111;
        }

        .s3 button[type="reset"]:hover {
            background: #cbd5e1;
        }
    </style>
</head>
<body>
    <!-- header -->
    <nav>
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li>
                    <a href="#"><?= htmlspecialchars($menu) ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <!-- main -->
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul>
            <?php
            foreach ($subjects as $subject) {
                echo "<li>" . htmlspecialchars($subject) . "</li>";
            }
            ?>
        </ul>
    </section>

    <section class="s2">
        <h3>Danh sách sinh viên</h3>
        <table>
            <!-- head -->
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã SV</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Lớp</th>
                </tr>
            </thead>
            <!-- body -->
            <tbody>
                <?php foreach ($students as $index => $sv): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($sv["ma_sv"]) ?></td>
                        <td><?= htmlspecialchars($sv["ho_ten"]) ?></td>
                        <td><?= htmlspecialchars($sv["gioi_tinh"]) ?></td>
                        <td><?= htmlspecialchars($sv["lop"]) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <section class="s3">
        <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>
        <form action="#" method="post">
            <div class="form-row">
                <label class="form-label" for="fullname">Họ và tên</label>
                <input type="text" id="fullname" name="fullname" placeholder="Nhập họ và tên">
            </div>

            <div class="form-row">
                <label class="form-label" for="faculty">Khoa</label>
                <select id="faculty" name="faculty">
                    <?php foreach ($faculties as $faculty) { ?>
                        <option value="<?= htmlspecialchars($faculty) ?>"><?= htmlspecialchars($faculty) ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-row">
                <label class="form-label" for="class">Lớp</label>
                <select id="class" name="class">
                    <?php foreach ($classes as $key => $class) { ?>
                        <option value="<?= htmlspecialchars($key) ?>"><?= htmlspecialchars($class) ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-row">
                <span class="form-label">Giới tính</span>
                <div class="choice-group">
                    <?php foreach ($genders as $gender) { ?>
                        <label class="choice-item">
                            <input type="radio" name="gender" value="<?= htmlspecialchars($gender) ?>">
                            <?= htmlspecialchars($gender) ?>
                        </label>
                    <?php } ?>
                </div>
            </div>

            <div class="form-row">
                <span class="form-label">Sở thích</span>
                <div class="choice-group">
                    <?php foreach ($hobbies as $key => $hobby) { ?>
                        <label class="choice-item">
                            <input type="checkbox" name="hobbies[]" value="<?= htmlspecialchars($key) ?>">
                            <?= htmlspecialchars($hobby) ?>
                        </label>
                    <?php } ?>
                </div>
            </div>

            <div class="btn-group">
                <button type="submit">Đăng ký</button>
                <button type="reset">Làm mới</button>
            </div>
        </form>
    </section>
</body>
</html>