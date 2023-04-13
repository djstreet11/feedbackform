<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Http\Resources\ListCollections\CityListCollection;
use App\Mail\Feedback;
use App\Repositories\CityRepository;
use App\Services\CityService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /** @var CityService */
    private $cityService;
    /** @var CityRepository */
    private $cityRepository;

    public function __construct(
        CityService $cityService,
        CityRepository $cityRepository
    ) {
        $this->cityService = $cityService;
        $this->cityRepository = $cityRepository;
    }

    public function index(){
        $data = $this->cityRepository->list();
        return view('feedback',[
            'cities' =>new CityListCollection($data)
        ]);
    }

    public function feedback(FeedbackRequest $request){
        $data = $request->validated();
        Mail::to('admin@test.com')->send(new Feedback($data));
        return redirect(route('index',['status'=>'ok']));
    }
}
