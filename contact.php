<!DOCTYPE html>
<!-- Создать форму, которая содержит поля name, email, phone. Задать скрипт, который выведет на экран отправленные
данные - $_POST или $_GET (в зависимости от свойств формы) -->
<html>
<head>
    <title>Contact Form</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
<h2>Contact Form</h2>
<form action="mail.php" method="POST" class="form">
    <div class="name">
        <input type="login" name="name" id="name" placeholder="Tarja Turunen" required />
        <label for="name">Your name</label>
    </div>
    <div class="email">
        <input type="email" name="email" id="email" placeholder="mail@example.com" required />
        <label for="email">Your email</label>
    </div>
    <div class="phone">
        <input type="phone" name="phone" id="phone" placeholder="+380*********" required />
        <label for="web">Your phone</label>
    </div>
    <div class="message" name="message">
        <textarea name="message" placeholder="Write something to us" required /></textarea>
    </div>
    <div class="submit">
        <input type="submit" value="Send" />
    </div>
</form>
</body>
</html>