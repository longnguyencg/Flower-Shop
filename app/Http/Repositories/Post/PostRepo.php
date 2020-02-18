<?php


namespace App\Http\Repositories\Post;


use App\Post;

class PostRepo implements PostRepoInterface
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function store($obj)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }

    public function destroy($obj)
    {
        // TODO: Implement destroy() method.
    }

    public function search($key)
    {
        // TODO: Implement search() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }
}
