<?php

/**
 * @link       http://patchwork2.org/
 * @author     Ignas Rudaitis <ignas.rudaitis@gmail.com>
 * @copyright  2010-2017 Ignas Rudaitis
 * @license    http://www.opensource.org/licenses/mit-license.html
 */
namespace Patchwork\CodeManipulation\Actions\ConflictPrevention;

use Patchwork\CodeManipulation\Source;

/**
 * @since 2.0.1
 *
 * Serves to avoid "Cannot redeclare Patchwork\redefine()" errors.
 */
function preventImportingOtherCopiesOfPatchwork()
{
    return function(Source $s) {
        $namespaceKeyword = $s->next(T_NAMESPACE, -1);
        if ($namespaceKeyword === INF) {
            return;
        }
        if ($s->read($namespaceKeyword, 4) == 'namespace Patchwork;') {
            # Clear the file completely (in memory)
            $s->splice('', 0, count($s->tokens));
        }
    };
}
