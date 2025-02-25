<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Bd</title>
</head>
<body>
    <?php
        echo '<h1> BD </h1>';
        echo '<p> текст </p>';
        echo '<img src="1.png">';
    ?>
    <form action="api.php" method="post">
        <input name="login" placeholder="login">
        <input name="password" placeholder="password">
        <input type="submit" value="Сохранить">
    </form>
</body>
</html>