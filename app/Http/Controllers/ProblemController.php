<?php

namespace App\Http\Controllers;

use App\Actions\GenerateXAction;
use App\Actions\HistogramAction;
use Illuminate\Contracts\View\View;
use App\Http\Requests\GenerateXRequest;
use App\Http\Requests\HistogramRequest;

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

    public function histogram(): View
    {
        return view('problems.histogram');
    }

    public function histogramGenerate(HistogramAction $histogramAction, HistogramRequest $request): View
    {
        $histogram = collect($histogramAction->generate($request->validated()));

        return view('problems.histogram', compact('histogram'));
    }
}
