
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow sticky-top">
    <div class="container">
      <a class="navbar-brand" href="/home"><img src="{{ asset('img/tac-gh.png') }}" height="30" alt="TAC"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('forms') ? 'active' : '' }} {{ request()->is('edit-form/*') ? 'active' : '' }}" href="/forms">Forms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('finance') ? 'active' : '' }}" href="/finance">Finance</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->is('profile') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{ Auth()->user()->name }}</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/profile">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>