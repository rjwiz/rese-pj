<!DOCTYPE html>
<lang="ja">

  <head>
    <meta charset="UTF-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/reset.css" />
    @yield('pageCss')
  </head>

  <body>

    @yield('header')

    <main>
      @yield('contents')
    </main>
    <script src="{{ mix('js/menu.js') }}"></script>
  </body>

  </html>