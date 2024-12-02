<?php

namespace App\Http\Controllers\Api\Topicos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use MrShan0\PHPFirestore\FirestoreClient;
use stdClass;

class TopicoController extends Controller
{
    private $connection;

    public function __construct()
    {
        $this->connection = new FirestoreClient(env('FIREBASE_PROJECT_ID'), env('FIRESTORE_API_KEY'), [
            'database' => '(default)',
        ]);
    }


    public function index()
    {
        $topicos = $this->connection->listDocuments('topics', ['pageSize' => 9999, 'orderBy' => 'title'])['documents'];

        // dd($topicos);
        // Converta os documentos para arrays
        $topicosArray = [];

        foreach ($topicos as $topico) {
            $title = $topico->get('title');
            $id = substr($topico->getRelativeName(), 8);
            $id_subcategory = $topico->get('id_subcategory')->getData();
            // $content = $topico->get('content');

            // Criar um objeto associativo para cada tópico
            $topicoObj = (object) [
                'title' => $title,
                'id' => $id,
                'id_subcategory' => $id_subcategory,
                // 'content' => $content,
            ];

            // Adicionar o objeto ao array principal
            $topicosArray[] = $topicoObj;
        }


        return response()->json($topicosArray, 200);
    }

    public function getTopico(Request $request)
    {

        $id = $request->id;
        $topico = $this->connection->getDocument('topics/'.$id);


        $topicoObj = new stdClass;

        $topicoObj->title = $topico->get('title');
        $topicoObj->id = substr($topico->getRelativeName(), 8);
        $topicoObj->id_subcategory = $topico->get('id_subcategory')->getData();
        $topicoObj->content = $topico->get('content');



        return response()->json($topicoObj, 200);
    }

}
