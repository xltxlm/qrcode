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

        // for HTML and SVG
        $options->moduleValues = [
            // finder
            1536 => [0, 63, 255], // dark (true)
            6 => [255, 255, 255], // light (false), white is the transparency color and is enabled by default
            // alignment
            2560 => [0, 63, 255],
            10 => [255, 255, 255],
            // timing
            3072 => [255, 255, 255],
            12 => [255, 255, 255],
            // format
            3584 => [67, 191, 84],
            14 => [255, 255, 255],
            // version
            4096 => [62, 174, 190],
            16 => [255, 255, 255],
            // data
            1024 => [0, 0, 0],
            4 => [255, 255, 255],
            // darkmodule
            512 => [0, 0, 0],
            // separator
            8 => [255, 255, 255],
            // quietzone
            18 => [255, 255, 255],
        ];

        return (new chillerlanQRCode($options))
            ->render($this->gettext(), $this->getsavefile());
    }


}