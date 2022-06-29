<x-app-layout>



    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <a href="{{ route('discounts.index') }}"><p class="text-green-600/100">Create Discounts</p></a>
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           <div class="ml-8 flex flex-col">
    @if (session('message'))
    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        {{ session('message') }}
    </div>
    @endif

    <div class="py-10">

                <form class="w-full max-w-sm" action="{{ route('discounts.store') }}" method="post">
                    @csrf
                    <div class="flex items-center border-b border-teal-500 py-2">
                      <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Please enter name Foods discounts" aria-label="Full name" name="name">
                      <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Please enter price discounts" aria-label="Full name" name="price">
                    <div>
                      <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                        create
                      </button>
                    </div>
                 </div>
                </form>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                {{ $error}}
            </div>
            @endforeach
    </div>
@endif
        </div>
    </div>
</div>

</x-app-layout>
