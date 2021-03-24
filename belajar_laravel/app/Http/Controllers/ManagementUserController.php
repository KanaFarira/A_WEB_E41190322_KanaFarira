<?php
namespace App\Http\Controllers;

use illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        //return "haii ini method index, dalam controller management";
   return "method ini nantinya digunakan untuk mengambil semua data user";
    }

    public function create()
    {
        return "method ini di gunakan untuk menampilkan menampilkan form untuk menambahkan data user";
    }

    public function store(Request $request)
    {
        return "method ini digunakan untuk menciptakan data user baru";
    }

    public function show($id)
    {
        return "method ini akan digunakan untuk mengambil satu data user dengan id =" .$id;
    }

    public function edit($id)
    {
        return "method ini digunakan untuk menampilkan form untuk mengubah data edit dengan id =" .$id;
    }

    public function update(Request $request, $id)
    {
        return "method ini digunakan untuk mengubah data user dengan id =" . $id;
    }

    public function destroy($id)
    {
        return "method ini digunakan untuk menghapus data user dengan id = " .$id;
    }

}