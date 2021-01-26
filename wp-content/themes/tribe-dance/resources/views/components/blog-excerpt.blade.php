<div class="w-full rounded overflow-hidden mb-8 ">
{{--    <a href="{{ $permalink }}">--}}

        <div class="flex">


            <div class="w-1/4">
                <time class="text-xs mb-4 block" datetime="$date">{{ $date }}</time>
            </div>

            <div class="w-3/4 p-8">
                <a href="{{ $permalink }}">
                    <h3 class="font-bold mb-3 text-sm tracking-three">{{ $title }}</h3>
                </a>
                <a href="{{ $permalink }}">
                    <img class="object-cover w-full cursor-pointer" style="max-height: 300px; min-height: 100px;" src="{{ $thumbnail }}"/>
                </a>
                <p class="mb-3 text-sm">{{ $excerpt }}</p>

                <a class="underline font-bold text-xs uppercase tracking-three" href="{{ $permalink }}">Read More</a>
            </div>


        </div>
{{--    </a>--}}
</div>
