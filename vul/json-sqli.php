//Content-type: application/json
//$arr = array('age' => 11, 'name' => 'lufei', 'id' => 2);
//echo json_encode($arr);

//$json = '{"age":11,"name":"lufei","id":2}';
//echo json_decode($json)->id;


print(json_decode(file_get_contents('php://input'))->id);
