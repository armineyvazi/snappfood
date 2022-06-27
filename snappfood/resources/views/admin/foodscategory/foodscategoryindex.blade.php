<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <a href="{{ route('foodscategory.create') }}"><p class="text-green-600/100">Create new FoodsCategory</p></a>
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
        @forelse ($foodsCategory as $foods )

        <div class="container ml-16">
    <div class="flex mb-1 items-center">
        <p class="w-full text-grey-darkest">{{ $foods->name }}</p>

        <a href="{{ url("admin/foodscategory/{$foods->id}/edit") }}"><button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
            Edite
          </button>
        </a>
        <div class="container mr-5">
          <form action="{{ url("admin/foodscategory/{$foods->id}")}}" method="post">
            @csrf
            @method('delete')
          <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded  text-black bg-red-600" type="submit">delete</button>
        </form>
    </div>
  </div>
    @empty

    <div class="flex mb-4 items-center">
        <p class="w-full text-grey-darkest">Add new <a href="{{ route('foodscategory.create') }}">FoodsCategory</a> press link in navbar</p>

        <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
            update
          </button>

          <button class="flex-shrink-0 bg-red-500 hover:bg-red-700 border-red-500 hover:border-red-700 text-sm border-4 text-white py-1 px-2 rounded mt-1" type="submit">delete</button>
        </div>
    </div>


@endforelse






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




