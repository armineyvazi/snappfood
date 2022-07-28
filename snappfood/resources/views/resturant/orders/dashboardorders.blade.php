<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">



    @forelse ($orders as $order)

                <div class=" p-4  bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-red-700">
                    <div class="flex justify-between items-center mb-4">
                        <p class="text-sm font-bold leading-none text-gray-900 dark:text-white">Name:{{ $order->name }}</p>
                        <p class="text-sm font-bold leading-none text-gray-900 dark:text-white">Phone:{{ $order->phone }}</p>
                        <p class="text-sm font-bold leading-none text-gray-900 dark:text-white">Email:{{ $order->email }}</p>
                            <form action="{{ url('restaurantowners/orders') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $order->id }}">
                                <input type="hidden" name="email" value="{{ $order->email }}">

                                    <select name="orders_status" onchange="this.form.submit()" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option  value="pending">Pending</option>
                                    <option  value="wait">Wait</option>
                                    <option value="send">Send</option>
                                    <option value="delivered">Delivered</option>
                                    </select>
                                </form>
                         </div>
                                   <div class="flow-root">
                                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">

                                            <li class="sm:py-4">

                                                <div class="items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    foodsname:{{ $order->foods_name }}
                                                </div>

                                                <div class="items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    foodscount:{{ $order->count }}
                                                </div>

                                                <div class="items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    Orderstatus:{{ $order->orders_status }}
                                                </div>

                                            </li>

                                        </ul>
                                   </div>
                                </div>
                                @empty
                                <h2 class="text-center font-bold font-sans text-xl">There is no Order For your Restaurant !</h2>
                                 @endforelse

                            </li>

                        </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
