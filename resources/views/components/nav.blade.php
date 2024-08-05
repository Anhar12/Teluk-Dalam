<!-- nav menu -->
<header class="bg-transparent w-full flex items-center border-b border-gray-300">
    <div class="w-full">
        <div id="navbar-medium" class="container w-full items-center justify-between md:flex md:flex-row">
            <div class="flex flex-row">
                <button id="hamburger" name="hamburger" type="button" class="md:hidden block mr-10 ">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                </button>
                <a href="index.html" class="md:pl-4 inline-flex gap-3 items-center py-6">
                    <img src="{{ asset('img/logoKukar.PNG') }}" width="40" alt="Kutai Kartanegara">
                    <div>
                        <h3 class="font-bold text-xl md:text-xl text-dark">
                            Desa Teluk Dalam
                        </h3>
                        <p class="text-xs md:text-sm font-semibold text-dark">
                            Kabupaten Kutai Kartanegara
                        </p>
                    </div>
                </a>
            </div>

            <!-- nav medium screen -->
            <div class="flex items-center px-4 ml-2 md:ml-0">
                <nav id="nav-menu"
                    class="hidden absolute py-5 shadow-lg rounded-lg max-w-[250px] w-full -left-1 top-full md:block md:static md:bg-transparent md:max-w-full md:shadow-none md:rounded-none font-bold">
                    <ul class="hidden md:flex z-20 space-x-3">
                        <li class="group">
                            <div class="relative inline-block text-left border-b-2 border-primary">
                                <a href="index.html" class="">
                                    <button type="button"
                                        class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-md font-semibold text-primary active-menu"
                                        id="menu-button-beranda" aria-expanded="false" aria-haspopup="true">
                                        Beranda
                                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </a>
                                <div id="dropdown-menu-beranda"
                                    class="absolute top-8 right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                    tabindex="-1">
                                    <div class="py-1 hover:bg-secondary rounded-t-md text-light hover:text-white"
                                        role="none">
                                        <a href="#berita" class="block px-4 font-medium py-2 text-sm"
                                            role="menuitem" tabindex="-1" id="menu-item-0">Berita</a>
                                    </div>
                                    <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                                        <a href="#agenda" class="block px-4 font-medium py-2 text-sm"
                                            role="menuitem" tabindex="-1" id="menu-item-2">Agenda Tahunan</a>
                                    </div>
                                    <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                        role="none">
                                        <a href="#lokasi" class="block px-4 font-medium py-2 text-sm"
                                            role="menuitem" tabindex="-1" id="menu-item-4">Lokasi Desa</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="group">
                            <div class="relative inline-block text-left">
                                <a href="profil.html" class="">
                                    <button type="button"
                                        class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-md font-semibold text-dark"
                                        id="menu-button-profil" aria-expanded="false" aria-haspopup="true">
                                        Profil
                                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </a>
                                <div id="dropdown-menu-profil"
                                    class="absolute top-8 right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                    tabindex="-1">
                                    <div class="py-1 hover:bg-secondary rounded-t-md text-light hover:text-white"
                                        role="none">
                                        <a href="profil.html#tentang" class="block px-4 font-medium py-2 text-sm"
                                            role="menuitem" tabindex="-1" id="menu-item-0">Tentang</a>
                                    </div>
                                    <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                                        <a href="profil.html#visi&misi" class="block px-4 font-medium py-2 text-sm"
                                            role="menuitem" tabindex="-1" id="menu-item-2">Visi & Misi</a>
                                    </div>
                                    <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                                        <a href="profil.html#sejarah" class="block px-4 font-medium py-2 text-sm"
                                            role="menuitem" tabindex="-1" id="menu-item-4">Sejarah Desa</a>
                                    </div>
                                    <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                        role="none">
                                        <a href="profil.html#geografis" class="block px-4 font-medium py-2 text-sm"
                                            role="menuitem" tabindex="-1" id="menu-item-6">Geografis Desa</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="group">
                            <div class="relative inline-block text-left">
                                <a href="transparasi.html" class="">
                                    <button type="button"
                                        class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md  px-3 py-2 text-md font-semibold text-dark hover:text-primary"
                                        id="menu-button-transparasi" aria-expanded="false" aria-haspopup="true">
                                        Transparasi
                                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </a>
                                <div id="dropdown-menu-transparasi"
                                    class="absolute top-8 right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                    tabindex="-1">
                                    <div class="py-1 hover:bg-secondary rounded-t-md text-light hover:text-white"
                                        role="none">
                                        <a href="transparasi.html#apbd" class="block px-4 font-medium py-2 text-sm"
                                            role="menuitem" tabindex="-1" id="menu-item-0">APBDesa</a>
                                    </div>
                                    <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                                        <a href="transparasi.html#perancangan"
                                            class="block px-4 font-medium py-2 text-sm" role="menuitem"
                                            tabindex="-1" id="menu-item-2">Perancangan
                                            Pembangunan</a>
                                    </div>
                                    <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                        role="none">
                                        <a href="transparasi.html#pembangunan"
                                            class="block px-4 font-medium py-2 text-sm" role="menuitem"
                                            tabindex="-1" id="menu-item-4">Pembangunan Desa</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="group">
                            <div class="relative inline-block text-left">
                                <a href="pemerintahan.html" class="">
                                    <button type="button"
                                        class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md  px-3 py-2 text-md font-semibold text-dark hover:text-primary"
                                        id="menu-button-pemerintahan" aria-expanded="false" aria-haspopup="true">
                                        Pemerintahan
                                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </a>
                                <div id="dropdown-menu-pemerintahan"
                                    class="absolute top-8 right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                    tabindex="-1">
                                    <div class="py-1 hover:bg-secondary rounded-t-md text-light hover:text-white"
                                        role="none">
                                        <a href="pemerintahan.html#struktur"
                                            class="block px-4 font-medium py-2 text-sm" role="menuitem"
                                            tabindex="-1" id="menu-item-0">Struktur Organisasi</a>
                                    </div>
                                    <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                        role="none">
                                        <a href="pemerintahan.html#lembaga"
                                            class="block px-4 font-medium py-2 text-sm" role="menuitem"
                                            tabindex="-1" id="menu-item-2">Lembaga Desa</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="group">
                            <div class="relative inline-block text-left">
                                <a href="informasi.html" class="">
                                    <button type="button"
                                        class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md  px-3 py-2 text-md font-semibold text-dark hover:text-primary"
                                        id="menu-button-informasi" aria-expanded="false" aria-haspopup="true">
                                        Informasi Publik
                                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </a>
                                <div id="dropdown-menu-informasi"
                                    class="absolute top-8 right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                    tabindex="-1">
                                    <div class="py-1 hover:bg-primary text-light hover:text-white rounded-t-md"
                                        role="none">
                                        <a href="informasi.html#berita" class="block px-4 font-medium py-2 text-sm "
                                            role="menuitem" tabindex="-1" id="menu-item-0">Berita Desa</a>
                                    </div>
                                    <div class="py-1 hover:bg-primary text-light hover:text-white " role="none">
                                        <a href="informasi.html#agenda" class="block px-4 font-medium py-2 text-sm "
                                            role="menuitem" tabindex="-1" id="menu-item-2">Agenda Tahunan</a>
                                    </div>
                                    <div class="py-1 hover:bg-primary text-light hover:text-white rounded-b-md"
                                        role="none">
                                        <a href="informasi.html#media" class="block px-4 font-medium py-2 text-sm "
                                            role="menuitem" tabindex="-1" id="menu-item-2">Sosial Media</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="group">
                            <div class="relative inline-block text-left">
                                <a href="potensi.html" class="">
                                    <button type="button"
                                        class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-md font-semibold text-dark hover:text-primary"
                                        id="menu-button-potensi" aria-expanded="false" aria-haspopup="true">
                                        Potensi & Inovasi
                                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </a>
                                <div id="dropdown-menu-potensi"
                                    class="absolute top-8 right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                    tabindex="-1">
                                    <div class="py-1 hover:bg-secondary rounded-t-md text-light hover:text-white"
                                        role="none">
                                        <a href="potensi.html#potensi" class="block px-4 font-medium py-2 text-sm"
                                            role="menuitem" tabindex="-1" id="menu-item-0">Potensi Desa</a>
                                    </div>
                                    <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                        role="none">
                                        <a href="potensi.html#inovasi" class="block px-4 font-medium py-2 text-sm"
                                            role="menuitem" tabindex="-1" id="menu-item-0">Inovasi Desa</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- nav small screen -->
