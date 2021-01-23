<div class="w-1/2 lg:w-1/3 rounded overflow-hidden mb-8 bg-gray-100 hover:bg-pink-100 cursor-pointer">
    <a href="<?php echo e($permalink); ?>">
    <div>
        <img class="object-cover w-full" style="max-height: 300px; min-height: 100px;" src="<?php echo e($thumbnail); ?>"/>
    </div>

    <div>
        <time datetime="$date"><?php echo e($date); ?></time>
        <h3><?php echo e($title); ?></h3>
        <p><?php echo e($excerpt); ?></p>
        <a href="<?php echo e($permalink); ?>">Read More</a>
    </div>
    </a>
</div>
