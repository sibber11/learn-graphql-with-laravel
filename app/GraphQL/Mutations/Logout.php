<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\User;
use Auth;

final readonly class Logout
{
    /** @param  array{}  $args */
    public function __invoke($_, array $args): ?User
    {
        // Plain Laravel: Auth::guard()
        // Laravel Sanctum: Auth::guard(Arr::first(config('sanctum.guard', 'web')))
        $guard = Auth::guard();

        $user = $guard->user();
        $guard->logout();

        return $user;
    }
}
