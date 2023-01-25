<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class TitleWordsCount implements InvokableRule
{
    /**
     * Indicates whether the rule should be implicit.
     *
     * @var bool
     */
    public $implicit = false;

    /**
     * Run the validation rule.§
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        if (str_word_count($value) <= 5) {
            $fail(':attribute must have at least 5 words');
        }
    }
}
