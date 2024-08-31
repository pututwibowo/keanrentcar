<x-app-layout>
    <section class="mt-24">
        <div class="flex flex-col justify-center items-center gap-2 text-center">
            <div class="text-lg text-[#FF0000]">Galeri Kami</div>

            <div class="text-4xl font-bold">Galeri Armada Kami</div>

            <hr class="my-2 h-1 w-32 border-t-0 bg-[#FF0000] dark:bg-white/10" />
        </div>

        <div class="flex flex-wrap justify-center gap-2 md:gap-4 mt-6">
            @for ($i = 0; $i < 10; $i++)
                <div class="basis-[45%] md:basis-1/3 lg:basis-1/5 h-40" style="--image-url: url({{asset('images/gallery/mobil-1.jpeg')}})">
                    <div class="w-full h-full bg-no-repeat bg-cover bg-[image:var(--image-url)]"></div>
                </div>
            @endfor
        </div> 
        
    </section>
</x-app-layout>