<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewMessageRequest;
use App\Models\Message;
use App\Models\Messege;
use Illuminate\Http\Request;

class MessegeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(NewMessageRequest $request)
    {

        $data = $request->validated();
        $record=Messege::create($data);


        if ($record) {
            return ApiResponse::sendResponse(201, 'Sent Successfully', $record);
        }
    }
}
