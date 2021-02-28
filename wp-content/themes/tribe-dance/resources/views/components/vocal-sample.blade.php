<a href="{{ $permalink  }}" class="w-full md:w-1/2 lg:w-1/4 text-center rounded overflow-hidden mb-8 hover:opacity-60 transition-opacity duration-200 ease-in-out">
    <div class="mb-3">
        <img src="{{ $thumbnail }}"/>
    </div>
    <div>
        <h6 class="uppercase text-sm tracking-two mb-1">{!! $title  !!}</h6>
        <p class="text-xs text-accent tracking-two">€ {{ number_format($price, 2) }}</p>
    </div>
</a>

