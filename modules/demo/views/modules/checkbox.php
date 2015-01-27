<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\modules\Checkbox;
use Zelenin\yii\SemanticUI\modules\Radio;

$this->title = 'Checkbox';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => Checkbox::widget([
        'name' => 'checkboxName1',
        'label' => 'checkboxLabel1'
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Checkbox;
echo Checkbox::widget([
    'name' => 'checkboxName1',
    'label' => 'checkboxLabel1'
]);
PHP
]) ?>

<?= Example::widget([
    'demo' => Radio::widget([
        'name' => 'radioName1',
        'label' => 'radioLabel1'
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Radio;
echo Radio::widget([
    'name' => 'radioName1',
    'label' => 'radioLabel1'
]);
PHP
]) ?>

<?= Example::widget([
    'demo' => Checkbox::widget([
        'name' => 'checkboxName2',
        'label' => 'checkboxLabel2',
        'type' => Checkbox::TYPE_SLIDER
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Checkbox;
echo Checkbox::widget([
    'name' => 'checkboxName2',
    'label' => 'checkboxLabel2',
    'type' => Checkbox::TYPE_SLIDER
]);
PHP
]) ?>

<?= Example::widget([
    'demo' => Checkbox::widget([
        'name' => 'checkboxName3',
        'label' => 'checkboxLabel3',
        'type' => Checkbox::TYPE_TOGGLE
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Checkbox;
echo Checkbox::widget([
    'name' => 'checkboxName3',
    'label' => 'checkboxLabel3',
    'type' => Checkbox::TYPE_TOGGLE
]);
PHP
]) ?>

<?= Example::widget([
    'demo' => Elements::segment(Checkbox::widget([
        'name' => 'checkboxName4',
        'fitted' => true
    ]), ['class' => 'left floated']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Checkbox;
echo Elements::segment(Checkbox::widget([
    'name' => 'checkboxName4',
    'fitted' => true
]), ['class' => 'left floated']);
PHP
]) ?>
