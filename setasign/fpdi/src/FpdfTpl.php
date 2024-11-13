<?php

/**
 * This file is part of FPDI
 *
 * @package   setasign\Fpdi
 * @copyright Copyright (c) 2024 Setasign GmbH & Co. KG (https://www.setasign.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace setasign\Fpdi;
include  "../photovault/vendor/setasign/tfpdf/tfpdf.php";



/**
 * Class FpdfTpl
 *
 * This class adds a templating feature to FPDF.
 */
// class FpdfTpl extends \FPDF
class FpdfTpl extends \tFPDF
// : Dùng tFPDF để sử dụng UTF-8
{
    use FpdfTplTrait;
}
