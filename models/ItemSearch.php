<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Item;

/**
 * ItemSearch represents the model behind the search form of `app\models\Item`.
 */
class ItemSearch extends Item
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[/*'id', */'category_id', 'status'], 'integer'],
            ['category_id','in','range'=>[1,2,3]],
            [['name_cn', 'name_en', 'name_jp'/*, 'img_url','describe_cn', 'describe_en', 'describe_jp', 'created_at', 'updated_at'*/], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Item::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name_cn', $this->name_cn])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'name_jp', $this->name_jp])
            /*->andFilterWhere(['like', 'img_url', $this->img_url])
            ->andFilterWhere(['like', 'describe_cn', $this->describe_cn])
            ->andFilterWhere(['like', 'describe_en', $this->describe_en])
            ->andFilterWhere(['like', 'describe_jp', $this->describe_jp])*/;

        return $dataProvider;
    }

    /**
     * 下拉筛选
     * @column string 字段
     * @value mix 字段对应的值，不指定则返回字段数组
     * @return mix 返回某个值或者数组
     */
    public static function dropDown ($column, $value = null)
    {
        $dropDownList = [
            'category_id'=> [
                '1'=>'显示',
                '2'=>'删除',
            ]/*,
            'is_hot'=> [
                '0'=>'否',
                '1'=>'是',
            ],*/
//有新的字段要实现下拉规则，可像上面这样进行添加
// ......
        ];
//根据具体值显示对应的值
        if ($value !== null)
            return array_key_exists($column, $dropDownList) ? $dropDownList[$column][$value] : false;
//返回关联数组，用户下拉的filter实现
        else
            return array_key_exists($column, $dropDownList) ? $dropDownList[$column] : false;
    }
}
