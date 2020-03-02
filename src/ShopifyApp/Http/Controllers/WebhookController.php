<?php

namespace Osiset\ShopifyApp\Controllers;

use Illuminate\Routing\Controller;
use Osiset\ShopifyApp\Traits\WebhookController as WebhookControllerTrait;

/**
 * Responsible for handling incoming webhook requests.
 */
class WebhookController extends Controller
{
    use WebhookControllerTrait;
}
