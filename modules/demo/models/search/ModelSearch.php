<?php

namespace app\modules\demo\models\search;

use app\modules\demo\models\Model;
use yii\data\ArrayDataProvider;

class ModelSearch extends Model
{
    public function rules()
    {
        return [
            ['id', 'integer'],
            ['name', 'string'],
            ['total', 'integer']
        ];
    }

    public function search($params)
    {
        $array = [];
        for ($i = 1; $i <= 50; $i++) {
            $model = new Model();
            $model->setAttributes([
                'id' => $i,
                'name' => 'Title ' . $i,
                'total' => rand(10, 99)
            ]);
            $array[] = $model;
        }
        $dataProvider = new ArrayDataProvider([
            'allModels' => $array,
            'sort' => [
                'attributes' => ['id', 'name', 'total'],
            ],
            'pagination' => [
                'pageSize' => 10
            ]
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $model = $this;

        $dataProvider->allModels = array_filter($array, function ($item) use ($model, $array) {
            return
                (!empty($model->id) ? $item->id == $model->id : true) &&
                (!empty($model->name) ? $item->name == $model->name : true) &&
                (!empty($model->total) ? $item->total == $model->total : true);
        });

        return $dataProvider;
    }
}
