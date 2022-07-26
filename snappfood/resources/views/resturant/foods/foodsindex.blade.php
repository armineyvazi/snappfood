<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ url('restaurantowners/foods') }}" class='text-green-700'>Foods </a>
        </h2>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            <a href="{{ route('foods.create') }}" class='text-green-700'> Create Food +</a>
        </h2>
        </div>
        @if (session('message'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                {{ session('message') }}
            </div>
        @endif

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                <tr>
                    <th scope="col-10" class="px-6 py-3">
                        picturs
                    </th>
                    <th scope="col-10" class="px-6 py-3">
                        Foods Name
                    </th>
                    <th scope="col-10" class="px-6 py-3">
                        Raw Materials
                    </th>
                    <th scope="col-10" class="px-6 py-3">
                        Prices
                    </th>
                    <th scope="col-10" class="px-6 py-3">
                        Food Categories
                    </th>
                    <th scope="col-10" class="px-6 py-3">
                        Food discounts
                    </th>
                    <th scope="col-10" class="px-6 py-3">
                        Food party
                    </th>

                    <th scope="col-2" class="px-6 py-3">
                        Actions
                    </th>
                </tr>


            </thead>
            <tbody>
                <!---Foreach---->
            @isset($data)
                @foreach ($data as $foods)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <form action="{{ url("/restaurantowners/foods/{$foods->id}") }}" method="post">
                    <td class="px-6 py-4 text-center">
                    <img class="w-25 h-25 " src="{{ asset('/images/'.$foods->image) }}" alt="no image">
                    </td>

                    <td class="px-6 py-4 text-center">
                        {{$foods->name}}
                    </td>

                    <td class="px-6 py-4 text-center">
                        {{$foods->rawmaterial}}
                    </td>

                    <td class="px-6 py-4 text-center">
                        {{$foods->price}}
                    </td>

                    <td class="px-6 py-4 text-center">
                        {{$foods->foodscategory}}
                    </td>

                    <td class="px-6 py-4 text-center">
                    @if ( $foods->discounts !== '0')
                         {{$foods->discounts}}
                    @else
                        &#10060;
                    @endif
                    </td>


                    <td class="px-6 py-4 text-center">
                        @if ( $foods->foodsparty !== '0')
                             {{$foods->foodsparty}}
                        @else
                            &#10060;
                        @endif
                    </td>

                    {{-- <td class="px-6 py-4 text-center"> --}}
                    {{-- @if ($item['food_party_number'] !== null) --}}
                            {{-- &#9989; --}}
                    {{-- @else --}}
                            {{-- &#10060; --}}
                    {{-- @endif --}}
                    {{-- </td> --}}

                    <td class="px-6 py-4">
                    <a href="{{ url("/restaurantowners/foods/{$foods->id}/edit") }}"  class="block w-20 text-center mt-5 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
                        @csrf
                        @method('DELETE')
                    <button type="submit" class=" focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                    </td>
                    </form>

                    </div>
                </tr>
                @endforeach
                <!--- End Foreach---->

            @endisset
            @unless($data)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <form action="" method="post">
                    <td class="px-6 py-4 text-center">
                        not found please add food
                    </td>

                    <td class="px-6 py-4 text-center">
                       not found please add food
                    </td>

                    <td class="px-6 py-4 text-center">
                        not found please add food
                    </td>

                    <td class="px-6 py-4 text-center">
                        not found please add food
                    </td>

                    <td class="px-6 py-4 text-center">
                        not found please add food
                    </td>

                    <td class="px-6 py-4 text-center">
                        not found please add food
                    </td>
            @endunless

                <!--- End Foreach---->
        </tbody>
    </table>
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

