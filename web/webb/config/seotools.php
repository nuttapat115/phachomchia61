<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "ประชุมเชียร์วิศวะบางมด ปี 61", // set false to total remove
            'description'  => 'ระบบประชุมเชียร์ คณะวิศวกรรมศาสตร์ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี ปี 2561', // set false to total remove
            'separator'    => 'ระบบประชุมเชียร์,คณะวิศวกรรมศาสตร์,มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี,ประชุมเชียร์วิศวะบางมด',
            'keywords'     => [],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'ประชุมเชียร์วิศวะบางมด ปี 61', // set false to total remove
            'description' => 'ระบบประชุมเชียร์ คณะวิศวกรรมศาสตร์ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี ปี 2561', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
