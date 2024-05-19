<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cosmetics";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

var_dump($conn);exit;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['mes'];

    // Validate form inputs (simple validation)
    if (empty($fullname) || empty($email) || empty($message)) {
        $_SESSION['message'] = 'Vui lòng điền đầy đủ thông tin.';
        header('Location: lienhe.php');
        exit();
    }

    // Chuẩn bị và thực thi truy vấn SQL để lưu dữ liệu
    $stmt = $con->prepare("INSERT INTO contacts (fullname, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $message);

    if ($stmt->execute()) {
        $_SESSION['message'] = 'Cảm ơn bạn đã liên hệ. Chúng tôi sẽ phản hồi trong thời gian sớm nhất.';
    } else {
        $_SESSION['message'] = 'Có lỗi xảy ra. Vui lòng thử lại.';
    }

    $stmt->close();
    $conn->close();

    header('Location: lienhe.php');
    exit();
}
?>
