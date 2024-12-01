<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MrShan0\PHPFirestore\FirestoreClient;

// Optional, depending on your usage
use MrShan0\PHPFirestore\Fields\FirestoreTimestamp;
use MrShan0\PHPFirestore\Fields\FirestoreArray;
use MrShan0\PHPFirestore\Fields\FirestoreBytes;
use MrShan0\PHPFirestore\Fields\FirestoreGeoPoint;
use MrShan0\PHPFirestore\Fields\FirestoreObject;
use MrShan0\PHPFirestore\Fields\FirestoreReference;
use MrShan0\PHPFirestore\Attributes\FirestoreDeleteAttribute;

class FirestoreController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $firestoreClient = new FirestoreClient(env('FIREBASE_PROJECT_ID'), env('FIRESTORE_API_KEY'), [
            'database' => '(default)',
        ]);


        $collection = 'topics';

        $collections = $firestoreClient->listDocuments($collection, [
            'pageSize' => 9999,
            // 'pageToken' => 'nextpagetoken'
            'orderBy' => 'title'

        ]);



        dd($collections['documents']);
    }
}
