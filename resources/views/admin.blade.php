@include('admin/inc/header')
<main class="webacoders-admin">
    <div class="site-size">
        <div class="site-size__container-admin">
            <nav class="container-admin__menu-panel">
                <a href="/admin/controls" class="menu-panel__item">
                    <div class="item__row-menu">
                        <span class="row-menu__icon-menu"></span>
                        <span class="row-menu__icon-text">Администрирование магазина</span>
                        <span class="row-menu__icon-submenu"></span>
                    </div>
                    <div class="item__submenu">
                        <a href="" class="submenu__item">
                            <div class="item__row-menu">
                                <span class="row-menu__icon-menu"></span>
                                <span class="row-menu__icon-text">Категории</span>
                                <span class="row-menu__icon-submenu"></span>
                            </div>
                        </a>
                        <a href="" class="submenu__item">
                            <div class="item__row-menu">
                                <span class="row-menu__icon-menu"></span>
                                <span class="row-menu__icon-text">Товары</span>
                                <span class="row-menu__icon-submenu"></span>
                            </div>
                        </a>
                        <a href="" class="submenu__item">
                            <div class="item__row-menu">
                                <span class="row-menu__icon-menu"></span>
                                <span class="row-menu__icon-text">Акции</span>
                                <span class="row-menu__icon-submenu"></span>
                            </div>
                        </a>
                        <a href="" class="submenu__item">
                            <div class="item__row-menu">
                                <span class="row-menu__icon-menu"></span>
                                <span class="row-menu__icon-text">Цены</span>
                                <span class="row-menu__icon-submenu"></span>
                            </div>
                        </a>
                    </div>
                </a>
            </nav>
            <div class="container-admin__content-panel"></div>
        </div>
    </div>
</main>
@include('admin/inc/footer')
