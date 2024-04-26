<?php

namespace App\Http\Controllers;

use App\Jobs\FirstAdminJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): string
    {
        return json_encode([
            'controller'=>__CLASS__,
            'method'=>$request->method(),
            'host'=>$request->host(),
            'data'=>[
                'aaa'=>'AAA',
                'bbb'=>'BBB']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id):string
    {
        $user = User::find($id);
        if($user instanceof User) {

            FirstAdminJob::dispatch($user)->delay(10);


            return json_encode([
                'ID'=>$id,
                'controller'=>__CLASS__,
                'method'=>$request->method(),
                'host'=>$request->host(),
                'data'=>[
                    'UserName'=>$user->name,
                    'UserEmail'=>$user->email,]
            ]);
        }else {
            return response('Wrong ID!!!', Response::HTTP_BAD_REQUEST);
        }


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
