<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $title = $request->input('title');
        $body = $request->input('body');
        $cover = $request->input('cover');

        $post = new Post([
            'title' => $title,
            'body' => $body,
            'cover' => $cover
        ]);

        if($post->save()){
            $respon = [
                'msg' => 'Post created success',
                'post' => [$post]
            ];

            return response()->json($respon, '201');
        }

        $respon = [
            'msg' => 'Post created failed'
        ];

        return response()->json($respon,'401');
    }


    public function show()
    {
        $post = Post::all();

        $respone = [
            'msg' => ' show all post',
            'post' => $post
        ];

        return response()->json($respone, '200');
    }

    public  function showById($id){
        $post = Post::find($id);

        $respone = [
            'msg' => 'Show post success',
            'post' => $post
        ];

        return response()->json($respone, '200');
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $title = $request->input('title');
        $body = $request->input('body');

        $post = Post::findOrFail($id);

        $post->title = $title;
        $post->body = $body;

        if (!$post->update()){
            return response()->json([
                'msg' => 'Updating Failed'
            ], '404');
        }

        $respone = [
            'msg' => 'Post Updated Success',
            'post' => $post
        ];

        return response()->json($respone, '200');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if (!$post->delete()){
            return response()->json([
                'msg' => 'Post deleting Failed'
            ], '404');
        }

        $respone = [
            'msg' => 'Post deleted'
        ];

        return response()->json($respone, '200');
    }
}
