<nav>
    <a href="{{route('register')}}">Register</a> |
    <a href="{{route('login')}}">Login</a>
     @auth
     <p>Welcome,{{Auth::user()->name}} </p> 
        <form action="{{route('logout')}}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
        @endauth
</nav>