<?php

namespace app\modules\demo\models;

use yii\db\ActiveRecord;

class Model extends ActiveRecord
{
    public $id;
    public $name;
    public $total;

    public function rules()
    {
        return [
            ['id', 'required'],
            ['name', 'required'],
            ['total', 'required']
        ];
    }

    public function getTotalList()
    {
        $array = [];
        for ($i = 1; $i <= 50; $i++) {
            $array[$i] = 'Total ' . $i;
        }
        return $array;
    }
}
