<?php
return [
    'dashboard' => [
        'title'=> 'Dashboard',
        'icon'=> 'fa fa-shower',
        'route'=>'/dashboard',
    ],
    'categories' => [
        'title'=> 'Categories',
        'icon'=> 'for fa-circle nav-icon',
        'route'=>'/dashboard/categorie',
        'badge'=>[
            'class'=> 'warning',
            'label'=>'New'
        ],
    ],
    'orders' => [
        'title'=> 'Orders',
        'icon'=> 'fa fa-shopping-basket',
        'route'=>'/dashboard/orders',
        'badge'=>[
            'class'=> 'success',
            'label'=>'Success'
        ],
    ],
    'products' => [
        'title'=> 'Product',
        'icon'=> 'fa fa-podcast',
        'route'=>'/dashboard/products',
        'badge'=>[
            'class'=> 'danger',
            'label'=>'main'
        ],
    ],
    'settings' => [
        'title'=> 'Settings',
        'icon'=> 'fa fa-sitemap',
        'route'=>'/dashboard/settings',
        'badge'=>[
            'class'=> 'primary',
            'label'=>'settings'
        ],
    ],
];