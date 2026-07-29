<?php

use App\Mcp\Servers\TaskManagementServer;
use Laravel\Mcp\Facades\Mcp;

// Mcp::web('/mcp/demo', \App\Mcp\Servers\PublicServer::class);

Mcp::oauthRoutes();

Mcp::web('/mcp/task-management', TaskManagementServer::class)->middleware('auth:api');
