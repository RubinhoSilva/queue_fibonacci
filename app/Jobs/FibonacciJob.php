<?php

namespace App\Jobs;

use App\Models\Fibonacci;
use App\Utils\Fibonacci\FibonacciInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FibonacciJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The podcast instance.
     *
     * @var \App\Models\Fibonacci
     */
    public $fibonacci;

    /**
     * Create a new job instance.
     *
     * @param Fibonacci $fibonacci
     */
    public function __construct(Fibonacci $fibonacci)
    {
        $this->fibonacci = $fibonacci;
    }

    /**
     * Execute the job.
     *
     * @param FibonacciInterface $fibonacci
     * @return void
     */
    public function handle(FibonacciInterface $fibonacci)
    {
        $this->fibonacci->started = now();
        $this->fibonacci->value = $fibonacci->calculate($this->fibonacci->order);
        $this->fibonacci->finished = now();
        $this->fibonacci->save();
    }

}
