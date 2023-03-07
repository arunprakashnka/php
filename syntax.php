<!DOCTYPE html>
<html>
    <head>
        <title>SYNTAX</title>
    </head>
    <body>
        <h1>SYNTX EXPLORATION</h1>
        <p>opening and closing tags:</p>
        <?php echo 'if you want to serve PHP code in XHTML or XML documents,
        use these tags'; ?>
        <p>. You can use the short echo tag to <?= 'print this string' ?>.
It's equivalent to</p>
<?= 'print echo tag'?>
<p>escaping from html</p>
<p>Everything outside of a pair of opening and closing tags is ignored by the PHP parser which allows PHP files to have mixed content. 
    This allows PHP to be embedded in HTML documents, for example to create templates.</p>
    <p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>
<p>advanced escaping</p>
<?php if ($expression == true): ?>
This will show if the expression is true.
<?php else: ?>
Otherwise this will show.
<?php endif; ?>
<p>Instruction separation</p>
<?php echo "Some text"; ?>
   No newline
<?= "But newline now" ?>
    </body>
</html>
