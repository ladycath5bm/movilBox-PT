<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\MatrizAction;
use App\Actions\GenerateXAction;
use App\Actions\HistogramAction;
use Illuminate\Contracts\View\View;
use App\Http\Requests\MatrizRequest;
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

    public function matriz(): View
    {
        return view('problems.matriz');
    }

    public function matrizGenerate(MatrizAction $matrizAction, Request $request): View
    {   
        //dd($request->toArray());
        //$data = $request->validated();
        $matriz = $matrizAction->generate($request->toArray());
        return view('problems.matriz', compact('matriz'));
    }
}
