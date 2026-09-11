<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session cookie if it exists
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: login.php");
exit();
?>

<?php
session_start();

// 1. Capture the name for the thank you message before destroying the session
$userName = isset($_SESSION['user']) ? htmlspecialchars($_SESSION['user']) : "Guest";

// 2. Clear and Destroy the session
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;url=index.php">
    <title>Thank You</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #764ba2;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="card-header">
        <div style="font-size: 3rem; margin-bottom: 10px;">👋</div>
        <h2>Thank You, <?php echo $userName; ?>!</h2>
        <p>Your assessment results have been saved.</p>
    </div>

    <div class="content">
        <p>You are being logged out...</p>
        <div class="loader"></div>
        <p style="font-size: 0.8rem; color: #999;">Redirecting to login in 3 seconds</p>
    </div>
    
    <div class="button-group">
        <a href="index.php" style="color: #764ba2; font-size: 0.9rem;">Click here if not redirected</a>
    </div>
</div>

</body>
</html>