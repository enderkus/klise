<?php
$menu_items = wp_get_nav_menu_items('footer-menu');
if ($menu_items) {
foreach ((array) $menu_items as $key => $menu_item) {
    if (!$menu_item->menu_item_parent) {
        echo '<a class="footer_item" href="' . $menu_item->url . '">';
        echo $menu_item->title;
        echo "</a>";
    }
}
}