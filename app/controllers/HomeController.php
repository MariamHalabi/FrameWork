<?php

namespace App\controllers;

use Controller;

class HomeController extends Controller
{
  public function index()
  {
    return $this->view('home/index', ['name' => 'Mariam'] );

}

  public function show($id)
  {
    echo "je suis la page show $id";
  }

  public function create(HttpRequest $request)
  {

  }

}