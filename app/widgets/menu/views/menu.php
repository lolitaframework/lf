<?php if (array_key_exists('before_widget', $args)) : ?>
    <?php echo $args['before_widget'] ?>
<?php else : ?>
    <!-- w-menu -->
    <div class="w-menu">
<?php endif ?>

<?php echo $menu->render() ?>

<?php if (array_key_exists('after_widget', $args)) : ?>
    <?php echo $args['after_widget'] ?>
<?php else : ?>
    </div>
    <!-- /w-menu -->
<?php endif ?>
