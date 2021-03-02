<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\td_users;
use App\td_members;
use DB;

class EmailController extends Controller
{
    
    public function activate_account($id)
    {
        $user= td_users::find($id);
        $user->status = '1';
        $user->update();
        echo "Account activated";
    }

    
}