<header>
  <div class="head__container">
    @auth
    <div class="nav">
      <a class="menu">
        <span class="menu__line menu__line--top"></span>
        <span class="menu__line menu__line--center"></span>
        <span class="menu__line menu__line--bottom"></span>
      </a>
      <nav class="gnav">
        <div class="gnav__wrap">
          <ul class="gnav__menu">
            <li class="gnav__menu__item"><a href="/">Home</a></li>
            <li class="gnav__menu__item"><a href="{{ route('logout') }}">Logout</a></li>
            <!--マイページ作成後、入力必須-->
            <li class="gnav__menu__item"><a href="/mypage">Mypage</a></li>
          </ul>
        </div>
        <!--gnav-wrap-->
      </nav>
    </div>
    @endauth
    @guest
    <div class="nav">
      <a class="menu">
        <span class="menu__line menu__line--top"></span>
        <span class="menu__line menu__line--center"></span>
        <span class="menu__line menu__line--bottom"></span>
      </a>
      <nav class="gnav">
        <div class="gnav__wrap">
          <ul class="gnav__menu">
            <li class="gnav__menu__item"><a href="/">Home</a></li>
            <li class="gnav__menu__item"><a href="/register">Registration</a></li>
            <li class="gnav__menu__item"><a href="/login">Login</a></li>
          </ul>
        </div>
        <!--gnav-wrap-->
      </nav>
    </div>
    @endguest
    <div class="header__ttl">
      <a href="/">Rese</a>
    </div>
  </div>
</header>