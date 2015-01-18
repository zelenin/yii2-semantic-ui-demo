<?php
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'Header';
?>

<?= Elements::header('Page Headings') ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::header('First header', ['tag' => 'h1']) . Elements::header('Second header', ['tag' => 'h2']) . Elements::header('Third header', ['tag' => 'h3']) . Elements::header('Fourth header', ['tag' => 'h4']) . Elements::header('Fifth header', ['tag' => 'h5']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::header('First header', ['tag' => 'h1']);
echo Elements::header('Second header', ['tag' => 'h2']);
echo Elements::header('Third header', ['tag' => 'h3']);
echo Elements::header('Fourth header', ['tag' => 'h4']);
echo Elements::header('Fifth header', ['tag' => 'h5']);
PHP
]) ?>

<?= Elements::header('Descriptive Headers') ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::header('Account Settings<div class="sub header">Manage your account settings and set e-mail preferences.', ['tag' => 'h2']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::header('Account Settings<div class="sub header">Manage your account settings and set e-mail preferences.', ['tag' => 'h2']);
PHP
]) ?>

<?= \app\modules\demo\widgets\Example::widget([
    'demo' => Elements::header(Elements::icon('settings') . '<div class="content">Account Settings<div class="sub header">Manage your account settings and set e-mail preferences.</div></div>', ['tag' => 'h2']),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\Elements;
echo Elements::icon('settings') . '<div class="content">Account Settings<div class="sub header">Manage your account settings and set e-mail preferences.</div></div>', ['tag' => 'h2']);
PHP
]) ?>
