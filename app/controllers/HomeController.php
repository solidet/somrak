<?php

class HomeController extends Controller
{

    /**
    *   function show user
    */
    public function index()
    {
        $users = User::all();

        $this->view(
            'home/index',
            [
                // 'id'=>$users->id,
                // 'name'=>$users->name
                'users'=>$users
            ]
        );
    }

    /**
    * function create user
    */
    public function create($name = '')
    {

        // $name = $_POST['name'];

            $user = new User();
            $user->firstname = $name;

            if($user->save())

            return $this->view(
                'home/show',
                [
                    'id'=>$user->id,
                    'name'=>$user->firstname
                ]
            );

    }

    public function newUser()
    {
        return $this->view('home/index');
    }

}