<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	//
    public function hasManyComments()
    {
        return $this->hasMany('App\ArticleComment', 'article_id', 'id');
    }

}
