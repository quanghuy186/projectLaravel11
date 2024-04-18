<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Caster\RedisCaster;

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

    public function edit($id){
        $roles = Role::all();
        $user = User::find($id);
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(Request $request,string $id){
        if (Auth::id() == $id) {
             return redirect()->route('admin.user.index')->with('error', 'Không thể sửa thông tin của chính bạn');
        } else {
            $user = User::find($id);
            $validatedData = $request->validate([
                'name' => 'required',
                'password' => 'required',
                'role_id' => 'required'
            ]);
            $user->update($validatedData);
            return redirect()->route('admin.user.index')->with('success', 'Thành công');
        }
    }

    public function action(Request $request){
        $list_check = $request->input('list_check');  
        if($list_check){
            foreach($list_check as $key => $id){
                if(Auth::id() == $id){
                    unset($list_check[$key]);
                }
            }
            
            if(!empty($list_check)){
                $action = $request->input('action');
                if($action == 'delete'){
                    User::destroy($list_check);
                    return redirect()->route('admin.user.index')->with('success', 'Đã vô hiệu hóa tài khoản thành công');
                }

                if($action == 'restore'){
                    User::withTrashed()->whereIn('id', $list_check)->restore();
                    return redirect()->route('admin.user.index')->with('success', "Khôi phục tài khoản thành công");
                }

                if($action == 'forceDelete'){
                    User::withTrashed()->whereIn('id', $list_check)->forceDelete();
                    return redirect()->route('admin.user.index')->with('success', "thành công");
                }
            }
        }     
        return redirect()->route('admin.user.index')->with('error', "Không thể thực hiện thao tác này!");
    }
}