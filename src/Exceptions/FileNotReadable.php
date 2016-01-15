<?php

/*
 * This file is part of the Active Collab project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

namespace ActiveCollab\SDK\Exceptions;

use ActiveCollab\SDK\Exception;

/**
 * HTTP API call exception.
 */
class FileNotReadable extends Exception
{
    /**
     * Construct the new exception instance.
     *
     * @param string $path
     */
    public function __construct($path)
    {
        if (empty($message)) {
            $message = "File '$path' is not readable";
        }

        parent::__construct($message);
    }
}
