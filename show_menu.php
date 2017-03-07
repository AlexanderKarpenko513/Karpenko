<?php
function show_menu($position, $block){
    $items = array_filter($block, function ($item) USE ($position) {
        return in_array($position, $item['Menu_type']);
    }
    );

echo "<div class = {$position}menu>";

    foreach ($items as $item) {
        echo "<ul>";
       echo "<li><a href={$item['Link']}>{$item['Title']}</a></li>";
       echo "</ul>";

        if (!empty($item['Children'])) {
            show_menu($position, $item);
        }
    };
    echo "</div>";
};
function filter_not_active($menus) {
    return $menus['Active'] == true;
};
