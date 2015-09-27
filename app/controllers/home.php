<?php

class Home extends controller
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

            $user = new User();
            $user->name = $name;

            if($user->save())

            return $this->view(
                'home/show',
                [
                    'id'=>$user->id,
                    'name'=>$user->name
                ]
            );

    }

}