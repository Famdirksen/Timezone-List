<?php

namespace Famdirksen\Timezonelist\Rules;

use Famdirksen\Timezonelist\Timezonelist;
use Illuminate\Contracts\Validation\Rule;

class TimezoneValidator implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $timezone_list = Timezonelist::toArray();

        dd($timezone_list);

        if(in_array($value, $timezone_list)) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The selected timezone is not valid.';
    }
}
