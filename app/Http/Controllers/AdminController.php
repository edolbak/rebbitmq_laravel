<?php

namespace App\Http\Controllers;

use App\Jobs\FirstAdminJob;
use App\Models\User;
use Illuminate\Database\MySqlConnection;
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
        $user = new User();

        $rrr = 1;
        $conn = $user->testConnection();
        $pdo = $conn instanceof MySqlConnection?$conn->getPdo():null;
        $oneUserSt = $pdo->prepare('SELECT * FROM `users`');
        $oneUser = $oneUserSt->fetchAll();

        dd($pdo->query('SELECT * FROM `users`')->fetchAll());

        // TODO-vardump VAR_DUMP
        die(var_dump(phpinfo()));


        $json_r = json_encode([
            'controller' => __CLASS__,
            'method' => $request->method(),
            'host' => $request->host(),
            'data' => [
                'aaa' => 'AAA',
                'bbb' => 'BBB']
        ]);


        return $json_r;
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
//        $host = "localhost";
//        $user = 'evd';
//        $pass = 'qazwsxed';
//        $db = 'k8s_DB';


//        $conn = new \mysqli($host, $user, $pass, $db, $port);
//        // TODO-vardump VAR_DUMP
//        die(var_dump($conn));


//        try {
//            $dbh = new \PDO("mysql:host=$host:$port;dbname=$db", $user, $pass);
//            $sth = $dbh->query('show tables')->fetchAll();
//            // TODO-vardump VAR_DUMP
//            die(var_dump($sth));
//        }catch (\Exception $e){
//            // TODO-vardump VAR_DUMP
//            die(var_dump($e->getMessage()));
//
//        }



        $user = User::find($id);
//        $user = new User();

//        $conn = $user->testConnection();
//        // TODO-vardump VAR_DUMP
//        die(var_dump($conn));


        // TODO-vardump VAR_DUMP
        die(var_dump($user->name));


        if($user instanceof User) {
//
//            FirstAdminJob::dispatch($user)->delay(10);


            return json_encode([
                'ID'=>$id,
                'controller'=>__CLASS__,
                'method'=>$request->method(),
                'host'=>$request->host(),
                'data'=>[
//                    'UserName'=>$user->name,
//                    'UserEmail'=>$user->email,
                    'UserName'=>'UN',
                    'UserEmail'=>'UE',
                    ]
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
