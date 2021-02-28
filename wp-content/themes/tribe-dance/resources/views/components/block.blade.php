<div class="flex flex-wrap bg-gray-100">

    <div class="w-full lg:w-1/2">
        <img class="w-full h-full object-cover lg:pr-8" src="{{ $image }}" />
    </div>

    <div class="w-full lg:w-1/2">
    <div class="table h-full">

        <div class="p-8 table-cell align-middle">

            <h3 class="font-bold text-4xl mb-8">
                <a href="">{{ $title  }}</a>
            </h3>
            <p class="mb-8">{{ $excerpt }}</p>

            <a href="{{ $link }}" target="{{ $linkTarget }}" style="letter-spacing: 1px;" class="block font-bold py-4  px-4 w-full  text-center lg:inline-block lg:text-left lg:w-auto ld:px-16 text-xs bg-secondary text-black uppercase hover:bg-white border hover:border-gray-900">
                {{ $buttonText }}
            </a>

        </div>

    </div>
    </div>

</div>
