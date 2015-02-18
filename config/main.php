<?php

Yii::$container->set(\yii\grid\GridView::className(),\Zelenin\yii\SemanticUI\widgets\GridView::className());

return [
    'id' => 'yii2-semantic-ui-demo',
    'name' => 'yii2 semantic-ui demo',
    'basePath' => dirname(__DIR__),
    'layoutPath' => '@app/modules/demo/views/layouts',
    'defaultRoute' => '/demo/elements/button',
    'modules' => [
        'demo' => '\app\modules\demo\Module'
    ],
    'components' => [
        'urlManager' => [
            'class' => '\yii\web\UrlManager',
            'showScriptName' => false,
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'suffix' => '.html',
            'rules' => [
                ['pattern' => '', 'route' => '', 'suffix' => ''],
                '<controller:[\w-]+>/<action:[\w-]+>' => 'demo/<controller>/<action>'
            ]
        ],
        'request' => [
            'class' => 'yii\web\Request',
            'cookieValidationKey' => '5TNge0hlQiEV43sXm5OKgD8TPrecYWzL'
        ]
    ],
    'params' => []
];
