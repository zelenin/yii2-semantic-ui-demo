<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\modules\Accordion;
use Zelenin\yii\SemanticUI\modules\Search;

$this->title = 'Search';

Elements::header($this->title);
?>

<script>
    var content = [
        { title: 'Andorra' },
        { title: 'United Arab Emirates' },
        { title: 'Afghanistan' },
        { title: 'Antigua' },
        { title: 'Anguilla' },
        { title: 'Albania' },
        { title: 'Armenia' },
        { title: 'Netherlands Antilles' },
        { title: 'Angola' },
        { title: 'Argentina' },
        { title: 'American Samoa' },
        { title: 'Austria' },
        { title: 'Australia' },
        { title: 'Aruba' },
        { title: 'Aland Islands' },
        { title: 'Azerbaijan' },
        { title: 'Bosnia' },
        { title: 'Barbados' },
        { title: 'Bangladesh' },
        { title: 'Belgium' },
        { title: 'Burkina Faso' },
        { title: 'Bulgaria' },
        { title: 'Bahrain' },
        { title: 'Burundi' }
    ];
</script>

<?= Example::widget([
    'demo' => Search::widget([
        'clientOptions' => [
            'source' => [
                ['title' => 'Andorra'],
                ['title' => 'United Arab Emirates'],
                ['title' => 'Afghanistan'],
                ['title' => 'Antigua'],
                ['title' => 'Anguilla'],
                ['title' => 'Albania'],
                ['title' => 'Armenia'],
                ['title' => 'Netherlands Antilles'],
                ['title' => 'Angola'],
                ['title' => 'Argentina'],
                ['title' => 'American Samoa'],
                ['title' => 'Austria'],
                ['title' => 'Australia'],
                ['title' => 'Aruba'],
                ['title' => 'Aland Islands'],
                ['title' => 'Azerbaijan'],
                ['title' => 'Bosnia'],
                ['title' => 'Barbados'],
                ['title' => 'Bangladesh'],
                ['title' => 'Belgium'],
                ['title' => 'Burkina Faso'],
                ['title' => 'Bulgaria'],
                ['title' => 'Bahrain'],
                ['title' => 'Burundi']
            ]
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Search;
echo Search::widget([
    'clientOptions' => [
        'source' => [
            ['title' => 'Andorra'],
            ['title' => 'United Arab Emirates'],
            ['title' => 'Afghanistan'],
            ['title' => 'Antigua'],
            ['title' => 'Anguilla'],
            ['title' => 'Albania'],
            ['title' => 'Armenia'],
            ['title' => 'Netherlands Antilles'],
            ['title' => 'Angola'],
            ['title' => 'Argentina'],
            ['title' => 'American Samoa'],
            ['title' => 'Austria'],
            ['title' => 'Australia'],
            ['title' => 'Aruba'],
            ['title' => 'Aland Islands'],
            ['title' => 'Azerbaijan'],
            ['title' => 'Bosnia'],
            ['title' => 'Barbados'],
            ['title' => 'Bangladesh'],
            ['title' => 'Belgium'],
            ['title' => 'Burkina Faso'],
            ['title' => 'Bulgaria'],
            ['title' => 'Bahrain'],
            ['title' => 'Burundi']
        ]
    ]
]);
PHP
]) ?>
