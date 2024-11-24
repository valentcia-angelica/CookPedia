<nav class="navbar navbar-expand-lg bg-body-tertiary" >
    <div class="container-fluid" style="margin: 10px 50px">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fs-3" aria-current="page" href="{{ route('homePage') }}">CookPedia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 px-4" href="{{ route('recipePage') }}">Recipe</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-4 px-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('categoryPage', ['id'=>1]) }}">Food</a></li>
              <li><a class="dropdown-item" href="{{ route('categoryPage', ['id'=>2]) }}">Beverage</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 px-4" href="{{ route('authorPage') }}">Author</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 px-4" href="{{ route('aboutUsPage') }}">About Us</a>
          </li>
        </ul>
        <form class="d-flex" role="search" method="GET" action="{{ route('searchRecipePage') }}">
          <input class="form-control me-2" type="search" placeholder="Search Recipe" aria-label="Search" name="query">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>