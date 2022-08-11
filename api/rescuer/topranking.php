<?php
	include "../config_rescuer.php";
	include "../../api_function.php";
	$postdata = json_decode(file_get_contents("php://input"), true);
	if(isset($_GET['id']))
		$id = $_GET['id'];
	$temp_get_array = $_GET;
	unset($temp_get_array['modules']);
	// if(validate_with_db(decodejwt(getallheaders()['Authorization'])->data->phone,md5(decodejwt(getallheaders()['Authorization'])->data->password),$con))
	// {

	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$sample_array = array();
		$count = 0;
		if(isset($id))
		{
			$data_from_db = getspecificdata($con,"rescuer",'iId',$id);//get specific data from database
			$sample_array['id'] = $data_from_db['iId'];
			foreach($rescuer_config as $key=>$val)
			{
				if($key == 'vStatus')
				{
					$sample_array[$val['clientname']] = $data_from_db[$key];
                    $sample_array['no_of_snakes'] = getnoofcalls($con,"transcation",$id);
                    $sample_array['ranking'] = getranking($con,"rescuer",$id);
				}
				else{
                    $sample_array[$val['clientname']] = $data_from_db[$key];
                }
			}
			$count = 1;
		} 
        else{
            $data_from_db = gettoprankersrescuer($con,"rescuer",'','0'); //get all the data from the database
            foreach($data_from_db as $key=>$val)
            {
                $sample_array[$key]['id'] = $data_from_db[$key]['iId'];
                foreach($rescuer_config as $keys=>$val)
                {
                    if($keys == 'vStatus')
                    {
                        $sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
                        $sample_array[$key]['ranking'] = $key+1;
                    }
                    else
                        $sample_array[$key][$val['clientname']] = $data_from_db[$key][$keys];
                }
            }	
            $count = count($sample_array);
        }
		echo json_encode(array("count"=>$count,"rows"=>$sample_array));
		exit;
	}

	if($_SERVER['REQUEST_METHOD'] == 'DELETE')
	{
		if(specific_data_id($con,"rescuer",$id))
		{
			echo json_encode(array("message"=>"rescuer"." delete Successfully"));
			exit;
		}
	}
?>