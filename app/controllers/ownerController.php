<?php

class OwnerController extends Controller
{

    /**
    *   function show owner
    */
    public function index()
    {
        $owners = Owner::all();

        return $this->viewTpl(
            'owner/index.html',
            [
                'owners'=>$owners
            ]
        );
    }

    /**1
    * function create owner
    */
    public function create()
    {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $code = $_POST['code'];
        $activated = $_POST['activated'];

        $owner = new Owner();
        $owner->firstname = $firstname;
        $owner->lastname = $lastname;
        $owner->username = $username;
        $owner->password = $password;
        $owner->gender = $gender;
        $owner->address = $address;
        $owner->email = $email;
        $owner->phone = $phone;
        $owner->code = $code;
        $owner->activated = $activated;


            if($owner->save()){

            return $this->viewTpl(
                'owner/show.html',
                [
                    'owner'=>$owner
                ]
            );
        }

    }

    public function newOwner()
    {
        return $this->viewTpl('owner/new.html',[]);
    }

}
