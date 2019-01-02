<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Kreait\Firebase;
use Kreait\Firebase\Factory;
// use Kreait\Firebase\Auth;
use Kreait\Firebase\ServiceAccount;
// use Kreait\Firebase\Database;
use Firebase\Auth\Token\Exception\InvalidToken;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function serviceAccount() {
    //     $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/kids-weekend-cc5b9c1e058a.json');
        
    //     $firebase = (new Factory)
    //         ->withServiceAccount($serviceAccount)
    //         ->withDatabaseUri('https://kids-weekend.firebaseio.com')
    //         ->create();
        
    //     return $firebase;
    // }
    
    public function setUser2()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/kids-weekend-cc5b9c1e058a.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            // ->withDatabaseUri('https://kids-weekend.firebaseio.com')
            ->create();

        $idTokenString = 'abcdefghijklmn';
        
        try {
            $verifiedIdToken = $firebase->getAuth()->verifyIdToken($idTokenString);
        } catch (InvalidToken $e) {
            echo $e->getMessage();
        }
        
        $uid = $verifiedIdToken->getClaim('sub');
        $user = $firebase->getAuth()->getUser($uid);
        
        //
        // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/kids-weekend-cc5b9c1e058a.json');
        // $firebase = (new Factory)
        //     ->withServiceAccount($serviceAccount)
        //     // ->withDatabaseUri('https://kids-weekend.firebaseio.com')
        //     ->create();

        // $auth = $firebase->getAuth();
        
        // $userProperties = [
        //     'email' => 'user@tanaka.com',
        //     'emailVerified' => false,
        //     'phoneNumber' => '+09080164826',
        //     'password' => 'secretPassword',
        //     'displayName' => 'John Doe',
        //     'photoUrl' => 'http://www.example.com/12345678/photo.png',
        //     'disabled' => false,
        // ];
        
        // $createdUser = $auth->createUser($userProperties);
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
