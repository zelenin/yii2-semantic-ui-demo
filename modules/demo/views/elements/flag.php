<?php
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Flag';

echo Elements::header($this->title);
?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::flag('us'),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::flag('us');
PHP
]) ?>
