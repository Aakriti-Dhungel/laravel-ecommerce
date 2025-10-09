<nav class="bg-primary">
   <div class="container py-2">
      <div class="flex items-center justify-between gap-2">
         <a href="">
            <img class="w-[70px] sm:w-[80px] md:w-[100px] lg:w-[120px]"
               src="{{ asset(Storage::url($company->logo)) }}" alt="{{ $company->name }}">
         </a>
         <div class="hidden md:block">
            <form action="" method="get">
               <div class="flex items-center">
                  <input type="text" name="q" id="q" placeholder="name">
                  <button class="bg-gray-200 primary font-bold h-full px-4 py-2">Compare</button>
               </div>
            </form>
         </div>
         <div class="flex gap-4 items-center">
            <a href="{{ route('login') }}" class="bg-secondary primary px-3 py-1 rounded">SignIn</a>
            <a href="{{ route('register') }}"
               class="border border-[var(--secondary)] secondary px-3 py-1 rounded">SignUp</a>
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