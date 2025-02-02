<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_control";

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استعلام لجلب آخر اتجاه تم تخزينه
$sql = "SELECT direction, timestamp FROM directions ORDER BY timestamp DESC LIMIT 1";
$result = $conn->query($sql);

$last_direction = "";
$timestamp = "";

if ($result->num_rows > 0) {
    // استرجاع البيانات
    $row = $result->fetch_assoc();
    $last_direction = $row['direction'];
    $timestamp = $row['timestamp'];
} else {
    $last_direction = "لا توجد بيانات";
    $timestamp = "غير محدد";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>آخر اتجاه للروبوت</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>عرض آخر اتجاه تم تخزينه للروبوت</h1>
    <div class="result">
        <p><strong>الاتجاه الأخير: </strong><?php echo $last_direction; ?></p>
        <p><strong>تم التخزين في: </strong><?php echo $timestamp; ?></p>
    </div>
    <p><a href="index.html">العودة إلى الصفحة الرئيسية</a></p>
</body>
</html>
