<?php
require '../connection/connection.php';

if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $stmt = $pdo->prepare("SELECT otpstatus, otp_type FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $user = [
            'otpstatus' => $user['otpstatus'],
            'otp_type' => $user['otp_type'],
        ];
        echo json_encode($user);
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
