<a href="{{ $link }}" class="flex flex-wrap bg-gray-100 {{ !$isLink ? "hover:bg-quad cursor-pointer" : ""}}  {{ $reverse ?  "flex-row-reverse flex-wrap-reverse lg:flex-nowrap" : "" }}">

{{--<a href="{{ $link }}">--}}


        <div class="w-full">
            <div class="table h-full">

                <div class="table-cell align-middle p-10 {{ $reverse ? "2xl:pl-20" : "2xl:pr-20"}}">

                    <?php if($title) { ?>
                         <h3 class="font-bold text-3xl lg:text-4xl mb-8">
                        {{ $title }}
                        </h3>
                    <?php } ?>

                    <p class="text-lg {{!$isLink ? 'mb-6' : ''}}">{{ $excerpt }}</p>

                    <?php if(!$isLink) : ?>
                        <button class="uppercase text-xs font-semibold underline">
                            Learn More
                        </button>
                    <?php endif; ?>

                </div>

            </div>
        </div>



</a>
