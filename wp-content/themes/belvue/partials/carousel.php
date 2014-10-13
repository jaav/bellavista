<div class="flex">
    <?php if (get_sub_field('desc')): ?>
    <div class="grid-span-6 desc">
        <div class="tooltip red rb">
            <?php the_sub_field('desc'); ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if (get_sub_field('photo')): ?>
    <div class="grid-span-6 photo">
        <?php $photo = get_sub_field('photo') ?>
        <img src="<?php echo $photo['sizes']['slider'] ?>" alt="<?php echo $photo['alt'] ?>"/>
    </div>
    <?php endif; ?>
</div>