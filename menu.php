<?php
$menu = array(

    $menu1 = [
        'Title' => 'главная',
        'Link' => '/',
        'Active' => true,
        'Menu_type' => ['bottom'],
        'Position' => '1',
        'Children' =>
            [
                'Title' => 'Новости2',
                'Link' => 'news',
                'Active' => true,
                'Menu_type' => ['bottom', 'left'],
                'Position' => '1',
            ],
    ],
    $menu2 = [
        'Title' => 'Новости',
        'Link' => 'news',
        'Active' => true,
        'Menu_type' => ['bottom'],
        'Position' => '4',
    ],
    $menu3 = [
        'Title' => 'О нас',
        'Link' => 'about us',
        'Active' => true,
        'Menu_type' => ['top', 'left'],
        'Position' => '2',
    ],
    $menu4 = [
        'Title' => 'Контакты',
        'Link' => 'contacts',
        'Active' => true,
        'Menu_type' => ['top', 'left'],
        'Position' => '3',
    ],

);
