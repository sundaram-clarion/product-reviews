<?php
namespace App\Services\Api\Http\Controllers;

use Illuminate\Http\Request;
use Lucid\Foundation\Http\Controller;
use App\Services\Api\Features\GetReviewsFeature;

class ReviewController extends Controller
{
	/**
	 * @SWG\Get(
	 *     path="/api/product/reviews",
	 *     description="Return product reviews.",
	 *     @SWG\Response(
	 *         response=200,
	 *         description="OK",
	 *     ),
	 *     @SWG\Response(
	 *         response=422,
	 *         description="Missing Data"
	 *     )
	 * )
	 */
    public function index()
    {
        return $this->serve(GetReviewsFeature::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
