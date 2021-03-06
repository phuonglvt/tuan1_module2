@extends('home')
@section('title', 'Thêm mới khách hàng')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>

            <div class="error-message">
                @if ($errors->any())
                    @foreach($errors->all() as $nameError)
                        <p style="color:red">{{ $nameError }}</p>
                    @endforeach
                @endif
            </div>
            <p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>

            <div class="col-12">
                <form method="post" action="{{ route('customers.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tên sách</label>
                        <select class="form-control" name="book_id">
                            @foreach($books as $book)
                                <option value="{{ $book->id }}">{{ $book->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection