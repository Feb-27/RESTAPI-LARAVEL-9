<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::all();
        return response()->json([
            'data' => $review
        ]);

    }
    public function store(Request $request)
    {
        $review = Review::create([
            'menu_id' => $request->menu_id,
            'deskripsi' => $request->deskripsi,
        ]);
        return response()->json([
            'data' => $review
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return response()->json([
            'data' => $review
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
       
    }
}
