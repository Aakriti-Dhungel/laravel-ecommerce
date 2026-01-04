<nav class="bg-primary">
   <div class="container py-2">
      <div class="flex items-center justify-between gap-2">
         <a href="{{ route('home')}}">
            <img class="w-[70px] sm:w-[80px] md:w-[100px] lg:w-[120px]"
               src="{{ asset(Storage::url($company->logo)) }}" alt="{{ $company->name }}">
         </a>
         <div class="hidden md:block">
            <form action="{{route('compare')}}" method="get">
               <div class="flex items-center">
                  <input type="text" name="q" id="q" placeholder="name">
                  <button class="bg-gray-200 primary font-bold h-full px-4 py-2">Compare</button>
               </div>
            </form>
         </div>
         <div class="flex gap-4 items-center">
            @if(!Auth::user())
            <a href="{{ route('login') }}" class="bg-secondary primary px-3 py-1 rounded">SignIn</a>
            <a href="{{ route('register') }}"
               class="border border-[var(--secondary)] secondary px-3 py-1 rounded">SignUp</a>

            @else
            <a href="{{ route('cart')}}" class="relative mr-2">
               <small class=" absolute -right-2 -top-2 bg-red-600 px-1 rounded text-[10px]">{{ Auth::user()->carts->count()}}</small>
               <i class="fa-solid fa-cart-shopping text-white text-2xl"></i>
            </a>
            <form method="POST" action="{{ route('logout') }}">
               @csrf
               <button class="bg-red-600 text-white px-3 py-1 rounded">Logout</button>
            </form>
            @endif
         </div>
      </div>

      <div class="md:hidden flex justify-center pt-4">
         <form action="" method="get">
            <div class="flex items-center">
               <input type="text" name="q" id="q" placeholder="name">
               <button class="bg-gray-200 primary font-bold h-full px-4 py-2">Compare</button>
            </div>
         </form>
      </div>
   </div>



</nav>