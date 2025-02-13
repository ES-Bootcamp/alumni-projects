<?php

function createLink($file)
{
  return htmlspecialchars("http://localhost/alumni/blog" . $file);
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="<?= createLink('/') ?>">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?= createLink('/all.php') ?>">All articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= createLink('/admin') ?>">Add new</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= createLink('/login.php') ?>">Login</a></li>
            <li><a class="dropdown-item" href="<?= createLink('/signup.php')?>">Sign up</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" action="<?= htmlspecialchars(createLink('search.php')); ?>">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>