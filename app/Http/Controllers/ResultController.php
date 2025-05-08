<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Guid\Guid;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Result;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::all();
        return view('contents.result_list', compact('results'));
    }
    public function create($id)
    {
        $event = Event::findOrFail($id);


        if (!$event) {
            abort(404, 'Event not found');
        }

        return view('contents.result_create', compact('event'));
    }


    public function store(Request $request, $id)
    {
        $event = Event::find($id);


        $result_id = Guid::uuid4()->toString();

        $result = new Result();
        $result->result_id = $result_id;
        $result->event_id = $event->event_id;
        $result->content = $request->content;

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagePaths = [];

            foreach ($images as $image) {
                $path = $image->store('public/images');
                $imagePaths[] = $path;
            }

            $result->images = implode(',', $imagePaths);
        }

        $result->save();

        return redirect()->route('result.list', $event->event_id)->with('success', 'Kết quả đã được tạo!');
    }

    public function destroy($id)
    {
        $result = Result::findOrFail($id);
        $eventId = $result->event_id;
        $result->delete();
        return redirect()->route('result.list', $eventId)->with('success', 'Kết quả đã được xóa thành công!');
    }
    public function edit($id)
    {
        $result = Result::findOrFail($id);
        return view('contents.result_edit', compact('result'));
    }
    public function update(Request $request, $id)
{
    $result = Result::findOrFail($id);

    $result->content = $request->content;

    if ($request->hasFile('images')) {
        // Xử lý ảnh mới (tương tự như trong phương thức store)
        $images = $request->file('images');
        $imagePaths = [];

        foreach ($images as $image) {
            $path = $image->store('public/images');
            $imagePaths[] = $path;
        }

        $result->images = implode(',', $imagePaths);
    }

    $result->save();

    return redirect()->route('result.list')->with('success', 'Kết quả đã được cập nhật thành công!');
}
}
