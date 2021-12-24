<?php

    // variables
    $foo = 'bar';
    echo "{$foo}\n";
    print "{$foo}\n";
//    printf("%s\n", ${foo});      // Warning: Use of undefined constant foo - assumed 'foo' (this will throw an Error in a future version of PHP)

    $foo = 'baz';
    echo "${foo}\n";

    // constant
    $constant = 'constant';
    const FOO = 'const FOO';
    echo FOO."\n";
    echo "{$constant('FOO')}\n";

