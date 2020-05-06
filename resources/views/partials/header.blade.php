<header>
     <div class="lamolisana-header">
          <div class="logo">
               <img src="{{asset('img/logo.png')}}" alt="logo molisana">
          </div>
          <nav>
               <ul>
                    <li class=" {{( url()->current() == route('home') ) ? 'active' : ''}} "><a href="{{route('home')}}">Home</a></li>
                    <li class=" {{( url()->current() == route('prodotti') ) ? 'active' : ''}} "><a href="{{route('prodotti')}}">Prodotti</a></li>
                    <li><a href="#">News</a></li>

               </ul>
          </nav>
          <div class="hamburger">
               <i class="fas fa-bars"></i>
          </div>
     </div>
</header>
