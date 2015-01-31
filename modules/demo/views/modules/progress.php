<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\modules\Progress;

$this->title = 'Progress';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => Progress::widget([
        'label' => 'Progressing…',
        'progress' => '20%',
        'indicating' => true,
        'options' => [
            'data' => [
                'percent' => 70
            ]
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Progress;
echo Progress::widget([
    'label' => 'Progressing…',
    'progress' => '20%',
    'indicating' => true,
    'options' => [
        'data' => [
            'percent' => 70
        ]
    ]
]);
PHP
]) ?>

<?= Example::widget([
    'demo' => Progress::widget([
        'label' => 'Progressing…',
        'progress' => '20%',
        'indicating' => true,
        'clientOptions' => [
            'percent' => 22
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Progress;
echo Progress::widget([
    'label' => 'Progressing…',
    'progress' => '20%',
    'indicating' => true,
    'clientOptions' => [
        'percent' => 22
    ]
]);
PHP
]) ?>
