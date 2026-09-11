<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: linear-gradient(rgba(197, 173, 173, 0.44), rgba(168, 152, 201, 0.32)),url("https://media.istockphoto.com/id/1949882446/vector/teal-orange-grainy-background-banner-noise-texture-glowing-color-gradient-vibrant-dark.jpg?s=612x612&w=0&k=20&c=jsSZREbmeJc2h5IHF2xZi4lx7syOI7jSow0E_wr7fcY=");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        h2 {
            font-weight: 700;
            color: #1a1a1a; 
            margin-bottom: 30px; 
            letter-spacing: -1px;
            font-size: 28px;
        }

        .input-group { 
            margin-bottom: 20px; 
            text-align: left; 
        }
        
        label { 
            font-size: 11px; 
            font-weight: 700; 
            color: #888; 
            margin-left: 5px; 
            text-transform: uppercase;
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 14px 18px;
            border: 3px solid #eee;
            border-radius: 12px;
            box-sizing: border-box;
            outline: none;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            transition: all 0.3s ease;
            color: #333;
        }

        input:focus, select:focus {
            border-color: #4158D0;
            box-shadow: 0 0 10px rgba(65, 88, 208, 0.1);
            background-color: #fff;
        }

        .btn-container { 
            display: flex; 
            gap: 12px; 
            margin-top: 30px; 
        }

        .convert-btn {
            flex: 2;
            padding: 15px;
            border: none;
            border-radius: 12px;
            background: green;
            color: white;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(65, 88, 208, 0.3);
        }

        .star-group {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .star {
            position: absolute;
            color: #fffdef;
            opacity: 0; /* Hidden sa simula */
            transition: all 0.5s ease;
            font-size: 14px;
            filter: drop-shadow(0 0 5px #fffdef);
        }

        .star-1 { top: 10%; left: 20%; }
        .star-2 { top: 30%; left: 75%; }
        .star-3 { top: 40%; left: 15%; }
        .star-4 { top: 50%; left: 30%; }
        .star-5 { top: 20%; left: 65%; }

        .convert-btn:hover .star {
            opacity: 1;
            display: block;
            filter: drop-shadow(0 0 10px #fffdef);
        }

        .convert-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(65, 88, 208, 0.4);
            filter: brightness(1.1);
        }

        .convert-btn:hover .star-1 { transform: translate(-5px, -10px) scale(1.2); }
        .convert-btn:hover .star-2 { transform: translate(10px, 5px) scale(1.5); }
        .convert-btn:hover .star-3 { transform: translate(-8px, 8px) scale(1.1); }
        .convert-btn:hover .star-4 { transform: translate(-10px, 8px) scale(1.9); }
        .convert-btn:hover .star-5 { transform: translate(5px, -15px) scale(1.3); }

        .clear-btn {
            flex: 1;
            padding: 15px;
            text-decoration: none;
            background: #f8f9fa;
            color: #ff4757;
            border: 2px solid #f7cacd;
            border-radius: 12px;
            font-weight: 600;
            font-size: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .clear-btn:hover {
            background: #ff4757;
            color: white;
            filter: brightness(1.2);
            box-shadow: 0 4px 15px rgba(255, 71, 87, 0.3);
        }

        .result-box {
            margin-top: 25px;
            padding: 20px;
            background: #f8faff;
            border-radius: 15px;
            border-left: 5px solid #f3c642;
            text-align: left;
            animation: fadeIn 0.5s ease;
        }

        .result-label {
            font-size: 12px;
            color: #777;
            margin-bottom: 5px;
        }

        .result-value {
            font-size: 18px;
            font-weight: 700;
            color: #2f3542;
        }

        .box .square {
            position: absolute;
            backdrop-filter: blur(5px);
            box-shadow: 0 25px 45px rgba(0,0,0,0.1);
            border: 1px solid Irgba(255,255,255,0.5);
            border-right: 1px solid ☐ rgba(255,255,255,0.18);
            border-bottom: 1px solid rgba(255,255,255,0.18);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
            border-radius: 10px;
            animation: animate 10s linear infinite;
            animation-delay: calc(-1s * var(--i));
        }
        @keyframes animate
        {
            0%, 100%
            {
                transform: translateY(-40px);
            }
            50%
            {
                transform: translateY(40px);
            }
        }
        
        .box .square:nth-child(1) {
            top: -10px;
            right: 60px;
            width: 100px;
            height: 100px;
        }
        .box .square:nth-child(2) {
            top: 40%;
            right: 15%;
            width: 90px;
            height: 90px;
            z-index: 2;
        }
        .box .square:nth-child(3) {
            bottom: 100px;
            left: 90px;
            width: 50px;
            height: 50px;
            z-index: 2;
        }
        .box .square:nth-child(4) {
            top: -10px;
            left: 70px;
            width: 100px;
            height: 120px;
            z-index: 2;
        }
        .box .square:nth-child(5) {
            top: 250px;
            left: 10px;
            width: 80px;
            height: 80px;
            z-index: 2;
        }
        .box .square:nth-child(6) {
            bottom: 50px;
            right: 30px;
            width: 120px;
            height: 120px;
            z-index: 1;
            opacity: 0.6;
        }

        .box .square:nth-child(7) {
            top: 40%;
            left: 20%;
            width: 80px;
            height: 80px;
            z-index: 2;
        }

        .box .square:nth-child(8) {
            bottom: 150px;
            right: 15%;
            width: 40px;
            height: 40px;
            z-index: 2;
            background: rgba(255, 255, 255, 0.2);
        }

        .box .square:nth-child(9) {
            top: 10%;
            right: 25%;
            width: 70px;
            height: 70px;
            z-index: 1;
        }
    </style>
</head>
<body>

<div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="square" style="--i:5;"></div>
            <div class="square" style="--i:6;"></div>
            <div class="square" style="--i:7;"></div>
            <div class="square" style="--i:8;"></div>
</div>

<div class="container">
    <h2>FlexiUnit Converter</h2>
    
    <form method="POST">
        <div class="input-group">
            <label>Enter Amount</label>
            <input type="number" name="amount" step="any" placeholder="0.00" required value="<?php echo $_POST['amount'] ?? ''; ?>">
        </div>

        <div style="display: flex; gap: 10px;">
            <div class="input-group" style="flex: 1;">
                <label>From</label>
                <select name="unit_from">
                    <option value="PHP" <?php if(isset($_POST['unit_from']) && $_POST['unit_from'] == 'PHP') echo 'selected'; ?>>PHP (₱)</option>
                    <option value="M" <?php if(isset($_POST['unit_from']) && $_POST['unit_from'] == 'M') echo 'selected'; ?>>Meter (m)</option>
                    <option value="C" <?php if(isset($_POST['unit_from']) && $_POST['unit_from'] == 'C') echo 'selected'; ?>>Celsius (°C)</option>
                    <option value="PHP" <?php if(isset($_POST['unit_from']) && $_POST['unit_from'] == 'PHP') echo 'selected'; ?>>PHP (₱)(✦)</option>
                    <option value="KM" <?php if(isset($_POST['unit_from']) && $_POST['unit_from'] == 'KM') echo 'selected'; ?>>Kilometer (km)</option>
                    <option value="HRS" <?php if(isset($_POST['unit_from']) && $_POST['unit_from'] == 'HRS') echo 'selected'; ?>>Study Hours (hrs)</option>
                </select>
            </div>

            <div class="input-group" style="flex: 1;">
                <label>To</label>
                <select name="unit_to">
                    <option value="USD" <?php if(isset($_POST['unit_to']) && $_POST['unit_to'] == 'USD') echo 'selected'; ?>>USD ($)</option>
                    <option value="MM" <?php if(isset($_POST['unit_to']) && $_POST['unit_to'] == 'MM') echo 'selected'; ?>>MM (mm)</option>
                    <option value="F" <?php if(isset($_POST['unit_to']) && $_POST['unit_to'] == 'F') echo 'selected'; ?>>Fahrenheit (°F)</option>
                    <option value="USD" <?php if(isset($_POST['unit_to']) && $_POST['unit_to'] == 'USD') echo 'selected'; ?>>USD ($)</option>
                    <option value="PRIMO" <?php if(isset($_POST['unit_to']) && $_POST['unit_to'] == 'PRIMO') echo 'selected'; ?>>Primogems (✦)</option>
                    <option value="JEEP" <?php if(isset($_POST['unit_to']) && $_POST['unit_to'] == 'JEEP') echo 'selected'; ?>>Jeepney Fare (₱)</option>
                    <option value="SLEEP" <?php if(isset($_POST['unit_to']) && $_POST['unit_to'] == 'SLEEP') echo 'selected'; ?>>Sleep Status (💤)</option>
                </select>
            </div>
        </div>

        <div class="btn-container">
            <button type="submit" name="calculate" class="convert-btn">
                <span class="btn-text">Convert</span>
                <div class="star-group">
                    <span class="star star-1">★</span>
                    <span class="star star-2">★</span>
                    <span class="star star-3">★</span>
                    <span class="star star-4">★</span>
                    <span class="star star-5">★</span>
                </div>
            </button>
            <a href="?" class="clear-btn">Clear</a>
        </div>
    </form>

<?php
if(isset($_POST['calculate'])){
    $amount = $_POST['amount'];
    $from = $_POST['unit_from'];
    $to = $_POST['unit_to'];
    $result = "";

    if ($from == "PHP" && $to == "USD"){
        $calc = $amount / 58;
        $result = number_format($calc, 2) . " USD";
    }
    elseif ($from == "M" && $to == "MM"){
        $calc = $amount * 1000;
        $result = number_format($calc, 0) . " Millimeters";
    }
    elseif ($from == "C" && $to == "F"){
        $calc = ($amount * 9/5) + 32;
        $result = number_format($calc, 2) . " °F";
    }
    elseif ($from == "PHP" && $to == "PRIMO"){
        $calc = $amount / 0.75;
        $wishes = floor($calc / 160);
        $result = number_format($calc, 0) . " ✦ (Approx. " . $wishes . " Wishes)";
    }
    elseif ($from == "PHP" && $to == "USD"){
        $calc = $amount / 58;
        $result = "₱" . number_format($calc, 2) . " USD";
    }
    elseif ($from == "KM" && $to == "JEEP"){
        $base_fare = 13.00;
        $base_km = 4;
        $succeeding_rate = 1.80;
        if ($amount <= $base_km) {
            $calc = $base_fare;
        } else {
            $extra_km = $amount - $base_km;
            $calc = $base_fare + ($extra_km * $succeeding_rate);
        }
        $result = "₱" . number_format($calc, 2) . " (Jeepney Fare)";
    }
    elseif ($from == "HRS" && $to == "SLEEP"){
        if ($amount <= 2) {
            $result = "ZOMBIE MODE 🧟 (Kape pa more!)";
        } elseif ($amount > 2 && $amount <= 5) {
            $result = "EYE BAGS LEVEL: PRO 🐼";
        } elseif ($amount > 5 && $amount <= 8) {
            $result = "HEALTHY SCHOLAR ✨";
        } else {
            $result = "OVER SLEEPING 😴 (Late ka na!)";
        }
    }
    else { $result = "N/A"; }

    echo "
    <div class='result-box'>
        <div class='result-label'>Conversion Result:</div>
        <div class='result-value'>$result</div>
    </div>";
}
?>

</div>

</body>
</html>