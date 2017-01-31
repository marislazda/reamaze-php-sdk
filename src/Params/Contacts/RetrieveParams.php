<?php
/**
 * reamaze-sdk-api
 *
 * @author Mikus Rozenbergs <mikus.rozenbergs@gmail.com>
 */

namespace marislazda\Reamaze\Params\Contacts;

use marislazda\Reamaze\Params\BaseParams;

/**
 * Class RetrieveParams
 *
 * @package marislazda\Reamaze\Params\Contacts
 * @see     https://www.reamaze.com/api/get_contacts
 */
class RetrieveParams extends BaseParams
{
    /**
     * @var int
     */
    protected $page = 1;

    /**
     * @var string with any string will search over contacts by name or email
     */
    protected $q = '';

    public function sanitizeQ($value)
    {
        return (string)$value;
    }

}