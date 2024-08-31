<x-app-layout>
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
</x-app-layout>