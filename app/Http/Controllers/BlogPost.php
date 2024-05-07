<?php

namespace App\Http\Controllers;

use App\Models\PostBlog;
use Illuminate\Http\Request;

class BlogPost extends Controller
{
    public function IndexPage()
    {
        return view('index');
    }


    public function FormHandling(request $request)
    {
        $title = $request->title;
        $discription = $request->discription;
        $author = $request->author;

        $Postblog = new PostBlog;
        $Postblog->title = $title;
        $Postblog->discription = $discription;
        $Postblog->author = $author;
        $Postblog->save();


        return redirect('/itemlist');


    }


    public function ShowData()
    {
        $Postblog = PostBlog::all();

        return view('itemlist', ['postblog' => $Postblog]);
    }


    public function EditPost($id)
    {
        $editblog = PostBlog::find($id);

        return view('/editPost', ['editblog' => $editblog]);

    }

    public function DeletePost($id)
    {
        $delete = PostBlog::find($id);
        $delete->delete();
        return redirect('/itemlist');

    }


    public function Editdata(request $request)
    {

        $postedit = PostBlog::find($request->id);


        $postedit->title = $request->title;
        $postedit->discription = $request->discription;
        $postedit->author = $request->author;

        $postedit->save();



        return redirect('/itemlist');
    }
}
