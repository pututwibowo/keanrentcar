<x-app-layout>
    <x-top-section/>

    <x-navigation/>

    <section class="w-full">
        <img src="{{asset('images/hero.png')}}" alt="">
    </section>
    
    <!-- Main Content -->
    <div class="container-sm mx-auto lg:px-12">
        <section class="mt-24">
            <div class="flex flex-col justify-center items-center gap-2 text-center">
                <div class="text-lg text-[#FF0000]">Keunggulan Kami</div>

                <div class="text-4xl font-bold">KENAPA MEMILIKI KAMI?</div>

                <hr class="my-2 h-1 w-32 border-t-0 bg-[#FF0000] dark:bg-white/10" />
            </div>

            <div class="flex flex-col lg:flex-row justify-center items-center gap-8 mt-4">
                <a href="#" class="shadow-inner text-center space-y-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="inline-block  p-4 rounded-full bg-[#FF0000]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-8 text-gray-100" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7l131.7 0c0 0 0 0 .1 0l5.5 0 112 0 5.5 0c0 0 0 0 .1 0l131.7 0c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2L224 304l-19.7 0c-12.4 0-20.1 13.6-13.7 24.2z"/>
                        </svg>
                    </div>
                    
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SOPIR BERPENGALAMAN</h5>
                    
                    <p class="font-normal text-gray-700 dark:text-gray-400">Sopir Kean Rentcar telah berpengalaman dan telah dibekali SOP untuk melayani pelanggan yang siap mengantar dan mengarahkan ke rute daerah tujuan perjalanan Anda.</p>
                </a>

                <a href="#" class="shadow-inner text-center space-y-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="inline-block  p-4 rounded-full bg-[#FF0000]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-8 text-gray-100" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7l131.7 0c0 0 0 0 .1 0l5.5 0 112 0 5.5 0c0 0 0 0 .1 0l131.7 0c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2L224 304l-19.7 0c-12.4 0-20.1 13.6-13.7 24.2z"/>
                        </svg>
                    </div>
                    
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mobil Terawat</h5>
                    
                    <p class="font-normal text-gray-700 dark:text-gray-400">Sopir Kean Rentcar telah berpengalaman dan telah dibekali SOP untuk melayani pelanggan yang siap mengantar dan mengarahkan ke rute daerah tujuan perjalanan Anda.</p>
                </a>

                <a href="#" class="shadow-inner text-center space-y-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="inline-block  p-4 rounded-full bg-[#FF0000]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-8 text-gray-100" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7l131.7 0c0 0 0 0 .1 0l5.5 0 112 0 5.5 0c0 0 0 0 .1 0l131.7 0c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2L224 304l-19.7 0c-12.4 0-20.1 13.6-13.7 24.2z"/>
                        </svg>
                    </div>
                    
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">LAYANAN PROFESIONAL</h5>
                    
                    <p class="font-normal text-gray-700 dark:text-gray-400">Sopir Kean Rentcar telah berpengalaman dan telah dibekali SOP untuk melayani pelanggan yang siap mengantar dan mengarahkan ke rute daerah tujuan perjalanan Anda..</p>
                </a>
            </div>
        </section>

        <section class="mt-24">
            <div class="flex flex-col justify-center items-center gap-2 text-center">
                <div class="text-lg text-[#FF0000]">Armada Kami</div>

                <div class="text-4xl font-bold">ARMADA KEAN RENTCAR</div>

                <hr class="my-2 h-1 w-32 border-t-0 bg-[#FF0000] dark:bg-white/10" />
            </div>

            <div class="flex flex-wrap justify-center gap-4 mt-6">
                @for ($i = 0; $i < 10; $i++)                
                    <div class="basis-[45%] lg:basis-1/5 box-border max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{asset('images/car/calya.png')}}" alt="" />
                        </a>
                        <div class="p-5 flex flex-col items-center">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Calya</h5>
                            </a>
                            
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">(all in bandung)</p>

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">500K</h5>
                            
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#FF0000] rounded-lg shadow-md shadow-blue-500/50 transform transition-transform duration-300 hover:scale-110 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Booking Now
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="ms-2 size-4" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </section>

        <section class="mt-24">
            <div class="flex gap-4">
                <div class="basis-1/2 space-y-4">
                    <div class="space-y-3">
                        <div class="text-lg text-[#FF0000]">Tentang Kami</div>
    
                        <div class="text-4xl font-bold">Selamat Datang di Kean Rentcar</div>
    
                        <p>Kami adalah mitra terpercaya Anda dalam menjelajahi keindahan Bandung dan sekitarnya dengan nyaman dan fleksibel. Dengan pengalaman bertahun-tahun dalam industri rental mobil, Kean Rent Car telah menjadi pilihan utama para pelancong dan wisatawan yang ingin merasakan perjalanan yang tanpa hambatan.</p>
                    </div>

                    <div class="space-y-4">
                        <div class="flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="ms-2 size-8 text-[#FF0000]/[.9]" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M256 48C141.1 48 48 141.1 48 256l0 40c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-40C0 114.6 114.6 0 256 0S512 114.6 512 256l0 144.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24l-32 0c-26.5 0-48-21.5-48-48s21.5-48 48-48l32 0c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40L464 256c0-114.9-93.1-208-208-208zM144 208l16 0c17.7 0 32 14.3 32 32l0 112c0 17.7-14.3 32-32 32l-16 0c-35.3 0-64-28.7-64-64l0-48c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64l0 48c0 35.3-28.7 64-64 64l-16 0c-17.7 0-32-14.3-32-32l0-112c0-17.7 14.3-32 32-32l16 0z"/>
                            </svg>
                            <div>
                                <h3 class="text-lg font-bold">Pelayanan Pelanggan Terbaik</h3>

                                <p>Keunggulan kami terletak pada pelayanan pelanggan yang luar biasa.</p>
                            </div>
                        </div>

                        <div class="flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="ms-2 size-8 text-[#FF0000]/[.9]" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M256 48C141.1 48 48 141.1 48 256l0 40c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-40C0 114.6 114.6 0 256 0S512 114.6 512 256l0 144.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24l-32 0c-26.5 0-48-21.5-48-48s21.5-48 48-48l32 0c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40L464 256c0-114.9-93.1-208-208-208zM144 208l16 0c17.7 0 32 14.3 32 32l0 112c0 17.7-14.3 32-32 32l-16 0c-35.3 0-64-28.7-64-64l0-48c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64l0 48c0 35.3-28.7 64-64 64l-16 0c-17.7 0-32-14.3-32-32l0-112c0-17.7 14.3-32 32-32l16 0z"/>
                            </svg>
                            <div>
                                <h3 class="text-lg font-bold">Pelayanan Pelanggan Terbaik</h3>

                                <p>Keunggulan kami terletak pada pelayanan pelanggan yang luar biasa.</p>
                            </div>
                        </div>

                        <div class="flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="ms-2 size-8 text-[#FF0000]/[.9]" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M256 48C141.1 48 48 141.1 48 256l0 40c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-40C0 114.6 114.6 0 256 0S512 114.6 512 256l0 144.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24l-32 0c-26.5 0-48-21.5-48-48s21.5-48 48-48l32 0c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40L464 256c0-114.9-93.1-208-208-208zM144 208l16 0c17.7 0 32 14.3 32 32l0 112c0 17.7-14.3 32-32 32l-16 0c-35.3 0-64-28.7-64-64l0-48c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64l0 48c0 35.3-28.7 64-64 64l-16 0c-17.7 0-32-14.3-32-32l0-112c0-17.7 14.3-32 32-32l16 0z"/>
                            </svg>
                            <div>
                                <h3 class="text-lg font-bold">Pelayanan Pelanggan Terbaik</h3>
                                <p>Keunggulan kami terletak pada pelayanan pelanggan yang luar biasa.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="basis-1/2">
                    <img src="{{ asset('images/car-rental.png')}}" alt="">
                </div>
            </div>
        </section>

        <section class="mt-2">
            <div class="h-40 relative" style="--image-url: url({{asset('images/parallax.jpeg')}})">
                <div class="w-full h-full brightness-50 bg-fixed bg-center bg-[image:var(--image-url)]"></div>
                <div class="absolute inset-0 flex justify-center items-center">
                    <p class="text-3xl text-white">Hubungi sekarang Untuk Pesan Sekarang <span class="text-[#FF0000]">+62 812 1450 8113</span> Tersedia 24/7</p>
                </div>
            </div>
        </section>

        <section class="mt-24">
            <div class="flex flex-col justify-center items-center gap-2 text-center">
                <div class="text-lg text-[#FF0000]">Galeri Kami</div>

                <div class="text-4xl font-bold">Galeri Armada Kami</div>

                <hr class="my-2 h-1 w-32 border-t-0 bg-[#FF0000] dark:bg-white/10" />
            </div>

            <div class="flex flex-wrap justify-center gap-2 mt-6">
                @for ($i = 0; $i < 10; $i++)
                    <div class="basis-[45%] lg:basis-1/5 h-40" style="--image-url: url({{asset('images/gallery/mobil-1.jpeg')}})">
                        <div class="w-full h-full  bg-[image:var(--image-url)]"></div>
                    </div>
                @endfor
            </div> 
            
        </section>
        </div>
    </div>


    <footer class="h-20"></footer>
</x-app-layout>