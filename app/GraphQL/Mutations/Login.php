<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\User;
use GraphQL\Error\Error;
use Illuminate\Support\Facades\Auth;

final readonly class Login
{
    /** @param  array{}  $args */
    public function __invoke($_, array $args): User
    {
        // Plain Laravel: Auth::guard()
        // Laravel Sanctum: Auth::guard(Arr::first(config('sanctum.guard')))
        $guard = Auth::guard();

        if( ! $guard->attempt($args)) {
            throw new Error('Invalid credentials.');
        }

        $user = $guard->user();
        assert($user instanceof User, 'Since we successfully logged in, this can no longer be `null`.');

        return $user;
    }
}
