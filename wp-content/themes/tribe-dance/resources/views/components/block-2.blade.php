<div class="flex flex-wrap bg-gray-100 {{ !$isLink ? "hover:bg-pink-100 cursor-pointer" : ""}}  {{ $reverse ?  "flex-row-reverse flex-wrap-reverse lg:flex-nowrap" : "" }}">

    <div class="w-full">
        <div class="table h-full">

            <div class="table-cell align-middle p-10 {{ $reverse ? "2xl:pl-20" : "2xl:pr-20"}}">

                <h3 class="font-bold text-3xl lg:text-4xl mb-8">
                    <a href="">{{ $title }}</a>
                </h3>
                <p class="text-lg mb-6">{{ $excerpt }}</p>

                <?php if(!$isLink) : ?>
                    <button style="letter-spacing: 2.25px;" class="uppercase text-xs font-semibold underline">
                        Learn More
                    </button>
                <?php endif; ?>

            </div>

        </div>
    </div>


</div>
