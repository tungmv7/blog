<?php

namespace sim\modules\admin\models\module;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use sim\modules\admin\models\module\Module;

/**
 * ModuleQuery represents the model behind the search form about `app\modules\admin\models\module\Module`.
 */
class ModuleQuery extends Module
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'isCoreModule', 'status', 'createdBy', 'createdTime'], 'integer'],
            [['uniqueId'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Module::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'isCoreModule' => $this->isCoreModule,
            'status' => $this->status,
            'createdBy' => $this->createdBy,
            'createdTime' => $this->createdTime,
        ]);

        $query->andFilterWhere(['like', 'uniqueId', $this->uniqueId]);

        return $dataProvider;
    }
}
