<?php


namespace App\Http\Controllers;

use App\Geofence;
use Illuminate\Http\Request;

class GeofenceController extends Controller
{

    public function create() 
    {

       //return $req->input();

        return view('geofence.create_geofence');
    }

    public function insert(Request $req) 
    {
        var_dump($req->input());
        // $geofnc = new Geofences();
        // $geofnc->name = $req->name;
        // $geofnc->radius = $req->radius;
        // $geofnc->save();



        //DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
    }

    public function check() 
    {
        return view('geofence.check_geofence');
    }

    public function view() 
    {
        return view('geofence.view_geofence');
    }



    //
    // public function index()
    // {
    //     return view('geofence.list', [
    //         'geofences' => Geofence::all(),       
    //     ]);
    // }

    // public function view($id)
    // {
    //     // TODO do validation

    //     return view('geofence.view', [
    //         'geofence' => Geofence::findOrFail($id),
    //     ]);
    // }

    // public function edit()
    // {
    //     // TODO do validation

    //     // return view('geofence.edit', [
    //     //     'geofence' => Geofence::findOrFail($id),
    //     // ]);
    //     echo "U r in edit page'";
    // }
}
