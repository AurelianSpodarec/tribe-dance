<div class="w-full rounded overflow-hidden mb-8 ">


        <div class="flex">


            <div class="w-1/4">
                <time class="text-xs mb-4 block" datetime="$date"><?php echo e($date); ?></time>
            </div>

            <div class="w-3/4 p-8">
                <a href="<?php echo e($permalink); ?>">
                    <h3 class="font-bold mb-3 text-sm tracking-three"><?php echo e($title); ?></h3>
                </a>
                <a href="<?php echo e($permalink); ?>">
                    <img class="object-cover w-full cursor-pointer" style="max-height: 300px; min-height: 100px;" src="<?php echo e($thumbnail); ?>"/>
                </a>
                <p class="mb-3 text-sm"><?php echo e($excerpt); ?></p>

                <a class="underline font-bold text-xs uppercase tracking-three" href="<?php echo e($permalink); ?>">Read More</a>
            </div>


        </div>

</div>
