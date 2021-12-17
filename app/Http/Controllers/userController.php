<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class userController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from articles');
        return view('main',['users'=>$users]);
        }
}
