<?php


namespace App\Http\Services\Post;


use App\Http\Repositories\Post\PostRepoInterface;

class PostService implements PostServiceInterface
{
    protected $postRepo;

    public function __construct(PostRepoInterface $postRepo )
    {
        $this->postRepo = $postRepo;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function store($request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function update($request, $obj)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function search($request)
    {
        // TODO: Implement search() method.
    }
}
