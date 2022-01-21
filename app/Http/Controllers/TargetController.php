<?php

namespace App\Http\Controllers;

use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TargetController extends Controller
{
    /**
     * Display all available targets.
     */
    public function index() {
        // fetch targets
        $targets = Target::paginate(8);
        // display view
        return view('targets.index', [
            'targets'=>$targets
        ]);
    }

    /**
     * Delete target by id.
     */
    public function delete($id) {
        $target = Target::find($id);

        if ($target) {
            $target->delete();
        }

        return back();
    }

    /**
     * Display form to create a new target or edit an existing one.
     */
    public function form($id = null) {
        return view('targets.form', [
            'id'=>$id
        ]);
    }

    /**
     * Create new target or edit existing record.
     */
    public function store(Request $request, $id = null) {
        $validated = $request->validate([
            'name'=>'required|string',
            'url'=>'required|active_url'
        ]);

        Target::create($validated);

        return route('targets');
    }
}
