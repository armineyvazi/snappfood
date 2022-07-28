<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Comment;
use App\Jobs\NotProblemJob;
use Illuminate\Http\Request;
use App\Jobs\ReportCommentJob;
use App\Jobs\NotProblemcommentJob;
use App\Http\Controllers\Controller;
use App\Jobs\ResponesToRestaurantJob;
use App\Jobs\DeleteCustomerCommentJob;
use App\Jobs\EmailDeletCustomerCommentJob;
use App\Http\Requests\ReportControllerRequest;
use App\Models\resturantowner\Restaurantowner;

class ReportController extends Controller
{
    public function index()
    {
        $comment=Comment::where('report',true)->paginate();

        return view('admin.report.reportindex',compact('comment'));
    }
    public function checkComment(ReportControllerRequest $request)
    {
        $resturant_id=$request->validated()['id_restaurant'];
        $user_id=$request->validated()['id_user'];
        $returantEmail=User::find($resturant_id)->email;
        $userEmail=User::find($user_id)->email;
        $id=$request->validated()['id'];
        $confirm=$request->validated()['confirm'];

        switch ($confirm) {

            case 'delete':
                Comment::find($id)->delete();
                dispatch(new DeleteCustomerCommentJob($userEmail))->delay(now()->addSeconds(33));
                dispatch(new ReportCommentJob($returantEmail))->delay(now()->addSeconds(33));

            return redirect('admin/report')->with('message','Comment is delete');
                break;
            case 'share':
                Comment::find($id)->update(['report'=>false]);
                dispatch(new NotProblemcommentJob( $returantEmail))->delay(now()->addSeconds(33));
            return redirect('admin/report')->with('message','Comment is delete');
            break;

            default:
                abort(404);
                break;

        }
    }
}
