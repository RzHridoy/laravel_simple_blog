<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">bl<span style="color: orange">O</span>g</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu"> 
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mx-auto">
                <li class="">
                    <a href="{{ route('home') }}" class="nav-link">Blogs</a>
                </li>
                <li class="">
                    <a href="{{ route('categories') }}" class="nav-link">Categories</a>
                </li>
                <li class="">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>