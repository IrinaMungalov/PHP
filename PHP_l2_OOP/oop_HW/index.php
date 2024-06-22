<?
class Link
{
    private $text;
    private $url;
    public function __construct($text, $url) {
        $this->__set("text",$text);
        $this->__set("url",$url);
    }

    public function __set($name, $value) {
        if ($name == "text")
            if ($value != "")
                $this->text = $value;
            else 
                die("ERROR: cannot leave {$name} empty!!!");
        else if ($name == "url")
            if ($value != "")
                $this->url = $value;
            else
                die("ERROR: cannot leave {$name} empty!!!");
        else
            die("ERROR: unknow property {$name}");
    }
    
    public function __get($name) {
        if ($name == "text") return $this->text;
        else if ($name == "url")  return $this->url;
        else die("ERROR: unknow property {$name}");
    }

    public function __toString() {
        return "<a href='{$this->url}'>{$this->text}</a>";
    }

    // HW2: implement __isset() so it returns true only if link has a non-empty text and non-empty url
    public function __isset($name) {
        return !empty($this->text) && !empty($this->url);
    }
}

?>
<?
    $link1 = new Link("PHP manual", "https://php.net");

    if (isset($link1)) {
        print ("Both properties are set.");
    } else {
        print("Both properties must be set!");
    }
?>

<p>To read more about php, click <?= $link1 ?></p>



