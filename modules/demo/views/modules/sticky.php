<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Sticky';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => 'See sidebar on this site',
    'code' => <<<'PHP'
<?php \Zelenin\yii\SemanticUI\modules\Sticky::begin([
    'clientOptions' => [
        'context' => '#content'
    ]
]); ?>
Your content. See sidebar on this site.
<?php \Zelenin\yii\SemanticUI\modules\Sticky::end(); ?>
PHP
]) ?>
