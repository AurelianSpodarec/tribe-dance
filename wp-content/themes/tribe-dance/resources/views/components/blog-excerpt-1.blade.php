<div class="w-full lg:w-1/3 rounded overflow-hidden mb-8 bg-gray-100 hover:bg-pink-200 cursor-pointer">
<a href="{{ $permalink }}">

    <div>
        <img class="object-cover w-full" style="max-height: 300px; min-height: 100px;" src="{{ $thumbnail }}"/>
    </div>

    <div class="p-8">
        <time class="text-xs mb-4 block" datetime="$date">{{ $date }}</time>
        <h3 class="font-bold mb-3 text-sm tracking-three">{{ $title }}</h3>
        <p class="mb-3 text-sm">{{ $excerpt }}</p>
        <a class="underline font-bold text-xs uppercase tracking-three" href="{{ $permalink }}">Read More</a>
    </div>

</a>
</div>
