<?php


namespace App\Http\Services\Comment;


use App\Http\Repositories\Comment\CommentRepoInterface;

class CommentService implements CommentServiceInterface
{
    protected $commentRepo;

    public function __construct(CommentRepoInterface $commentRepo)
    {
        $this->commentRepo = $commentRepo;
    }

    public function getAll()
    {
        return $this->commentRepo->getAll();
    }

    public function store($request)
    {
        // TODO: Implement store() method.
    }

    public function findById($id)
    {
        return $this->commentRepo->findById($id);
    }

    public function update($request, $obj)
    {
        // TODO: Implement update() method.
    }

    public function destroy($obj)
    {
        // TODO: Implement destroy() method.
    }

    public function search($request)
    {
        // TODO: Implement search() method.
    }
}
