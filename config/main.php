<?php

return [
    'id' => 'yii2-semantic-ui-demo',
    'name' => 'yii2 semantic-ui demo',
    'basePath' => dirname(__DIR__),
    'layoutPath' => '@app/modules/demo/views/layouts',
    'defaultRoute' => 'demo/default/index',
    'modules' => [
        'demo' => '\app\modules\demo\Module'
    ],
    'components' => [
        'urlManager' => [
            'class' => '\yii\web\UrlManager',
            'showScriptName' => false,
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'rules' => [
                '/' => 'demo/default/index',
                '<module:[\w-]+>' => 'demo/default/index',
                '<module:[\wd-]+>/<action:[\w-]+>' => 'demo/default/<action>',
                '<module:[\w-]+>/<controller:[\w-]+>/<action:[\w-]+>' => 'demo/<controller>/<action>'
            ]
        ],
        'request' => [
            'class' => 'yii\web\Request',
            'cookieValidationKey' => '5TNge0hlQiEV43sXm5OKgD8TPrecYWzL'
        ]
    ],
    'params' => []
];
