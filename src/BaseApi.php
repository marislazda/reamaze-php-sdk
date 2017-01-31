<?php
/**
 * reamaze-sdk-api
 *
 * @author Mikus Rozenbergs <mikus.rozenbergs@gmail.com>
 */

namespace marislazda\Reamaze;

abstract class BaseApi
{
    protected $api;

    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}

