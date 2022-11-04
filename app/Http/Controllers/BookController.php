<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        //  هذي دالة عرض صفحة البيانات في لوحة التحكم
    public function index()
    {
        $ShowAllBooks = Book::all();

        return view('dashprocess.show',compact('ShowAllBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //  هذي دالة عرض صفحة انشاء كتاب جديد من لوحة التحكم
    public function create()
    {
        return view('dashprocess.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //  هذي دالة حفط البيانات الجاية من من الحقول تحفظها بالجدول حق الكتب عن طريق المودل مع ارجع رسالة انه تم الحفظ
    public function store(Request $request)
    {
        $book = new Book;

        $book->name = $request->name;
        $book->price = $request->price;

        $img = $request->img;

        $imgName = time() . '.' . $img->getClientOriginalExtension();

        $request->img->move('imgbook', $imgName);

        $book->img = $imgName;

        $book->save();

        return redirect()->back()->with('message', 'Add Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */

     //  هذي الدالة تقوم بعرض صفحة التعديل عند ضغط زر التعديل مع عرض بيانات الصف الذي تم اختياره
    public function edit($id)
    {
        $EditBook=Book::find($id);

        return view('dashprocess.edit',compact('EditBook'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */

      //  هذي دالة حفظ البيانات بعد التعديل عليها
    public function update(Request $request,  $id)
    {
        $updateBook = Book::find($id);

        $updateBook->name = $request->name;
        $updateBook->price = $request->price;

        $img = $request->img;

        if ($img) {
            $imgName = time() . '.' . $img->getClientOriginalExtension();

            $request->img->move('imgbook', $imgName);

            $updateBook->img = $imgName;
        }

        $updateBook->save();

        return redirect()->route('b.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */

     //  هذي دالة الحذف تحذف البيانات عند ضغط زر الحذف مع ارجع رساله انه تم الحذف
    public function destroy($id)
    {
        Book::destroy($id);
        return redirect()->back()->with('message', 'Deleted Successfully');
    }
}
