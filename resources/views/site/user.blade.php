@extends('site.home')

@section('content')
    <form>
        <div class="mb-3 w-25">
            <label for="exampleInputEmail1" class="form-label">Login</label>
            <input type="text" class="form-control" id="exampleInputLogin1">
        </div>
        <div class="mb-3 w-25">
            <label for="exampleInputPassword1" class="form-label">FIO</label>
            <input type="text" class="form-control" id="exampleInputFio1">
        </div>
        <div class="mb-3 w-25">
            <label for="exampleInputPassword1" class="form-label">Дата Рождения</label>
            <input type="date" class="form-control" id="exampleInputDateOfBirth1">
        </div>
        <div class="mb-3 w-25">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3 w-25">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" class="form-control" id="exampleInputAddress">
        </div>
        <div class="mb-3 w-25">
            <label for="formFile" class="form-label">Загрузите фото</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>
@endsection
