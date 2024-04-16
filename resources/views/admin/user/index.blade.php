@extends('layouts.admin')

@section('content')

<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách thành viên</h5>
            <div class="form-search form-inline">
                <form>
                    <input value="{{ $keyword }}" name="keyword" type="text" class="form-control form-search btn-sm" placeholder="Tìm kiếm">
                    <input type="submit" value="Tìm kiếm" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="analytic">
                <a href="{{ $request->fullUrlWithQuery(['status' => 'trash']); }}" class="text-primary">Tài khoản vô hiệu hóa<span class="text-muted">{{ $count_user_trash }}</span></a>
                <a href="{{ $request->fullUrlWithQuery(['status' => 'activity']); }}" class="text-primary">Tài khoản đang hoạt động<span class="text-muted">{{ $count_user_activity }}</span></a>
            </div>
            <form action="{{ route('admin.user.action') }}">
                @if ($request->input('status') == 'activity')
                    <div class="form-action form-inline py-3">
                        <select class="form-control mr-1" name="action" id="">
                            <option>Chọn</option>
                            <option value="delete">Vô hiệu hóa</option>
                            <option value="forceDelete">Vinh vieen</option>
                        </select>
                        <input type="submit" class="btn btn-primary">
                    </div>
                @else
                    <div class="form-action form-inline py-3">
                        <select class="form-control mr-1" name="action" id="">
                            <option>Chọn</option>
                            <option value="restore">Khôi phục</option>
                        </select>
                        <input type="submit" class="btn btn-primary">
                    </div>
                @endif
                
                <table class="table table-striped tabl e-checkall">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" name="checkall">
                            </th>
                            <th scope="col">#</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Quyền</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->total() > 0)
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="list_check[]" value="{{ $user->id }}">
                                    </td>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="#" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                        @if (Auth::id() != $user->id)
                                          <!-- Button trigger modal -->
                                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                                <a href="#" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
    
                                            </button>
    
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Bạn có chắc chắn không?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                    
                                                    
                                                    <a class="btn btn-primary" href="{{ route('admin.user.delete', $user->id) }}">Đồng ý</a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
    
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="bg-white" colspan="7">Không tìm thấy bản ghi nào có tên là {{ $keyword }}</td>
                            </tr>
                        @endif
                        
                    </tbody>
                </table>
            </form>


            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection