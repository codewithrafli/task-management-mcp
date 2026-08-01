<?php

namespace App\Mcp\Concerns;

use App\Models\Board;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;

trait InteractWithBoards
{
    protected function boardsQuery(?Authenticatable $user)
    {
        $query = Board::query();

        if ($user instanceof User) {
            $query->accessibleBy($user);
        }

        return $query;
    }
}
