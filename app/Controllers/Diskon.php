<?php

namespace App\Controllers;

use App\Models\DiskonModel;

class Diskon extends BaseController
{
  public function index()
  {
    $diskonModel = new DiskonModel();
    $data['diskons'] = $diskonModel->findAll();
    return view('home', $data);
  }
}
