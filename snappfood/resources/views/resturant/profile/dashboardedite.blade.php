<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <p>Hello {{ auth()->user()->name}} please confirm information</p>
        </h2>
    </x-slot>
    @if (session('message'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <div class="p-16 mb-32 ml-32 mr-32 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class='container m-16'>

            <form action='{{ route('resturantprofile.update',auth()->user()->id) }}' method='POST'>
                @csrf
                @method('PUT')
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="name" value='{{ $datauser[0]['name'] }}' class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="" required="">
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name Your Resturant</label>
                </div>

                <div class="grid xl:grid-cols-2 xl:gap-6">
                    <div class="mb-6 xl:w-96">
                      <select class="block mt-1 w-full" required name="resturantcategory">
                        <option>Select Your Resturant Category</option>
                        @foreach($data as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                </div>

                <div class="grid xl:grid-cols-2 xl:gap-6">
                    <div class="mb-6 xl:w-96">
                      <select class="block mt-1 w-full" required name="isopen">
                        <option value='1'>Select If you clos Resturant</option>

                        <option value="1">Open</option>
                        <option value='0'>Close</option>

                      </select>
                    </div>
                </div>


                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="city"  value='{{ $datauser[0]['city'] }}'id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="" required="">
                    <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter Name City</label>
                </div>

            <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="address" value='{{$datauser[0]['address'] }}' id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="" required="">
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter Address Resturant</label>
                </div>


                <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="accountnumber" value='{{$datauser[0]['accountnumber'] }}' id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="" required="">
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">account number</label>
                     </div>
                </div>

                <div class="grid xl:grid-cols-2 xl:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="tel"  name="phone" id="floating_phone" value='{{$datauser[0]['phone'] }}' class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="" required="">
                        <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
                    </div>
                </div>

                <button type="submit" class="text-white bg-green-500 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
            </form>

            </div>
        </div>
    </div>
</x-app-layout>
