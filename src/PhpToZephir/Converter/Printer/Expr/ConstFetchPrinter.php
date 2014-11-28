<?php

namespace PhpToZephir\Converter\Printer\Expr;

use PhpParser\Node\Expr;
use PhpToZephir\Converter\SimplePrinter;

class ConstFetchPrinter extends SimplePrinter
{
    public static function getType()
    {
        return "pExpr_ConstFetch";
    }

    public function convert(Expr\ConstFetch $node)
    {
        $this->logger->trace(__METHOD__.' '.__LINE__, $node, $this->dispatcher->getMetadata()->getFullQualifiedNameClass());

        return implode('\\', $node->name->parts);
    }
}
