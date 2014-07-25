<!doctype html>
<html ng-app>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/underscore.js"></script>
    <script src="http://backbonejs.org/backbone-min.js"></script>
    <script src="js/implementation.js"></script>
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
  <div id="menu"> <!-- Блок меню -->
    <ul>
      <li><a href="#!/">Start</a></li>
      <li><a href="#!/success">Success</a></li>
      <li><a href="#!/error">Error</a></li>
    </ul>
  </div>
  <div id="start" class="block">

    <div class="userplace">
      <label for="username">Имя пользователя: </label>
      <input type="text" id="username" />
    </div>

    <div class="buttonplace">
      <input type="button" value="Проверить" />
    </div>

  </div>
  
  <div id="error" class="block">
    Ошибка такой пользователь не найден.
  </div>

  <div id="success" class="block">
    Пользователь найден.
  </div>
</body>