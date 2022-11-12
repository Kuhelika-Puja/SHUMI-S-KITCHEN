<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\User;
class CheckTrnCode implements Rule
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
        $user = User::where('code',$value)->get();
        foreach($user as $u){
            if($u->code == $value){
                return true;
            }
         
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Reference Code not found';
    }
}
