<div class="w-full rounded overflow-hidden mb-8 bg-gray-100 hover:bg-pink-200 cursor-pointer">
<a href="<?php echo e($permalink); ?>">

    <div>
        <img class="object-cover w-full" style="max-height: 300px; min-height: 100px;" src="<?php echo e($thumbnail); ?>"/>
    </div>

    <div class="p-8">
        <time class="text-xs mb-4 block" datetime="$date"><?php echo e($date); ?></time>
        <h3 class="font-bold mb-3 text-3xl"><?php echo e($title); ?></h3>
        <p class="mb-3 text-sm"><?php echo e($excerpt); ?></p>
        <a class="underline font-bold text-xs uppercase tracking-three" href="<?php echo e($permalink); ?>">Read More</a>
    </div>

</a>
</div>
