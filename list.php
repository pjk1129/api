<?php

require_once('./response/response.php');
require_once('./common/common.php');

class GoodsList {
    public function listData() {
        $input = file_get_contents('php://input');  //接收POST数据 key=value&page=0
        $postParam = Common::explodeSring($input);
        $page = $postParam['page'];
        if (!empty($input)){
           return Response::api_response(0, $dic, self::getListData($page));
        }else{
           return Response::api_response(1, '参数信息不完整', $input);
        }
    }

    private function getListData($page){
        $reust = array();
        for($x=0;$x<10;$x++) {
            $data = array(
            'gid' => $x+1000, 
            'name' => '缘散缘聚',
            'price' => '79',
            'rebateMoney' => '58',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLk5g8KInjLHGEN6eBJq57tEHpEt4QINtaHw6q-9kTad8RkQqU',
            'url' => 'https://www.baidu.com/',
            'page' => $page
            );
            array_push($reust,$data);
        }
        return $reust;
    }
}

$gList = new GoodsList();
$gList -> listData();
exit;