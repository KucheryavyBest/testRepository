<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Library\Services\StarWarsAPIServices;

class APIcontr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
    public function GetAPI1(StarWarsAPIServices $instanceAPI,$params)
    {
		return $instanceAPI->GetAPI1($params);
    }

    public function GetAPI2(StarWarsAPIServices $instanceAPI,$params,$params2)
    {
		return $instanceAPI->GetAPI2($params,$params2);
    }
	 
    public function GetAllPeople(StarWarsAPIServices $instanceAPI)
    {
		//var_export($instanceAPI->GetAllPeople());
		return view('allpeaple');
    }

    public function GetAllPeopleData(StarWarsAPIServices $instanceAPI)
    {
		//var_export($instanceAPI->GetAllPeople());
		return $instanceAPI->GetAllPeople();
    }

    public function GetOnePeople(StarWarsAPIServices $instanceAPI,$id)
    {
		 //echo $instanceAPI->GetOnePeople($id);
		 return view('allpeaple');
    }
    public function GetOnePeopleData(StarWarsAPIServices $instanceAPI,$id)
    {
		 echo $instanceAPI->GetOnePeople($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
