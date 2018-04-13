<!DOCTYPE html>
<!-- Создать форму с полями username, email, message. Сериализовать данные, полученные при отправке формы и
вывести полученную строку на экран. -->
<html>
<head>
    <title>Contact Form</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style2.css" type="text/css" media="all" />
</head>
<body>
<h2>Contact Form</h2>
<form method='post' action='mail2.php' class="form">
    <div class="name">
        <label for="name">Your login: </label>
        <input type="login" name="name" id="name" placeholder="Login" />
    </div>
    <div class="email">
        <label for="email">Your email</label>
        <input type="email" name="email" id="email" placeholder="mail@example.com" />
    </div>
    <div class="message" name="message">
        <textarea name="message" placeholder="Write something to us" /></textarea>
    </div>
    <div class="submit">
        <input type="submit" value="Send" />
    </div>
</form>
</body>
</html>