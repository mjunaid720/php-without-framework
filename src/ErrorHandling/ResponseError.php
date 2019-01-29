<?php

namespace App\ErrorHandling;

/**
 * Class ResponseError
 */
class ResponseError
{
    const STATUS_INTERNAL_SERVER_ERROR = 500;
    const STATUS_UNPROCESSABLE_ENTITY = 422;
    const STATUS_REQUIED_FIELDS = 401;

    private $status;
    private $messages;

    public function ResponseError($status, $message = null)
    {
        $this->status = $status;

        if (isset($message)) {
            $this->messages = array(
                'general' => array($message)
            );
        } else {
            $this->messages = array();
        }
    }

    public function addMessage($key, $message)
    {
        if (!isset($message)) {
            $message = $key;
            $key = 'general';
        }

        if (!isset($this->messages[$key])) {
            $this->messages[$key] = array();
        }

        $this->messages[$key][] = $message;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function getStatus()
    {
        return $this->status;
    }
}