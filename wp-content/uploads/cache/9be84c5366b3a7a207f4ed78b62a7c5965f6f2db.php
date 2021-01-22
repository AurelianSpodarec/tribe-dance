<div class="w-1/2 lg:w-1/3 rounded overflow-hidden px-2 mb-8 bg-gray-100 hover:bg-pink-100 cursor-pointer">
  <div>
    <img src="<?php echo e($thumbnail); ?>" />
  </div>

  <div>
    <time datetime="$date"><?php echo e($date); ?></time>
    <h3><?php echo e($title); ?></h3>
    <p><?php echo e($excerpt); ?></p>
    <a href="<?php echo e($permalink); ?>">Read More</a>
  </div>
</div>
