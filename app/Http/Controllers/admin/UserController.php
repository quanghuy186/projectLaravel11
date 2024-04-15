<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $keyword = '';
        if($request->input('keyword')){
            $keyword = $request->input('keyword');
        }
        $users = User::where('name', 'LIKE', "%{$keyword}%")->orderBy('created_at', 'desc')->paginate(5);
        return view('admin.user.index', compact('users', 'keyword'));
    }

    public function add(){
        $roles = Role::all();
        return view('admin.user.add', compact('roles'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required'
        ]);
        // $user = new User();
        // $user->name = $validatedData['name'];
        // $user->email = $validatedData['email'];
        // $user->password = bcrypt($validatedData['password']);
        // $user->role_id = $validatedData['role_id']; // Gán giá trị role_id từ request
        // $user->save();
        $user = User::create($validatedData);
        return redirect()->route('admin.user.index')->with('success', 'Thêm mới thành công người dùng');
    }
}