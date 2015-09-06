<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\collections\Menu;
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Menu';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => Menu::widget([
        'items' => [
            [
                'label' => 'Menu',
                'url' => ['/demo/collections/menu']
            ],
            [
                'label' => 'Message',
                'url' => ['/demo/collections/message']
            ],
            [
                'label' => 'Only label'
            ],
            [
                'url' => ['/demo/collections/test'],
                'label' => 'Message',
                'items' => [
                    [
                        'label' => 'Menu',
                        'url' => ['/demo/collections/menu']
                    ],
                    [
                        'label' => 'Message',
                        'url' => ['/demo/collections/message']
                    ],
                    [
                        'label' => 'Only label'
                    ],
                    [
                        'label' => 'Message',
                        'url' => ['/demo/collections/message']
                    ],
                ]
            ],
        ],
        'rightMenuItems' => [
            [
                'label' => 'Menu',
                'url' => ['/demo/collections/menu']
            ],
            [
                'label' => 'Message',
                'url' => ['/demo/collections/message']
            ],
            [
                'label' => Elements::input(\yii\helpers\Html::input('text', null, null, ['placeholder' => 'search'])),
                'encode' => false
            ]
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\collections\Menu;
echo Menu::widget([
    'items' => [
        [
            'label' => 'Menu',
            'url' => ['/demo/collections/menu']
        ],
        [
            'label' => 'Message',
            'url' => ['/demo/collections/message']
        ],
        [
            'label' => 'Only label'
        ],
        [
            'url' => ['/demo/collections/test'],
            'label' => 'Message',
            'items' => [
                [
                    'label' => 'Menu',
                    'url' => ['/demo/collections/menu']
                ],
                [
                    'label' => 'Message',
                    'url' => ['/demo/collections/message']
                ],
                [
                    'label' => 'Only label'
                ],
                [
                    'label' => 'Message',
                    'url' => ['/demo/collections/message']
                ],
            ]
        ],
    ],
    'rightMenuItems' => [
        [
            'label' => 'Menu',
            'url' => ['/demo/collections/menu']
        ],
        [
            'label' => 'Message',
            'url' => ['/demo/collections/message']
        ],
        [
            'label' => Elements::input(\yii\helpers\Html::input('text', null, null, ['placeholder' => 'search'])),
            'encode' => false
        ]
    ]
]);
PHP
]) ?>

<?= Example::widget([
    'demo' => Menu::widget([
        'vertical' => true,
        'items' => [
            [
                'label' => 'Menu' . Elements::label('51'),
                'url' => ['/demo/collections/menu'],
                'encode' => false
            ],
            [
                'label' => 'Message',
                'url' => ['/demo/collections/message']
            ],
            [
                'label' => 'Only label'
            ],
            [
                'label' => 'Message',
                'items' => [
                    [
                        'label' => 'Menu',
                        'url' => ['/demo/collections/menu']
                    ],
                    [
                        'label' => 'Message',
                        'url' => ['/demo/collections/message']
                    ],
                    [
                        'label' => 'Only label'
                    ],
                    [
                        'label' => 'Message',
                        'url' => ['/demo/collections/message']
                    ],
                    [
                        'label' => 'Message',
                        'items' => [
                            [
                                'label' => 'Menu',
                                'url' => ['/demo/collections/menu']
                            ],
                            [
                                'label' => 'Message',
                                'url' => ['/demo/collections/message']
                            ],
                            [
                                'label' => 'Only label'
                            ],
                            [
                                'label' => 'Message',
                                'url' => ['/demo/collections/message']
                            ]
                        ]
                    ],
                ]
            ],
            [
                'label' => Elements::input(\yii\helpers\Html::input('text', null, null, ['placeholder' => 'search'])),
                'encode' => false
            ]
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\collections\Menu;
echo Menu::widget([
    'vertical' => true,
    'items' => [
        [
            'label' => 'Menu' . Elements::label('51'),
            'url' => ['/demo/collections/menu'],
            'encode' => false
        ],
        [
            'label' => 'Message',
            'url' => ['/demo/collections/message']
        ],
        [
            'label' => 'Only label'
        ],
        [
            'label' => 'Message',
            'items' => [
                [
                    'label' => 'Menu',
                    'url' => ['/demo/collections/menu']
                ],
                [
                    'label' => 'Message',
                    'url' => ['/demo/collections/message']
                ],
                [
                    'label' => 'Only label'
                ],
                [
                    'label' => 'Message',
                    'url' => ['/demo/collections/message']
                ],
                [
                    'label' => 'Message',
                    'items' => [
                        [
                            'label' => 'Menu',
                            'url' => ['/demo/collections/menu']
                        ],
                        [
                            'label' => 'Message',
                            'url' => ['/demo/collections/message']
                        ],
                        [
                            'label' => 'Only label'
                        ],
                        [
                            'label' => 'Message',
                            'url' => ['/demo/collections/message']
                        ]
                    ]
                ],
            ]
        ],
        [
            'label' => Elements::input(\yii\helpers\Html::input('text', null, null, ['placeholder' => 'search'])),
            'encode' => false
        ]
    ]
]);
PHP
]) ?>
<?= Example::widget([
    'demo' => Menu::widget([
        'text' => true,
        'items' => [
            [
                'header' => 'Sort by'
            ],
            [
                'label' => Elements::icon('mail') . 'Menu',
                'url' => ['/demo/collections/menu'],
                'encode' => false
            ],
            [
                'label' => 'Message',
                'url' => ['/demo/collections/message']
            ],
            [
                'label' => 'Only label'
            ],
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\collections\Menu;
echo Menu::widget([
    'text' => true,
    'items' => [
        [
            'header' => 'Sort by'
        ],
        [
            'label' => Elements::icon('mail') . 'Menu',
            'url' => ['/demo/collections/menu'],
            'encode' => false
        ],
        [
            'label' => 'Message',
            'url' => ['/demo/collections/message']
        ],
        [
            'label' => 'Only label'
        ],
    ]
]);
PHP
]) ?>
