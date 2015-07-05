<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\modules\Embed;

$this->title = 'Embed';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => Embed::widget([
        'source' => Embed::SOURCE_YOUTUBE,
        'id' => 'pfdu_gTry8E'
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Embed::widget([
    'source' => Embed::SOURCE_YOUTUBE,
    'id' => 'pfdu_gTry8E'
]);
PHP
]) ?>
