<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coment;

class CommentController extends Controller
{

    public function index(){

        $comment = Coment::find(1);
        return $comment->posts;


    }
}
