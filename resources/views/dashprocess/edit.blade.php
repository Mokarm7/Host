@extends('dashscreen.index')

@section('title')
    Edit Book
@endsection

{{-- بهذه الصفحة نفس صفحة الانشاء فقط هذه الصفحة تستقبل الاستعلام المرسل من دالة الايدت ويعرض داخل الحقول البيانات المرسلة باستخدم خاصية الفاليو --}}
@section('content')

{{-- الاكشن هنا يرسل البيانات بعد التعديل الى دالة الابديت عشان يحفظها بقاعدة البيانات ويرجع لصفحة العرض حق البيانات --}}
    <form action="{{ route('b.update', $EditBook->id) }}" method="post" enctype="multipart/form-data">

        @method('PUT')

        {{--  عملية التشفير --}}
        @csrf
        <br>
        <input type="text" class="form-control" name="name" required placeholder="Enter Name Of Book"
            value="{{ $EditBook->name }}">
        <br>
        <input type="text" class="form-control" name="price" required placeholder="Enter price Of Book"
            value="{{ $EditBook->price }}">
        <br>
        <img src="/imgbook/{{ $EditBook->img }}" class="rounded float-start" width="100" height="100">
        <input class="form-control" type="file" name="img">
        <br>
        <button type="submit" class="btn btn-success">Add Book</button>

    </form>
@endsection
