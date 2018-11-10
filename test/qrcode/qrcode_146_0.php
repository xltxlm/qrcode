<?php

namespace xltxlm\qrcode\test\qrcode;

/**
 *
 */
class qrcode_146_0
{

    public function __invoke()
    {
        $a = (new \xltxlm\qrcode\qrcode)
            ->settext('http://www.baidu.com/')
            ->setsavefile(__DIR__ . '/'.date('YmdHis').'.png')
            ->__invoke();
        \xltxlm\helper\Util::d($a);
        assert(strpos($a, 'data:') !== false);
    }

}

