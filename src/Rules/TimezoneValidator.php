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
        $timezone_lists = (new Timezonelist())->toArray();

        foreach($timezone_lists as $timezone_list) {
            if (array_key_exists($value, $timezone_list)) {
                return true;
            }
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
