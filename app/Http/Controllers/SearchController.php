<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EloquentUser;
use App\Models\Phone;
use App\Models\Role;


class SearchController extends Controller
{
    public function index(Request $request) {
        $params = $request->all();
        
        if($params) {
            $users = $this->search($params);
        } else {
            $users = null;
        }
        return view('search')->with('users', $users);
    }

    public function search(array $params) {
        if($params['id']) {
            return EloquentUser::find($params['id']);
        }
        if($params['phone']) {
            $phone = Phone::select('eloquent_user_id')->where('number', 'like', $params['phone'])->get();
            return EloquentUser::find($phone);
        }
        if($params['role']) {
            $role = Role::select('id')->where('name', 'like', $params['role'])->get()->first();
            return $role->users;
        }
    }
}
