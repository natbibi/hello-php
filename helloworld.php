<head>
    <title>PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
</head>
<body>
<?php
    echo '<p>Pick a strong password to continue:</p>';
    ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="password">Password:
        <input type="text" name="password" value="<?= $password ?>">
    </label>
    <input type="submit" name="submit" value="Submit"><br><br>
    <span class="error"><?= $password_err;?></span>
</form>
</body>