<?php
session_start();

// 1. Capture the final answer from q5 before processing
if(isset($_POST['answer'])) {
    $_SESSION['q5_answer'] = $_POST['answer'];
}

// Check if user is even logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// 2. Define Correct Answers (Make sure these match your q1-q5 choices)
$correct_answers = [
    'q1_answer' => 'C', 
    'q2_answer' => 'A', 
    'q3_answer' => 'B',
    'q4_answer' => 'D',
    'q5_answer' => 'C'
];

// 3. Calculate Score
$score = 0;
foreach($correct_answers as $q_key => $correct_val) {
    if(isset($_SESSION[$q_key]) && $_SESSION[$q_key] == $correct_val) {
        $score++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results - Quiz System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-card">
    <div class="card-header">
        <h2>Assessment Complete!</h2>
        <p>Well done, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong>!</p>
    </div>

    <div class="score-circle">
        <span class="score-num"><?php echo $score; ?></span>/5
    </div>

    <p style="margin-bottom: 25px;">Final Score: <strong><?php echo ($score / 5) * 100; ?>%</strong></p>

    <div class="button-group">
        <a href="login.php" class="btn-submit" style="text-decoration:none; display:block; margin-bottom: 10px;">
            Try Again
        </a>
        
        <a href="logout.php" class="btn-logout" style="text-decoration:none; display:block;">
            Log Out & Exit
        </a>
    </div>
</div>

</body>
</html>