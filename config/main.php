<?php

return [
    'id' => 'yii2-semantic-ui-demo',
    'name' => 'yii2 app',
    'basePath' => dirname(__DIR__),
    'layoutPath' => '@app/modules/demo/views/layouts',
    'timeZone' => 'UTC',
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
                '<module:[\wd-]+>' => 'demo/default/index',
                '<module:[\wd-]+>/<action:[\wd-]+>' => 'demo/default/<action>',
                '<module:[\wd-]+>/<controller:[\wd-]+>/<action:[\wd-]+>' => 'demo/<controller>/<action>'
            ]
        ],
        'request' => [
            'class' => 'yii\web\Request',
            'cookieValidationKey' => '5TNge0hlQiEV43sXm5OKgD8TPrecYWzL'
        ]
    ],
    'params' => []
];
