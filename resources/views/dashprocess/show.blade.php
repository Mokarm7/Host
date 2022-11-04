@extends('dashscreen.index')

@section('title')
    Show All Books
@endsection

{{-- هذه الصفحة فيها جدول يعرض البيانات من قاعدة البيانات الى صفحة الادمن عن طريق الاستعلام مرسل من دالة الاندكس --}}
@section('content')

    <table class="table table-success table-striped">
        <th>NAME</th>
        <th>PRICE</th>
        <th>IMAGE</th>
        <th>PROCCESS</th>
        @foreach ($ShowAllBooks as $show)
            <tr>
                <td>{{ $show->name }}</td>
                <td>{{ $show->price }}</td>
                <td><img src="/imgbook/{{ $show->img }}" width="100" height="100"></td>
                <td>

                    {{-- هنا الاكشن يروح لدالة الدستروي عشان يحذف الصف الذي تم اختياره من الجدول --}}
                    <form action="{{ route('b.destroy', $show->id) }}" method="post">

                        @csrf
                        @method('DELETE')
                        <a href="{{ route('b.edit', $show->id) }}" class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are You Sure To Delete this ?')">Delete</button>
                    </form>
                </td>

            </tr>
        @endforeach

    </table>
@endsection
