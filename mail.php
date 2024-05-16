<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // 构建邮件内容
    $to = '1104052655@qq.com';
    $subject = 'Contact Form Submission';
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Address: $address\n";

    // 发送邮件
    $headers = 'From: your-email@example.com' . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // 使用mail()函数发送邮件
    mail($to, $subject, $message, $headers);

    // 返回成功响应给前端
    echo 'success';
} else {
    // 返回错误响应给前端
    echo 'error';
}
?>
