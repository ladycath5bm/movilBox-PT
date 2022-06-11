<?php

namespace App\Http\Controllers;

use App\Actions\GenerateXAction;
use Illuminate\Contracts\View\View;
use App\Http\Requests\GenerateXRequest;

class ProblemController extends Controller
{
    public function thex(): View
    {
        return view('problems.thex');
    }

    public function thexGenerate(GenerateXRequest $request)
    {
        $dimention = $request->validated();
        $arrayX = (new GenerateXAction())->generate($dimention['dimention']);
        return view('problems.thex', compact('arrayX'));
    }
}
