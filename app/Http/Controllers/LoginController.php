<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Auth;
use App\Support\View;
use App\Support\RequestInput;

class LoginController
{
  public function show(View $view)
  {
    return $view('auth.login');
  }

  public function store(RequestInput $input)
  {
    $form = $input->all();

    $rules = [
      'email' => 'required|email',
      'password' => 'required|string'
    ];

    $validator = validator($form, $rules);

    if ($validator->fails()) {
      dd($validator->errors());
    }

    $successful = Auth::attempt($input->email, sha1($input->password));

    if (!$successful) {
      dd("Unsuccessful Login Attempt");
    }

    return redirect('/home');
  }

  public function logout()
  {
    Auth::logout();

    if (Auth::guest()) {
      return redirect('/login');
    }
  }
}
