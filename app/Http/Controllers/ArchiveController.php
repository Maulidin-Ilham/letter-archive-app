<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Category;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $archives = Archive::all();
        return view("pages.archive.index", compact("archives"));
    }

    public function create()
    {
        $categories = Category::get(["id", "name"]);
        return view("pages.archive.create", compact("categories"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'letter_number'   => 'required|string|max:255',
            'title'           => 'required|string',
            'category_id'     => 'required|exists:categories,id',
            'file'            => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $filePath = null;
        $originalName = null;

        if ($request->hasFile('file')) {
            // Simpan file ke storage/app/public/archives
            $filePath = $request->file('file')->store('archives', 'public');

            // Simpan juga nama asli (opsional, kalau lo mau tampilkan di UI)
            $originalName = $request->file('file')->getClientOriginalName();
        }

        Archive::create([
            'letter_number'  => $request->letter_number,
            'title'          => $request->title,
            'category_id'    => $request->category_id,
            'file'           => $filePath,        // ✅ path di storage/public
            'original_name'  => $originalName,    // opsional, butuh kolom di DB
        ]);

        return redirect()->route("archives.index");
    }

    public function viewPdf($id)
    {
        $archive = Archive::findOrFail($id);

        if ($archive->file && Storage::disk('public')->exists($archive->file)) {
            $fileUrl = asset('storage/' . $archive->file);
            return view('pages.archive.view', compact('archive', 'fileUrl'));
        }

        abort(404, 'File PDF tidak ditemukan');
    }

    public function downloadPdf($id)
    {
        $archive = Archive::findOrFail($id);

        if ($archive->file && Storage::disk('public')->exists($archive->file)) {
            $filePath = storage_path('app/public/' . $archive->file);
            $fileName = $archive->letter_number . '.pdf'; // Nama download sesuai nomor surat

            return response()->download($filePath, $fileName, [
                'Content-Type' => 'application/pdf',
            ]);
        }

        abort(404, 'File PDF tidak ditemukan');
    }
}
