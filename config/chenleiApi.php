<?php

return [
//==========================================新A端=========================================
//一、消息通知列表页
//    1、页面
        1 => [
            '###' => '列表页',
            'url' => 'new/reminder/message_notification/list',
            'params' => [],
            'info' => [
                'target_config' => [ //通知对象下拉框
                    ['code'=>1, 'desc'=>"客户"],
                    ['code'=>2, 'desc'=>"A端用户"],
                ],
                'type_config'=>[   //通知形式下拉框
                    ['code' => 1, 'desc' => "公告"],
                    ['code' => 2, 'desc'=> "带浮层弹窗"],
                ],
            ],
        ],
//    2、查询api
        2 => [
            '###' => '列表页-查询api',
            'url' => 'new/api/reminder/message_notification/list',
            'params' => [
                'page' => 1,
                'reminder_target' => 1,  //通知对象
                'reminder_type' => 1,    //通知形式
                'cts_start' => "2016-10-10",
                'cts_end' => "2016-10-11",
            ],
            'info' => [
                "pagination"=> [
                    "totle"=> 4,
                    "total_pages"=> 1,
                    "per_page"=> 5,
                    "page"=> 1
                ],
                'list' => [
                    [
                        'rid' => 23,
                        'receiver' => "客户",
                        'receiver_range_display' => "[全部管理区][信用客户][自助]",
                        'push_type_display' => "公告",
                        'title' => "这是标题",
                        'cts_display' => "2016-12-26",
                        'creator_name' => "张三"
                    ],
                    []
                ]
            ],
        ],

//    3、右上角客户公告(旧版)"
        3 => [
            '###' => '右上角客户公告(旧版)',
            'url' => 'notification_to_customer',
        ],

//二、消息通知详情页
//    1、页面
        4 => [
            '###' => '详情页--页面',
            'url' => 'new/message_notification/detail',
            'params' => [
                '###' => 'id, 有id是详情带返回数据',
                'id' => 12345,//
            ],
            'info' => [
                'editable' => 1, //是否可以保存, 1 表示true, 0 表示false
                'adc_config' => [    //  管理区
                ['code' => 1, 'desc' => "北京管理区"],
                []
            ],
            'customer_type_config' => [  //客户类型
                ['code' => 100, 'desc' => "信用客户"],
                ['code' => 200, 'desc' => "预充值客户"]
            ],
            'project_type_config' => [   //项目类型
                ['code' => 1, 'desc' => "封装"],
                ['code' => 2, 'desc' => "自助"]
            ],
            'type_config' => [   //通知形式下拉框
                ['code' => 1, 'desc' => "公告"],
                ['code' => 2, 'desc' => "带浮层弹窗"],
            ],
            '####' => '以下是返回数据, 给后端传了id的时候返回',
            'adcids' => [1,2,3,4,5],
            'is_all_adc' => 1,
            'customer_type' => 1,
            'customer_project_type' => 1,
            'push_type' => 1,
            'title' => "123123123123",
            'content' => "asdfasfasdfasdfasdfasdfasdf",
            'reason' => "hahahahhahahahahha",
            ],
        ],

//    2、保存
        5 => [
            '###' => '详情页--保存api',
            'url' =>  'new/api/message_notification/customer/save',
            'params' => [
                'adcids' => [1,2,3],//"全部"则可不传
                'customer_type' => 100,//"全部"则可不传
                'customer_project_type' => 1,//"全部"则可不传
                'push_type' => 1,
                'title' => "asddddddddddddddddd",
                'content' => "123333333333333",
                'reason' => "asddddddddffffffa"
            ],
            //保存成功
            'code' => 0,
            'info' => [],
        ],
];