@extends('admin.layout')
@section('titlepage', 'Quản lý danh mục')
@section('content')
    <div class="container">
        <h2>Quản lý danh mục</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Danh sách danh mục</h4>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <a href="{{ route('editCategory', $category->id) }}">Sửa</a>
                                    -
                                    <a href="{{ route('deleteCategory', $category->id) }}">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h4>Thêm/Sửa danh mục</h4>
                <form action="{{ isset($category) ? route('updateCategory', $category->id) : route('addCategory') }}" method="post">
                    @csrf
                    @if (isset($category))
                        @method('PUT')
                    @endif
                    <input type="text" name="name" value="{{ $selectedCategoryName ?? old('name') }}" placeholder="Tên danh mục">
                    <input type="submit" value="{{ isset($category) ? 'Cập nhật' : 'Thêm' }}">
                </form>
            </div>
        </div>
    </div>
@endsection