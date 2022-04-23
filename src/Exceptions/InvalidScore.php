<?php

namespace Laraveles\Exceptions;

// namespace App\Exceptions;

use Exception;

class InvalidScore extends Exception
{
    public function render($from, $to)
    {
        return response()->json([
            trans('rating.InvalidScore', [
                'from' => $this->from,
                'to' => $this->to,
            ]),
        ]);
    }
}
