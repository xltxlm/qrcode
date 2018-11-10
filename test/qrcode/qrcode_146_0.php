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
            ->settext('abcdd')
            ->setsavefile(__DIR__ . '/a.png')
            ->__invoke();
        \xltxlm\helper\Util::d($a);
        assert(strpos($a, 'data:') !== false);
    }

}

