<?

$arr=array("ReviewContent"=> 
    array("Comments"=>array(
	    array("userId"=>"John", "text"=>"Doe"),
		array("userId"=>"John", "text"=>"Doe"),
		array("userId"=>"John", "text"=>"Doe")
	    ),
    "Images"=>array(
	    array("pikUrl"=>"<pikUrl>"),
		array("pikUrl"=>"<pikUrl>")
	),
	"description"=>"<desctiption>",
	"hits"=>"<hits>",
    "vendorUrl"=>"<vendorUrl>",
	"reviewer"=>"<userId>"
));

echo var_dump(json_encode($arr));

?>