<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "Home") ? 'active' : '' }} " aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "About") ? 'active' : '' }} " href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" {{ ($active === "posts") ? 'active' : '' }} " href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" {{ ($active === "categories") ? 'active' : '' }} " href="/categories">Categories</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>


      </ul>

      <ul class="navbar-nav ms-auto">
<li class="nav-items">
<a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }} "">
  <i class="bi bi-box-arrow-in-right"></I>
  Login</a>
</li>
<li class="nav-items">
<a href="/register" class="nav-link {{ ($active === "register") ? 'active' : '' }} "">
  <i class="bi bi-box-arrow-in-right"></I>
  Register</a>
</li>
      </ul>
    </div>
  </div>
</nav>