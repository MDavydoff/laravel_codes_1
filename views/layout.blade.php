<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>блог</title>
    <link rel="stylesheet" href="/css/materialize.min.css">
</head>
<body>

<nav>
    <div class="nav-wrapper purple darken-3">
      <a href="/" class="brand-logo right">БЛОГ</a>
      <ul id="nav-mobile">
        @yield("links")
      </ul>
    </div>
</nav>
<div class="container">
    @yield("body")
</div>
<footer class="page-footer purple darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Личный Блог</h5>
                <p class="grey-text text-lighten-4">Этот блог пренадлежит Максиму Давыдову</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Ссылки</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">ВК</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Reddit</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © MarvelGames.ru
            <a class="grey-text text-lighten-4 right" href="#!">Ещё ссылки</a>
            </div>
          </div>
        </footer>
<script src="/js/materialize.min.js"></script>
</body>
</html>