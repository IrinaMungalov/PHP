<?
    class Link {
        private $text;
        private $url;
        public function __construct($text,$url) {
            $this->setText($text);
            $this->url = $url;
        }

        public function getText () {
            return $this->text;
        }

        public function setText ($text) {
            // HW1: what if $text is multiple spaces, hint: check string processing
            if (trim($text) == "") die("ERROR: text is mandatory!");
            $this->text = $text;
        }
    }

    ?>
    <?        
        $link1 = new Link("php manual", "https://php.net");
        // $link1->setText("");        
        print($link1->getText());
        // print ($link1->url);
    ?>