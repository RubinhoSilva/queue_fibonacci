<?php

namespace App\Http\Controllers;

use App\Http\Requests\Fibonacci\StartRequest;
use App\Http\Resources\FibonacciIndexResource;
use App\Http\Resources\FibonacciResource;
use App\Http\Services\FibonacciService;
use Exception;

class FibonacciController extends Controller
{

    protected FibonacciService $fibonacciService;

    public function __construct(FibonacciService $fibonacciService)
    {
        $this->fibonacciService = $fibonacciService;
    }

    public function start(StartRequest $request)
    {
        try {
            return new FibonacciResource($this->fibonacciService->start($request->all()));
        } catch (Exception $e) {
            info($e->getMessage());
            abort(500);
        }
    }

    public function index()
    {
        try {
            return new FibonacciIndexResource($this->fibonacciService->index());
        } catch (Exception $e) {
            info($e->getMessage());
            abort(500);
        }
    }

    public function get($id)
    {
        try {
            return new FibonacciResource($this->fibonacciService->get($id));
        } catch (Exception $e) {
            info($e->getMessage());
            abort(500);
        }
    }
}
