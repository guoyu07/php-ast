--TEST--
ast\parse_file() on file with parse error
--FILE--
<?php

try {
    ast\parse_file(__DIR__ . '/invalid_file.php');
} catch (ParseError $e) {
    echo $e, "\n";
}

?>
--EXPECTF--
ParseError: syntax error, unexpected ')' in %stests/invalid_file.php:3
Stack trace:
#0 %s(%d): ast\parse_file('%s')
#1 {main}
