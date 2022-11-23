<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{



    public function index()
    {
        return view('computers.index', [
            'computers' => Computer::all()
        ]);
    }


    public function create()
    {
        return view('computers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'computer-name' => ['required'],
            'computer-origin' => ['required'],
            'computer-price' => ['required', 'integer'],
        ]);

        $computer = new Computer();
        $computer->name = strip_tags($request->input('computer-name'));
        $computer->origin = strip_tags($request->input('computer-origin'));
        $computer->price = strip_tags($request->input('computer-price'));
        $computer->save();

        return redirect()->route('computers.index');
    }
    public function show($computer)
    {
        return view('computers.show', [
            'computer' => Computer::findOrFail($computer)
        ]);
    }
    public function edit($computer)
    {
        return view('computers.edit', [
            'computer' => Computer::findOrFail($computer)
        ]);
    }
    public function update(Request $request, $computer)
    {
        $request->validate([
            'computer-name' => ['required'],
            'computer-origin' => ['required'],
            'computer-price' => ['required', 'integer'],
        ]);

        $to_update = Computer::findOrFail($computer);
        $to_update->name = strip_tags($request->input('computer-name'));
        $to_update->origin = strip_tags($request->input('computer-origin'));
        $to_update->price = strip_tags($request->input('computer-price'));
        $to_update->save();

        return redirect()->route('computers.show', $computer);
    }
    public function destroy($computer)
    {
        $to_delelte = Computer::findOrFail($computer);
        $to_delelte->delete();
        return redirect()->route('computers.index');
    }
}
