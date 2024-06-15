<?

require_once 'lib.php';

print Post::renderAsHTML();
print "<div>".Post::renderAsXML()."</div>";
print "<div>".Post::renderAsJSON()."</div>";