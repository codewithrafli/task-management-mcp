<?php

namespace App\Mcp\Servers;

use App\Mcp\Tools\CreateBoardTool;
use App\Mcp\Tools\CreateTaskTool;
use App\Mcp\Tools\UpdateTaskStatusTool;
use Laravel\Mcp\Server;
use Laravel\Mcp\Server\Attributes\Instructions;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Version;

#[Name('Task Management Server')]
#[Version('0.1.0')]
#[Instructions('This server is responsible for managing tasks, including creating, updating, and deleting tasks. It provides endpoints for task management operations and ensures proper validation and authorization.')]
class TaskManagementServer extends Server
{
    protected array $tools = [
        CreateBoardTool::class,
        CreateTaskTool::class,
        UpdateTaskStatusTool::class
    ];

    protected array $resources = [
        //
    ];

    protected array $prompts = [
        //
    ];
}
