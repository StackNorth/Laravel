<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model {

	//
    protected $fillable = ['nickname','email','website','content','article_id'];


}
