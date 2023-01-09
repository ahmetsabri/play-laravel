<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laudis\Neo4j\Authentication\Authenticate;
use Laudis\Neo4j\ClientBuilder;
use Laudis\Neo4j\Contracts\TransactionInterface;

class NativeNeoController extends Controller
{
    protected $client;

    public function __invoke()
    {

        $auth = Authenticate::basic('neo4j', 'password');

        $client = ClientBuilder::create()
        ->withDriver('neo4j', 'neo4j://localhost:7687?database=world', $auth)
        ->build();

        // dd($client);
        $results = $client->run('MATCH (p:Family{fname:"mando family"}) RETURN p.fname as name, p');


        foreach (($results) as $result) {
            $node = $result->get('p');

            // dd($node);
            $properties =collect(collect($node)['properties'])->toArray();

            dd($properties['fname'] ?? 'no');
            // dd($col);
            // dd($node->getProperty('fname'));
            $properties = 1;

            dd($node->getId());

        }
    }

    public function store(Request $request)
    {
            $request->validate([
                'name' => ['required', 'string', 'max:5']
            ]);
    }
}
