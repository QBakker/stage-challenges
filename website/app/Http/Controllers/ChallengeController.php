<?php

namespace App\Http\Controllers;

use App\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $challenges = Challenge::all();

        return view('challenge.index')->with([
            'challenges' => $challenges,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show(Challenge $challenge, $solution = null)
    {
        return view('challenge.show')->with([
            'solution' => $solution,
            'challenge' => $challenge,
        ]);
    }

    public function solveChallenge(Challenge $challenge)
    {
        switch ($challenge->id) {
            case 1:
                return $this->textCleanup($challenge);
                break;
            case 2:
                return $this->fizzBuzz($challenge);
                break;
            default:
                abort(404);
                break;
        }
    }

    private function textCleanup(Challenge $challenge)
    {
        $solution = preg_replace('/[^a-z A-Z]/', ' ', $challenge->assignment);

        return $this->show($challenge, $solution);
    }

    private function fizzBuzz(Challenge $challenge)
    {
        $solution = [];

        $fizz = 3;
        $buzz = 5;

        for ($index = 1; $index <= 100; $index++) {

            $count = $index;
            if ($count % $fizz === 0 && $count % $buzz != 0) {
                $count = 'Fizz at (' . $count . ')';
            } elseif ($count % $buzz === 0 && $count % $fizz != 0) {
                $count = 'Buzz at (' . $count . ')';
            } elseif ($count % $fizz === 0 && $count % $buzz === 0) {
                $count = 'Fizz Buzz at (' . $count . ')';
            }
            $solution[$index] = $count;
        };

        return $this->show($challenge, $solution);
    }
}
