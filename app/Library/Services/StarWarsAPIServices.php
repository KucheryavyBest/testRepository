<?php
namespace App\Library\Services;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
  
class StarWarsAPIServices
{
	var $mailURL = 'https://swapi.co/api/';

    public function GetAllPeople()
    {
		$data = $this->GetData($this->mailURL.'people/');
		$data = json_decode($data,true);
		$resArr = [];
		$i=1;
		while( $data['next'] )
		{	
			
			$rawData = $this->GetData($data['next']);
			$data = json_decode($rawData,true);
			
			if(is_array($data['results']) )
				$resArr  = array_merge ($resArr ,$data['results']);
		}
		
		return $resArr;
    }


    public function GetAPI2($params,$params2)
    {
				return $this->GetData($this->mailURL.$params.'/'.$params2);
    }


    public function GetAPI1($params)
    {
				return $this->GetData($this->mailURL.$params);
    }


    public function GetOnePeople($id)
    {
		$data = $this->GetData($this->mailURL.'people/'.$id.'/');
		return $data;
    }

    public function GetOnePeopleData($id)
    {
		$data = $this->GetData($this->mailURL.'people/'.$id.'/');
		return $data;
    }
	
	
    private function GetData($URL)
    {
		$client = new Client();
        $response = $client->request('GET', $URL);
		
		$StatusCode = $response->getStatusCode(); # 200
		
		$response->getHeaderLine('content-type'); 
		$res = $response->getBody();
		return $res;
	}
}