<?php
/**
 * Created by PhpStorm.
 * User: franco
 * Date: 29/09/17
 * Time: 20.16
 */

namespace PHPstrap\Components;

/**
 * Class Alert
 * @package PHPstrap\Components
 */
class Alert extends AbstractComponent
{

    /**
     * @return string
     */
    protected function tagName(): string
    {
        return 'div';
    }
}