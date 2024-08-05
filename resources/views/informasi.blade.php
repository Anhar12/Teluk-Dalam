<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <!-- berita -->
    <section id="berita" class="pt-8 pb-24 items-center">
        <div class="container md:px-8">
            <div class="flex md:flex-row flex-col gap-10">
                <div class="md:w-2/3 space-y-5">
                    <div class="flex w-full items-center gap-3 text-primary font-semibold text-2xl border-b-2 border-primary">
                        <h2>
                            Berita Terkini
                        </h2>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M19 3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 19V5h14v14H5zm8-13h5v2h-5V6zm-7 0h5v6H6V6zm7 4h5v2h-5v-2zm0 4h5v2h-5v-2zM6 14h5v2H6v-2z"/>
                        </svg>
                    </div>
                    <!-- item berita -->
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
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
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
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
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
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
                                    Selengkapnya <span class="text-2xl">&raquo;</span>
                                </a>
                            </div>
                        </div>

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
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
                                    Selengkapnya <span class="text-2xl">&raquo;</span>
                                </a>
                            </div>
                        </div>

                        <div class="flex md:flex-row flex-col gap-1 md:gap-5">
                            <div class="relative md:w-1/3 overflow-hidden group hover:shadow-lg cursor-pointer">
                                <img src="{{ asset('img/slide1.jpg') }}" class="w-full h-40 text-center transform transition-transform duration-300 ease-in group-hover:scale-105" alt="">
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
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
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
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
                                    Selengkapnya <span class="text-2xl">&raquo;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 space-y-10">
                    <!-- berita terakhir -->
                    <div class="space-y-5">
                        <div class="flex w-full items-center gap-3 text-primary font-semibold text-2xl border-b-2 border-primary">
                            <h2>
                                Berita Terakhir
                            </h2>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                <path d="M19 3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 19V5h14v14H5zm8-13h5v2h-5V6zm-7 0h5v6H6V6zm7 4h5v2h-5v-2zm0 4h5v2h-5v-2zM6 14h5v2H6v-2z"/>
                            </svg>
                        </div>
                        <!-- items berita terakhir -->
                        <div class="items-center border shadow-lg rounded-lg">
                            <a href="" class="flex px-3 py-5 gap-3 items-center border-b">
                                <div class="w-1/3 h-auto items-center">
                                    <img src="{{ asset('img/slide1.jpg') }}" class="rounded-lg" alt="">
                                </div>
                                <div class="w-2/3 overflow-hidden items-center space-y-2">
                                    <h4 href="" class="text-primary font-medium text-md line-clamp-2">
                                        Update berita bola hari ini Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur magnam explicabo, facilis obcaecati distinctio quasi tempora dolorem natus, fugiat architecto commodi officia consequuntur ipsa illo voluptas possimus inventore est laudantium?
                                    </h4>
                                    <p class="inline-flex gap-2 text-dark font-medium text-sm items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 5h14v2H5V5zm14 16H5V9h14v12zm-2-9H7v2h10v-2zm0 4H7v2h10v-2zm-6"/>
                                        </svg>
                                        10 Agustus 2024
                                    </p>
                                </div>
                            </a>
                            <a href="" class="flex px-3 py-5 gap-3 items-center border-b">
                                <div class="w-1/3 h-auto items-center">
                                    <img src="{{ asset('img/slide2.jpg') }}" class="rounded-lg" alt="">
                                </div>
                                <div class="w-2/3 overflow-hidden items-center space-y-2">
                                    <h4 href="" class="text-primary font-medium text-md line-clamp-2">
                                        Update berita bola hari ini Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur magnam explicabo, facilis obcaecati distinctio quasi tempora dolorem natus, fugiat architecto commodi officia consequuntur ipsa illo voluptas possimus inventore est laudantium?
                                    </h4>
                                    <p class="inline-flex gap-2 text-dark font-medium text-sm items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 5h14v2H5V5zm14 16H5V9h14v12zm-2-9H7v2h10v-2zm0 4H7v2h10v-2zm-6"/>
                                        </svg>
                                        10 Agustus 2024
                                    </p>
                                </div>
                            </a>
                            <a class="flex px-3 py-5 gap-3 items-center">
                                <div class="w-1/3 h-auto items-center">
                                    <img src="{{ asset('img/slide3.jpg') }}" class="rounded-lg" alt="">
                                </div>
                                <div class="w-2/3 overflow-hidden items-center space-y-2">
                                    <h4 href="" class="text-primary font-medium text-md line-clamp-2">
                                        Update berita bola hari ini Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur magnam explicabo, facilis obcaecati distinctio quasi tempora dolorem natus, fugiat architecto commodi officia consequuntur ipsa illo voluptas possimus inventore est laudantium?
                                    </h4>
                                    <p class="inline-flex gap-2 text-dark font-medium text-sm items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 5h14v2H5V5zm14 16H5V9h14v12zm-2-9H7v2h10v-2zm0 4H7v2h10v-2zm-6"/>
                                        </svg>
                                        10 Agustus 2024
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- agenda -->
    <section id="agenda" class="py-24 items-center bg-gray-100">
        <div class="container md:px-8">
            <div class="flex md:flex-row flex-col gap-10">
                <div class="md:w-2/3 space-y-5">
                    <div class="flex w-full items-center gap-3 text-primary font-semibold text-2xl border-b-2 border-primary">
                        <h2>
                            Agenda Tahunan
                        </h2>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 5h14v2H5V5zm14 16H5V9h14v12zm-2-9H7v2h10v-2zm0 4H7v2h10v-2zm-6"/>
                        </svg>
                    </div>

                    <!-- item agenda -->
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
                                    Agenda kita hari ini adalah macing mania
                                </h3>
                                <p class="text-light font-medium text-sm text-justify line-clamp-3 mb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, incidunt quas eligendi dolorem quo nam necessitatibus sunt, obcaecati pariatur sint in eos quisquam soluta mollitia libero laborum sit totam quam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nemo ab iusto. Voluptatem, beatae rerum. Vitae ab ipsum veritatis, molestiae aperiam expedita praesentium assumenda, placeat id earum aliquam error enim!
                                </p>
                                <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                    <svg width="16" height="16" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="currentcolor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="currentcolor" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                                    Aula Desa
                                </p>
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
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
                                    Agenda tugas besar teluk dalam
                                </h3>
                                <p class="text-light font-medium text-sm text-justify line-clamp-3 mb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, incidunt quas eligendi dolorem quo nam necessitatibus sunt, obcaecati pariatur sint in eos quisquam soluta mollitia libero laborum sit totam quam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nemo ab iusto. Voluptatem, beatae rerum. Vitae ab ipsum veritatis, molestiae aperiam expedita praesentium assumenda, placeat id earum aliquam error enim!
                                </p>
                                <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                    <svg width="16" height="16" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="currentcolor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="currentcolor" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                                    Aula Desa
                                </p>
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
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
                                <p class="text-light font-medium text-sm text-justify line-clamp-3 mb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, incidunt quas eligendi dolorem quo nam necessitatibus sunt, obcaecati pariatur sint in eos quisquam soluta mollitia libero laborum sit totam quam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nemo ab iusto. Voluptatem, beatae rerum. Vitae ab ipsum veritatis, molestiae aperiam expedita praesentium assumenda, placeat id earum aliquam error enim!
                                </p>
                                <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                    <svg width="16" height="16" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="currentcolor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="currentcolor" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                                    Aula Desa
                                </p>
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
                                    Selengkapnya <span class="text-2xl">&raquo;</span>
                                </a>
                            </div>
                        </div>

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
                                <p class="text-light font-medium text-sm text-justify line-clamp-3 mb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, incidunt quas eligendi dolorem quo nam necessitatibus sunt, obcaecati pariatur sint in eos quisquam soluta mollitia libero laborum sit totam quam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nemo ab iusto. Voluptatem, beatae rerum. Vitae ab ipsum veritatis, molestiae aperiam expedita praesentium assumenda, placeat id earum aliquam error enim!
                                </p>
                                <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                    <svg width="16" height="16" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="currentcolor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="currentcolor" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                                    Aula Desa
                                </p>
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
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
                                <p class="text-light font-medium text-sm text-justify line-clamp-3 mb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, incidunt quas eligendi dolorem quo nam necessitatibus sunt, obcaecati pariatur sint in eos quisquam soluta mollitia libero laborum sit totam quam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nemo ab iusto. Voluptatem, beatae rerum. Vitae ab ipsum veritatis, molestiae aperiam expedita praesentium assumenda, placeat id earum aliquam error enim!
                                </p>
                                <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                    <svg width="16" height="16" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="currentcolor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="currentcolor" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                                    Aula Desa
                                </p>
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
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
                                <p class="text-light font-medium text-sm text-justify line-clamp-3 mb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, incidunt quas eligendi dolorem quo nam necessitatibus sunt, obcaecati pariatur sint in eos quisquam soluta mollitia libero laborum sit totam quam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nemo ab iusto. Voluptatem, beatae rerum. Vitae ab ipsum veritatis, molestiae aperiam expedita praesentium assumenda, placeat id earum aliquam error enim!
                                </p>
                                <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                    <svg width="16" height="16" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="currentcolor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="currentcolor" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                                    Aula Desa
                                </p>
                                <a href="" class="text-primary hover:text-white hover:bg-primary pl-1 pr-3 py-[6px] rounded-r-full text-md font-semibold items-center">
                                    Selengkapnya <span class="text-2xl">&raquo;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- agenda terakhir -->
                <div class="md:w-1/3 space-y-10">
                    <div class="space-y-5">
                        <div class="flex w-full items-center gap-3 text-primary font-semibold text-2xl border-b-2 border-primary">
                            <h2>
                                Agenda Terakhir
                            </h2>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 5h14v2H5V5zm14 16H5V9h14v12zm-2-9H7v2h10v-2zm0 4H7v2h10v-2zm-6"/>
                            </svg>
                        </div>
                        <!-- items agenda terakhir -->
                        <div class="items-center border shadow-lg rounded-lg">
                            <a href="" class="flex p-5 gap-3 items-center border-b">
                                <div class="w-full overflow-hidden items-center space-y-2">
                                    <h4 href="" class="text-primary font-medium text-md line-clamp-2">
                                        Update berita bola hari ini Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur magnam explicabo, facilis obcaecati distinctio quasi tempora dolorem natus, fugiat architecto commodi officia consequuntur ipsa illo voluptas possimus inventore est laudantium?
                                    </h4>
                                    <div class="flex justify-between">
                                        <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 5h14v2H5V5zm14 16H5V9h14v12zm-2-9H7v2h10v-2zm0 4H7v2h10v-2zm-6"/>
                                            </svg>
                                            10 Agustus 2024
                                        </p>
                                        <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                            <svg width="16" height="16" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="currentcolor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="currentcolor" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                                            Aula Desa
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="flex p-5 gap-3 items-center border-b">
                                <div class="w-full overflow-hidden items-center space-y-2">
                                    <h4 href="" class="text-primary font-medium text-md line-clamp-2">
                                        Update berita bola hari ini Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur magnam explicabo, facilis obcaecati distinctio quasi tempora dolorem natus, fugiat architecto commodi officia consequuntur ipsa illo voluptas possimus inventore est laudantium?
                                    </h4>
                                    <div class="flex justify-between">
                                        <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 5h14v2H5V5zm14 16H5V9h14v12zm-2-9H7v2h10v-2zm0 4H7v2h10v-2zm-6"/>
                                            </svg>
                                            10 Agustus 2024
                                        </p>
                                        <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                            <svg width="16" height="16" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="currentcolor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="currentcolor" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                                            Aula Desa
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="flex p-5 gap-3 items-center border-b">
                                <div class="w-full overflow-hidden items-center space-y-2">
                                    <h4 href="" class="text-primary font-medium text-md line-clamp-2">
                                        Update berita bola hari ini Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur magnam explicabo, facilis obcaecati distinctio quasi tempora dolorem natus, fugiat architecto commodi officia consequuntur ipsa illo voluptas possimus inventore est laudantium?
                                    </h4>
                                    <div class="flex justify-between">
                                        <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zM5 5h14v2H5V5zm14 16H5V9h14v12zm-2-9H7v2h10v-2zm0 4H7v2h10v-2zm-6"/>
                                            </svg>
                                            10 Agustus 2024
                                        </p>
                                        <p class="flex gap-1 text-dark font-medium text-sm items-center">
                                            <svg width="16" height="16" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="currentcolor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="currentcolor" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg>
                                            Aula Desa
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
