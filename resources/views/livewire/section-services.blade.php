<div>
    <x-front>
        @slot('header')
            <div class="md:mt-10 mt-2 lg:px-10 md:px-5 flex flex-col items-center gap-9">
                <h2 class="text-center text-white lg:text-6xl md:text-5xl  text-4xl font-semibold font-Kulim uppercase">
                    NUESTROS SERVICIOS</h2>
                <div class="lg:max-w-[80%] md:max-w-[90%] max-w-[95%] w-full">
                    <h4 class="text-center text-white md:text-lg text-base text- font-Kulim uppercase font-[100]"> Te
                        ofrecemos una amplia gama de servicios diseñados para tu bienestar y relajación. Explora nuestras
                        secciones para encontrar el tratamiento perfecto que te ayude a rejuvenecer y disfrutar de un
                        momento de paz. Desde masajes relajantes hasta cuidados faciales y paquetes completos, cada servicio
                        está pensado para ofrecerte una experiencia de spa inigualable. </h4>
                </div>
            </div>
        @endslot

        <div class="mt-20">
            @php
                $i = 0;
            @endphp
            @foreach ($sections as $item)
                @php
                    $isPair_num = $i;
                    $isPair_num = $isPair_num % 2;
                    if ($isPair_num == 0) {
                        $par = 'flex-row-reverse';
                    } else {
                        $par = 'flex-row';
                    }
                    $i++;
                    $bg = Storage::url($item['path']);

                @endphp
                @if ($par == 'flex-row')
                    <a href="{{route('section', ['id' => $item['id'] ])}}">
                    <div style="background-image:url('{{ $bg }}');"
                        class="flex lg:flex-row mt-5 flex-col-reverse py-20 bg-no-repeat bg-cover gap-2 px-5">
                        <p class="text-center text-white lg:text-3xl md:text-2xl text-lg font-normal font-Junge">
                            {{ $item['description'] }} </p>
                        <h3 class="lg:text-right text-center text-black text-[64px] font-normal font-Junge ">
                            {{ $item['name'] }} </h3>
                    </div>
                </a>
                @else
                    <a href="{{route('section', ['id' => $item['id'] ])}}">
                    <div style="background-image:url('{{ $bg }}');"
                        class="flex lg:flex-row-reverse mt-5 flex-col-reverse py-20 bg-no-repeat bg-cover gap-2 px-5">
                        <p class="text-center text-white lg:text-3xl md:text-2xl text-lg font-normal font-Junge">
                            {{ $item['description'] }} </p>
                        <h3 class="lg:text-right text-center text-black text-[64px] font-normal font-Junge ">
                            {{ $item['name'] }} </h3>
                    </div>
                </a>
                @endif
                {{-- <a href="{{route('section', ['id' => $item['id'] ])}}">
                    <div style="background-image:url('{{ $bg }}');"
                        class="flex lg:{{ $par }} mt-5 flex-col-reverse py-20 bg-no-repeat bg-cover gap-2 px-5">
                        <p class="text-center text-white lg:text-3xl md:text-2xl text-lg font-normal font-Junge">
                            {{ $item['description'] }} </p>
                        <h3 class="lg:text-right text-center text-black text-[64px] font-normal font-Junge ">
                            {{ $item['name'] }} </h3>
                    </div>
                </a> --}}
            @endforeach


        </div>
    </x-front>
</div>
