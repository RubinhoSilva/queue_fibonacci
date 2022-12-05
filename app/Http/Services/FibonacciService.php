<?php

namespace App\Http\Services;

use App\Jobs\FibonacciJob;
use App\Models\Fibonacci;

class FibonacciService
{
    public function start(array $data)
    {
        $fibonacci = new Fibonacci($data);
        $fibonacci->save();

        FibonacciJob::dispatch($fibonacci)
            ->delay(now()->addSeconds(10));

        return $fibonacci;

    }

    public function index()
    {
        return Fibonacci::all();
    }

    public function get($id)
    {
        return Fibonacci::findOrFail($id);
    }


}
