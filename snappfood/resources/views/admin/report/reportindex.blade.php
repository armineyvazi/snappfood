<x-app-layout>
    <x-slot name="header">
       <div class="flex gap-8 items-center justify-around">

       <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center gap-4">

       </h2>
       </div>
   </x-slot>

   <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">


   @forelse ($comment as $comment)



<div class=" p-4  bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
   <div class="flex justify-between items-center mb-4">
       <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white"></h5>
<p class="dark:text-white">Score : {{ $comment->score }}</p>
  </div>
  <div class="flow-root">
       <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">

           <li class="py-3 sm:py-4">
               <div class="flex items-center space-x-4">
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                        Customer:{{$comment->name}}
                    </p>
                </div>


                   <div class="flex-1 min-w-0">
                       <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                          Food: {{$comment->foodName}}
                       </p>
                   </div>
           </li>


               <div class="flex justify-between py-4 font-semibold">
                    <p class="dark:text-white">Message :</p> {{ $comment->message }}<p class="dark:text-white">  </p>
               </div>

                <div class="flex justify-between py-4 font-semibold">
                    <p class="dark:text-white">Restaurant :</p>{{ $comment->answer }} <p class="dark:text-white">  </p>
               </div>

               <form action="report" method="post">
                   @csrf
                   <input type="hidden" name="id" value="{{ $comment->id }}">
                   <input type="hidden" name="id_restaurant" value="{{ $comment->restaurantowner_id }}">
                   <input type="hidden" name="id_user" value="{{ $comment->user_id }}">
                       <p>Delete or Share this Comment : </p>
                      <div>

                           <button class="mx-4 border rounded-lg p-2" type="submit" name="confirm" value="share">Share &#9989;</button>
                           <button class=" border rounded-lg p-2" type="submit" name="confirm" value="delete">Delete &#10060;</button>
                       </div>
                   </div>
                   </div>
               </form>
       </ul>
  </div>
</div>
@empty
<h2 class="text-center font-bold font-sans text-xl">There is no Comment !</h2>
@endforelse
</div>

           </div>
       </div>
   </div>
</x-app-layout>
