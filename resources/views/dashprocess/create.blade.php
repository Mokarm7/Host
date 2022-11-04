{{-- يورث صفحة لوحة التحكم حق الادمن --}}
@extends('dashscreen.index')

{{-- يغير عنوان الصفحة بهذا العنوان --}}
@section('title')
    Add New Book
@endsection

{{-- يغير المحتوى في لوحة التحكم بالمحتوى اللي داخله  --}}
@section('content')

{{-- يستقبل الرسالة المرسلة من دالة الاستور ويعرضها في الصفحة بعد عملية الاضافة الى قاعدة البيانات --}}
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    {{-- ياخذ القيم المدخلة ويرسلها الى دالة الاستور في الكنترولر --}}
    <form action="{{ route('b.store') }}" method="post" enctype="multipart/form-data">

        {{--  عملية التشفير --}}
        @csrf
        <br>
        <input type="text" class="form-control" name="name" required placeholder="Enter Name Of Book">
        <br>
        <input type="text" class="form-control" name="price" required placeholder="Enter price Of Book">
        <br>
        <input class="form-control" type="file" name="img" required>
        <br>
        <button type="submit" class="btn btn-success">Add Book</button>

    </form>
@endsection
