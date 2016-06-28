<?php
/**
 * Created by PhpStorm.
 * User: imtms
 * Date: 16/06/28
 * Time: 下午4:18
 */
namespace imtms\laravelmd\Services;

use imtms\laravelmd\Libraries\MarkdownExtraExtended;

class laravelmdServices
{
	protected $parser;
    public function __construct(MarkdownExtraExtended $parser)
	{
		$this->parser = $parser;
	}
    public function convert($text)
    {
        return $this->parser->transform($text);
    }
}