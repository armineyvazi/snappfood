<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <a href="{{ route('resturantcategory.create') }}"><p class="text-green-600/100">Create new resturantcategory</p></a>
        </h2>
    </x-slot>
    @if (session('message'))
    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        {{ session('message') }}
    </div>
    @endif



    @forelse ($resturantCategory as $resturant )

    <div class="container ml-16">
    <div class="flex mb-1 items-center">
        <p class="w-full text-grey-darkest">{{ $resturant->name }}</p>

        <a href="{{ url("admin/resturantcategory/{$resturant->id}/edit") }}"><button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
            Edite
          </button>
        </a>
          <form action="{{ url("admin/resturantcategory/{$resturant->id}")}}" method="post">
            @csrf
            @method('delete')
          <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded  text-black bg-red-600" type="submit">delete</button>
        </form>
    </div>
  </div>
    @empty
    <div class="flex mb-4 items-center">
        <p class="w-full text-grey-darkest">Add new <a href="{{ route('resturantcategory.create') }}">FoodsCategory</a> press link in navbar</p>

        <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
            update
          </button>

          <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded  text-black bg-red-600" type="submit">delete</button>

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

</x-app-layout>
