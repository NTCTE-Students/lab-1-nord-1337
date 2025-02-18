<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Дружелюбный файл!</h1>
    <p>HАШ Слава Богу 🙏❤️СЛАВА РОССИИ 🙏❤️АНГЕЛА ХРАНИТЕЛЯ КАЖДОМУ ИЗ ВАС 🙏❤️БОЖЕ ХРАНИ РОССИЮ 🙏❤️СПАСИБО ВАМ НАШИ МАЛЬЧИКИ 🙏🏼❤️🇷🇺 ЧТО ПОДДЕРЖИМ НАШИХ СРАЗУ видно НАШ СЛОНЯРА🇷🇺🇷🇺💪 СВО слава тебе Господи🇷🇺🇷🇺🇷🇺💪🔥🔥 СВО да хранит ТЕБЯ ГОСПОДЬ🔥💪💪🇷🇺 НАШ живчик СРАЗУ видно НАШИХ парней издалека🇷🇺🇷🇺🇷🇺🇷🇺💪💪💪💪💪 СВОих не бросаем🇷🇺🇷🇺🇷🇺🇷🇺🇷🇺🇷🇺🇷🇺🇷🇺🇷🇺💪💪Слава Богу СВО🙏❤️СЛАВА СВО🙏❤️АНГЕЛА ХРАНИТЕЛЯ СВО КАЖДОМУ ИЗ ВАС🙏❤️БОЖЕ ХРАНИ СВО🙏❤️СПАСИБО ВАМ НАШИ СВО🙏🏼❤️🇷🇺 ХРОНИ СВО✊🇷🇺💯СПАСИБО ВАМ НАШИ МАЛЬЧИКИ 🙏🏼❤️🇷🇺 ЧТО ПОДДЕРЖИВАЕТЕ СВО


    <form method="post">
        <input type="text" placeholder="Введи имя..." name="name" />
        <input type="submit" value="Поприветствовать" />
    </form>
    <?php
        if (isset($_POST['name'])) {
            $greetings = htmlspecialchars(string: $_POST['name']);
            print("<p>Привет, {$_POST['name']}</p>");
        }
    ?>
</body>
</html>