<x-app-layout>

    <x-slot name="header">
        @php $total=0;@endphp
        @php
        foreach ($archive as $archives)
                 $total+=(int)$archives->total
        @endphp

       <div class="flex gap-8 items-center justify-around">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              <p>Total Price :{{ $total }}</p>
       </h2>

       <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
           <p>Total Count :{{ count($archive) }}</p>
       </h2>
       {{-- {{ dd($archive) }} --}}
       <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
           <form action="{{ url('restaurantowners/archives') }}" method="get">
               <select name="date" onchange="this.form.submit()" value="all"class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                   <option  value="all">select</option>
                   <option  value="all">All Archive</option>
                   <option  value="week">Last Week</option>
                   <option  value="month">Last Month</option>
               </select>
           </form>
       </h2>
       </div>
   </x-slot>

   <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">






<div class=" p-4  bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
   <div class="flex justify-between items-center mb-4">
       <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white"></h5>

  </div>
  <div class="flow-root">
       <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">


           @forelse ($archive as $archive)

           <li class="py-3 sm:py-4">
               <div class="flex items-center space-x-4">

                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                           Name: {{$archive->name}}
                        </p>
                    </div>

                   <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                          Food: {{$archive->foods_name}}
                        </p>
                        <div class="text-base font-semibold text-gray-900 dark:text-white">
                            Count:&nbsp;{{$archive->count}}
                        </div>
                   </div>


           </li>


              <div class="flex justify-between py-4 font-semibold dark:text-white">
             <p>Total Price :</p> <p>{{ $archive->total }}  </p>
             </div>
       </ul>
  </div>
</div>
@empty
<h2 class="text-center font-bold font-sans text-xl">There is no Archive!</h2>
@endforelse
</div>

           </div>
       </div>
   </div>
</x-app-layout>
