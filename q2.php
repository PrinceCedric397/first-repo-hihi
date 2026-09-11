<?php
session_start();
if(isset($_POST['answer'])) {
    $_SESSION['q3_answer'] = $_POST['answer']; // Store answer from q1
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question 2 - Skill Assessment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="quiz-page">

<div class="quiz-container">
    <div class="quiz-header">
        <span>Question 2 of 5</span>
        <div id="timer">00:30</div>
    </div>
    
    <div class="progress-bar">
        <div class="progress-fill" style="width: 20%;"></div>
    </div>

    <div class="question-box">
        <h3>Welcome, <?php echo $_SESSION['user']; ?>!</h3>
        <p class="question-text">Which of the following is a server-side scripting language?</p>
        
        <form action="q3.php" method="post" id="quizForm">
            <label class="option-container">
                <input type="radio" name="answer" value="A" required>
                <span class="checkmark"></span> HTML
            </label>
            
            <label class="option-container">
                <input type="radio" name="answer" value="B">
                <span class="checkmark"></span> CSS
            </label>
            
            <label class="option-container">
                <input type="radio" name="answer" value="C">
                <span class="checkmark"></span> PHP
            </label>
            
            <label class="option-container">
                <input type="radio" name="answer" value="D">
                <span class="checkmark"></span> JavaScript (Client-side)
            </label>

            <button type="submit" class="btn-next">Submit & Next</button>
        </form>
    </div>
</div>

<script>
    // Simple Countdown Timer
    let timeLimit = 30;
    const timerDisplay = document.getElementById('timer');
    
    const countdown = setInterval(() => {
        timeLimit--;
        let seconds = timeLimit < 10 ? "0" + timeLimit : timeLimit;
        timerDisplay.textContent = "00:" + seconds;
        
        if (timeLimit <= 0) {
            clearInterval(countdown);
            alert("Time is up! Submitting automatically.");
            document.getElementById('quizForm').submit();
        }
    }, 1000);
</script>

</body>
</html>