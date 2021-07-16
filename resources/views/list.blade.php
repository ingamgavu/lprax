@include('layouts/app2')
{{-- now to include the breeze syntax --}}

<div class="container bg-gray-400 w-5/6 h-5/6">
 <h1>Hello world</h1>
 <button class="btn btn-blue mx-12 my-12">Friends yho</button>
 <button class="btn btn-blue">Find Group</button>
 {{-- now to make an alert to the page --}}

 <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-5 " role="alert">
  <strong class="font-bold">Alert!</strong>
   <span class="block sm:inline">Please Update Your Password</span>
 </div>

   {{--card component in css --}}
   <div class="max-w-sm mx-auto flex p-6 bg-white rounded-lg ">
      <div class="flex-shrink-0">
       <img src ="https://hcti.io/v1/image/be4c5118-fe19-462b-a49e-48cf72697a9" alt = "picture" class="h-12 w-12">
        </div>
     <div class="ml-6 pt-1">
         <h4 class="text-xl text-gray-900">Traversy Media</h4>
         <p class="text-base text-gray-600">You have a new message</p>
        </div>
   </div>
</div>


