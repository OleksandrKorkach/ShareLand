<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function createTopic(Request $request){
        $incomingFields = $request->validate([
           'title' => 'required',
           'content' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['description'] = strip_tags($request['description']);
        $incomingFields['content'] = strip_tags($incomingFields['content']);
        $incomingFields['user_id'] = auth()->id();

        Topic::create($incomingFields);
        return redirect('/');
    }

    public function deletePost(Topic $topic){
        if (auth()->user()->id === $topic['user_id']){
            $topic->delete();
        }

        return redirect('/');
    }

//    public function editPostForm(Post $post, Request $request){
//        if (auth()->user()->id !== $post['user_id']){
//            return redirect('/');
//        }
//
//        $incomingFields = $request->validate([
//            'title' => 'required',
//            'body' => 'required'
//        ]);
//
//        $incomingFields['title'] = strip_tags($incomingFields['title']);
//        $incomingFields['body'] = strip_tags($incomingFields['body']);
//
//        $post->update($incomingFields);
//        return redirect('/');
//    }
//
//    public function deletePost(Post $post){
//        if (auth()->user()->id === $post['user_id']){
//            $post->delete();
//        }
//
//        return redirect('/');
//    }
//
//    public function createPost(Request $request){
//        $incomingFields = $request->validate([
//            'title' => 'required',
//            'body' => 'required'
//        ]);
//
//        $incomingFields['title'] = strip_tags($incomingFields['title']);
//        $incomingFields['body'] = strip_tags($incomingFields['body']);
//        $incomingFields['user_id'] = auth()->id();
//
//        Post::create($incomingFields);
//        return redirect('/');
//    }
//
//    public function getEditForm(Post $post){
//        if (auth()->user()->id !== $post['user_id']){
//            return redirect('/');
//        }
//        return view('edit-post', ['post' => $post]);
//    }
}
