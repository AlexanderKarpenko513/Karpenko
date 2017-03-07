<?php
require_once('menu.php');
require_once('show_menu.php');
require_once ('fanction_sort.php');
$menu = array_filter($menu, "filter_not_active");
echo '<link href="funcur/style.css" rel="stylesheet" media="all" />';
show_menu('left', $menu );
show_menu('bottom', $menu );
show_menu('top', $menu );
usort($menu, "cmp");
