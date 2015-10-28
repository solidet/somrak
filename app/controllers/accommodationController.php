<?php

class AccommodationController extends Controller
{

    public function index()
    {
        return $this->viewTpl('accommodation/index.html',[]);
    }

    public function create()
    {
        return $this->viewTpl('accommodation/create.html',[]);
    }
}
