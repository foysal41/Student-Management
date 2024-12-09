<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Course;


class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::pluck('name', 'id');
        return view('batches.create', compact('courses'));

        /*

        1. pluck ব্যবহার করে আপনি Course মডেল থেকে id ও name নিয়ে আসছেন।
        2. তারপর, সেই courses ডেটাকে batches.create ভিউতে পাঠাচ্ছেন।

        3. ভিউ ফাইলে, আপনি এই courses ডেটা দিয়ে ড্রপডাউন তৈরি করছেন, যাতে ব্যবহারকারী একটি কোর্স নির্বাচন করতে পারে।

        */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message', 'Batches Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batches = Batch::find($id);
        return view('batches.show')->with('batches', $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batches = Batch::find($id);
        return view('batches.edit')->with('batches', $batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batches = Batch::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('batches')->with('flash_message', 'Batches Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message', 'Batches deleted!');
    }
}
