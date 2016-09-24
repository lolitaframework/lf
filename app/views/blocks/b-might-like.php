<!-- b-might-like -->
<div class="b-might-like">
    <h2 class="b-might-like__title"><?php _e('You might also like', 'lf') ?></h2>
    <ul class="b-might-like__items">
        <?php foreach ($related_posts as $p) : ?>
            <li class="b-might-like__item">
                <a href="<?php echo $p->link() ?>" class="b-might-like__item__link">
                    <img src="<?php echo $p->img()->src('340x260') ?>" class="b-might-like__item__image" alt="<?php esc_attr($p->title()); ?>">
                    <h4 class="b-might-like__item__caption"><?php echo $p->title() ?></h4>
                    <div class="b-might-like__item__meta"><?php echo $p->date() ?></div>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
<!-- /b-might-like -->