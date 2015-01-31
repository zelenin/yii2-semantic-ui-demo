<?php

/** @var Controller $controller */
use yii\web\Controller;
use Zelenin\yii\SemanticUI\modules\Sticky;

$controller = $this->context;
$module = $controller->module;

$menuOptions = [
    'class' => 'ui secondary vertical small fluid menu'
];

Sticky::begin([
    'clientOptions' => [
        'context' => '#content',

    ]
]);

echo \Zelenin\yii\SemanticUI\modules\Accordion::widget([
    'fluid' => true,
    'contentOptions' => ['encode' => false],
    'items' => [
        [
            'title' => 'Elements',
            'content' => \Zelenin\yii\SemanticUI\collections\Menu::widget([
                'options' => $menuOptions,
                'items' => [
                    ['label' => 'Button', 'url' => ['/demo/elements/button']],
                    ['label' => 'Divider', 'url' => ['/demo/elements/divider']],
                    ['label' => 'Flag', 'url' => ['/demo/elements/flag']],
                    ['label' => 'Header', 'url' => ['/demo/elements/header']],
                    ['label' => 'Icon', 'url' => ['/demo/elements/icon']],
                    ['label' => 'Image', 'url' => ['/demo/elements/image']],
                    ['label' => 'Input', 'url' => ['/demo/elements/input']],
                    ['label' => 'Label', 'url' => ['/demo/elements/label']],
                    ['label' => 'List', 'url' => ['/demo/elements/list']],
                    ['label' => 'Loader', 'url' => ['/demo/elements/loader']],
                    ['label' => 'Rail', 'url' => ['/demo/elements/rail']],
                    ['label' => 'Reveal', 'url' => ['/demo/elements/reveal']],
                    ['label' => 'Segment', 'url' => ['/demo/elements/segment']],
                    ['label' => 'Step', 'url' => ['/demo/elements/step']]
                ]
            ]),
            'active' => $controller->getUniqueId() == 'demo/elements'
        ],
        [
            'title' => 'Collections',
            'content' => \Zelenin\yii\SemanticUI\collections\Menu::widget([
                'options' => $menuOptions,
                'items' => [
                    ['label' => 'Breadcrumb', 'url' => ['/demo/collections/breadcrumb']],
                    ['label' => 'Menu', 'url' => ['/demo/collections/menu']],
                    ['label' => 'Message', 'url' => ['/demo/collections/message']]
                ]
            ]),
            'active' => $controller->getUniqueId() == 'demo/collections'
        ],
        [
            'title' => 'Modules',
            'content' => \Zelenin\yii\SemanticUI\collections\Menu::widget([
                'options' => $menuOptions,
                'items' => [
                    ['label' => 'Accordion', 'url' => ['/demo/modules/accordion']],
                    ['label' => 'Checkbox', 'url' => ['/demo/modules/checkbox']],
                    ['label' => 'Dropdown', 'url' => ['/demo/modules/dropdown']],
                    ['label' => 'Modal', 'url' => ['/demo/modules/modal']],
                    ['label' => 'Progress', 'url' => ['/demo/modules/progress']],
                    ['label' => 'Rating', 'url' => ['/demo/modules/rating']],
                    ['label' => 'Search', 'url' => ['/demo/modules/search']],
                    ['label' => 'Shape', 'url' => ['/demo/modules/shape']],
                    ['label' => 'Sidebar', 'url' => ['/demo/modules/sidebar']],
                    ['label' => 'Sticky', 'url' => ['/demo/modules/sticky']],
                    ['label' => 'Tab', 'url' => ['/demo/modules/tab']]
                ]
            ]),
            'active' => $controller->getUniqueId() == 'demo/modules'
        ],
        [
            'title' => 'Yii2 widgets',
            'content' => \Zelenin\yii\SemanticUI\collections\Menu::widget([
                'options' => $menuOptions,
                'items' => [
                    ['label' => 'ActiveForm', 'url' => ['/demo/yii2-widgets/active-form']],
                    ['label' => 'DetailView', 'url' => ['/demo/yii2-widgets/detail-view']],
                    ['label' => 'GridView', 'url' => ['/demo/yii2-widgets/grid-view']]
                ]
            ]),
            'active' => $controller->getUniqueId() == 'demo/yii2-widgets'
        ],
    ]
]);

Sticky::end();
