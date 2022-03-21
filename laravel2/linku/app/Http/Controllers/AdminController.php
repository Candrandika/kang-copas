<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class AdminController extends Controller
{
    public function table_user(){
        $data_user=UserModel::all();
        return $data_user;
    }
}
