<nav class="navbar navbar-expand-lg navbar-light">
    
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="btn btn-light  nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="bi bi-card-list"></i>
          </a>
          <div class="dropdown-menu bg-dark">
            <a class="dropdown-item btn text-danger" href="/menu">Menu</a>
            <a class="dropdown-item btn text-warning" href="/order">Order</a>
            <a class="dropdown-item btn text-success" href="/orders">Orders</a>
            <div class="dropdown-divider"></div>
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="dropdown-item text-info"><i class="bi bi-box-arrow-right"></i>keluar</button>
            </form>
            {{-- <a class="dropdown-item btn text-info" href="/logout">keluar</a> --}}
          </div>
        </li>  
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>