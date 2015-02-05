<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\collections\Menu;
use Zelenin\yii\SemanticUI\collections\Message;
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Message';

Elements::header($this->title);
?>

<?php $message = Message::begin([
    'type' => Message::TYPE_POSITIVE
]); ?>
<?= $message->renderCloseButton() ?>
Text
<?php $message::end(); ?>

<?= Example::widget([
    'demo' => '',
    'code' => <<<'PHP'
use Zelenin\yii\SemanticUI\modules\Message;
$message = Message::begin([
    'type' => Message::TYPE_POSITIVE
]); ?>
<?= $message->renderCloseButton() ?>
Text
<?php $message::end(); ?>
PHP
]) ?>
