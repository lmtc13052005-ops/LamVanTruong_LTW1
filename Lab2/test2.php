<?php
// Khởi tạo mảng môn học
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
$totalSubjects = count($subjects);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 - Bài 2: Danh sách môn học</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f4f6f9;
        }

        .s1 {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 10px;
        }

        .s1 .total {
            text-align: center;
            color: #495057;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .s1 ul {
            list-style: none;
        }

        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            color: #1e293b;
            font-weight: 500;
            transition: 0.3s;
        }

        .s1 li:hover {
            background: #cfe2ff;
            color: #084298;
            transform: translateX(5px);
        }
    </style>
</head>
<body>
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <p class="total">Tổng số môn học: <strong><?= $totalSubjects ?></strong></p>
        <ul>
            <!-- Hiển thị dữ liệu -->
            <?php
            foreach ($subjects as $subject) {
                echo "<li>" . htmlspecialchars($subject) . "</li>";
            }
            ?>
        </ul>
    </section>
</body>
</html>