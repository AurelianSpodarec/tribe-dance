<div class="w-1/2 lg:w-1/3 rounded overflow-hidden mb-8 bg-gray-100 hover:bg-pink-100 cursor-pointer">
    <a href="{{ $permalink }}">
    <div>
        <img class="object-cover w-full" style="max-height: 300px; min-height: 100px;" src="{{ $thumbnail }}"/>
    </div>

    <div>
        <time datetime="$date">{{ $date }}</time>
        <h3>{{ $title }}</h3>
        <p>{{ $excerpt }}</p>
        <a href="{{ $permalink }}">Read More</a>
    </div>
    </a>
</div>
