<?php if ($li->menu_item_parent <= 0) : ?>
    <?php $li_class = 'w-menu__item'; ?>
<?php else : ?>
    <?php $li_class = 'w-menu__sub-menu-item'; ?>
<?php endif ?>
<?php if ($li->hasSubmenu()) : ?>
    <?php $li_class.= ' w-menu__item--has_submenu'; ?>
<?php endif ?>

<li class="<?php echo $li_class ?>">
    <a href="<?php echo $li->url ?>"><?php echo $li->title ?></a>
    <?php if ($li->hasSubmenu()) : ?>
        <?php $li->menu->ul($li->getSubItems()) ?>
    <?php endif ?>
</li>
