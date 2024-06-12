<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid-navbar d-flex align-items-center">
      <a class="navbar-brand" href="/">Gorengan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Route::is('welcome') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('menu') ? 'active' : '' }}" href="{{ url('/menu') }}">Menu</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<style>
  body {
    padding-top: 80px;
  }

  .navbar-expand-lg {
    background-color: rgba(255,255,255, 0.4);
    width: auto;
    height: auto;
  }

  .nav-item{
    position: relative;
    margin-left: 15px;
    margin-right: 15px;
    font-size: 26px;
    margin-top: 14px;
    margin-bottom: 8px;
  }

  .navbar-brand{
    position: relative;
    margin-left: 8px;
    margin-right: 12px;
    margin-bottom: 8px;
    margin-top: 4px;
    font-size: 36px;
  }
</style>