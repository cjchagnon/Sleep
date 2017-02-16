<?php
//=============================================================================
// WPI Sleep App
// _menu_radial
//
// mobile menu element
//
// includes radial menu and links.
//=============================================================================
echo <<< RadialMenu
  <nav class="c-circle-menu js-menu show-for-small-only">
    <button class="c-circle-menu__toggle js-menu-toggle">
      <span>Toggle</span>
    </button>
    <ul class="c-circle-menu__items">
      <li class="c-circle-menu__item">
        <a href="?page=setting" class="c-circle-menu__link menu-setting">
          <i class="fa fa-gear"></i>
        </a>
      </li>
      <li class="c-circle-menu__item">
        <a href="?page=history" class="c-circle-menu__link menu-history">
          <i class="fa fa-user"></i>
        </a>
      </li>
      <li class="c-circle-menu__item">
        <a href="?page=user" class="c-circle-menu__link menu-user">
          <i class="fa fa-area-chart"></i>
        </a>
      </li>
      <li class="c-circle-menu__item">
        <a href="?page=add" class="c-circle-menu__link menu-add">
          <i class="fa fa-plus"></i>
        </a>
      </li>
      <li class="c-circle-menu__item">
        <a href="?page=home" class="c-circle-menu__link menu-home">
          <i class="fa fa-home"></i>
        </a>
      </li>
    </ul>
    <div class="c-circle-menu__mask js-menu-mask"></div>
  </nav>
RadialMenu
?>
