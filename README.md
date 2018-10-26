#### Continuous Integration demo

Using this code with jenkins server

run test
`composer run test ./tests/ValidatePasswordTest.php`

after adding this section in `composer.json` :

<pre>
    "autoload": {
        "psr-4": {"": "src/"}
    }
</pre>

u need to run this command : `composer dump-autoload`

then run test command again