<?php


namespace App\Http\Services\User;


use App\Http\Repositories\User\UserRepository;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    protected $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;

    }

    public function getAll()
    {
        return $this->userRepo->getAll();
    }

    public function store($request)
    {
        $user = new User();
        $user->name = $request->user;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $this->userRepo->store($user);
    }

    public function findById($id)
    {
        return $this->userRepo->findById($id);
    }

    public function update($request, $obj)
    {;
        $obj->name = $request->user;
        $obj->email = $request->email;
        $obj->password = Hash::make($request->password);
        $this->userRepo->update($obj);
    }

    public function destroy($obj)
    {
        $this->userRepo->destroy($obj);
    }

    public function search($request)
    {
        return $this->userRepo->search($request->key);
    }
}
