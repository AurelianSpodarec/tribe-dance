<div class="w-full rounded overflow-hidden bg-quad cursor-pointer">
<div class="container max-w-7xl mx-auto px-16 py-28">

{{--    <div class="grid grid-cols-1 xl:grid-cols-2 flex flex-col-reverse">--}}
    <div class="flex flex-col-reverse xl:flex-row">


        <div class="xl:w-2/3 text-center xl:text-justify">
            <h3 class="text-2xl text-third lg:text-4xl font-bold mb-3 xl:mb-6">{{ $title  }}</h3>
            <p class="text-third text-base lg:text-xl mb-4">{{ $excerpt  }}</p>

            <button class="bg-white py-4 px-6">
             <a href="{{ $link }}" target="_blank" class="flex">
                <svg class="w-5 mr-4 text-third" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M112 368h96c8.8 0 16-7.2 16-16v-96c0-8.8-7.2-16-16-16h-96c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm0 394c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V160h352v298z" class=""></path></svg>
                <span class="text-2xl text-third font-semibold">{{ $linkLabel  }}</span>
             </a>
            </button>
        </div>

        <div class="xl:w-1/3 text-right relative mb-4 lg:mb-0">
            <figure class="">
                <img class="w-32 h-32 bg-cover xl:w-64 xl:h-64 mx-auto rounded-full" src="{{ $avatar }}" />
            </figure>

                <div class="absolute left-0 right-0 -top-20 xl:top-auto xl:-bottom-14 flex flex-col items-center mb-6 flex">
                    <div class="z-30 absolute -bottom-3 xl:-bottom-0 xl:-top-3 w-6 h-6 transform rotate-45 bg-white"></div>

                    <div class="text-center relative z-10 py-4 px-6 text-xs bg-white text-black leading-none whitespace-no-wrap shadow-lg" style="border-radius: 12px;">
                        <span class=" font-bold block text-base mb-1">{{ $avatarName }}</span>
                        <span class="text-base block">
                            <span class="text-base ">Founder - </span>
                            <a class="text-base hover:text-yellow-400" href="mailto:mike@gmail.com">{{ $avatarContact }}</a>
                        </span>
                    </div>
                </div>
        </div>


    </div>

</div>
</div>
