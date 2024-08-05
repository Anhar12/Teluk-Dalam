
<x-layout>
    @vite('resources/js/slider.js')
    <x-slot:title>{{$title}}</x-slot:title>
    <!-- hero -->
    <section class="">
        <div class="overflow-hidden">
            <div class="relative w-full md:h-[32rem] overflow-hidden">
                <div class="slider w-full h-full flex transition-transform duration-500">
                    <div class="slide flex-shrink-0 w-full h-full relative">
                        <img src="{{ asset('img/slide1.jpg') }}" class="w-full h-full object-cover" alt="Desa Teluk Dalam Muara Jawa">
                        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-white text-center select-none animate__animated animate__fadeInUp">
                            <div class="py-[62px] md:py-[120px] space-y-5 uppercase">
                                <h1 class="text-3xl md:text-7xl font-bold">
                                    Selamat Datang
                                </h1>
                                <h1 class="text-3xl md:text-7xl font-bold">
                                    Di Website
                                </h1>
                                <h1 class="text-3xl md:text-7xl font-bold">
                                    Desa Teluk Dalam
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="slide flex-shrink-0 w-full h-full relative">
                        <img src="{{ asset('img/slide2.jpg') }}" class="w-full h-full object-cover"
                            alt="Pemandangan Desa Teluk Dalam">
                        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
                    </div>
                    <div class="slide flex-shrink-0 w-full h-full relative">
                        <img src="{{ asset('img/slide3.jpg') }}" class="w-full h-full object-cover"
                            alt="Pemandangan Desa Teluk Dalam">
                        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
                    </div>
                </div>
                <button
                    class="prev-button absolute top-1/2 left-4 transform -translate-y-1/2 bg-white hover:bg-gray-300 text-dark p-2 rounded-full z-10">
                    <svg class="h-3 w-3 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="next-button absolute top-1/2 right-4 transform -translate-y-1/2 bg-white hover:bg-gray-300 text-dark p-2 rounded-full z-10">
                    <svg class="h-3 w-3 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- berita & agenda -->
    <section class="pt-16 pb-24 md:py-24 items-center">
        <div class="container md:px-8">
            <div class="flex md:flex-row flex-col space-y-10 md:space-y-0 md:space-x-10">
                <div id="berita" class="md:w-2/3 space-y-5">
                    <div class="flex w-full items-center gap-3 text-primary font-semibold text-2xl border-b-2 border-primary">
                        <h2>
                            Berita Terkini
                        </h2>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M19 3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 19V5h14v14H5zm8-13h5v2h-5V6zm-7 0h5v6H6V6zm7 4h5v2h-5v-2zm0 4h5v2h-5v-2zM6 14h5v2H6v-2z"/>
                        </svg>
                    </div>
                    <!-- items berita -->
                    <div class="items-center space-y-5">
                        <div class="flex md:flex-row flex-col gap-1 md:gap-5">
                            <div class="relative md:w-1/3 overflow-hidden group hover:shadow-lg cursor-pointer">
                                <img src="{{ asset('img/slide1.jpg') }}" class="w-full h-40 text-center transform transition-transform duration-300 ease-in group-hover:scale-105" alt="">
                                <div class="absolute bottom-0 left-0 bg-sky-600 py-[6px] px-[10px] text-white font-medium text-sm date opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in">
                                    30 Juli, 2024
                                </div>
                            </div>
                            <div class="md:w-2/3 items-center">
                                <h3 class="text-primary font-semibold text-xl md:mb-2 line-clamp-1">
                                    Update berita bola hari ini
                                </h3>
                                <p class="text-light font-medium text-sm text-justify line-clamp-4 md:mb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, incidunt quas eligendi dolorem quo nam necessitatibus sunt, obcaecati pariatur sint in eos quisquam soluta mollitia libero laborum sit totam quam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nemo ab iusto. Voluptatem, beatae rerum. Vitae ab ipsum veritatis, molestiae aperiam expedita praesentium assumenda, placeat id earum aliquam error enim!
                                </p>
                                <a href="#" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
                                    Selengkapnya <span class="text-2xl">&raquo;</span>
                                </a>
                            </div>
                        </div>

                        <div class="flex md:flex-row flex-col gap-1 md:gap-5">
                            <div class="relative md:w-1/3 overflow-hidden group hover:shadow-lg cursor-pointer">
                                <img src="{{ asset('img/slide2.jpg') }}" class="w-full h-40 text-center transform transition-transform duration-300 ease-in group-hover:scale-105" alt="">
                                <div class="absolute bottom-0 left-0 bg-sky-600 py-[6px] px-[10px] text-white font-medium text-sm date opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in">
                                    30 Juli, 2024
                                </div>
                            </div>
                            <div class="md:w-2/3 items-center">
                                <h3 class="text-primary font-semibold text-xl md:mb-2 line-clamp-1">
                                    Update berita jomok hari ini
                                </h3>
                                <p class="text-light font-medium text-sm text-justify line-clamp-4 md:mb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, incidunt quas eligendi dolorem quo nam necessitatibus sunt, obcaecati pariatur sint in eos quisquam soluta mollitia libero laborum sit totam quam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nemo ab iusto. Voluptatem, beatae rerum. Vitae ab ipsum veritatis, molestiae aperiam expedita praesentium assumenda, placeat id earum aliquam error enim!
                                </p>
                                <a href="#" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
                                    Selengkapnya <span class="text-2xl">&raquo;</span>
                                </a>
                            </div>
                        </div>

                        <div class="flex md:flex-row flex-col gap-1 md:gap-5">
                            <div class="relative md:w-1/3 overflow-hidden group hover:shadow-lg cursor-pointer">
                                <img src="{{ asset('img/slide3.jpg') }}" class="w-full h-40 text-center transform transition-transform duration-300 ease-in group-hover:scale-105" alt="">
                                <div class="absolute bottom-0 left-0 bg-sky-600 py-[6px] px-[10px] text-white font-medium text-sm date opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in">
                                    30 Juli, 2024
                                </div>
                            </div>
                            <div class="md:w-2/3 items-center">
                                <h3 class="text-primary font-semibold text-xl md:mb-2 line-clamp-1">
                                    Orang hitam ini mencoba mengalahkan harimau
                                </h3>
                                <p class="text-light font-medium text-sm text-justify line-clamp-4 md:mb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, incidunt quas eligendi dolorem quo nam necessitatibus sunt, obcaecati pariatur sint in eos quisquam soluta mollitia libero laborum sit totam quam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nemo ab iusto. Voluptatem, beatae rerum. Vitae ab ipsum veritatis, molestiae aperiam expedita praesentium assumenda, placeat id earum aliquam error enim!
                                </p>
                                <a href="#" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
                                    Selengkapnya <span class="text-2xl">&raquo;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="agenda" class="md:w-1/3 space-y-5">
                    <div class="flex w-full items-center gap-3 text-primary font-semibold text-2xl border-b-2 border-primary">
                        <h2>
                            Agenda Tahunan
                        </h2>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 5h14v2H5V5zm14 16H5V9h14v12zm-2-9H7v2h10v-2zm0 4H7v2h10v-2zm-6"/>
                        </svg>
                    </div>

                    <!-- items agenda -->
                    <div class="flex gap-3 items-center">
                        <div class="w-[25%] md:w-[20%]">
                            <div class="bg-sky-600 items-center shadow-lg cursor-pointer text-center font-medium text-white text-sm p-2 rounded-lg">
                                10 Agust 2024
                            </div>
                        </div>
                        <div class="w-[75%] md:w-[80%] items-center">
                            <h3 class="text-lg font-semibold text-primary line-clamp-1 cursor-pointer">
                                Mancing Mania Ikan Baung
                            </h3>
                            <p class="text-sm font-medium text-light line-clamp-1">
                                Lokasi: Sungai Mahakam
                            </p>
                        </div>
                    </div>
                    <!-- items agenda -->
                    <div class="flex gap-3 items-center">
                        <div class="w-[25%] md:w-[20%]">
                            <div class="bg-sky-600 items-center shadow-lg cursor-pointer text-center font-medium text-white text-sm p-2 rounded-lg">
                                10 Agust 2024
                            </div>
                        </div>
                        <div class="w-[75%] md:w-[80%] items-center">
                            <h3 class="text-lg font-semibold text-primary line-clamp-1 cursor-pointer">
                                Mancing Mania Ikan Baung
                            </h3>
                            <p class="text-sm font-medium text-light line-clamp-1">
                                Lokasi: Sungai Mahakam
                            </p>
                        </div>
                    </div>
                    <!-- items agenda -->
                    <div class="flex gap-3 items-center">
                        <div class="w-[25%] md:w-[20%]">
                            <div class="bg-sky-600 items-center shadow-lg cursor-pointer text-center font-medium text-white text-sm p-2 rounded-lg">
                                10 Agust 2024
                            </div>
                        </div>
                        <div class="w-[75%] md:w-[80%] items-center">
                            <h3 class="text-lg font-semibold text-primary line-clamp-1 cursor-pointer">
                                Mancing Mania Ikan Baung
                            </h3>
                            <p class="text-sm font-medium text-light line-clamp-1">
                                Lokasi: Sungai Mahakam
                            </p>
                        </div>
                    </div>
                    <!-- items agenda -->
                    <div class="flex gap-3 items-center">
                        <div class="w-[25%] md:w-[20%]">
                            <div class="bg-sky-600 items-center shadow-lg cursor-pointer text-center font-medium text-white text-sm p-2 rounded-lg">
                                10 Agust 2024
                            </div>
                        </div>
                        <div class="w-[75%] md:w-[80%] items-center">
                            <h3 class="text-lg font-semibold text-primary line-clamp-1 cursor-pointer">
                                Mancing Mania Ikan Baung
                            </h3>
                            <p class="text-sm font-medium text-light line-clamp-1">
                                Lokasi: Sungai Mahakam
                            </p>
                        </div>
                    </div>
                    <!-- items agenda -->
                    <div class="flex gap-3 items-center">
                        <div class="w-[25%] md:w-[20%]">
                            <div class="bg-sky-600 items-center shadow-lg cursor-pointer text-center font-medium text-white text-sm p-2 rounded-lg">
                                10 Agust 2024
                            </div>
                        </div>
                        <div class="w-[75%] md:w-[80%] items-center">
                            <h3 class="text-lg font-semibold text-primary line-clamp-1 cursor-pointer">
                                Mancing Mania Ikan Baung
                            </h3>
                            <p class="text-sm font-medium text-light line-clamp-1">
                                Lokasi: Sungai Mahakam
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- lokasi -->
    <section id="lokasi" class="pt-16 pb-24 md:py-24 items-center bg-gray-100">
        <div class="container md:px-8 space-y-8">
            <div class="mx-auto text-center">
                <h3 class="text-2xl font-bold text-primary mb-1 md:mb-3 uppercase">
                    LOKASI DESA
                </h3>
                <h2 class="text-lg md:text-3xl font-semibold md:font-bold text-dark mb-1 md:mb-3">
                    Teluk Dalam, Kecamatan Muara Jawa
                </h2>
                <p class="text-sm md:text-md font-medium text-light ">
                    Berikut merupakan lokasi desa Teluk Dalam, Kec. Muara Jawa, Kab. Kutai Kartanegara
                </p>
            </div>

            <div class="flex md:flex-row flex-col gap-5">
                <div class="md:w-2/3">
                    <iframe class="w-full rounded-lg h-80 md:h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127661.58043405792!2d117.11196054999999!3d-0.80514695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df69f628b272e01%3A0xe22230ac60b064b2!2sTlk.%20Dalam%2C%20Kec.%20Muara%20Jawa%2C%20Kabupaten%20Kutai%20Kartanegara%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1722284538269!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="md:w-1/3 text-sm md:text-md text-light font-medium space-y-2">
                    <div class="flex">
                        <div class="w-[48%] font-bold pr-4">Kode PUM</div>
                        <div class="w-[4%] text-center">:</div>
                        <div class="w-[48%]">3217082001</div>
                    </div>
                    <div class="flex">
                        <div class="w-[48%] font-bold pr-4">Tahun Pembentukan</div>
                        <div class="w-[4%] text-center">:</div>
                        <div class="w-[48%]">1966</div>
                    </div>
                    <div class="flex">
                        <div class="w-[48%] font-bold pr-4">Dasar Hukum</div>
                        <div class="w-[4%] text-center">:</div>
                        <div class="w-[48%]">141.1/KEP.18-PEM/1966</div>
                    </div>
                    <div class="flex">
                        <div class="w-[48%] font-bold pr-4">Tipologi</div>
                        <div class="w-[4%] text-center">:</div>
                        <div class="w-[48%]">PERINDUSTRIAN/JASA</div>
                    </div>
                    <div class="flex">
                        <div class="w-[48%] font-bold pr-4">Klasifikasi</div>
                        <div class="w-[4%] text-center">:</div>
                        <div class="w-[48%]">SWAKARYA</div>
                    </div>
                    <div class="flex">
                        <div class="w-[48%] font-bold pr-4">Kategori</div>
                        <div class="w-[4%] text-center">:</div>
                        <div class="w-[48%]">MULA</div>
                    </div>
                    <div class="flex">
                        <div class="w-[48%] font-bold pr-4">Luas Wilayah</div>
                        <div class="w-[4%] text-center">:</div>
                        <div class="w-[48%]">305.28 ha</div>
                    </div>
                    <div class="flex">
                        <div class="w-[48%] font-bold pr-4">Batas Sebelah Utara</div>
                        <div class="w-[4%] text-center">:</div>
                        <div class="w-[48%]">Desa Utara</div>
                    </div>
                    <div class="flex">
                        <div class="w-[48%] font-bold pr-4">Batas Sebelah Selatan</div>
                        <div class="w-[4%] text-center">:</div>
                        <div class="w-[48%]">Desa Selatan</div>
                    </div>
                    <div class="flex">
                        <div class="w-[48%] font-bold pr-4">Batas Sebelah Timur</div>
                        <div class="w-[4%] text-center">:</div>
                        <div class="w-[48%]">Desa Timur</div>
                    </div>
                    <div class="flex">
                        <div class="w-[48%] font-bold pr-4">Batas Sebelah Barat</div>
                        <div class="w-[4%] text-center">:</div>
                        <div class="w-[48%]">Desa Barat</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
