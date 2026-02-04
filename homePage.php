<?php
$message = "🎉 مبروك 🎉";
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>مبروك</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', Arial, sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            display: flex;
            justify-content: center;
            align-items: center;
            direction: rtl;
        }

        .box {
            background: white;
            padding: 40px 60px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 15px 30px rgba(0,0,0,0.25);
            animation: pop 0.8s ease;
        }

        .box h1 {
            font-size: 40px;
            color: #0072ff;
            margin-bottom: 10px;
        }

        .box p {
            font-size: 18px;
            color: #444;
        }

        @keyframes pop {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
</head>
<body>

    <div class="box">
        <h1><?php echo $message; ?></h1>
        <p>تم الدخول بنجاح ✅</p>
    </div>

</body>
</html>