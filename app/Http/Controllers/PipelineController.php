<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PipelineController extends Controller
{
    public function index()
    {
        // Dummy data 
        $pipeline = [
            'Open' => [
                ['id'=>1,'title'=>'Gagal bayar','customer'=>'Andi'],
                ['id'=>2,'title'=>'Voucher error','customer'=>'Siti'],
            ],
            'In Progress' => [
                ['id'=>3,'title'=>'Refund belum masuk','customer'=>'Fajar'],
            ],
            'Resolved' => [
                ['id'=>4,'title'=>'Tiket tidak muncul','customer'=>'Rina'],
            ],
        ];

        return view('backend.pipeline.index', compact('pipeline'));
    }
}
