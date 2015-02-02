<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\modules\Tab;

$this->title = 'Tab';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => Tab::widget([
        'items' => [
            [
                'label' => 'Tab 1',
                'content' => 'Tab 1 content'
            ],
            [
                'label' => 'Tab 2',
                'content' => 'Tab 2 content',
                'active' => true
            ],
            [
                'label' => 'Tab 3',
                'content' => 'Tab 3 content'
            ],
            [
                'label' => 'Tab 4',
                'content' => 'Tab 4 content'
            ]
        ]
    ]),
    'code' => <<<'PHP'
use Zelenin\yii\SemanticUI\modules\Tab;
echo Tab::widget([
    'items' => [
        [
            'label' => 'Tab 1',
            'content' => 'Tab 1 content'
        ],
        [
            'label' => 'Tab 2',
            'content' => 'Tab 2 content',
            'active' => true
        ],
        [
            'label' => 'Tab 3',
            'content' => 'Tab 3 content'
        ],
        [
            'label' => 'Tab 4',
            'content' => 'Tab 4 content'
        ]
    ]
]);
PHP
]) ?>