<div id="sidebarMenu" class="md:hidden fixed inset-0 top-[98px] left-0 z-30 w-56 border-r-2 bg-white bg-opacity-70 backdrop-blur border-gray-100 transform transition-transform duration-300">
    <div class="h-full">
        <ul class="z-20 space-y-3 mx-3">
            <li class="group">
                <div class="relative w-full inline-block text-left border-b-2 border-primary">
                    <button type="button"
                        class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold text-primary active-menu"
                        id="menu-button-beranda-m" aria-expanded="false" aria-haspopup="true">
                        Beranda
                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="dropdown-menu-beranda-m"
                        class="absolute top-0 left-full w-40 -0 z-10 mt-2 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1 hover:bg-secondary rounded-t-md text-light hover:text-white"
                            role="none">
                            <a href="#berita" class="block px-4 font-medium py-2 text-sm" role="menuitem"
                                tabindex="-1" id="menu-item-0">Berita</a>
                        </div>
                        <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                            <a href="#agenda" class="block px-4 font-medium py-2 text-sm" role="menuitem"
                                tabindex="-1" id="menu-item-2">Agenda Tahunan</a>
                        </div>
                        <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                            role="none">
                            <a href="#lokasi" class="block px-4 font-medium py-2 text-sm" role="menuitem"
                                tabindex="-1" id="menu-item-4">Lokasi Desa</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="group">
                <div class="relative inline-block w-full text-left">
                    <button type="button"
                        class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold text-dark"
                        id="menu-button-profil-m" aria-expanded="false" aria-haspopup="true">
                        Profil
                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="dropdown-menu-profil-m"
                        class="absolute top-0 left-full w-40 z-10 mt-2 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1 hover:bg-secondary rounded-t-md text-light hover:text-white"
                            role="none">
                            <a href="profil.html#tentang" class="block px-4 font-medium py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-0">Tentang</a>
                        </div>
                        <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                            <a href="profil.html#visi&misi" class="block px-4 font-medium py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-2">Visi & Misi</a>
                        </div>
                        <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                            <a href="profil.html#sejarah" class="block px-4 font-medium py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-4">Sejarah Desa</a>
                        </div>
                        <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                            role="none">
                            <a href="profil.html#geografis" class="block px-4 font-medium py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-6">Geografis Desa</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="group">
                <div class="relative inline-block text-left w-full">
                    <button type="button"
                        class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold text-dark hover:text-primary"
                        id="menu-button-transparasi-m" aria-expanded="false" aria-haspopup="true">
                        Transparasi
                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="dropdown-menu-transparasi-m"
                        class="absolute top-0 left-full w-40 z-10 mt-2 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1 hover:bg-secondary rounded-t-md text-light hover:text-white"
                            role="none">
                            <a href="transparasi.html#apbd" class="block px-4 font-medium py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-0">APBDesa</a>
                        </div>
                        <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                            <a href="transparasi.html#perancangan"
                                class="block px-4 font-medium py-2 text-sm" role="menuitem" tabindex="-1"
                                id="menu-item-2">Perancangan
                                Pembangunan</a>
                        </div>
                        <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                            role="none">
                            <a href="transparasi.html#pembangunan"
                                class="block px-4 font-medium py-2 text-sm" role="menuitem" tabindex="-1"
                                id="menu-item-4">Pembangunan Desa</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="group">
                <div class="relative inline-block text-left w-full">
                    <button type="button"
                        class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold text-dark hover:text-primary"
                        id="menu-button-pemerintahan-m" aria-expanded="false" aria-haspopup="true">
                        Pemerintahan
                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="dropdown-menu-pemerintahan-m"
                        class="absolute top-0 left-full w-40 z-10 mt-2 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1 hover:bg-secondary rounded-t-md text-light hover:text-white"
                            role="none">
                            <a href="pemerintahan.html#struktur" class="block px-4 font-medium py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-0">Struktur Organisasi</a>
                        </div>
                        <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                            role="none">
                            <a href="pemerintahan.html#lembaga" class="block px-4 font-medium py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-2">Lembaga Desa</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="group">
                <div class="relative inline-block text-left w-full">
                    <button type="button"
                        class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold text-dark hover:text-primary"
                        id="menu-button-informasi-m" aria-expanded="false" aria-haspopup="true">
                        Informasi Publik
                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="dropdown-menu-informasi-m"
                        class="absolute top-0 left-full w-40 z-10 mt-2 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1 hover:bg-primary rounded-t-md" role="none">
                            <a href="informasi.html#berita"
                                class="block px-4 font-medium py-2 text-sm text-light hover:text-white"
                                role="menuitem" tabindex="-1" id="menu-item-0">Berita Desa</a>
                        </div>
                        <div class="py-1 hover:bg-primary " role="none">
                            <a href="informasi.html#agenda"
                                class="block px-4 font-medium py-2 text-sm text-light hover:text-white"
                                role="menuitem" tabindex="-1" id="menu-item-2">Agenda Tahunan</a>
                        </div>
                        <div class="py-1 hover:bg-primary rounded-b-md" role="none">
                            <a href="informasi.html#media"
                                class="block px-4 font-medium py-2 text-sm text-light hover:text-white"
                                role="menuitem" tabindex="-1" id="menu-item-2">Sosial Media</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="group">
                <div class="relative inline-block text-left w-full">
                    <button type="button"
                        class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold text-dark hover:text-primary"
                        id="menu-button-potensi-m" aria-expanded="false" aria-haspopup="true">
                        Potensi & Inovasi
                        <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="dropdown-menu-potensi-m"
                        class="absolute top-0 left-full w-40 z-10 mt-2 origin-top-right divide-y divide-light rounded-md bg-white shadow-lg ring-1 ring-dark ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1 hover:bg-secondary rounded-t-md text-light hover:text-white"
                            role="none">
                            <a href="potensi.html#potensi" class="block px-4 font-medium py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-0">Potensi Desa</a>
                        </div>
                        <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                            role="none">
                            <a href="potensi.html#inovasi" class="block px-4 font-medium py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-0">Inovasi Desa</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
