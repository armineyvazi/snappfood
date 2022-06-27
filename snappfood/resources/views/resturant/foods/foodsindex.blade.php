<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <a href="{{ route('foods.create') }}"><p class="text-green-600/100">Create new Foods</p></a>
        </h2>
    </x-slot>
    @if (session('message'))
    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        {{ session('message') }}
    </div>
    @endif


{{--
    @forelse ($allfoods as $foods )

    <div class="container ml-16">
    <div class="flex mb-1 items-center">
        <p class="w-full text-grey-darkest">id:{{ $foods->name }} resturants_id:{{ $foods->resturants_id }}</p>


        <a href="{{ url("admin/foodscategory/{$foods->id}/edit") }}"><button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
            Edite
          </button>
        </a>
          <form action="{{ url("admin/foodscategory/{$foods->id}/edit")}}" method="post">
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

          <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded  text-black bg-red-600" type="submit">delete</button>

    </div>


@endforelse --}}

<!----->

<div class="max-w-2xl mx-auto">

	<div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="p-4">

                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                id
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                foods_category_id
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                resturants_id
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                name
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                description
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                            @forelse ($allfoods as $foods )
                            <td class="p-4 w-4">


                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $foods->id }}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $foods->foods_category_id }}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $foods->resturants_id }}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $foods->name }}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $foods->description }}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ url("admin/foods/{$foods->id}/edit") }}"><button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                                Edite
                              </button>
                            </a>
                        </td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              <form action="{{ url("admin/foods/{$foods->id}")}}" method="post">
                                @csrf
                                @method('delete')
                              <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded  text-black bg-red-600" type="submit">delete</button>
                            </form>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        </tr>
                    @empty
                    <td class="p-4 w-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>

                        </td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $allfoods->id }}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $allfoods->foods_category_id }}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $allfoods->resturants_id }}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $allfoods->name }}</td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $allfoods->description }}</td>

                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                            <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
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

</x-app-layout>
