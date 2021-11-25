<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firebase = (new Factory)
        ->withServiceAccount(__DIR__.'/encuestasi-29c06-firebase-adminsdk-sx19b-6825c152c3.json')
        ->withDatabaseUri('https://encuestasi-29c06-default-rtdb.firebaseio.com/');

        $database = $firebase->createDatabase();
    }

}