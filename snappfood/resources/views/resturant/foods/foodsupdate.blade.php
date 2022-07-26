<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ url('restaurantowners/foods') }}" class='text-green-700'>Foods </a>
             </h2>

            <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
                <a href="{{ route('foods.create') }}"  class='text-green-700'> Create Food +</a>
            </h2>
        </div>
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <div class='container m-16'>
                    <form action='{{ route('foods.update',$data[0]['id']) }}' method='POST' enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="name"  value='{{ $data[0]['name'] }}' class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="" required="">
                            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name Your Add your food</label>
                        </div>

                        <div class="grid xl:grid-cols-2 xl:gap-6">
                            <div class="mb-6 xl:w-96">
                              <select class="block mt-1 w-full" required name="foodscategory">
                                <option>Select Your Foods Category</option>
                                @foreach($foods as $food)
                                <option value="{{ $food->name}}">{{ $food->name }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="grid xl:grid-cols-2 xl:gap-6">
                            <div class="mb-6 xl:w-96">
                              <select class="block mt-1 w-full" required name="discounts">
                                <option value="0">Admin offer for discount</option>
                                @foreach($discounts as $discount)
                                <option value="{{ $discount->price }}">&nbsp;|&nbsp;price:&nbsp;{{ $discount->price }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="grid xl:grid-cols-2 xl:gap-6">
                            <div class="mb-6 xl:w-96">
                              <select class="block mt-1 w-full" required name="foodsparty">
                                <option value='0'>Select Your Foods To Foods Party</option>
                                <option value="0">NO</option>
                                <option value="1">Yes</option>
                              </select>
                            </div>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="price"  value='{{ $data[0]['price'] }}' id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="" required="">
                            <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter price food</label>
                        </div>

                    <div class="grid xl:grid-cols-2 xl:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="rawmaterial" value='{{ $data[0]['rawmaterial'] }}' id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="" required="">
                                <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Raw Material</label>
                        </div>

                        <div class="grid xl:grid-cols-2 xl:gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Image Foods </label>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                  <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                      <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="image" type="file" class="sr-only">
                                      </label>
                                      <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <input hidden name="imagebefor"  value='{{ $data[0]['image']}}'/>
                        <button type="submit" class="text-white bg-green-500 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update</button>
                    </form>

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
