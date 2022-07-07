<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (session('message'))

        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            {{ session('message') }}
        </div>
    @endif
    @if (session('error'))

        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-green-200 dark:text-red-800" role="alert">
            {{ session('error') }}
        </div>
    @endif



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               @can('restautant_not_confirm_inforamtion')
                <a href="{{ route('restaurantowner.create') }}"><p>Please confirm informatio to accsess ability Returant</p></a>
              @endcan
            </div>
        </div>
    </div>
</x-app-layout>
