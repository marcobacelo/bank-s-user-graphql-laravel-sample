<?php

namespace App\GraphQL\Queries;

use App\transactions;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class WineQuery extends Query
{
    protected $attributes = [
        'name' => 'transaction',
    ];

    public function type(): Type
    {
        return GraphQL::type('transaction');
    }

    public function args():array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return transactions::findOrFail($args['id']);
    }
}