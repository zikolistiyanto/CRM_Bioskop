<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class PipelineController extends Controller
{
    /**
     * Menampilkan visualisasi pipeline berdasarkan stage pada Lead
     */
    public function index()
    {
        $leads = Lead::with('customer')->get();

        // Mengelompokkan lead berdasarkan stage
        $pipeline = $leads->groupBy('stage');

        return view('backend.pipeline.index', compact('pipeline'));
    }
}
