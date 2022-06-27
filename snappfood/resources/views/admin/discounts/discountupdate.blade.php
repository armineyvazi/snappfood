<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <a href="{{ route('discounts.create') }}"><p class="text-green-600/100">Create new discounts</p></a>
        </h2>
    </x-slot>
    @if (session('message'))
    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        {{ session('message') }}
    </div>
    @endif


  <div class="py-10">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           <div class="ml-8 flex flex-col">
            <form class="w-full max-w-sm" action="{{ route('discounts.update',$data[0]['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="flex items-center border-b border-teal-500 py-2">
                  <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="{{$data[0]['name']}}" aria-label="Full name" name="name">
                  <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="{{$data[0]['price']}}" aria-label="Full name" name="price">
                <div>
                  <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                   update
                  </button>
                </div>
             </div>
            </form>
        </div>
    </div>
</div>





    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        </div>
    </div>
</div>



</x-app-layout>
