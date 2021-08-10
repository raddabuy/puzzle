<?php

namespace App\Http\Controllers\API;

use App\Constants\ErrorConst;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\PuzzleStoreRequest;
use App\Models\Puzzle;
use Illuminate\Http\Request;

class PuzzleController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puzzles = Puzzle::all();
        return $this->responseOk($puzzles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PuzzleStoreRequest $request)
    {
        $puzzle = Puzzle::create($request->all());
        return $this->responseOk($puzzle);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puzzle = Puzzle::find($id);
        if (empty($puzzle)) {
            return $this->sendWithErrorCode(ErrorConst::NOT_FOUND_PUZZLE);
        }
        return $this->responseOk($puzzle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PuzzleStoreRequest $request, $id)
    {
        $puzzle = Puzzle::find($id);
        if (empty($puzzle)) {
            return $this->sendWithErrorCode(ErrorConst::NOT_FOUND_PUZZLE);
        }
        $puzzle->update($request->all());
        return $this->responseOk($puzzle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $puzzle = Puzzle::find($id);
        if (empty($puzzle)) {
            return $this->sendWithErrorCode(ErrorConst::NOT_FOUND_PUZZLE);
        }
        $puzzle->delete();
        return $this->responseOk('deleted');
    }
}
