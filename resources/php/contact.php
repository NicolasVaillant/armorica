<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Méthode non autorisée.']);
    exit;
}

// Simple rate limit (per session)
session_start();
$now = time();
if (!isset($_SESSION['last_submit'])) {
    $_SESSION['last_submit'] = 0;
}
if ($now - $_SESSION['last_submit'] < 10) { // 10 seconds
    http_response_code(429);
    echo json_encode(['ok' => false, 'error' => 'Trop de tentatives. Merci de réessayer dans quelques secondes.']);
    exit;
}
$_SESSION['last_submit'] = $now;

$to = 'RECEIVER';
$subject = 'Nouvelle demande de contact (site CrossFit)';

// Honeypot (bots fill it)
$honeypot = trim($_POST['website'] ?? '');
if ($honeypot !== '') {
    // Pretend it's OK to avoid helping bots
    echo json_encode(['ok' => true]);
    exit;
}

// Read & sanitize inputs
$nom = trim($_POST['nom'] ?? '');
$email = trim($_POST['email'] ?? '');
$telephone = trim($_POST['telephone'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($nom === '' || $email === '' || $telephone === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Merci de remplir tous les champs obligatoires.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Adresse e-mail invalide.']);
    exit;
}

// Basic phone sanity (accepts +, digits, spaces, (), -, .)
if (!preg_match('/^[0-9+\s().-]{6,25}$/', $telephone)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Numéro de téléphone invalide.']);
    exit;
}

// Prevent header injection
$nom_safe = str_replace(["\r", "\n"], ' ', $nom);
$email_safe = str_replace(["\r", "\n"], ' ', $email);

// Email body
$body = "Nouvelle demande de contact via le site:\n\n";
$body .= "Nom: {$nom_safe}\n";
$body .= "Email: {$email_safe}\n";
$body .= "Téléphone: {$telephone}\n\n";
$body .= "Message:\n{$message}\n\n";
$body .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";
$body .= "User-Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'unknown') . "\n";

// Headers (Reply-To is useful)
$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=utf-8';
$headers[] = 'From: Site CrossFit <no-reply@' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '>';
$headers[] = 'Reply-To: ' . $nom_safe . ' <' . $email_safe . '>';

$headers_str = implode("\r\n", $headers);

// Send mail
$ok = @mail($to, $subject, $body, $headers_str);

if (!$ok) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => "L'envoi a échoué côté serveur."]);
    exit;
}

echo json_encode(['ok' => true, 'status' => "END SCRIPT"]);