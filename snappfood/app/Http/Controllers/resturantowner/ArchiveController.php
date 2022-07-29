<?php

namespace App\Http\Controllers\resturantowner;

use App\Models\User;
use App\Models\Archive;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArchivControllerRequest;
use App\Services\ArchiveService;

class ArchiveController extends Controller
{
    public function index(ArchivControllerRequest $request,ArchiveService $archiveService)
    {

        $this->authorize('is_restaurant');

        $date=$request->validated()['date']??'all';

        return $archiveService->index($date);

    }
}
