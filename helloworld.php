<?php
$password = "";
$password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    if(strlen($password)<8) {
        $password_err = "Your password must contain at least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $password_err = "Your password must contain at least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $password_err = "Your password must contain at least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $password_err = "Your password must contain at least 1 Lowercase Letter!";
    } else {
        $password_err = "Hmmm";
        header("Location: success.php");
        exit;
    }
}

?>

<head>
    <title>PHP</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
</head>
<body>

<div>
    <?php
    echo '<h1>Pick a strong password to continue:</h1>';
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="password">🔑
            <input type="text" name="password" value="<?= $password ?>">
        </label>
        <input type="submit" name="submit" value="Submit">
    </form>
    <span class="error"><?= $password_err;?></span>
</div>
</body>