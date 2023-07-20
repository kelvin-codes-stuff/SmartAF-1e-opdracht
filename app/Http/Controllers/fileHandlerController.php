<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fileHandle;
use Illuminate\Support\Facades\Storage;

class fileHandlerController extends Controller
{
    public function getUploadFile()
    {
        return view('files.file_upload');
    }

    public function postUploadFile(Request $request)
    {
        $validated = $request->validate([
            'picture' => 'required',
            'description' => 'required',
            'piority' => 'required'
        ]);

        $newImageName = time().'.'.$request->picture->extension();
        $request->picture->move(public_path('images'), $newImageName);
        
        fileHandle::create([
            'file_name' => $newImageName,
            'file_description' => $validated['description'],
            'file_piority' => $validated['piority']
        ]);

        return redirect('/')->with('success', "Je hebt je bestand geuploaded! Het is geuploaded als $newImageName");
    }

    public function deleteFile(Request $request)
    {
        fileHandle::where('file_name', $request->fileName)->firstOrFail()->delete();
        Storage::delete('/images/'.$request->fileName);
        return redirect('/');
    }

    public function editFile(Request $request)
    {
        return view('files.edit_file', ['url' => $request->imgName, 'img_data' => fileHandle::where('file_name', $request->imgName)->firstOrFail()]);
    }

    public function postEditFile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'piority' => 'required',
        ]);

        $imgDb = fileHandle::where('file_name', $request->imgName)->firstOrFail();
        $imgDb->update([
            'file_name' => $validated['name'],
            'file_description' => $validated['description'],
            'file_piority' => $validated['piority']
        ]);
        rename(base_path().'/public/images/'.$request->imgName, base_path().'/public/images/'.$validated['name']);

        return redirect('/bewerk/'. $validated['name']);
    }

    public function viewFile(Request $request)
    {
        return view('files.view', ['url' => $request->imgName, 'img_data' => fileHandle::where('file_name', $request->imgName)->firstOrFail()]);
    }
}
