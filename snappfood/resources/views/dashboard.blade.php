<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               @can('restautant_not_confirm_inforamtion')
                <a href="{{ route('resturantprofile.create') }}"><p>Please confirm informatio to accsess ability Returant</p></a>
              @endcan
            </div>
        </div>
    </div>
</x-app-layout>
