<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;



use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Helper
{

    // if true then the button will be visible
    public static function is_applied_for_scholarship(int $scholarship_id)
    {
        if(Auth::check())
        {
            $user = User::find(auth()->user()->id);
            if($user->hasPermissionTo('apply-scholarship'))
            {
                $student = $user->student_information;
                $applied_scholarships = $student->scholarships->where('id',$scholarship_id)->count();
                if(!$applied_scholarships)
                    return true;
                else
                    return false;

            }else if($user->hasRole('TENANT'))
                return false;
            else {
                return true;
            }

        }else
            return true;
    }
}
