<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Db
 * @subpackage Statement
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @namespace
 */
namespace Zend\DB\Statement\DB2;

/**
 * @uses       \Zend\DB\Statement\Exception
 * @package    Zend_Db
 * @subpackage Statement
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Exception extends \Zend\DB\Statement\Exception
{
    /**
     * @var string
     */
    protected $code = '00000';

    /**
     * @var string
     */
    protected $message = 'unknown exception';

    /**
     * @param string $msg
     * @param string $state
     */
    function __construct($msg = 'unknown exception', $state = '00000')
    {
        $this->message = $msg;
        $this->code = $state;
    }

}

