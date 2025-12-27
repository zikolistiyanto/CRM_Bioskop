<?php

namespace App\Http\Controllers;

use App\Models\Interaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InteractionController extends Controller
{
    /**
     * Tampilkan daftar interaksi
     */
    public function index()
    {
        $interactions = Interaction::with(['customer', 'user'])->latest()->paginate(10);
        return view('backend.interaction.index', compact('interactions'));
    }

    /**
     * Simpan interaksi baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'type_interaction' => 'required|string',
            'date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $validated['user_id'] = Auth::id();

        Interaction::create($validated);

        return redirect()->back()->with('success', 'Interaksi berhasil dicatat');
    }

    /**
     * Hapus interaksi
     */
    public function destroy($id)
    {
        $interaction = Interaction::findOrFail($id);
        $interaction->delete();

        return redirect()->back()->with('success', 'Interaksi berhasil dihapus');
    }
}
