<?php
function getClientAddr() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
?>
<!DOCTYPE html>
<html lang="ru">

  <head>

    <title>Михаил Подивилов &mdash; Системный администратор</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Пишу. Администрирую. Учусь потихоньку.">
    <meta name="author" content="Михаил Подивилов">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Михаил Подивилов &mdash; Системный администратор">
    <meta property="og:image" content="images/image.png">
    <meta property="og:image:width" content="1074">
    <meta property="og:image:height" content="480">
    <meta property="og:title" content="Михаил Подивилов &mdash; Системный администратор">
    <meta property="og:description" content="Пишу. Администрирую. Учусь потихоньку.">

    <!-- Images -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="image_src" href="images/image_src.png">

    <!-- Styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="https://podivilov.ru">Михаил Подивилов</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="https://podivilov.ru">Главная</a></li>
              <li class=""><a target="_blank" href="https://blog.podivilov.ru">Блог</a></li>
              <li class=""><a target="_blank" href="https://instagram.com/mihail.podivilov">Фото</a></li>
              <li class=""><a target="_blank" href="https://youtube.com/channel/UCZ1VjhMNiJrifYTeBLfaUww">Видео</a></li>
              <li class=""><a target="_blank" href="https://soundcloud.com/podivilov">Музыка</a></li>
              <li class=""><a target="_blank" href="https://proza.ru/avtor/podivilov">Проза</a></li>
              <li class=""><a target="_blank" href="https://stihi.ru/avtor/podivilov">Поэзия</a></li>
              <li class=""><a target="_blank" href="https://synecdoche.ru/author/podivilov">Статьи</a></li>
              <li class=""><a target="_blank" href="https://illustrators.ru/users/mihail-podivilov">Графика</a></li>
              <li class=""><a target="_blank" href="https://podivilov.ru/about/">Обо мне</a></li>
              <li class=""><a target="_blank" href="mailto:<?php echo "mihail" . "+" . dechex(ip2long($_SERVER['HTTP_X_FORWARDED_FOR'])); ?>@podivilov.ru">Написать письмо</a></li>
              <li class=""><a target="_blank" href="https://podivilov.ru/about/">?</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <div class="hero-unit">
        <h1><?php
          $items = array("Доброго здравия", "Привет", "Здравствуй", "Добро пожаловать", "Вэлкам", "Привет-привет", "Здоровеньки булы", "Салют", "Алоха", "С подключением");
          echo $items[array_rand($items)];
        ?>, <?php echo getClientAddr() . "!"; ?></h1>
        <p><?php
          $items = array("Будем знакомы", "Рад тебя видеть", "Приветствую", "Ахой", "Йоу");
          echo $items[array_rand($items)];
        ?>! Меня зовут <a href="https://podivilov.ru/about/" target="_blank">Михаил Подивилов</a>. В душе я &mdash; <?php
          $items = array("<a href=\"https://ru.wikipedia.org/wiki/Абсурдизм\" target=\"_blank\">человек абсурда</a>", "<a href=\"https://soundcloud.com/podivilov\" target=\"_blank\">композитор</a>", "<a href=\"https://illustrators.ru/users/mihail-podivilov\" target=\"_blank\">художник</a>", "<a href=\"https://proza.ru/avtor/podivilov\" target=\"_blank\">прозаик</a>", "<a href=\"https://stihi.ru/avtor/podivilov\" target=\"_blank\">поэт</a>");
          echo $items[array_rand($items)];
        ?>, а по профессии &mdash; <a href="https://ru.wikipedia.org/wiki/Системный_администратор" target="_blank">системный администратор</a>.<br>Являюсь сертифицированным инструктором <a target="_blank" href="https://www.netacad.com/ru/node/28291">сетевой академии Cisco</a> по курсам <a target="_blank" href="https://netacad.com/courses/os-it">ITE</a> и <a target="_blank" href="https://netacad.com/courses/networking">CCNA R&S</a>.<br><?php
          $items = array("Обитаю", "Живу", "Дислоцируюсь", "Нахожусь");
          echo $items[array_rand($items)];
        ?>
        <?php
          $items = array("на <a href=\"http://absurdopedia.net/wiki/Серверный_полюс\">Серверном полюсе</a>", "в <a href=\"https://ru.wikipedia.org/wiki/Россия\" target=\"_blank\">России</a>", "в <a href=\"https://ru.wikipedia.org/wiki/Озёры\" target=\"_blank\">Озёрах</a>", "на планете <a href=\"https://ru.wikipedia.org/wiki/Земля\" target=\"_blank\">Земля</a>", "в <a href=\"https://kin_dza_dza.academic.ru/1/Антитентура\" target=\"_blank\">Антитентуре</a>", "в галактике <a href=\"https://ru.wikipedia.org/wiki/Млечный_Путь\" target=\"_blank\">Млечный Путь</a>");
          echo $items[array_rand($items)];
        ?> и очень люблю <a target="_blank" href="https://college-kolomna.ru">свою работу</a>.</p>
        <p><a class="btn btn-primary btn-large" target="_blank" href="mailto:<?php echo "mihail" . "+" . dechex(ip2long($_SERVER['HTTP_X_FORWARDED_FOR'])); ?>@podivilov.ru"><?php
          $items = array("Написать письмо", "Черкануть пару строк", "Отправить письмо");
          echo $items[array_rand($items)];
        ?></a></p>
      </div>

      <div class="row">
        <div class="span4">
          <h2>Кто я?</h2>
          <p style="display: inline;">Меня зовут Михаил Подивилов и я &mdash; системный администратор.<br><br>&nbsp;> Трудовой стаж: <p style="display: inline; color: #fff;">2 года</p><br>&nbsp;> Работаю с: <p style="display: inline; color: #fff;"><?php
            $items = array("GNU/Linux", "Cisco", "MikroTik", "Ubuntu Server", "Debian", "CentOS", "RHEL", "замечательными людьми", "потрясными коллегами", "инопланетянами", "внеземным разумом", "чем попало", "чем повезет");
            echo $items[array_rand($items)];
          ?></p><br>&nbsp;> Свитер: <p style="display: inline; color: #fff;"><?php
            $items = array("с оленями", "синий", "красный", "без оленей", "шерстяной");
            echo $items[array_rand($items)];
          ?></p></p>
          <p><a class="btn" target="_blank" href="https://podivilov.ru/about/">Обо мне</a></p>
        </div>
        <div class="span4">
          <h2>Где я?</h2>
          <p>Когда-то давным-давно я обитал в Коломне, а сейчас &mdash; в Озёрах. Кто знает, где мне ещё предстоит очутиться!<br><br>Город свой я тоже очень люблю, будет возможность &mdash; обязательно загляните сюда!</p>
          <p><a class="btn" target="_blank" href="https://google.com/maps?q=Озёры">Карта</a></p>
       </div>
        <div class="span4">
          <h2>Почему я?</h2>
          <p>Потому что я действительно люблю свою работу!<br><br>Ремеслом системного администрирования я занимаюсь с 2014 года, работаю &mdash; с 2018.<br><br>Обо всех интересных моментах своей работы пишу в <a target="_blank" href="https://blog.podivilov.ru">личный блог</a>.</p>
          <p><a class="btn" target="_blank" href="https://blog.podivilov.ru">Почитать</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Михаил Подивилов, 2017&mdash;<?php echo date("Y"); ?></p>
      </footer>

    </div> <!-- /container -->

    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-386.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

  </body>

</html>
