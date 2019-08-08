<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Комментарии</title>
</head>

<body>

    <header class="header">
        <div class="wrapper-flex">
            <div class="header-block1">
                <p class="block-text">Телефон: (499)340-94-71</p>
                <p class="block-text">Email: <a class="block-text_a" href="mailto:info@future-group.ru">info@future-group.ru</a></p>

                <h1 class="header-block1-title">Комментарии</h1>
            </div>

            <div class="header-block2">
                <img src="images/logo.png" alt="Логотип компании Future">
            </div>
        </div>

    </header>

    <div class="bg">
        <div class="wrapper">

            <section class="comments">

                <?php
                include ('comment.php');

                $comments = $connect->query("SELECT * FROM mycomments.comments ORDER BY id DESC");
                $comments = $comments->fetchAll(PDO::FETCH_ASSOC);

                if ($comments) {
                    foreach ($comments as $comment){
                        ?>
                            <p class="username"><?=$comment['username']?></p>
                            <p class="time"><?=$comment['time']?></p>
                            <p class="date"><?=$comment['date']?></p>
                            <p class="message"><?=$comment['comment']?></p>
                    <? }} else { ?>

                             <p class="block-text-comments">Здесь пока нет комментариев</p>

                <? } ?>

            </section>

            <section class="form">
                <h2 class="form-title">Оставить комментарий</h2>

                <form class="form-comments" method="POST">

                    <p class="form-text">Ваше имя</p>
                    <input  class="form_input" type="text" name="username" required>

                    <p class="form-text">Ваш комментарий:</p>
                    <textarea class="form_textarea" name="comment" cols="30" rows="5"></textarea>

                    <input class="form-button" type="submit">
                </form>
            </section>
        </div>
    </div>

    <footer class="footer-comments">
        <div class="wrapper-flex">

            <img class="footer-img" src="images/logo.png" alt="Логотип компании Future">

            <div class="footer-block">
                <p class="block-text">Телефон: (499)340-94-71</p>
                <p class="block-text">Email: <a class="block-text_a" href="mailto:info@future-group.ru">info@future-group.ru</a></p>
                <p class="block-text">Адрес: <a class="block-text_a" href="https://goo.gl/maps/n7yh9ugrbDppASuN7">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</a></p>

                <p class="block-2-text">&copy; 2010 - 2014 Future. Все права защищены</p>
            </div>
        </div>
    </footer>
</body>
</html>