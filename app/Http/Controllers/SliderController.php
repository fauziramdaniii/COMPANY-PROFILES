<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Slider::create($input);

        Alert::success('Message', 'Data Berhasil Di Tambahkan');

        return redirect('/admin/sliders')->with('message', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $slider->update($input);

        Alert::success('Message', 'Data Berhasil Di Edit');

        return redirect('/admin/sliders')->with('message', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        Alert::success('Message', 'Data Berhasil Di Hapus');

        return redirect('/admin/sliders')->with('message', 'Data Berhasil Di Hapus');
    }
}
