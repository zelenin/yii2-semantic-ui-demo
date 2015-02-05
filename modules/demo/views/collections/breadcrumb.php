<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\collections\Breadcrumb;
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Breadcrumb';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => Breadcrumb::widget([
        'divider' => Breadcrumb::DIVIDER_CHEVRON,
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
                'label' => 'Breadcrumb'
            ]
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Breadcrumb;
echo Breadcrumb::widget([
    'divider' => Breadcrumb::DIVIDER_CHEVRON,
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
            'label' => 'Breadcrumb'
        ]
    ]
]);
PHP
]) ?>
