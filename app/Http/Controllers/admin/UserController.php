<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request){
        $status = $request->input('status');
            $keyword = '';
        if($status == 'trash'){
            $users = User::onlyTrashed()->paginate(2);
        }else{
            if($request->input('keyword')){
                $keyword = $request->input('keyword');
            }
            $users = User::where('name', 'LIKE', "%{$keyword}%")->orderBy('created_at', 'desc')->paginate(5);
        }
        $count_user_activity = User::count();
        $count_user_trash = User::onlyTrashed()->count();
        
        return view('admin.user.index', compact('users', 'keyword', 'request', 'count_user_activity', 'count_user_trash'));
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

    public function delete(string $id){
            if(Auth::id() == $id){
                 return redirect()->route('admin.user.index')->with('error', 'Bạn không thể xóa');    
            }
            $user = User::find($id);
            $user->delete();
            return redirect()->route('admin.user.index')->with('success', 'Thành công');
    }
}