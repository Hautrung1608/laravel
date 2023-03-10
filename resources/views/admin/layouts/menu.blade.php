<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category.index')}}">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.index')}}">Product</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">{{ Auth::check() ? Auth::user()->name : 'Account' }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" name="keyword">
                <button  class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            {{-- <form class="form-inline ml-3 my-2 my-lg-0">
                <a href="{{ route('showcart') }}" class="btn btn-primary form-control mr-sm-2">
                    Cart 
                    <span class="badge badge-primary">{{ $cart->getTotal() }}</span>
                </a>
            </form> --}}
            
                
            
        </div>
    </div>

</nav>
