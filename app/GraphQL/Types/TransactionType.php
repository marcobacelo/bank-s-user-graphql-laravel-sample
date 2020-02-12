<?php
namespace App\GraphQL\Types;

use App\Transaction;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TransactionType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Transaction',
        'description' => 'Details about a bank account',
        'model' => Transaction::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the balance',
            ],
            'balance' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The balance of the bank account',
            ]
        ];
    }
}