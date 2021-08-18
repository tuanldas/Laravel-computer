<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputerController extends Controller
{
    protected $addition = null;
    protected $subtration = null;
    protected $multiplication = null;
    protected $calculate = null;
    protected $division = null;
    protected $number1 = null;
    protected $number2 = null;

    public function calculate(Request $request)
    {
        $this->number1 = $request->input('number1');
        $this->number2 = $request->input('number2');
        $this->addition = $request->input('addition');
        $this->subtration = $request->input('subtration');
        $this->multiplication = $request->input('multiplication');
        $this->division = $request->input('division');

        $this->computer();
        return view('computer', ['calculate' => $this->calculate]);
    }

    protected function computer()
    {
        if ($this->subtration !== null) {
            $calculate = $this->number1 - $this->number2;
        } elseif ($this->addition !== null) {
            $calculate = $this->number1 + $this->number2;
        } elseif ($this->multiplication !== null) {
            $calculate = $this->number1 * $this->number2;
        } else {
            $calculate = $this->number1 / $this->number2;
        }

        return $this->calculate = $calculate;
    }
}
