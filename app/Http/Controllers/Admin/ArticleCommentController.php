<?php namespace App\Http\Controllers\Admin;

use App\ArticleComment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input,Redirect;
use Illuminate\Http\Request;

class ArticleCommentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('admin.articlecomments.index')->withComments(ArticleComment::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin.articlecomments.edit')->withComment(ArticleComment::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		//字段提交值验证
		$this->validate($request, [
				'nickname' => 'required',
				'content' => 'required',
		]);
		if (ArticleComment::where('id',$id)->update(Input::except(['_method', '_token']))){
			return Redirect::to('admin/articlescomments');
		} else {
			return Redirect::back()->withInput()->withErrors('更新失败');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$articleComment = ArticleComment::find($id);
		if ($articleComment->delete()){
			return Redirect::to('admin/articlecomment');
		}

	}

}
