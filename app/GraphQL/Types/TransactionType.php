<?php

namespace App\GraphQL\Types;

use App\transactions;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TransactionType extends GraphQLType
{
    protected $attributes = [
        'name' => 'balance',
        'description' => 'Lorem Ypsum',
        'model' => transactions::class
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of a user'
            ],
            'balance' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The balance of a user'
            ],
        ];
    }
}