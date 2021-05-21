<?php

namespace Mrba\LaraHper;

use Illuminate\Support\Facades\Auth;

class LaraHper
{
    public function user()
    {
        return Auth::guard()->user();
    }

    public function Administrator()
    {
        return config('larahper.database.users_model')::find(1);
    }
}
