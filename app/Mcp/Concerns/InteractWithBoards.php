<?php

namespace App\Mcp\Concerns;

use App\Models\Board;
use App\Models\Task;
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

    protected function tasksQuery(?Authenticatable $user)
    {
        $query = Task::query();

        if ($user instanceof User) {
            $query->whereIn('board_id', $this->boardsQuery($user)->select('id'));
        }

        return $query;
    }
}
