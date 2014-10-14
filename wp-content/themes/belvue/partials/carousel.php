<div class="flex">
    <?php if (get_sub_field('desc')): ?>
    <div class="grid-span-5 desc">
        <div class="tooltip red tr">
            <?php the_sub_field('desc'); ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if (get_sub_field('photo')): ?>
    <div class="grid-span-5 photo">
        <?php $photo = get_sub_field('photo') ?>
        <img src="<?php echo $photo['sizes']['slider'] ?>" alt="<?php echo $photo['alt'] ?>"/>
    </div>
    <?php endif; ?>
</div>