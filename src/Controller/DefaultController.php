<?php

namespace App\Controller;

use App\Controller\Base;

/**
 * Default Controller.
 */
class DefaultController extends Base
{
    /**
     * Get Help.
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return array
     */
    public function getHelp($request, $response, $args)
    {
        $this->setParams($request, $response, $args);
        $message = ['help' => [
            'tasks' => 'Ver Tareas: /tasks',
            'users' => 'Ver Usuarios: /users',
            'version' => 'Ver Version: /version',
        ]];

        return $this->jsonResponse('success', $message, 200);
    }

    /**
     * Get Api Version.
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return array
     */
    public function getVersion($request, $response, $args)
    {
        $this->setParams($request, $response, $args);
        $version = ['api_version' => self::API_VERSION];

        return $this->jsonResponse('success', $version, 200);
    }
}