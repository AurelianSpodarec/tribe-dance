<div class="flex bg-gray-100 hover:bg-pink-100 cursor-pointer <?php echo e($reverse ?  "flex-row-reverse" : ""); ?>">

    <div class="w-2/3">
        <img  style="max-height: 640px;" class="w-full object-cover <?php echo e($reverse ? "pl-44" : "pr-44"); ?>" src="<?php echo e($thumbnail); ?>" />
    </div>

    <div class="w-1/3">
        <div class="table h-full">

            <div class="table-cell align-middle <?php echo e($reverse ? "pl-20" : "pr-20"); ?>">

                <h3 class="font-bold text-4xl mb-8">
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




