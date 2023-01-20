<?php

namespace App;

use App\Controllers\BaseController;

class Errors extends BaseController
{

  public function __construct()
  {
  }

  public function show404()
  {
    $this->response->setStatusCode(404);
    return view('404.php', ['page_title' => 'Página não encontrada', 'url' => current_url()]);
  }
}
