<?php

namespace App\Http\Services;

use App\Models\Comment;

class CommentService implements ServiceInterface
{
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    function findAll()
    {

    }

    function findOne($id)
    {
        // TODO: Implement findOne() method.
    }

    function update($id, $request)
    {
        // TODO: Implement update() method.
    }

    function delete($id)
    {

    }

    function create($request)
    {

    }
}
// controller -> views
/// request -> controller -> service -> controller -> view
