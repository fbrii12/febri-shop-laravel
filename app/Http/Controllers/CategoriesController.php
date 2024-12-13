<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('categories.index', compact('categories'));
    }
    public function print(){
        $categories = Categories::all();
        $pdf = PDF::loadView('categories.print', compact('categories'));
        return $pdf->download('categories.pdf');
    }
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'game_name' => 'required|max:255',
            'categories_name' => 'required|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = $request->file('photo')->store('photos', 'public');

        Categories::create([
            'game_name' => $request->game_name,
            'categories_name' => $request->categories_name,
            'photo' => $photoPath,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(Categories $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Categories $category)
    {
        $request->validate([
            'game_name' => 'required|max:255',
            'categories_name' => 'required|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            // Hapus foto lama
            Storage::disk('public')->delete($category->photo);

            // Upload foto baru
            $photoPath = $request->file('photo')->store('photos', 'public');
            $category->photo = $photoPath;
        }

        $category->update($request->only('game_name', 'categories_name'));

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }


    public function destroy(Categories $category)
    {
        Storage::disk('public')->delete($category->photo);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
