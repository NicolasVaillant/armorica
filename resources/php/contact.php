<?php
declare(strict_types=1);

session_start();
header('Content-Type: application/json; charset=utf-8');

require __DIR__ . '/vendor/autoload.php';

if (!class_exists(\PHPMailer\PHPMailer\PHPMailer::class)) {
    http_response_code(500);
    echo json_encode(['error' => 'PHPMailer non chargé']);
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Méthode non autorisée']);
    exit;
}

if (!empty($_POST['website'] ?? '')) {
    echo json_encode(['ok' => true]);
    exit;
}

$nom = trim($_POST['nom'] ?? '');
$email = trim($_POST['email'] ?? '');
$telephone = trim($_POST['telephone'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($nom === '' || $email === '' || $telephone === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Champs obligatoires manquants']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
http_response_code(400);
echo json_encode(['ok' => false, 'error' => 'Email invalide']);
exit;
}

$SMTP_HOST = 'smtp.hostinger.com';
$SMTP_PORT = 465;
$SMTP_USER = '';
$SMTP_PASS = '';
$SMTP_SECURE = PHPMailer::ENCRYPTION_SMTPS;

$TO_EMAIL = '';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = $SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = $SMTP_USER;
    $mail->Password = $SMTP_PASS;
    $mail->SMTPSecure = $SMTP_SECURE;
    $mail->Port = $SMTP_PORT;
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->Timeout = 10;
    $mail->setFrom($SMTP_USER, 'Site CrossFit Armorica');
    $mail->addAddress($TO_EMAIL);
    $mail->addReplyTo($email, $nom);

    $mail->Subject = 'Nouvelle demande de contact';
    $mail->Body =
        "Nom : $nom\n" .
        "Email : $email\n" .
        "Téléphone : $telephone\n\n" .
        "Message :\n$message\n\n";

    $mail->send();
    echo json_encode(['ok' => true]);
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'ok' => false,
        'error' => 'Erreur SMTP',
        'debug' => $mail->ErrorInfo
    ]);
}