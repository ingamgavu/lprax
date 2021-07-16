@include('layouts/app2')
{{-- now to include the breeze syntax --}}

<div class="grid md:grid-cols-3">
<div  x-data="{open:false}" class="md:col-span-1 md:flex md:justify-end">
 <nav class="text-right">
     <div class="flex justify-between items-center">
      <h1 class="font-bold uppercase p-4 border-b border-gray-200">
       <a href="/food" class="hover:text-gray-700">Food Ninja</a>
      </h1>
      <div class="px-4 cursor-pointer md:hidden" id="burger">
       <svg xmlns="http://www.w3.org/2000/svg"  @click="open=true"  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
     </svg>
      </div>
     </div> 
     <ul  x-show="open"
    @click.away = "open=false" class="text-sm mt-6  md:block" id="menu">
        <li class="text-gray-700 font-bold py-1">
            <a href="#" class="px-4 flex justify-end border-r-4 border-primary">
             <span>Home</span>
             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
</svg>
            </a>
        </li>
        <li class="text-gray-700 font-bold py-1">
           <a href="#" class="px-4 flex justify-end border-r-4 border-white">
            <span>About</span>
       <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
            </a>
        </li>
        <li class="text-gray-700 font-bold py-1">
            <a href="#" class="px-4 flex justify-end border-r-4 border-white">
               <span>Contact</span>
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
</svg>
            </a>
        </li>
     </ul>
 </nav>
</div>
{{-- end Nav --}}

<main class="px-16 py-6 bg-gray-200 md:col-span-2">
   <div class="flex md:justify-end justify-center">
        <a href="#" class="btn text-primary border-primary md:border-2 hover:bg-primary hover:text-white 
        transition ease-out duration-500">Log in </a>
        <a href="#" class="btn text-primary ml-2 border-primary md:border-2 hover:bg-primary hover:text-white
        transition ease-out duration-500">Sign UP</a>
   </div>
   <header>
      <h2 class="text-gray-700 text-6xl font-semibold">Recipies</h2>
      <h3 class="text-2xl font-semibold">For Ninjas</h3>
   </header>
   <div>
     <h4 class="font-bold mt-12 pb-2 border-b border-gray-200">Latest Recipies</h4>
      <div class="mt-8 grid lg:grid-cols-3 gap-10">
        {{-- the cards go here --}}
        <div class="card hover:shadow-lg">
            <img src="./img/dbman.jpeg" alt="img" class="w-full h-32 sm:h-42">
            <div class="m-4">
               <span class="font-bold">5 bin chili saup</span>
               <span class="block text-gray-500 text-sm">Recipy by Mario</span>
            </div>
            <div class="bedge">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>

              <span>25 min </div>
            </div>

         <div class="card hover:shadow-lg">
            <img src="./img/dbman.jpeg" alt="img" class="w-full h-32 sm:h-42">
            <div class="m-4">
               <span class="font-bold">veg noodles</span>
               <span class="block text-gray-500 text-sm">Recipy by Mario</span>
            </div>
            <div class="bedge">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
              <span>25 min </div>
            </div>

         <div class="card hover:shadow-lg">
            <img src="./img/dbman.jpeg" alt="img" class="w-full h-32 sm:h-42">
            <div class="m-4">
               <span class="font-bold">Tofu Curry</span>
               <span class="block text-gray-500 text-sm">Recipy by Mario</span>
            </div>
            <div class="bedge">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
              <span>25 min </div>
            </div>
       </div>
      </div>
      <h4 class="font-bold mt-12 pb-2 border-b border-gray-200">Most Popular</h4>
      <div class="mt-8">

      </div>

      <div class="flex justify-center">
        <div class=" btn bg-secondary-100 text-secondary-200 hover:shadow-inner    
           transform hover:scale-125">
           Load More@FoodNinja
        </div>
      </div>

   </div>
</main>
</div>
 <script defer src="https://unpkg.com/alpinejs@3.2.1/dist/cdn.min.js"></script>>
