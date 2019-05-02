
<?php

namespace Eddy\gusuarios\Http\Controllers;

use App\Http\Controllers\Controller;;
use Eddy\gusuarios\Models\Privilegio;


class PrivilegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privilegios = Privilegio::paginate();

        return view('privilegios.index', compact('privilegios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $privilegios = Privilegio::get();

        return view('privilegios.create', compact('privilegios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $privilegio = Privilegio::create($request->all());

        $privilegio->privilegios()->sync($request->get('privilegios'));

        return redirect()->route('privilegios.edit', $privilegio->id)
            ->with('info', 'Privilegio guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $privilegio = Privilegio::find($id);

        return view('privilegios.show', compact('privilegio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $privilegio = Privilegio::find($id);

        return view('privilegios.edit', compact('privilegio'));
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
        $privilegio = Privilegio::find($id);
        $privilegio->update($request->all());

        $privilegio->privilegios()->sync($request->get('privilegios'));

        return redirect()->route('privilegios.edit', $role->id)
            ->with('info', 'Privilegio guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $privilegio = Privilegio::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
