<div id="header" x-data="{ isOpen: false }"
    class=" fixed navbar bg-transparent lg:justify-center justify-end gap-16 z-40 transition-all duration-700 pr-4 border-transparent">

    <div class="absolute left-0 ">
        <img src="{{ url('images/LOGO RADIOACTIVE 2024.webp') }}" alt="image" class="w-14 lg:w-16 ml-2 mt-2">
        <div class="menu-item ml-0 font-brodyrawk text-white text-sm tracking-wide mt-1">RADIOACTIVE</div>
    </div>

    <div class="flex items-center justify-between">
        @auth
            <div onclick="toggleDropdown()"
                class="lg:hidden font-ltmuseumbold text-xs text-white flex justify-start mx-4 tracking-widest">
                Welcome, {{ auth()->user()->name }}
            </div>
        @else
            <a class="login-item lg:hidden me-4 no-underline rounded-full ring-[#D61525] hover:ring-1 hover:ring-white"
                href="/login"><span
                    class="flex font-ltmuseum text-white text-sm tracking-wide no-underline px-5 py-1 rounded-full hover:bg-[#d61525e7] active:bg-[#d6152581]  bg-[#D61525] cursor-pointer">LOGIN</span></a>
        @endauth
        <button @click="isOpen = !isOpen" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div class="hidden gap-3 lg:flex pr-4">
            @if (isset($title))
                <a id="homeItem"
                    class="menu-item font-ltmuseumbold text-white text-sm cursor-pointer 
        {{ $title === 'Home' ? 'underline underline-offset-4 decoration-[#D61525] decoration-2' : 'no-underline hover:underline hover:underline-offset-4 hover:decoration-[#d6152581] hover:decoration-2' }}"
                    href="/">
                    HOME
                </a>
                <a id="macItem"
                    class="menu-item font-ltmuseumbold text-white text-sm cursor-pointer 
        {{ $title === 'MAC' ? 'underline underline-offset-4 decoration-[#D61525] decoration-2' : 'no-underline hover:underline hover:underline-offset-4 hover:decoration-[#d6152581] hover:decoration-2' }}"
                    href="/mac">
                    MAC
                </a>
                <a id="racItem"
                    class="menu-item font-ltmuseumbold text-white text-sm cursor-pointer 
        {{ $title === 'RAC' ? 'underline underline-offset-4 decoration-[#D61525] decoration-2' : 'no-underline hover:underline hover:underline-offset-4 hover:decoration-[#d6152581] hover:decoration-2' }}"
                    href="/rac">
                    RAC
                </a>
                <a id="closingNightItem"
                    class="menu-item font-ltmuseumbold text-white text-sm cursor-pointer 
        {{ $title === 'closing-night' ? 'underline underline-offset-4 decoration-[#D61525] decoration-2' : 'no-underline hover:underline hover:underline-offset-4 hover:decoration-[#d6152581] hover:decoration-2' }}"
                    href="/closing-night">
                    CLOSING NIGHT
                </a>
                <a id="merchItem"
                    class="menu-item font-ltmuseumbold text-white text-sm cursor-pointer 
        {{ $title === 'merch' ? 'underline underline-offset-4 decoration-[#D61525] decoration-2' : 'no-underline hover:underline hover:underline-offset-4 hover:decoration-[#d6152581] hover:decoration-2' }}"
                    href="/merch">
                    MERCHANDISE
                </a>
            @else
                <a id="homeItem"
                    class="menu-item font-ltmuseumbold text-white text-sm cursor-pointer no-underline hover:underline hover:underline-offset-4 hover:decoration-[#d6152581] hover:decoration-2"
                    href="/">
                    HOME
                </a>
                <a id="macItem"
                    class="menu-item font-ltmuseumbold text-white text-sm cursor-pointer no-underline hover:underline hover:underline-offset-4 hover:decoration-[#d6152581] hover:decoration-2"
                    href="/mac">
                    MAC
                </a>
                <a id="racItem"
                    class="menu-item font-ltmuseumbold text-white text-sm cursor-pointer no-underline hover:underline hover:underline-offset-4 hover:decoration-[#d6152581] hover:decoration-2"
                    href="/rac">
                    RAC
                </a>
                <a id="closingNightItem"
                    class="menu-item font-ltmuseumbold text-white text-sm cursor-pointer no-underline hover:underline hover:underline-offset-4 hover:decoration-[#d6152581] hover:decoration-2"
                    href="/closing-night">
                    CLOSING NIGHT
                </a>
                <a id="merchItem"
                    class="menu-item font-ltmuseumbold text-white text-sm cursor-pointer no-underline hover:underline hover:underline-offset-4 hover:decoration-[#d6152581] decoration-2 hover:decoration-2"
                    href="/merch">
                    MERCHANDISE
                </a>
            @endif

            <div class="absolute right-2">
                @auth
                    <div id="dropdownButton" class="relative select-none">
                        <div onclick="toggleDropdown()"
                            class="font-ltmuseumbold text-xs text-white flex justify-start mx-4 tracking-widest">Welcome,
                            {{ auth()->user()->name }}
                            <svg id="fill" class="w-4 mx-2 cursor-pointer" fill="#D61525" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 330 330" xml:space="preserve">
                                <path id="XMLID_225_"
                                    d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                                        c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                                        s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                            </svg>
                        </div>
                        <div><a id="dropdown"
                                class="login-item absolute right-12 bg-[#D61525] mx-auto px-3 font-semibold no-underline text-white rounded-md text-xs top-[22px] ring-[#D61525] hover:ring-1 hover:ring-white hover:bg-[#d61525e7] active:bg-[#d6152581] hidden w-[100px] h-[20px] text-center"
                                href="/logout">LOG OUT</a></div>
                    </div>
                @else
                    <a class="login-item hidden lg:block no-underline  rounded-full ring-[#D61525] hover:ring-1 hover:ring-white"
                        href="/login"><span
                            class="flex font-ltmuseumbold text-white text-sm tracking-wide no-underline px-5 py-1 rounded-full hover:bg-[#d61525e7] active:bg-[#d615253c]  bg-[#D61525] cursor-pointer">LOGIN</span></a>
                @endauth
            </div>
        </div>
        <div class="mobile-navbar">
            <div class="lg:hidden fixed right-2 h-62 p-5 bg-[#D61525] rounded-lg shadow-xl top-[4.5rem]" x-show="isOpen"
                @click.away="isOpen = false">
                <div class="flex flex-col space-y-5 px-2">
                    @if (isset($title))
                        <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer 
                    {{ $title === 'Home' ? 'underline underline-offset-4  decoration-black' : 'no-underline hover:underline hover:underline-offset-4  hover:decoration-black' }} active:decoration-[#0000002d]"
                            href="/">HOME</a>
                        <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer 
                    {{ $title === 'MAC' ? 'underline underline-offset-4  decoration-black' : 'no-underline hover:underline hover:underline-offset-4  hover:decoration-black' }} active:decoration-[#0000002d]"
                            href="/mac">MAC</a>
                        <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer 
                    {{ $title === 'RAC' ? 'underline underline-offset-4  decoration-black' : 'no-underline hover:underline hover:underline-offset-4  hover:decoration-black' }} active:decoration-[#0000002d]"
                            href="/rac">RAC</a>
                        <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer 
                    {{ $title === 'closing-night' ? 'underline underline-offset-4  decoration-black' : 'no-underline hover:underline hover:underline-offset-4  hover:decoration-black' }} active:decoration-[#0000002d]"
                            href="/closing-night">CLOSING NIGHT</a>
                        <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer 
                    {{ $title === 'merch' ? 'underline underline-offset-4  decoration-black' : 'no-underline hover:underline hover:underline-offset-4  hover:decoration-black' }} active:decoration-[#0000002d]"
                            href="/merch">MERCHANDISE</a>
                        @auth
                            <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer 
                    {{ $title === 'logout' ? 'underline underline-offset-4  decoration-black' : 'no-underline hover:underline hover:underline-offset-4  hover:decoration-black' }} active:decoration-[#0000002d]"
                                href="/logout">LOG OUT</a>
                        @else
                            <a class="login-item hidden lg:block no-underline rounded-full ring-[#D61525] hover:ring-1 hover:ring-white"
                                href="/login">
                                <span
                                    class="flex font-ltmuseumbold text-white text-sm tracking-wide no-underline px-5 py-1 rounded-full hover:bg-[#d61525e7] active:bg-[#d615253c] bg-[#D61525] cursor-pointer">
                                    LOGIN
                                </span>
                            </a>
                        @endauth
                    @else
                        <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer no-underline hover:underline hover:underline-offset-4  hover:decoration-black active:decoration-[#0000002d]"
                            href="/">HOME</a>
                        <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer no-underline hover:underline hover:underline-offset-4  hover:decoration-black active:decoration-[#0000002d]"
                            href="/mac">MAC</a>
                        <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer no-underline hover:underline hover:underline-offset-4  hover:decoration-black active:decoration-[#0000002d]"
                            href="/rac">RAC</a>
                        <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer no-underline hover:underline hover:underline-offset-4  hover:decoration-black active:decoration-[#0000002d]"
                            href="/closing-night">CLOSING NIGHT</a>
                        <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer no-underline hover:underline hover:underline-offset-4  hover:decoration-black active:decoration-[#0000002d]"
                            href="/merch">MERCHANDISE</a>
                        @auth
                            <a class="font-ltmuseumbold text-white text-sm tracking-wide cursor-pointer no-underline hover:underline hover:underline-offset-4  hover:decoration-black active:decoration-[#0000002d]"
                                href="/logout">LOG OUT</a>
                        @else
                            <a class="login-item hidden lg:block no-underline rounded-full ring-[#D61525] hover:ring-1 hover:ring-white"
                                href="/login">
                                <span
                                    class="flex font-ltmuseumbold text-white text-sm tracking-wide no-underline px-5 py-1 rounded-full hover:bg-[#d61525e7] active:bg-[#d615253c] bg-[#D61525] cursor-pointer">
                                    LOGIN
                                </span>
                            </a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
