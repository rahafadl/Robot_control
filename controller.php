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

if (isset($_POST['direction'])) {
    $direction = $_POST['direction'];

    // إدخال الاتجاه في قاعدة البيانات
    $sql = "INSERT INTO directions (direction) VALUES ('$direction')";

    if ($conn->query($sql) === TRUE) {
        // إعادة التوجيه إلى صفحة عرض النتائج بعد تخزين البيانات
        header("Location: last_direction.php");
        exit(); // تأكد من أن السكربت سيتوقف بعد التوجيه
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
