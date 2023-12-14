<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Comments;
use App\Models\Blog;
use RealRashid\SweetAlert\Facades\Alert;
class BlogController extends Controller
{
    public function like(Request $request, $id){

        $likeuser=Like::where('blog_id',$id)->get();
        $likeblog=true;
        foreach($likeuser as $like ){
            if(isset($like->user_id)){
                $likeblog=false;
            }
        }
        if($likeblog){
            $bloglike=new Like();

            $bloglike->blog_id=$id;
            $bloglike->user_id=1;
            
            $bloglike->save();
           return redirect("Blogs/Detail/$id"); 
        }
        else{
  
return redirect("Blogs/Detail/$id");}
    }

    public function addcomment(Request $request){

     $result=Comments::create($request->all());
     return redirect("Blogs/Detail/$request->blog_id");
    }

    public function block_blog(Request $request, $id){
$userblog=Blog::find($id);

$userblog->status=false;

$userblog->update();
        return redirect("Blogs/Detail/$id");

    }
    
    public function unblock_blog(Request $request, $id){
        $userblog=Blog::find($id);
        $userblog->status=true;
        $userblog->update();
        return redirect("Blogs/Detail/$id"); 
    }
     public function delete(Request $request, $id){
         
         
         $userblog=Blog::find($id);
         if($userblog)
         {
        $userblog->delete();
        Alert::success('Success', 'blog is Deleted Successfully'); 
        return view('blogs.list');
         }else{
             Alert::success('Error', 'Something is wrong'); 
            return view('blogs.list'); 
         }
        
    }
    
   
}
