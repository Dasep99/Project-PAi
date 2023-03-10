<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if(auth()->user()->role == "admin")
            <li class="nav-item">
                <a class="nav-link" href="/DashboardAdmin">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
        @endif

        @if(auth()->user()->role == "user")
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('KategoriHabits.index')}}">
                    <i class="icon-book menu-icon"></i>
                    <span class="menu-title">Kategori Habits</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('HabitsHarian.create')}}">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Habits Harian</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('DataHabits.index')}}">
                    <i class="icon-bar-graph menu-icon"></i>
                    <span class="menu-title">Data Habits</span>
                </a>
            </li>
        @endif



    @if(auth()->user()->role == "admin")
            <li class="nav-item">
                <a class="nav-link" href="{{route('register.index')}}">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Tambah User</span>
                </a>
            </li>
    @endif

        <li class="nav-item">
            <form method="post" action="/logout">
                @csrf
                <button methods="post" type="submit" class="nav-link">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Logout</span>
                </button>
            </form>
        </li>
    </ul>
</nav>


