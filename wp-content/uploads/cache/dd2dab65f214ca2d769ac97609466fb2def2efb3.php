<div class="flex flex-wrap bg-gray-100 hover:bg-pink-100 cursor-pointer <?php echo e($reverse ?  "flex-row-reverse flex-wrap-reverse lg:flex-nowrap" : ""); ?>">

    <div class="w-full lg:w-2/3">
        <img  style="max-height: 640px;" class="w-full object-cover <?php echo e($reverse ? "xl:pl-36 2xl:pl-44" : "xl:pr-36 2xl:pr-44"); ?>" src="<?php echo e($thumbnail); ?>" />
    </div>

    <div class="lg:w-1/3">
        <div class="table h-full">

            <div class="table-cell align-middle p-10 <?php echo e($reverse ? "2xl:pl-20" : "2xl:pr-20"); ?>">

                <h3 class="font-bold text-3xl lg:text-4xl mb-8">
                    <a href=""><?php echo e($title); ?></a>
                </h3>
                <p class="text-lg mb-6"><?php echo e($excerpt); ?></p>

                <button>
                    Find Out More
                </button>

            </div>

        </div>
    </div>


</div>




