<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CommentController extends Controller
{

    public function index()
    {

    }
    public  function show($comment)
    {

    }
    public function create()
    {

    }
    public function store()
    {

    }
    public function edit($article, $comment)
    {
        return "зменить у статьи{$article} комменатрий{$comment}";
    }
    public function update($comment)
    {
        return 'update 1 photo';
    }
    public function delete($comment)
    {
        return 'delete 1 photo';
    }
}
