<?php

namespace sim\modules\post\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use sim\modules\post\models\Post;

/**
 * PostSearch represents the model behind the search form about `sim\modules\post\models\Post`.
 */
class PostSearch extends Post
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'creator', 'publishedTime', 'featuredImage', 'createdBy', 'createdTime', 'updatedBy', 'updatedTime'], 'integer'],
            [['name', 'title', 'description', 'body', 'status', 'slug', 'type', 'visibility', 'password', 'metaData', 'note'], 'safe'],
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
        $query = Post::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'creator' => $this->creator,
            'publishedTime' => $this->publishedTime,
            'featuredImage' => $this->featuredImage,
            'createdBy' => $this->createdBy,
            'createdTime' => $this->createdTime,
            'updatedBy' => $this->updatedBy,
            'updatedTime' => $this->updatedTime,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'visibility', $this->visibility])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'metaData', $this->metaData])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
