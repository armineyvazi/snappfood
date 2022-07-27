<?php

namespace App\Http\Controllers\resturantowner;

use App\Models\User;
use App\Models\Archive;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArchivControllerRequest;

class ArchiveController extends Controller
{
    public function index(ArchivControllerRequest $request)
    {
        $date=$request->validated()['date']??'all';

        switch ($date) {

            case 'week':

                $previous_week = strtotime("-1 week +1 day");

                $previous_week=date('Y-m-d H:i:s',$previous_week);

                $resturant_id=User::find(auth()->user()->id)->resturant->id;

                $archive=Archive::where('restaurantowner_id',$resturant_id)->where('created_at','>=',$previous_week)->paginate();

                return view('resturant.archive.archiveindex',compact('archive'));

                break;
                
            case 'month':

                $previous_week = strtotime("-1 month +1 day");

                $previous_week=date('Y-m-d H:i:s',$previous_week);

                $resturant_id=User::find(auth()->user()->id)->resturant->id;

                $archive=Archive::where('restaurantowner_id',$resturant_id)->where('created_at','<=',$previous_week)->paginate();

                return view('resturant.archive.archiveindex',compact('archive'));

                break;
            case 'all':
                $resturant_id=User::find(auth()->user()->id)->resturant->id;

                $archive=Archive::where('restaurantowner_id',$resturant_id)->paginate();

                return view('resturant.archive.archiveindex',compact('archive'));
                break;

            default:
               abort(403);
                break;
        }
    }

}
