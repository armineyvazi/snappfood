<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                         <svg  class="block h-9 w-auto" xmlns="http://www.w3.org/2000/svg" width="136.08" height="69.54" viewBox="0 0 56 28" fill="none"><path d="M51.2573 12.569C50.09 12.5709 49.4104 11.7833 49.4087 10.758C49.407 9.76415 50.084 8.92704 51.2513 8.92505C52.4186 8.92316 53.0983 9.75807 53.0999 10.7518C53.1016 11.7772 52.4246 12.567 51.2573 12.569Z" fill="#FF00A6"></path><path d="M51.3587 1.0703H51.5032V0.407269H51.2702L51.1208 0.799469L50.9715 0.407269H50.7385V1.0703H50.8828V0.535313H50.8861L51.0781 1.0703H51.1635L51.3555 0.535313H51.3587V1.0703Z" fill="#FF00A6"></path><path d="M50.4562 0.535313H50.658V0.407269H50.0951V0.535313H50.297V1.0703H50.4562V0.535313Z" fill="#FF00A6"></path><path d="M50.2727 8.04699H51.909C52.7008 8.04699 53.3924 7.5112 53.5902 6.74444L55.2156 0.432777C55.2189 0.419923 55.2091 0.407269 55.1957 0.407269H52.2565C52.2473 0.407269 52.2391 0.413547 52.2368 0.422615L50.2727 8.04699Z" fill="#FF00A6"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M42.3678 5.12392C42.3565 5.12392 42.3474 5.11476 42.3474 5.1035V4.22942C42.3474 4.21816 42.3383 4.20899 42.327 4.20899H39.4968C39.4855 4.20899 39.4764 4.21816 39.4764 4.22942V15.6938C39.4764 15.705 39.4855 15.7142 39.4968 15.7142H40.6382C41.5822 15.7142 42.3474 14.949 42.3474 14.005V11.5823C42.3474 11.5635 42.3704 11.5549 42.3831 11.5688C42.9994 12.2509 43.9426 12.5695 44.8556 12.5695C47.2533 12.5695 48.9097 10.6135 48.9097 8.27885C48.9097 5.95994 47.2376 3.94085 44.824 3.94085C43.8811 3.94085 42.9069 4.31651 42.3849 5.11476C42.3812 5.12044 42.3746 5.12392 42.3678 5.12392ZM44.0984 10.0771C42.931 10.0771 42.2528 9.28845 42.2528 8.26311C42.2528 7.26926 42.931 6.43325 44.0984 6.43325C45.2657 6.43325 45.944 7.26926 45.944 8.26311C45.944 9.28845 45.2657 10.0771 44.0984 10.0771Z" fill="#FF00A6"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M32.3982 5.12392C32.3869 5.12392 32.3777 5.11476 32.3777 5.1035V4.20899H29.5068V15.7142H30.6685C31.6126 15.7142 32.3777 14.949 32.3777 14.005V11.5354C32.3777 11.533 32.3807 11.5318 32.3823 11.5337C32.9977 12.2399 33.9576 12.5695 34.886 12.5695C37.2837 12.5695 38.94 10.6135 38.94 8.27885C38.94 5.95994 37.268 3.94085 34.8544 3.94085C33.9115 3.94085 32.9373 4.31651 32.4153 5.11476C32.4115 5.12044 32.405 5.12392 32.3982 5.12392ZM34.1288 10.0771C32.9614 10.0771 32.2831 9.28845 32.2831 8.26311C32.2831 7.26926 32.9614 6.43325 34.1288 6.43325C35.2961 6.43325 35.9744 7.26926 35.9744 8.26311C35.9744 9.28845 35.2961 10.0771 34.1288 10.0771Z" fill="#FF00A6"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M25.7781 12.3014H26.9194C27.8633 12.3014 28.6286 11.5361 28.6286 10.5921V4.22942C28.6286 4.21816 28.6195 4.20899 28.6082 4.20899H25.7781C25.7668 4.20899 25.7577 4.21816 25.7577 4.22942V4.94287C25.7577 4.9618 25.7344 4.97037 25.7218 4.95622C25.1197 4.27436 24.1619 3.94085 23.2495 3.94085C20.8517 3.94085 19.1954 5.92845 19.1954 8.24727C19.1954 10.5662 20.8833 12.5695 23.281 12.5695C24.2238 12.5695 25.2135 12.2096 25.7201 11.4117C25.7239 11.4058 25.7303 11.4022 25.7372 11.4022C25.7485 11.4022 25.7577 11.4114 25.7577 11.4226V12.281C25.7577 12.2922 25.7668 12.3014 25.7781 12.3014ZM24.0066 10.0771C22.8394 10.0771 22.161 9.28845 22.161 8.26311C22.161 7.26926 22.8394 6.43325 24.0066 6.43325C25.174 6.43325 25.8523 7.26926 25.8523 8.26311C25.8523 9.28845 25.174 10.0771 24.0066 10.0771Z" fill="#FF00A6"></path><path d="M13.0077 5.25007C12.9964 5.25007 12.9873 5.241 12.9873 5.22964V4.22942C12.9873 4.21816 12.9782 4.20899 12.9668 4.20899H10.1368C10.1255 4.20899 10.1163 4.21816 10.1163 4.22942V12.281C10.1163 12.2922 10.1255 12.3014 10.1368 12.3014H11.2782C12.2221 12.3014 12.9873 11.5362 12.9873 10.5922V8.10538C12.9873 7.09578 13.3186 6.22818 14.4859 6.22818C15.8027 6.22818 15.7896 7.3951 15.7808 8.18111C15.7801 8.24258 15.7794 8.30171 15.7794 8.35777V12.281C15.7794 12.2922 15.7886 12.3014 15.7998 12.3014H16.9413C17.8852 12.3014 18.6504 11.5362 18.6504 10.5922V7.30085C18.6504 5.31325 17.7828 3.94085 15.6059 3.94085C14.4893 3.94085 13.6863 4.27008 13.0249 5.24121C13.0212 5.24669 13.0145 5.25007 13.0077 5.25007Z" fill="#FF00A6"></path><path d="M6.61553 2.80052C7.40571 3.03429 8.25049 2.67686 8.62665 1.94378L9.06608 1.08744C9.07116 1.07758 9.06757 1.06562 9.05801 1.06014C8.00238 0.466359 6.54468 0.0917969 5.35224 0.0917969C2.97035 0.0917969 1.25089 1.66926 1.25089 4.08274C1.25089 6.38592 2.52863 6.89071 4.4689 7.44284C4.50035 7.45182 4.53304 7.46106 4.56679 7.47058C5.24401 7.6618 6.34609 7.97298 6.34609 8.7994C6.34609 9.63551 5.57315 9.99831 4.84744 9.99831C3.79062 9.99831 2.87569 9.44619 2.10275 8.76791L0.786149 11.2442C0.781366 11.2533 0.784056 11.2648 0.792526 11.2707C2.0043 12.1163 3.46548 12.6169 4.95795 12.6169C6.15677 12.6169 7.40302 12.2856 8.33369 11.4969C9.28021 10.6923 9.5641 9.47778 9.5641 8.2946C9.5641 6.37007 8.28636 5.53406 6.63008 5.04501L5.8413 4.80845L5.83558 4.8066C5.29909 4.63297 4.4689 4.36427 4.4689 3.67261C4.4689 3.01007 5.22609 2.67886 5.79396 2.67886C6.07426 2.67886 6.35028 2.7221 6.61553 2.80052Z" fill="#FF00A6"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M38.2256 27.6413V14.5484H35.3546V20.3377C34.7552 19.6278 33.7771 19.2808 32.8465 19.2808C30.4487 19.2808 28.7924 21.2684 28.7924 23.5873C28.7924 25.9061 30.4803 27.9094 32.878 27.9094C33.8245 27.9094 34.8182 27.5466 35.323 26.7421H35.3546V27.6413H38.2256ZM33.6037 21.7731C34.771 21.7731 35.4493 22.6092 35.4493 23.603C35.4493 24.6283 34.771 25.4171 33.6037 25.4171C32.4363 25.4171 31.7581 24.6283 31.7581 23.603C31.7581 22.6092 32.4363 21.7731 33.6037 21.7731Z" fill="#FF00A6"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M23.5605 27.9094C26.1633 27.9094 28.4348 26.3478 28.4348 23.603C28.4348 20.8425 26.1633 19.2808 23.5605 19.2808C20.9577 19.2808 18.6862 20.8425 18.6862 23.603C18.6862 26.3635 20.9735 27.9094 23.5605 27.9094ZM23.5605 21.7731C24.7278 21.7731 25.4061 22.6092 25.4061 23.603C25.4061 24.6283 24.7278 25.4171 23.5605 25.4171C22.3932 25.4171 21.7149 24.6283 21.7149 23.603C21.7149 22.6092 22.3932 21.7731 23.5605 21.7731Z" fill="#FF00A6"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M13.4681 27.9094C16.0708 27.9094 18.3424 26.3478 18.3424 23.603C18.3424 20.8425 16.0708 19.2808 13.4681 19.2808C10.8653 19.2808 8.59369 20.8425 8.59369 23.603C8.59369 26.3635 10.881 27.9094 13.4681 27.9094ZM13.4681 21.7731C14.6353 21.7731 15.3137 22.6092 15.3137 23.603C15.3137 24.6283 14.6353 25.4171 13.4681 25.4171C12.3007 25.4171 11.6225 24.6283 11.6225 23.603C11.6225 22.6092 12.3007 21.7731 13.4681 21.7731Z" fill="#FF00A6"></path><path d="M4.79525 20.3535V18.3659H8.5339V15.7473H1.70349V27.6413H4.79525V22.972H8.18684V20.3535H4.79525Z" fill="#FF00A6"></path></svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <!----FoodsCategory---->
                        {{ __('Dashboard') }}
                         <!----FoodsCategory---->
                    </x-jet-nav-link>

                @can('is_admin')
                        <!-----Foods----->
                    <x-jet-nav-link href="{{ route('foodscategory.create') }}" :active="request()->routeIs('foodscategory.create')">
                        {{ __('Foodscategory') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{ route('resturantcategory.create') }}" :active="request()->routeIs('resturantcategory.create')">
                        {{ __('ResturantCategory') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{ route('discounts.create') }}" :active="request()->routeIs('discounts.create')">
                        {{ __('Discounts') }}
                    </x-jet-nav-link>
                @endcan


                @can('is_restaurant')
                    <x-jet-nav-link href="{{ route('foods.create') }}" :active="request()->routeIs('foods.create')">
                        {{ __('AddFoods') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{ route('resturantprofile.index',auth()->user()->id) }}" :active="request()->routeIs('discounts.create')">
                        {{ __('Edite profile') }}
                    </x-jet-nav-link>
                @endcan


                    <!----- If USER ROLE TO 1 IT'S Meaning to is a Resturantowner ----->
                @can('restautant_not_confirm_inforamtion')
                    <x-jet-nav-link href="{{ route('resturantprofile.create') }}" :active="request()->routeIs('resturantprofile.create')">
                        {{ __('Please prees and confirm information To unlock abilities') }}
                    </x-jet-nav-link>
                @endcan
                    <!----- If USER ROLE TO 1 IT'S Meaning to is a Resturantowner ----->

                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
