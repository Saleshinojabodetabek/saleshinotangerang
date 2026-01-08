<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ===== Verifikasi reCAPTCHA =====
    $recaptchaSecret = "RECAPTCHA_SECRET_KEY";
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

    $verify = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}"
    );

    $captchaSuccess = json_decode($verify, true);

    if (!empty($captchaSuccess['success']) && $captchaSuccess['success'] === true) {

        // ===== Proses Login =====
        $username = trim($_POST['username']);
        $password = $_POST['password'];

        $query = $conn->prepare("SELECT * FROM admin WHERE username = ?");
        $query->bind_param("s", $username);
        $query->execute();
        $result = $query->get_result()->fetch_assoc();

        if ($result && password_verify($password, $result['password'])) {
            $_SESSION['admin'] = $result['username'];
            header("Location: index.php");
            exit;
        } else {
            $error = "Username atau password salah!";
        }

    } else {
        $error = "Verifikasi reCAPTCHA gagal. Silakan coba lagi.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
        function onSubmit(token) {
            document.getElementById("login-form").submit();
        }
    </script>
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-light">

<div class="card shadow p-4" style="width:350px;">
    <h3 class="text-center mb-3">Login Admin</h3>

    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form id="login-form" method="POST">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required autocomplete="username">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required autocomplete="current-password">
        </div>

        <button
            class="btn btn-primary w-100 g-recaptcha"
            data-sitekey="RECAPTCHA_SITE_KEY"
            data-callback="onSubmit"
            data-action="submit">
            Login
        </button>
    </form>
</div>

</body>
</html>
