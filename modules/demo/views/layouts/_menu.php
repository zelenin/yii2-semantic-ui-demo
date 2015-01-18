<?php

/** @var Controller $controller */
use yii\web\Controller;

$controller = $this->context;
$module = $controller->module;

$menuOptions = [
    'class' => 'ui secondary vertical small fluid menu'
];

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
            'content' => '',
            'active' => $controller->getUniqueId() == 'demo/collections'
        ],
        [
            'title' => 'Modules',
            'content' => '',
            'active' => $controller->getUniqueId() == 'demo/modules'
        ]
    ]
]);
