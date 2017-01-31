<?php
/**
 * reamaze-sdk-api
 *
 * @author Mikus Rozenbergs <mikus.rozenbergs@gmail.com>
 */

namespace marislazda\Reamaze\Params\Contacts;

use marislazda\Reamaze\Params\BaseParams;

/**
 * Class UpdateParams
 *
 * @package marislazda\Reamaze\Params\Contacts
 * @see     https://www.reamaze.com/api/put_contacts
 */
class UpdateParams extends BaseParams
{
    /**
     * @var string contact name
     */
    protected $name  = '';

    /**
     * @var array custom attributes
     */
    protected $data  = [];

    public function sanitizeName($value)
    {
        return (string)$value;
    }

    public function sanitizeData($value)
    {
        return (array)$value;
    }

}