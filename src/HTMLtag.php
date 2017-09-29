<?php
/**
 * Created by PhpStorm.
 * User: franco
 * Date: 29/09/17
 * Time: 20.11
 */

namespace PHPstrap;

/**
 * Class HTMLtag
 * @package PHPstrap
 */
abstract class HTMLtag
{
    protected $contents = [];

    /**
     * @return string
     */
    public function __toString(): string
    {
        return '<' . $this->tagName() . '>' . implode("\n", $this->contents) . '</' . $this->tagName() . '>';
    }

    /**
     * @return string
     */
    abstract protected function tagName(): string;
}