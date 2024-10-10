<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RfqApiController extends Controller
{
    public function index()
    {
        return response()->json(["ok" => true, 'rfqs'=>Rfq::all()], 200) ; // Get all RFQs
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'price' => 'required|numeric',
        // ]);

        // $rfq = Rfq::create($request->all()); // Create a new RFQ
        // return response()->json($rfq, 201);
    }

    public function show(Rfq $rfq)
    {
        return $rfq; // Get a single RFQ by ID
    }

    public function update(Request $request, Rfq $rfq)
    {
        // $request->validate([
        //     'title' => 'sometimes|required|string|max:255',
        //     'description' => 'sometimes|required|string',
        //     'price' => 'sometimes|required|numeric',
        // ]);

        // $rfq->update($request->all()); // Update an existing RFQ
        // return response()->json($rfq);
    }

    public function destroy(Rfq $rfq)
    {
        // $rfq->delete(); // Delete an RFQ
        // return response()->json(null, 204);
    }
}
