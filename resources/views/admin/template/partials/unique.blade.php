<nav class="deep-purple" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">artelocal.mx</a>
    <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('users.index') }}">Usuarios</a></li>
        <li><a href="{{ route('categories.index') }}">Categorías</a></li>
        <li><a href="{{ route('tags.index') }}">Tags</a></li>
    </ul>
    <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ route('users.index') }}">Usuarios</a></li>
        <li><a href="{{ route('categories.index') }}">Categorías</a></li>
        <li><a href="{{ route('tags.index') }}">Tags</a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="container">
    <section class='custom-section'>
        @yield('content')
    </section>
</div>
<footer class="page-footer deep-purple">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
            <h5 class="white-text">Company Bio</h5>
            <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
