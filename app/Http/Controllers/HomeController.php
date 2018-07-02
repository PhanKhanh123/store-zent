<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
// use  Yajra\Datatables\Facades\Datatables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getList(){
        $users = Post::select('posts.id', 'posts.title', 'posts.thumbnail', 'posts.user_id', 'users.name')->join('users', 'users.id', '=', 'posts.user_id');

        return  datatables()->eloquent($users)
                ->addColumn('action', function($user){
                    return '<button class="btn btn-sm btn-success">Show
                        </button><button type="button" class="btn btn-warning">Update
                        </button><button type="button" userId="'. $user->id .'" class="btn btn-danger">Delete
                        </button>';
                })
                ->addColumn('photo', function($user){
                    return '<img class="img-fluid" src="'. $user->avatar .'">';
                })
                ->rawColumns(['action', 'photo'])
                ->toJson();
    }
    public function destroy($id){
        Post::where('id',$id)->first()->delete();
        return response()->json(['error'=> false],200);
    }
}
