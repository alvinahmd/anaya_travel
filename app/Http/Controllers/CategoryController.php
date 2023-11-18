<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {

        return view('categories.create');
    }

    public function store(Request $request)
    {
        // Validasi input form di sini
        // Simpan data kategori ke database
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // Validasi input form di sini
        // Perbarui data kategori ke database
    }

    public function destroy(Category $category)
    {
        // Hapus kategori dari database
    }
}
