<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\modules\Sidebar;

$this->title = 'Sidebar';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => Sidebar::widget([
            'id' => ($sidebarId = 'sidebar-id'),
            'content' => $this->context->renderPartial('@app/modules/demo/views/layouts/_menu')
        ]) .
        Elements::button('Toggle', ['class' => 'left floated', 'id' => ($buttonId = 'toggle-button')]) .
        $this->registerJs('jQuery("#' . $buttonId . '").click(function() { jQuery("#' . $sidebarId . '").sidebar("toggle"); });'),
    'code' => <<<'PHP'
use Zelenin\yii\SemanticUI\modules\Sidebar;
echo Sidebar::widget([
    'id' => ($sidebarId = 'sidebar-id'),
    'content' => $this->context->renderPartial('@app/modules/demo/views/layouts/_menu')
]) .
Elements::button('Toggle', ['class' => 'left floated', 'id' => ($buttonId = 'toggle-button')]) .
$this->registerJs('jQuery("#' . $buttonId . '").click(function() { jQuery("#' . $sidebarId . '").sidebar("toggle"); });');
PHP
]) ?>
