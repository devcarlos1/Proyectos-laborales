<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function delete(Request $request): RedirectResponse
    {
        $table = $request->model;
        $model = 'App\\Models\\'.ucfirst($table);
        $model::find($request->id)->delete();
        return redirect()->back();
    }

    public function change(Request $request): RedirectResponse
    {
        $table = $request->model;
        $model = 'App\\Models\\'.ucfirst($table);
        $model = $model::findOrFail($request->id);
        $this->setDataToModel($model, $request);
        $model->save();
        return redirect()->back();
    }

    public function add(Request $request): RedirectResponse
    {
        $table = $request->model;
        $model = 'App\\Models\\'.ucfirst($table);
        $model = $model::make();
        $this->setDataToModel($model, $request);
        $model->save();
        return redirect()->back();
    }

    private function setDataToModel(Model $model, Request $request)
    {
        foreach ($request->fields as $field) {
            if ($request->has($field)) {
                if ($field === 'image') {
                    if ($model->$field && file_exists(public_path($model->$field)))
                        unlink(public_path($model->$field));
                    $image = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('uploads'), $imageName);
                    $model->$field = '/uploads/'.$imageName;
                } else {
                    $model->$field = $request->input($field);
                }
            }
        }
    }
}
