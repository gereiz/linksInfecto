<?php

namespace App\Http\Controllers\Topicos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use MrShan0\PHPFirestore\FirestoreClient;

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
            $content = $topico->get('content');

            // Criar um objeto associativo para cada tópico
            $topicoObj = (object) [
                'title' => '<a href="/topico/' . $id . '" class="text-red-600 font-semibold">'.$title.'</a>',
                'id' => $id,
                'id_subcategory' => $id_subcategory,
                'content' => $content,
            ];

            // Adicionar o objeto ao array principal
            $topicosArray[] = $topicoObj;
        }


        return Inertia::render('Topicos/Topicos', compact('topicos', 'topicosArray'));
    }

    public function getTopico($id)
    {
        $topico = $this->connection->getDocument('topics/'.$id);

        $topicoObj = (object) [
            $title = $topico->get('title'),
            $id = substr($topico->getRelativeName(), 8),
            $id_subcategory = $topico->get('id_subcategory')->getData(),
            $content = str_replace('font-family: verdana, geneva, sans-serif;', '', $topico->get('content')),

        ];

        return Inertia::render('Topicos/SingleTopico', compact('topicoObj'));
    }

}
