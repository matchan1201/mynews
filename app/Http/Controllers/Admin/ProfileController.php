<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        
    //以下を追記
    // Varidationを行う
    $this->validate($request, profile::$rules);
        
    $profile = new Profile;
    $form = $request->all();
    
    //データベースに保存する
    $profile->fill($form);
    $profile->save();
    
    return redirect('admin/profile/create');
    }
}    