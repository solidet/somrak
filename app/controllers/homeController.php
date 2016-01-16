<?php

class HomeController extends Controller
{

    /**
    *   function show user
    */
    public function index()
    {
        $users = User::all();
        $name = 'det';

        return $this->viewTpl('home/index.html',
            [
                'users'=> $users,

            ]
        );
    }

    /**
    * function create user
    */
    public function create($name = '')
    {

        $user = new User();
        $user->firstname = $name;

        if($user->save())

        return $this->viewTpl(
            'home/show.html',
            [
                'id'=>$user->id,
                'name'=>$user->firstname
            ]
        );
    }

    public function newUser()
    {
        return $this->viewTpl('home/index.html',[]);
    }
}