<?php if (array_key_exists('before_widget', $args)) : ?>
    <?php echo $args['before_widget'] ?>
<?php else : ?>
    <!-- w-menu -->
    <div class="w-menu">
<?php endif ?>
    <nav>
        <ul class="w-menu__container">
            <li class="w-menu__item w-menu__item--has_submenu">
                <a href="#" class="w-menu__link">Docs</a>
                <ul class="w-menu__sub-menu">
                    <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Configuration</a>
                    </li>
                    <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Core</a></li>
                    <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Controls</a></li>
                </ul>
            </li>
            <li class="w-menu__item w-menu__item--has_submenu">
                <a href="#" class="w-menu__link">About me</a>
                <ul class="w-menu__sub-menu">
                    <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Configuration1</a></li>
                    <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Core1</a></li>
                    <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Controls1</a></li>
                </ul>
            </li>
            <li class="w-menu__item w-menu__item--has_submenu">
                <a href="#" class="w-menu__link">Our works</a>
                <ul class="w-menu__sub-menu">
                    <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Configuration3</a></li>
                </ul>
            </li>
            <li class="w-menu__item"><a href="#" class="w-menu__link w-menu__link--search">Search</a></li>
        </ul>
    </nav>
<?php if (array_key_exists('after_widget', $args)) : ?>
    <?php echo $args['after_widget'] ?>
<?php else : ?>
    </div>
    <!-- /w-menu -->
<?php endif ?>
