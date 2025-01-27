<div>
    <x-fontWhite>
        @php
            $bg = Storage::url($sections['path']);
        @endphp
        <div style="background-image:url('{{ $bg }}');" class="bg-no-repeat bg-cover">
            <div class="flex flex-col-reverse md:flex-row text-center items-center gap-5 px-9 py-36">
                <p class="text-2xl text-white font-Junge"> {{ $sections['description'] }} </p>
                <h3 class="text-[64px] font-Junge"> {{ $sections['name'] }} </h3>
            </div>
        </div>


        <div class="px-11 py-5 grid lg:grid-cols-3 md:grid-cols-2 gap-5 mx-3 justify-items-center justify-center">
            @foreach ($services as $item)
                @php
                    $bg = Storage::url($item['image']);
                @endphp
                <div class="">
                    <div class="">
                        <div class="lg:w-[467px] w-[367px] lg:h-[584px] h-[484px] relative rounded-sm shadow-xl">
                            <a href="{{route('service', ['id' => $item['services_id'] ])}}">
                                <img class="grayscale hover:grayscale-0 transition-all duration-300 max-w-full lg:h-[584px] h-[484px] left-0 top-0 absolute rounded-[7px] shadow-inner"
                                    src="{{ $bg }}" />
                            </a>
                            <div
                                class="lg:left-[81px] left-[30px] top-[414px] lg:top-[514px] absolute text-center text-white text-2xl font-normal font-Karla uppercase">
                                {{ $item['name'] }}
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>


    </x-fontWhite>
</div>
