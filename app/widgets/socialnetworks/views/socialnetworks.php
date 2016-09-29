<?php if (array_key_exists('before_widget', $args)) : ?>
    <?php echo $args['before_widget'] ?>
<?php else : ?>
    <!-- w-social-buttons -->
    <div class="w-social-buttons">
<?php endif ?>
<?php if (count($instance['collection'])) : ?>
    <ul class="w-social-buttons__items">
        <?php foreach ($instance['collection'] as $icon) : ?>
            <li class="w-social-buttons__item">
                <a href="<?php echo $icon['url']; ?>" class="w-social-buttons__link" target="__blank"><i class="w-social-buttons__link__icon fa <?php echo $icon[ 'icon_css' ]; ?>"></i><?php echo $icon['content'] ?></a>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?php if (array_key_exists('after_widget', $args)) : ?>
    <?php echo $args['after_widget'] ?>
<?php else : ?>
    </div>
    <!-- /w-social-buttons -->
<?php endif ?>

