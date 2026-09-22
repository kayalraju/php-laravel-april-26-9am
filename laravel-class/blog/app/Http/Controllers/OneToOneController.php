<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Blog;

class OneToOneController extends Controller
{
    public function author(){
        return view('oneToOne.createAuthor');
    }

    public function createauthor(Request $request){

        $author = new Author;
        $author->name = $request->name;
        $author->save();

        return redirect()->route('createblog')->with('success','Author: Firstname Lastname');
       
    }

    public function createblog(){
        $All_authors = Author::all();
        return view('oneToOne.createBlog',compact('All_authors'));
    }
    public function blogstore(Request $request){

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author_id = $request->author_id;
        $blog->save();

        return redirect()->route('blog.list')->with('success','Blog Created');
        
    }

    public function list(){
        $authors_with_blogs = Author::with('blog')->get(); //hasOne
        $blogs_with_authors = Blog::with('author')->get(); //belongsTo
        //dd($authors_with_blogs);
        
        
        
        return view('oneToOne.list',compact('authors_with_blogs', 'blogs_with_authors'));
    }
     public function authorBlog($id)
    {
        // $author = Author::find($id);
        // //dd($author->blog);
        // //author name
        // $author_name = $author->name;
        // //dd($author_name);
        // //blog title
        // $blog_title = $author->blog->title;
        // dd($blog_title);
        // //blog content
        // $blog_content = $author->blog->content;
        // //

        $blog = Blog::find($id);
        // $author_name = $blog->author->name;
        // dd($author_name);
         $blog_title = $blog->title;
         dd($blog_title);
        // $blog_content = $blog->content;
        
    }
}
