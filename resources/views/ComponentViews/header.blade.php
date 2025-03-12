    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="\assets\image\logo.png" alt="FPT Play">
            </div>
    
            <nav class="nav">
                <a href="{{route('home')}}" class="active">Home</a>
                <a href="#">Movie</a>
                <a href="#">Watchlist</a>
                <div class="d-flex gap-2">
                    <a href="" class="genres-link">Genres</a>
                    <i class="fas fa-caret-down"></i>
                </div>
            </nav>
    
            <div class="actions">
                <i class="fas fa-search" onclick="toggleSearch()"></i>
                <a href="{{ route('login') }}" class="login-btn">Login</a>
                <div class="search-bar">
                    <input type="text" placeholder="Tìm kiếm...">
                </div>
            </div>
        </header>
    </div>

