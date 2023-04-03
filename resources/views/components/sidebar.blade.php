<div class="flex-none w-80 m-5 fixed h-screen top-0">
    <div class="relative">
        <div class="flex flex-col sm:flex-row sm:justify-around">
            <div class=" w-72">
                <nav class="mt-6 px-5 text-gray-600">
                    <h1 class="text-2xl font-bold">Traspac<span class="text-blue-600">App</span></h1>
                    <a class=" flex items-center mt-20 p-2 gap-4 active:bg-blue-600 text-gray-500 transition duration-0 hover:duration-700 ease-in-out hover:bg-blue-600 hover:text-white rounded-lg py-3 pl-5 " href="{{ route('home') }}">
                        <svg fill="none" stroke="currentColor" class="font-bold" width="25" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z"></path>
                          </svg>
                        <span class="grow font-semibold">
                            Dashboard
                        </span>
                    </a>
                    @guest
                        <a class=" flex items-center mt-20 mb-16 p-2 gap-4 text-gray-500 hover:text-[#013E1F]" href="{{ route('login') }}">
                            <div class="flex-none w-12 flex justify-center items-center bg-gray-500 text-white text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 h-12 rounded-lg ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                            </div>
                            <span class="grow font-semibold">
                                Login
                            </span>
                        </a>
                    @else
                        <a class=" flex items-center mt-24 p-2 gap-4 text-gray-500 hover:text-[#013E1F]" href="">
                            <div class="flex-none w-12 flex justify-center items-center text-white text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 h-12 rounded-lg ">
                                <img src="{{ asset('/asset/img/me.jpg') }}" class="rounded-lg" alt="">                                          
                            </div>
                            <span class="grow font-bold text-orange-400">
                                {{ Auth::user()->name }}
                            </span>
                        </a>
                        <a class=" flex items-center mt-2 mb-16 p-2 gap-4 text-gray-500 hover:text-[#013E1F]" href="{{ route('logout') }}">
                                <div class="flex-none w-12 flex justify-center items-center bg-gray-500 text-white text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 h-12 rounded-lg ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                </div>
                                <span class="grow font-semibold">
                                    Logout
                                </span>
                            </a>
                        </a>
                    @endguest
                </nav>
            </div>
        </div>
    </div>
</div>