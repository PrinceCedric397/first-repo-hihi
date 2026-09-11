<?php
session_start();

// Handle logic before any HTML is sent
if (isset($_POST['start_test'])) {
    $_SESSION['user'] = htmlspecialchars($_POST['user']);
    $_SESSION['test_type'] = $_POST['test_type'];
    
    // Redirect based on the test type chosen
    if ($_POST['test_type'] == "logic") {
        header("Location: q1.php");
    } else {
        header("Location: q1.php");
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Portal</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Prevents users from going back to the login after starting
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    </script>
</head>
<body>

<div class="login-card">
    <div class="card-header">
        <h2>Skill Assessment</h2>
        <p>Enter your details to begin the evaluation.</p>
    </div>

    <form method="post" class="login-form">
        <div class="input-group">
            <label>Full Name</label>
            <input type="text" name="user" placeholder="e.g. Alex Smith" required>
        </div>

        <div class="input-group">
            <label>Select Test Type</label>
            <select name="test_type">
                <option value="logic">Logical Reasoning</option>
                <option value="verbal">Verbal Ability</option>
            </select>
        </div>

        <button type="submit" name="start_test" class="btn-submit">Start Assessment</button>
    </form>
</div>

</body>
</html>

