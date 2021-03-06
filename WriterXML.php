<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 15/03/16
 * Time: 9:59
 */

namespace Jei\Write;

use Jei\Base\Article;

/**
 * WriterXML class implementation
 * This class implementing the Writer interface will be sure to have write() method.
 */
class WriterXML implements Writable
{
    public function write(Article $obj)
    {
        $ret = '<article>';
        $ret .= '<title>' . $obj->getTitle() . '</title>';
        $ret .= '<author>' . $obj->getAuthor() . '</author>';
        $ret .= '<date>' . $obj->getDate() . '</date>';
        $ret .= '<category>' . $obj->getCategory() . '</category>';
        $ret .= '</article>';
        return $ret;
    }
}