<x-app-layout>
    <x-slot name="header">
       <div class="flex gap-8 items-center justify-around">
    @if (session('message'))

        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            {{ session('message') }}
        </div>
    @endif
       <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center gap-4">
           <p>Search By Food : </p>
           <form action="{{ url('/restaurantowners/customerreviews') }}" method="get">
               <select name="food" onchange="this.form.submit()" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                   <option  value="all">Select</option>
                   <option  value="all">all</option>
                   <option value="000">Bad score</option>
                   <option value="00">Good score</option>
                   @foreach ($category as $category)
                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                   @endforeach
               </select>
           </form>
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
       <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Author name:&nbsp;{{ $comment->name }}</h5>
<p class="dark:text-white">Score : {{ $comment->score }}</p>
  </div>
  <div class="flow-root">
       <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">

           <li class="py-3 sm:py-4">
               <div class="flex items-center space-x-4">
                   <div class="flex-1 min-w-0">
                       <p class="text-sm font-medium text-gray-900 truncate dark:text-white">

                       </p>
                   </div>
           </li>
               <div class="flex py-4 font-semibold">
                    <p class="dark:text-white">Message :</p">&nbsp;{{ $comment->message }} <p class="dark:text-white">  </p>
               </div>
            <div class="flex py-4 font-semibold">
                <p class="dark:text-white">Your answer :</p">&nbsp;{{ $comment->answer }} <p class="dark:text-white">  </p>
           </div>

               <div class="flex py-4 font-semibold">
                    <p class="dark:text-white">Food name :</p">&nbsp;{{ $comment->foodName }} <p class="dark:text-white">  </p>
                </div>
               <form action="{{ url("restaurantowners/customerreviews/comment") }}" method="post" >
                   @csrf
                   <input type="hidden" name="id" value="{{$comment->id}}">
                <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="report" onchange="this.form.submit()" id="flexCheckIndeterminate">
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckIndeterminate">
                            Report
                        </label>
                   <div class="flex justify-between py-4 font-semibold dark:text-white items-center">
                       <div class="flex items-center gap-4"> <p>Write Your Response : </p> <input class="text-black rounded-lg" type="text" name="reply" onchange="this.form.submit()"> </div>
                   <div>
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
