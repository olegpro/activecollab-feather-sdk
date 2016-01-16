<?php

/*
 * This library is free software, and it is part of the Active Collab SDK project. Check LICENSE for details.
 *
 * (c) A51 doo <info@activecollab.com>
 */

namespace ActiveCollab\SDK\Exceptions;

use ActiveCollab\SDK\Exception;

/**
 * @package ActiveCollab\SDK\Exceptions
 */
class ListAccounts extends Exception
{
    /**
     * ListAccounts constructor.
     *
     * @param string          $message
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $previous = null)
    {
        if (empty($message)) {
            $message = 'Failed to list user accounts';
        }

        parent::__construct($message, 0, $previous);
    }
}
