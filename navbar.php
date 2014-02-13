<?php

class Navbar {
    private $currentUrl = "";
    public function create() {
        $c = "";
        $c .= "<nav class='navbar navbar-inverse navbar-static-top' role='navigation' onLoad='document.getElementById('navbar_search').focus()'>\n";
        $c .= "<div class='container-fluid'>";
        $c .= "<div class='navbar-header'>\n";
        $c .= "    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>\n";
        $c .= "        <span class='sr-only'>Toggle navigation</span>\n";
        $c .= "        <span class='icon-bar'></span>\n";
        $c .= "        <span class='icon-bar'></span>\n";
        $c .= "        <span class='icon-bar'></span>\n";
        $c .= "    </button>\n";
        $c .= "    <a class='navbar-brand' href='index.php'>maximaximal's <strong>texts</strong></a>\n";
        $c .= "</div>\n";

        $c .= "    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>\n";
        $c .= "        <ul class='nav navbar-nav'>\n";
        $c .= "            ".$this->getEntry("index.php", "Hauptseite");
        $c .= "            ".$this->getEntry("info.php", "Info");
        $c .= "            ".$this->getEntry("licence.php", "Lizenz der Texte");
        $c .= "        </ul>\n";
        $c .= "        <form class='navbar-form navbar-right' role='search'>\n";
        $c .= "            <div class='form-group'>\n";
        $c .= "                <input type='text' id='navbar_search' class='form-control' placeholder='Suchen' autofocus>\n";
        $c .= "            </div>\n";
        $c .= "        </form>\n";
        $c .= "    </div>\n";
        $c .= "</div>";
        $c .= "</nav>\n";
        return $c;
    }
    public function setCurrent($currentUrl) {
        $this->currentUrl = $currentUrl;
    }

    private function getEntry($url, $label) {
        $active = "";
        if($url == $this->currentUrl)
            $active = "active";

        $e = "<li class='$active'><a href='$url'>$label</a></li>\n";
        return $e;
    }
}

?>
