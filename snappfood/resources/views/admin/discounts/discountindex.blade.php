<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <a href="{{ route('discounts.create') }}"><p class="text-green-600/100">Create new Discounts</p></a>
        </h2>
    </x-slot>

    @if (session('message'))
    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        {{ session('message') }}
    </div>
    @endif


<div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    @forelse ($discounts as $discount )

    <div class="container ml-16">
    <div class="flex mb-1 items-center">
        <p class="w-full text-grey-darkest">{{ $discount->name }}</p>
        <p class="w-full text-grey-darkest">{{ $discount->price }}</p>

        <div class="container mr-5">
        <a href="{{ url("admin/discounts/{$discount->id}/edit") }}"><button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
            Edite
          </button>
        </a>
          <form action="{{ url("admin/discounts/{$discount->id}")}}" method="post">
            @csrf
            @method('delete')
          <button class="flex-shrink-0 bg-red-500 hover:bg-red-700 border-red-500 hover:border-red-700 text-sm border-4 text-white py-1 px-2 rounded mt-1" type="submit">delete</button>
        </form>
    </div>
    </div>
  </div>
    @empty
    <div class="flex mb-4 items-center">
        <p class="w-full text-grey-darkest">Add new <a href="{{ route('discounts.create') }}">discounts</a> press link in navbar</p>

        <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
            update
          </button>

          <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded  text-black bg-red-600" type="submit">delete</button>

    </div>


@endforelse





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
