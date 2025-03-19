<?php

namespace App\Helpers;

use App\Models\AppliedProject;
use App\Models\City;
use App\Models\Country;
use App\Models\Degree;
use App\Models\Interest;
use App\Models\Profession;
use App\Models\Qualification;
use App\Models\Religion;
use App\Models\Sect;
use App\Models\State;
use Faker\Core\Color;
use Illuminate\Support\Facades\Mail;

class CommonHelper
{
 static function get_applicant($id,$limit=10)
 {

    $response = AppliedProject::where('applied_projects.project_id', $id)
    ->join('users', 'users.id', '=', 'applied_projects.user_id')
    ->select('users.profile_image', 'applied_projects.user_id','users.name') // Include user_id in the select
    ->groupBy('applied_projects.user_id', 'users.profile_image','users.name') // Group by user_id and profile_image
    ->take($limit)
    ->get();
    return $response;
 }
}
