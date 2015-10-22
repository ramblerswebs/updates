<?php

class DirectoryList {

    protected $handle;
    private $names;

    public function __construct() {
        echo "<h2>Ramblers Extensions</h2>\n";
        $this->names = array();
    }

    public function Output($folder) {

        if ($handle = opendir($folder)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    if (is_dir($entry)) {
                        //$this->names[]=$entry;
                    } else {
                        
                    }
                }
            }
            closedir($handle);
        }
        if ($handle = opendir('.')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    if (is_dir($entry)) {
                        
                    } else {
                        $this->names[] = $entry;
                    }
                }
            }
            closedir($handle);
        }
        asort($this->names);
        echo "<ul>";
        foreach ($this->names as $value) {
            if ($this->endsWith($value, '.zip')) {
                echo "<li><a href='$value' target='_blank'>$value</a></li>\n";
            }
        }
        echo "</ul>";
    }

    public function DirEntry($entry) {
        // echo "<li>$entry</li>\n";
    }

    function endsWith($haystack, $needle) {
        // search forward starting from end minus needle length characters
        return $needle === "" || strpos($haystack, $needle, strlen($haystack) - strlen($needle)) !== FALSE;
    }

}
