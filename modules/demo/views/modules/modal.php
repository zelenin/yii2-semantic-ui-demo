<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\helpers\Size;
use Zelenin\yii\SemanticUI\modules\Modal;

$this->title = 'Modal';

Elements::header($this->title);
?>

<?php $modal = Modal::begin([
    'size' => Size::LARGE,
    'header' => 'Profile Picture',
    'actions' => Elements::button('Nope', ['class' => 'black']) . Elements::button('Yep' . Elements::icon('checkmark'), ['class' => 'positive right labeled icon'])
]); ?>
<?= Elements::image('/images/image.png', ['class' => 'medium']) ?>
<div class="description">
    <?= Elements::header('We\'ve auto-chosen a profile image for you') ?>
    <p>We've grabbed the following image from the <a target="_blank" href="https://www.gravatar.com">gravatar</a>
        image
        associated with your registered e-mail address.</p>

    <p>Is it okay to use this photo?</p>
</div>
<?php $modal::end(); ?>

<?= Example::widget([
    'demo' => $modal->renderToggleButton('Show'),
    'code' => <<<'PHP'
<?php $modal = Modal::begin([
    'size' => Size::LARGE,
    'header' => 'Profile Picture',
    'actions' => Elements::button('Nope', ['class' => 'black']) . Elements::button('Yep' . Elements::icon('checkmark'), ['class' => 'positive right labeled icon'])
]); ?>
<?= Elements::image('/images/image.png', ['class' => 'medium']) ?>
<div class="description">
    <?= Elements::header('We\'ve auto-chosen a profile image for you') ?>
    <p>We've grabbed the following image from the <a target="_blank" href="https://www.gravatar.com">gravatar</a> image
        associated with your registered e-mail address.</p>

    <p>Is it okay to use this photo?</p>
</div>
<?php $modal::end(); ?>

<?= $modal->renderToggleButton('Show') ?>
PHP
]) ?>
