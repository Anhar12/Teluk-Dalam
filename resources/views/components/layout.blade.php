@php
    $currentRoute = \Request::route()->getName(); // Mendapatkan nama route saat ini
@endphp

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/script.js'])
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logoKukar.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
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
                    <a href="/" class="md:pl-4 inline-flex gap-3 items-center py-6">
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
                                <div class="relative inline-block text-left {{ $currentRoute == 'beranda' ? 'border-b-2 border-primary' : '' }}">
                                    <a href="/" class="">
                                        <button type="button"
                                            class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-md font-semibold {{ $currentRoute == 'beranda' ? 'text-primary active-menu' : 'text-dark' }}"
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
                                            <a href="/#berita" class="block px-4 font-medium py-2 text-sm"
                                                role="menuitem" tabindex="-1" id="menu-item-0">Berita</a>
                                        </div>
                                        <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                                            <a href="/#agenda" class="block px-4 font-medium py-2 text-sm"
                                                role="menuitem" tabindex="-1" id="menu-item-2">Agenda Tahunan</a>
                                        </div>
                                        <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                            role="none">
                                            <a href="/#lokasi" class="block px-4 font-medium py-2 text-sm"
                                                role="menuitem" tabindex="-1" id="menu-item-4">Lokasi Desa</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="group">
                                <div class="relative inline-block text-left {{ $currentRoute == 'profil' ? 'border-b-2 border-primary' : '' }}">
                                    <a href="/profil-desa" class="">
                                        <button type="button"
                                            class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-md font-semibold {{ $currentRoute == 'profil' ? 'text-primary active-menu' : 'text-dark' }}"
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
                                            <a href="/profil-desa#tentang" class="block px-4 font-medium py-2 text-sm"
                                                role="menuitem" tabindex="-1" id="menu-item-0">Tentang</a>
                                        </div>
                                        <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                                            <a href="/profil-desa#visi&misi" class="block px-4 font-medium py-2 text-sm"
                                                role="menuitem" tabindex="-1" id="menu-item-2">Visi & Misi</a>
                                        </div>
                                        <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                                            <a href="/profil-desa#sejarah" class="block px-4 font-medium py-2 text-sm"
                                                role="menuitem" tabindex="-1" id="menu-item-4">Sejarah Desa</a>
                                        </div>
                                        <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                            role="none">
                                            <a href="/profil-desa#geografis" class="block px-4 font-medium py-2 text-sm"
                                                role="menuitem" tabindex="-1" id="menu-item-6">Geografis Desa</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="group">
                                <div class="relative inline-block text-left {{ $currentRoute == 'transparasi' ? 'border-b-2 border-primary' : '' }}">
                                    <a href="/transparasi" class="">
                                        <button type="button"
                                            class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md  px-3 py-2 text-md font-semibold {{ $currentRoute == 'transparasi' ? 'text-primary active-menu' : 'text-dark' }}"
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
                                            <a href="/transparasi#apbd" class="block px-4 font-medium py-2 text-sm"
                                                role="menuitem" tabindex="-1" id="menu-item-0">APBDesa</a>
                                        </div>
                                        <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                                            <a href="/transparasi#perancangan"
                                                class="block px-4 font-medium py-2 text-sm" role="menuitem"
                                                tabindex="-1" id="menu-item-2">Perancangan
                                                Pembangunan</a>
                                        </div>
                                        <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                            role="none">
                                            <a href="/transparasi#pembangunan"
                                                class="block px-4 font-medium py-2 text-sm" role="menuitem"
                                                tabindex="-1" id="menu-item-4">Pembangunan Desa</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="group">
                                <div class="relative inline-block text-left {{ $currentRoute == 'pemerintahan' ? 'border-b-2 border-primary' : '' }}">
                                    <a href="/pemerintahan-desa" class="">
                                        <button type="button"
                                            class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md  px-3 py-2 text-md font-semibold {{ $currentRoute == 'pemerintahan' ? 'text-primary active-menu' : 'text-dark' }}"
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
                                            <a href="/pemerintahan-desa#struktur"
                                                class="block px-4 font-medium py-2 text-sm" role="menuitem"
                                                tabindex="-1" id="menu-item-0">Struktur Organisasi</a>
                                        </div>
                                        <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                            role="none">
                                            <a href="/pemerintahan-desa#lembaga"
                                                class="block px-4 font-medium py-2 text-sm" role="menuitem"
                                                tabindex="-1" id="menu-item-2">Lembaga Desa</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="group">
                                <div class="relative inline-block text-left {{ $currentRoute == 'informasi' ? 'border-b-2 border-primary' : '' }}">
                                    <a href="/informasi-publik" class="">
                                        <button type="button"
                                            class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md  px-3 py-2 text-md font-semibold {{ $currentRoute == 'informasi' ? 'text-primary active-menu' : 'text-dark' }}"
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
                                            <a href="/informasi-publik#berita" class="block px-4 font-medium py-2 text-sm "
                                                role="menuitem" tabindex="-1" id="menu-item-0">Berita Desa</a>
                                        </div>
                                        <div class="py-1 hover:bg-primary text-light hover:text-white " role="none">
                                            <a href="/informasi-publik#agenda" class="block px-4 font-medium py-2 text-sm "
                                                role="menuitem" tabindex="-1" id="menu-item-2">Agenda Tahunan</a>
                                        </div>
                                        <div class="py-1 hover:bg-primary text-light hover:text-white rounded-b-md"
                                            role="none">
                                            <a href="/informasi-publik#media" class="block px-4 font-medium py-2 text-sm "
                                                role="menuitem" tabindex="-1" id="menu-item-2">Sosial Media</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="group">
                                <div class="relative inline-block text-left {{ $currentRoute == 'potensi&inovasi' ? 'border-b-2 border-primary' : '' }}">
                                    <a href="/potensi-inovasi" class="">
                                        <button type="button"
                                            class="inline-flex items-center w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-md font-semibold {{ $currentRoute == 'potensi&inovasi' ? 'text-primary active-menu' : 'text-dark' }}"
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
                                            <a href="/potensi-inovasi#potensi" class="block px-4 font-medium py-2 text-sm"
                                                role="menuitem" tabindex="-1" id="menu-item-0">Potensi Desa</a>
                                        </div>
                                        <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                            role="none">
                                            <a href="/potensi-inovasi#inovasi" class="block px-4 font-medium py-2 text-sm"
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
                    <div class="relative w-full inline-block text-left {{ $currentRoute == 'beranda' ? 'border-b-2 border-primary' : '' }}">
                        <button type="button"
                            class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold {{ $currentRoute == 'beranda' ? 'text-primary active-menu' : 'text-dark' }}""
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
                    <div class="relative inline-block w-full text-left {{ $currentRoute == 'profil' ? 'border-b-2 border-primary' : '' }}">
                        <button type="button"
                            class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold {{ $currentRoute == 'profil' ? 'text-primary active-menu' : 'text-dark' }}"
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
                                <a href="/profil-desa#tentang" class="block px-4 font-medium py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-0">Tentang</a>
                            </div>
                            <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                                <a href="/profil-desa#visi&misi" class="block px-4 font-medium py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-2">Visi & Misi</a>
                            </div>
                            <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                                <a href="/profil-desa#sejarah" class="block px-4 font-medium py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-4">Sejarah Desa</a>
                            </div>
                            <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                role="none">
                                <a href="/profil-desa#geografis" class="block px-4 font-medium py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-6">Geografis Desa</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="group">
                    <div class="relative inline-block text-left w-full {{ $currentRoute == 'transparasi' ? 'border-b-2 border-primary' : '' }}">
                        <button type="button"
                            class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold {{ $currentRoute == 'transparasi' ? 'text-primary active-menu' : 'text-dark' }}"
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
                                <a href="/transparasi#apbd" class="block px-4 font-medium py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-0">APBDesa</a>
                            </div>
                            <div class="py-1 hover:bg-secondary text-light hover:text-white" role="none">
                                <a href="/transparasi#perancangan"
                                    class="block px-4 font-medium py-2 text-sm" role="menuitem" tabindex="-1"
                                    id="menu-item-2">Perancangan
                                    Pembangunan</a>
                            </div>
                            <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                role="none">
                                <a href="/transparasi#pembangunan"
                                    class="block px-4 font-medium py-2 text-sm" role="menuitem" tabindex="-1"
                                    id="menu-item-4">Pembangunan Desa</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="group">
                    <div class="relative inline-block text-left w-full {{ $currentRoute == 'pemerintahan' ? 'border-b-2 border-primary' : '' }}">
                        <button type="button"
                            class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold {{ $currentRoute == 'pemerintahan' ? 'text-primary active-menu' : 'text-dark' }}"
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
                                <a href="/pemerintahan-desa#struktur" class="block px-4 font-medium py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-0">Struktur Organisasi</a>
                            </div>
                            <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                role="none">
                                <a href="/pemerintahan-desa#lembaga" class="block px-4 font-medium py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-2">Lembaga Desa</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="group">
                    <div class="relative inline-block text-left w-full {{ $currentRoute == 'informasi' ? 'border-b-2 border-primary' : '' }}">
                        <button type="button"
                            class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold {{ $currentRoute == 'informasi' ? 'text-primary active-menu' : 'text-dark' }}"
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
                                <a href="/informasi-publik#berita"
                                    class="block px-4 font-medium py-2 text-sm text-light hover:text-white"
                                    role="menuitem" tabindex="-1" id="menu-item-0">Berita Desa</a>
                            </div>
                            <div class="py-1 hover:bg-primary " role="none">
                                <a href="/informasi-publik#agenda"
                                    class="block px-4 font-medium py-2 text-sm text-light hover:text-white"
                                    role="menuitem" tabindex="-1" id="menu-item-2">Agenda Tahunan</a>
                            </div>
                            <div class="py-1 hover:bg-primary rounded-b-md" role="none">
                                <a href="/informasi-publik#media"
                                    class="block px-4 font-medium py-2 text-sm text-light hover:text-white"
                                    role="menuitem" tabindex="-1" id="menu-item-2">Sosial Media</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="group">
                    <div class="relative inline-block text-left w-full {{ $currentRoute == 'potensi&inovasi' ? 'border-b-2 border-primary' : '' }}">
                        <button type="button"
                            class="inline-flex items-center w-full justify-between rounded-md bg-white px-3 py-2 text-md font-semibold {{ $currentRoute == 'potensi&inovasi' ? 'text-primary active-menu' : 'text-dark' }}"
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
                                <a href="/potensi-inovasi#potensi" class="block px-4 font-medium py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-0">Potensi Desa</a>
                            </div>
                            <div class="py-1 hover:bg-secondary rounded-b-md text-light hover:text-white"
                                role="none">
                                <a href="/potensi-inovasi#inovasi" class="block px-4 font-medium py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-0">Inovasi Desa</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <main>
        {{$slot}}
    </main>

    <!-- footer -->
    <footer class="pt-16 pb-8 bg-sky-600 text-white">
        <div class="container md:px-8">
            <div class="flex flex-col md:flex-row md:justify-between md:space-x-10 gap-5 mb-8 md:mb-10">
                <div class="md:w-2/5 mb-5">
                    <h1 class="text-2xl font-bold underline underline-offset-8 mb-3">
                        Desa Teluk Dalam
                    </h1>
                    <p class="text-md">
                        Kecamatan Muara jawa, Kabupaten Kutai Kartanegara
                    </p>
                    <p id="textFooter" class="text-sm text-justify line-clamp-4">
                        Website profil desa ini merupakan sistem informasi yang dibangun untuk memberikan kemudahan bagi
                        warga dalam mengakses informasi seputar desa. Melalui website ini, warga dapat mengetahui
                        berbagai potensi, program, dan kegiatan yang ada di desa secara terpusat dan up-to-date.
                    </p>
                    <button id="profilFooter" name="profilFooter" type="button" class="underline cursor-pointer">
                        Selengkapnya
                    </button>
                </div>
                <div class="md:w-1/5 space-y-3">
                    <h1 class="text-2xl font-bold underline underline-offset-4">
                        Tautan
                    </h1>
                    <ul class="text-medium space-y-1">
                        <li>
                            <a class="hover:underline hover:text-white" href="/">Beranda</a>
                        </li>
                        <li>
                            <a class="hover:underline hover:text-white" href="/profil-desa">Profil</a>
                        </li>
                        <li>
                            <a class="hover:underline hover:text-white" href="/transparasi">Transparasi</a>
                        </li>
                        <li>
                            <a class="hover:underline hover:text-white" href="/pemerintahan-desa">Pemerintahan</a>
                        </li>
                        <li>
                            <a class="hover:underline hover:text-white" href="/informasi-publik">Informasi Publik</a>
                        </li>
                        <li>
                            <a class="hover:underline hover:text-white" href="/potensi-inovasi">Potensi Desa</a>
                        </li>
                    </ul>
                </div>
                <div class="md:w-2/5">
                    <h1 class="text-2xl font-bold underline underline-offset-8 mb-3">
                        Kontak Kami
                    </h1>
                    <div class="flex flex-col gap-2 mb-3">
                        <p class="text-sm text-justify">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident nemo voluptates maiores
                            sapiente temporibus blanditiis dolorum saepe repudiandae illo debitis, consectetur
                            voluptatem officiis, quidem reiciendis veritatis est repellendus praesentium commodi.
                        </p>
                        <a href="https://wa.me/085845723207"
                            class="flex flex-row text-sm gap-2 items-center text-justify hover:underline">
                            <svg class="h-4 w-4 md:h-5 md:w-5 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.298-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                            +62-888-8888-8888
                        </a>
                        <a href="mailto:anharkhoirun@gmail.com"
                            class="flex flex-row text-sm gap-2 items-center text-justify hover:underline">
                            <svg class="h-4 w-4 md:h-5 md:w-5 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z" />
                            </svg>
                            telukdalam@gov.co.id
                        </a>
                    </div>
                    <div class="flex items-center space-x-5 justify-normal">
                        <a href="mailto:"
                            class="w-9 h-9 rounded-full flex justify-center items-center border border-white  hover:shadow-lg hover:border-primary hover:bg-secondary">
                            <svg width="20" class="fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z" />
                            </svg>
                        </a>
                        <a href="https://wa.me/"
                            class="w-9 h-9 rounded-full flex justify-center items-center border border-white  hover:shadow-lg hover:border-primary hover:bg-secondary">
                            <svg width="20" class="fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.298-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/"
                            class="w-9 h-9 rounded-full flex justify-center items-center border border-white  hover:shadow-lg hover:border-primary hover:bg-secondary">
                            <svg width="20" class="fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border border-white mb-5 md:mb-10"></div>

            <div class="flex flex-col md:flex-row md:gap-3 items-center md:justify-between">
                <div class="font-semibold md:font-bold text-sm md:text-md text-gray-100 gap-2 flex items-center">
                    WEBSITE OLEH XNXX
                </div>
                <div class="font-semibold md:font-bold text-sm md:text-md text-center text-gray-100 space-x-2 flex items-center">
                    <p>2024 &copy; <span></span> KKN 69 KUTAI KARTANEGARA.</p>
                </div>

            </div>
        </div>
    </footer>
</body>

</html>
