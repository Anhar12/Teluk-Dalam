<x-layout>
    <style>
        .dropdown-content {
          transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
          max-height: 0;
          opacity: 0;
          overflow: hidden;
        }

        .dropdown-active {
          max-height: 100%;
          opacity: 1;
        }

        .triangle-active {
            transition: 0.5s ease-out;
            transform: rotate(90deg);
            color: #0ea5e9;
        }

        .triangle-deactive {
            transition: 0.5s ease-out;
            transform: rotate(0deg);
            color: #1f2937;
        }
    </style>

    @vite(['resources/js/struktur.js'])

    <x-slot:title>{{$title}}</x-slot:title>

    <!-- struktur organisasi -->
    <section class="pt-8 pb-24 items-center">
        <div class="container px-8">
            <div class="flex md:flex-row flex-col-reverse gap-10">
                <!-- items struktur organisasi -->
                <div class="md:w-1/3">
                    <div class="border-b border-t border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kepala Desa
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kepala Desa</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Sekretaris Desa
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Sekretaris Desa</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kaur Pemerintahan
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kaur Pemerintahan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kaur Pembangunan
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kaur Pembangunan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kaur Pemberdayaan Masyarakat
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kaur Pemberdayaan Masyarakat</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kaur Kesejahteraan Masyarakat
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kaur Kesejahteraan Masyarakat</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kaur Umum
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kaur Umum</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kaur Keuangan
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kaur Keuangan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kaur Tata Usaha
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kaur Tata Usaha</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kasi Pemerintahan
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kasi Pemerintahan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kasi Kesejahteraan
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kasi Kesejahteraan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kasi Pelayanan
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kasi Pelayanan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kadus 1
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kadus 1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kadus 2
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kadus 2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="border-b border text-primary hover:bg-gray-100 items-center">
                        <button class="dropdown-button px-4 py-2 w-full text-left text-md font-semibold focus:outline-none items-center">
                            <div class="inline-flex items-center gap-2">
                                <svg class="dropdown-triangle text-dark" width="16" height="16" viewBox="0 0 20 20" fill="currentcolor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.795 11.272L7.795 16.272C6.79593 16.8964 5.5 16.1782 5.5 15L5.5 5.00002C5.5 3.82186 6.79593 3.1036 7.795 3.72802L15.795 8.72802C16.735 9.31552 16.735 10.6845 15.795 11.272Z" fill="currentcolor"></path> </g></svg>
                                Kadus 3
                            </div>
                            <div class="dropdown-content px-4 ">
                                <div class="bg-white p-3 w-3/4 mx-auto shadow-lg rounded-lg mt-5">
                                    <img src="{{ asset('img/jokowi.jpg') }}" class="w-full" alt="">
                                </div>

                                <div class="w-full mx-auto">
                                    <table class="w-full divide-y divide-gray-200">
                                        <tbody class="bg-transparent divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Nama</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jokowi</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">NIP</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">0011223344</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Jabatan</td>
                                                <td class="px-2 py-4 whitespace-nowrap text-dark font-medium text-sm w-1">:</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-dark font-medium text-sm">Kadus 3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="md:w-2/3">
                    <div class="mx-auto text-center mb-5">
                        <h3 class="text-2xl font-bold text-primary mb-1 uppercase">
                            Struktur Organisasi
                        </h3>
                        <h2 class="text-lg md:text-3xl font-semibold md:font-bold text-dark mb-3">
                            Desa Teluk Dalam, Kecamatan Muara Jawa
                        </h2>
                        <p class="text-sm md:text-md font-medium text-light ">
                            Berikut merupakan lembaga yang tergabung dalam Desa Teluk Dalam, Kec. Muara Jawa, Kab. Kutai Kartanegara
                        </p>
                    </div>
                    <img src="{{ asset('img/struktur_org_desa.png') }}" class="shadow-lg mb-5" alt="">
                    <a href="" class="inline-flex gap-2 items-center text-left bg-primary text-white font-semibold rounded-md text-lg hover:bg-secondary px-3 py-2">
                        Cetak Struktur Organisasi
                        <svg fill="currentcolor" width="18" height="18" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill-rule="evenodd"> <path d="M1251.654 0c44.499 0 88.207 18.07 119.718 49.581l329.223 329.224c31.963 31.962 49.581 74.54 49.581 119.717V1920H169V0Zm-66.183 112.941H281.94V1807.06h1355.294V564.706H1185.47V112.94Zm112.94 23.379v315.445h315.445L1298.412 136.32Z"></path> <path d="M900.497 677.67c26.767 0 50.372 12.65 67.991 37.835 41.901 59.068 38.965 121.976 23.492 206.682-5.308 29.14.113 58.617 16.263 83.125 22.814 34.786 55.68 82.673 87.981 123.219 23.718 29.93 60.198 45.854 97.13 40.885 23.718-3.276 52.292-5.986 81.656-5.986 131.012 0 121.186 46.757 133.045 89.675 6.55 25.976 3.275 48.678-10.165 65.506-16.715 22.701-51.162 34.447-101.534 34.447-55.793 0-74.202-9.487-122.767-24.96-27.445-8.81-55.906-10.617-83.69-3.275-55.453 14.456-146.936 36.48-223.284 46.983-40.772 5.647-77.816 26.654-102.438 60.875-55.454 76.8-106.842 148.518-188.273 148.518-21.007 0-40.32-7.567-56.244-22.701-23.492-23.492-33.544-49.581-28.574-79.85 13.778-92.95 128.075-144.79 196.066-182.625 16.037-8.923 28.687-22.589 36.592-39.53l107.86-233.223c7.68-16.377 10.051-34.56 7.228-52.518-12.537-79.059-31.06-211.99 18.748-272.075 10.955-13.44 26.09-21.007 42.917-21.007Zm20.556 339.953c-43.257 126.607-119.718 264.282-129.996 280.32 92.273-43.37 275.916-65.28 275.916-65.28-92.386-88.998-145.92-215.04-145.92-215.04Z"></path> </g> </g></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- lembaga desa -->
    <section id="lembaga" class="py-24 items-center bg-gray-100">
        <div class="container">
            <div class="mx-auto text-center mb-10">
                <h3 class="text-2xl font-bold text-primary mb-1 md:mb-3 uppercase">
                    Lembaga Desa
                </h3>
                <h2 class="text-lg md:text-3xl font-semibold md:font-bold text-dark mb-1 md:mb-3">
                    Teluk Dalam, Kecamatan Muara Jawa
                </h2>
                <p class="text-sm md:text-md font-medium text-light ">
                    Berikut merupakan lembaga yang tergabung dalam Desa Teluk Dalam, Kec. Muara Jawa, Kab. Kutai Kartanegara
                </p>
            </div>
            <div class="px-4">
                <!-- table lembaga -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-6 py-3 text-left text-md font-semibold uppercase tracking-wider">Nama Lembaga</th>
                                <th class="px-6 py-3 text-left text-md font-semibold uppercase tracking-wider">Alamat Kantor</th>
                                <th class="px-6 py-3 text-center text-md font-semibold uppercase tracking-wider">Lambang</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="odd:bg-white even:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-primary font-semibold text-md">Kelompok Wanita Tani (KWT)</td>
                                <td class="px-6 py-4 whitespace-nowrap text-left text-light font-semibold text-sm">Jl. kehidupan, Gg. kematian, no. 69</td>
                                <td class="px-6 py-4 whitespace-nowrap flex justify-center">
                                    <img src="{{ asset('img/logoKukar.PNG') }}" width="36" alt="">
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-primary font-semibold text-md">Pemberdayaan Kesejahteraan Keluarga (PKK)</td>
                                <td class="px-6 py-4 whitespace-nowrap text-left text-light font-semibold text-sm">Jl. kehidupan, Gg. kematian, no. 69</td>
                                <td class="px-6 py-4 whitespace-nowrap flex justify-center">
                                    <img src="{{ asset('img/logoKukar.PNG') }}" width="36" alt="">
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-primary font-semibold text-md">Karang Taruna</td>
                                <td class="px-6 py-4 whitespace-nowrap text-left text-light font-semibold text-sm">Jl. kehidupan, Gg. kematian, no. 69</td>
                                <td class="px-6 py-4 whitespace-nowrap flex justify-center">
                                    <img src="{{ asset('img/logoKukar.PNG') }}" width="36" alt="">
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-primary font-semibold text-md">Pemuda Pancasila (PP)</td>
                                <td class="px-6 py-4 whitespace-nowrap text-left text-light font-semibold text-sm">Jl. kehidupan, Gg. kematian, no. 69</td>
                                <td class="px-6 py-4 whitespace-nowrap flex justify-center">
                                    <img src="{{ asset('img/logoKukar.PNG') }}" width="36" alt="">
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-primary font-semibold text-md">Barisan Ansor Serbaguna Nahdlatul Ulama (Banser)</td>
                                <td class="px-6 py-4 whitespace-nowrap text-left text-light font-semibold text-sm">Jl. kehidupan, Gg. kematian, no. 69</td>
                                <td class="px-6 py-4 whitespace-nowrap flex justify-center">
                                    <img src="{{ asset('img/logoKukar.PNG') }}" width="36" alt="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</x-layout>
