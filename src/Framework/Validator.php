<?php
declare(strict_types=1);

namespace movies\Framework;

class Validator
{
    public function validateSearchText(string $searchText): bool
    {
        $isValid = false;
        if (preg_match('/^\w+/', $searchText) > 0) {
            $isValid = true;
        }
       return $isValid;
    }
}