<?php
/**
 * reamaze-sdk-api
 *
 * @author Mikus Rozenbergs <mikus.rozenbergs@gmail.com>
 */

namespace marislazda\Reamaze\Api;

use marislazda\Reamaze\BaseApi;
use marislazda\Reamaze\Params\Messages\CreateParams;
use marislazda\Reamaze\Params\Messages\RetrieveParams;

class Messages extends BaseApi
{
    public function retrieve(RetrieveParams $params = null)
    {
        return $this->api->call(
            ($params->slug ? 'conversations/' . $params->slug . '/messages' : 'messages'),
            'GET',
            ['filter' => $params->filter, 'page' => $params->page, 'visibility' => $params->visibility]
        );
    }

    public function create($slug, CreateParams $params)
    {
        return $this->api->call('conversations/' . $slug . '/messages', 'POST', ['message' => $params->toArray()]);
    }

}