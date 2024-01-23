<!DOCTYPE html>
<html lang="en">
	<script language="JavaScript">
        var pass_entered;
        var password = "srush";

        while (true) {
            pass_entered = prompt(' تکایە پاسۆرد بنوسە:', '');

            if (pass_entered === password) {
                alert('    داخڵ بویت بەخێربێیت  !');
                break;
            } else {
                alert('  پاسۆردەکە هەلە بوو .تکایە هەوڵبدەرەوە.');
            }
        }
    </script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بەخێربێت.لێرە تەنها دەتوانیت رەسم بکەیت بە لینکی راستەوخۆ </title>
    <style>
        body {
            background-image: url('background-image.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .header {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 10px;
            background-color: #333;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000; /* تحديد الترتيب الظاهر للعناصر */
        }

        .header a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        h1 {
            font-size: 2em;
            position: relative;
            margin-top: 50px;
        }

        h1::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: #fff;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        form {
            margin-top: 20px;
            position: relative;
        }

        input[type="file"] {
            display: none;
        }

        label {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
            display: block;
        }

        button {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .file-message {
            margin-top: 10px;
            color: #2ecc71;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            margin: 0 10px;
            color: #fff;
            font-size: 24px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            padding: 10px;
            background-color: #333;
            width: 100%;
            z-index: 1000;
        }
    </style>
</head>
<body>

    <div class="header">
        <a href="https://t.me/tbtgt">چەناڵی تێلیگرام</a>
        <a href="https://t.me/pvppz">تێلیگرامی تایبەت</a>
        <a href="https://t.me/phpandhtml">چەناڵی تێلیگرام دووەم</a>
    </div>

    <h1>  بەخێربێت لێرە تەنها رەسمێک ئەنرێریت و راستەوخۆ ئەکرێت بە لینک 🌟</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload" onchange="displayFileName()">
        <label for="fileToUpload"> ناردنی رەسم</label>
        <button type="submit">بینینی لینک </button>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
                $fileName = basename($_FILES["fileToUpload"]["name"]);
                echo "<p class='file-message'>   :  جۆینی تێلیگرام بکەن!</p>";
             }
        ?>
    </form>


    <div class="footer">
        <p> by srush_madridi    2024</p>
    </div>


</body>
</html>