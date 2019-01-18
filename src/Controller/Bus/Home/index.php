<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array(
    'facebook' => array(
        array(
            'url' => '',
            'description' => 'Get Profile ID',
            'image' => $BASE_URL."/images/getprofileid.png"
        ),
        array(
            'url' => '',
            'description' => 'Get Page ID',
            'image' => $BASE_URL."/images/getpageid.png"
        ),
        array(
            'url' => '',
            'description' => 'Get Group ID',
            'image' => $BASE_URL."/images/getgroupid.png"
        ),
        array(
            'url' => '',
            'description' => "Get Post Comments",
            'image' => $BASE_URL."/images/getcomments.png"
        )
    )
);
$this->set(compact(
    'data'
));
