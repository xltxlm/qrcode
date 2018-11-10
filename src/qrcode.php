<?php

namespace xltxlm\qrcode;

use chillerlan\QRCode\QROptions;
use \chillerlan\QRCode\QRCode as chillerlanQRCode;

/**
 * 生成二维码;
 */
class qrcode extends qrcode\qrcode_implements
{


    /**
     * qrcode constructor.
     */
    public function __construct(string $text = '')
    {
        if ($text) {
            $this->settext($text);
        }
    }

    public function __invoke()
    {
        $options = new QROptions([
            'version' => 5,
            'outputType' => chillerlanQRCode::OUTPUT_IMAGE_PNG,
            'eccLevel' => chillerlanQRCode::ECC_M,
        ]);

        return (new chillerlanQRCode($options))
            ->render($this->gettext(), $this->getsavefile());
    }


}