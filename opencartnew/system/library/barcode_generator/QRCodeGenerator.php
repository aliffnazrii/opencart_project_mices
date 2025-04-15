<?php
namespace Opencart\System\Library\BarcodeGenerator;

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

class QRCodeGenerator {
    private $options;

    public function __construct() {
        $this->options = new QROptions([
            'outputType' => QRCode::OUTPUT_MARKUP_SVG,
            'eccLevel' => QRCode::ECC_L,
            'version' => 5,
            'imageBase64' => false,
            'addQuietzone' => true,
            'quietzoneSize' => 1
        ]);
    }

    public function generate($data, $size = 300) {
        $this->options->scale = ceil($size / 25);
        $qrcode = new QRCode($this->options);
        return $qrcode->render($data);
    }

    public function setOptions(array $options) {
        foreach ($options as $key => $value) {
            if (property_exists($this->options, $key)) {
                $this->options->{$key} = $value;
            }
        }
        return $this;
    }
}