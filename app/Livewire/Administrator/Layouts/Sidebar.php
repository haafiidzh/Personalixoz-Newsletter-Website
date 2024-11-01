<?php

namespace App\Livewire\Administrator\Layouts;

use Livewire\Component;

class Sidebar extends Component
{
    public function menu()
    {
        return [
            [
                'name' => 'Dashboard',
                'route' => route('administrator.dashboard'),
                'icon' => 'fa-solid fa-house',
                'active' => request()->is('administrator'),
                'permission' => ['view-dashboard'],
                'is_separator' => false,
                'childs' => [],
            ],
            [
                'name' => 'App Management',
                'route' => null,
                'icon' => '',
                'active' => '',
                'permission' => [
                    'view-cms',
                    'view-news',
                    'create-news',
                    'edit-news',
                    'archive-news',
                    'delete-news',
                    'view-news-archive',
                    'view-news-category',
                    'create-news-category',
                    'delete-news-category',
                ],
                'is_separator' => true,
                'childs' => [],
            ],
            [
                'name' => 'CMS',
                'route' => route('administrator.cms'),
                'icon' => 'fa-solid fa-table-cells',
                'active' => request()->is('administrator/cms', 'administrator/cms/*'),
                'permission' => ['view-cms'],
                'is_separator' => false,
                'childs' => [],
            ],
            [
                'name' => 'News',
                'route' => '',
                'icon' => 'fa-solid fa-newspaper',
                'active' => request()->is('administrator/news', 'administrator/news/*'),
                'permission' =>
                [
                    'view-news',
                    'create-news',
                    'edit-news',
                    'delete-news',
                    'archive-news',
                    'restore-news',
                    'view-news-archive',
                    'view-news-category',
                    'create-news-category',
                    'delete-news-category',
                ],
                'is_separator' => false,
                'childs' => [
                    [
                        'name' => 'List',
                        'route' => route('administrator.news'),
                        'icon' => 'fa-solid fa-list',
                        'active' => request()->is('administrator/news/list', 'administrator/news/list/*'),
                        'permission' =>
                        [
                            'view-news',
                            'create-news',
                            'edit-news',
                            'delete-news',
                            'archive-news',
                            'restore-news',
                            'view-news-archive',
                        ],
                    ],
                    [
                        'name' => 'Category',
                        'route' => route('administrator.news.category'),
                        'icon' => 'fa-solid fa-layer-group',
                        'active' => request()->is('administrator/news/category', 'administrator/news/category/*'),
                        'permission' =>
                        [
                            'view-news-category',
                            'create-news-category',
                            'delete-news-category'
                        ],
                    ]
                ],
            ],
            [
                'name' => 'Account Management',
                'route' => null,
                'icon' => '',
                'active' => '',
                'permission' =>
                [
                    'view-users',
                    'create-users',
                    'edit-users',
                    'delete-users',
                    'view-roles',
                    'create-roles',
                    'edit-roles',
                    'delete-roles',
                    'views-permission',
                    'create-permission',
                    'delete-permission'
                ],
                'is_separator' => true,
                'childs' => [],
            ],
            [
                'name' => 'User',
                'route' => route('administrator.users'),
                'icon' => 'fa-solid fa-users',
                'active' => request()->is('administrator/users', 'administrator/users/*'),
                'permission' => ['view-users'],
                'is_separator' => false,
                'childs' => [],
            ],
            [
                'name' => 'Role',
                'route' => route('administrator.roles'),
                'icon' => 'fa-solid fa-shield',
                'active' => request()->is('administrator/roles', 'administrator/roles/*'),
                'permission' => ['view-roles'],
                'is_separator' => false,
                'childs' => [],
            ],
            [
                'name' => 'Permission',
                'route' => route('administrator.permissions'),
                'icon' => 'fa-solid fa-lock',
                'active' => request()->is('administrator/permissions', 'administrator/permissions/*'),
                'permission' => ['view-permission'],
                'is_separator' => false,
                'childs' => [],
            ]
        ];
    }

    public function render()
    {
        return view(
            'livewire.administrator.layouts.sidebar',
            ['menu' => self::menu()]
        );
    }
}
