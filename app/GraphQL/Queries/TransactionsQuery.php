<?php
namespace App\GraphQL\Queries;

use App\Transaction;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class WinesQuery extends Query
{
    protected $attributes = [
        'name' => 'transactions',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Transaction'));
    }

    public function resolve($root, $args)
    {
        return Transaction::all();
    }
}