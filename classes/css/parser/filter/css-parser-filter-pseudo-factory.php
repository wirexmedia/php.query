<?php
/**
 * This file is part of Soloproyectos common library.
 *
 * @author  Gonzalo Chumillas <gchumillas@email.com>
 * @license https://github.com/soloproyectos/php.common-libs/blob/master/LICENSE BSD 2-Clause License
 * @link    https://github.com/soloproyectos/php.common-libs
 */
namespace com\soloproyectos\common\css\parser\filter;
use \Closure;
use com\soloproyectos\common\css\parser\filter\CssParserFilterPseudo;

/**
 * Class CssParserFilterPseudoFactory.
 *
 * @package Css\Parser\Filter
 * @author  Gonzalo Chumillas <gchumillas@email.com>
 * @license https://github.com/soloproyectos/php.common-libs/blob/master/LICENSE BSD 2-Clause License
 * @link    https://github.com/soloproyectos/php.common-libs
 */
class CssParserFilterPseudoFactory
{
    /**
     * Gets a psuedo-filter instance by class name.
     *
     * @param string  $classname       Class name
     * @param string  $input           String input (default is "")
     * @param Closure $userDefFunction Used defined function (not required)
     *
     * @return CssParserFilterPseudo
     */
    public static function getInstance(
        $classname, $input = "", $userDefFunction = null
    ) {
        $fullname = "com\\soloproyectos\\common\\css\\parser\\filter\\"
            . $classname;
        return new $fullname($input, $userDefFunction);
    }
}
