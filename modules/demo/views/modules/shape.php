<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\helpers\Html;
use yii\web\View;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\modules\Shape;

$this->title = 'Shape';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => Shape::widget([
        'sides' => [
            [
                'content' => 'Side 1',
            ],
            [
                'content' => 'Side 2',
            ],
            [
                'content' => 'Side 3',
            ]
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Shape;
echo Shape::widget([
    'sides' => [
        [
            'content' => 'Side 1',
        ],
        [
            'content' => 'Side 2',
        ],
        [
            'content' => 'Side 3',
        ]
    ]
]);
PHP
]) ?>

<?= Example::widget([
    'demo' => Shape::widget([
            'id' => ($shapeId = 'shape-id'),
            'type' => Shape::TYPE_CUBE,
            'sides' => [
                [
                    'content' => Html::tag('div', Html::tag('div', 'Side 1', ['class' => 'center']), ['class' => 'content'])
                ],
                [
                    'content' => Html::tag('div', Html::tag('div', 'Side 2', ['class' => 'center']), ['class' => 'content'])
                ],
                [
                    'content' => Html::tag('div', Html::tag('div', 'Side 3', ['class' => 'center']), ['class' => 'content'])
                ]
            ]
        ]) .
        Elements::button('Toggle', ['class' => 'left floated', 'id' => ($buttonId = 'toggle-button')]) .
        $this->registerJs('jQuery("#' . $buttonId . '").click(function() { jQuery("#' . $shapeId . '").shape("flip up"); });'),
    'code' => <<<'PHP'
use Zelenin\yii\SemanticUI\modules\Shape;
echo Shape::widget([
    'id' => ($shapeId = 'shape-id'),
    'type' => Shape::TYPE_CUBE,
    'sides' => [
        [
            'content' => Html::tag('div', Html::tag('div', 'Side 1', ['class' => 'center']), ['class' => 'content'])
        ],
        [
            'content' => Html::tag('div', Html::tag('div', 'Side 2', ['class' => 'center']), ['class' => 'content'])
        ],
        [
            'content' => Html::tag('div', Html::tag('div', 'Side 3', ['class' => 'center']), ['class' => 'content'])
        ]
    ]
]) .
Elements::button('Toggle', ['class' => 'left floated', 'id' => ($buttonId = 'toggle-button')]) .
$this->registerJs('jQuery("#' . $buttonId . '").click(function() { jQuery("#' . $shapeId . '").shape("flip up"); });')
PHP
]) ?>
