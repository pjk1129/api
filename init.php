<?php

require_once('./response/response.php');
require_once('./common/common.php');

class AppInit {
    public function initData() {
        $input = file_get_contents("php://input"); //接收POST数据        
        $postParam = Common::explodeSring($input);
        $page = $postParam['page'];
        if (empty($input)) {
            return Response::api_response(1, '参数信息不完整', $input);
        }else{
            return Response::api_response(0, json_encode($postParam), self::getData($page));
        }
    }

    private function getData($page){
        $reust = array();
        for($x=0;$x<2;$x++) {
            $data = array(
            'gid' => $x+1000, 
            'name' => 'name',
            'page' => $page
            );
            array_push($reust,$data);
        }
        return $reust;
    }
}

$init = new AppInit();
$init -> initData();
exit;