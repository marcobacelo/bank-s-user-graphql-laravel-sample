<?php
namespace App\GraphQL\Queries;

use App\transactions;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class TransactionsQuery extends Query
{
    protected $attributes = [
        'name' => 'transactions',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('transactions'));
    }

    public function resolve($root, $args)
    {
        return transactions::all();
    }
}