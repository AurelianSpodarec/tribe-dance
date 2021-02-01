<a href="<?php echo e($permalink); ?>" class="w-1/2 lg:w-1/4 text-center rounded overflow-hidden mb-8 hover:opacity-60 transition-opacity duration-200 ease-in-out">
    <div class="mb-3">
        <img src="<?php echo e($thumbnail); ?>"/>
    </div>
    <div>
        <h6 class="uppercase text-sm tracking-two mb-1"><?php echo e($title); ?></h6>
        <p class="text-xs text-pink-300 tracking-two">£ <?php echo e($price); ?></p>
    </div>
</a>

