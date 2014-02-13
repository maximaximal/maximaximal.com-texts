<?php

class Explorer {
    private $currentSearch = "";
    public function create() {
        $c = "";
        $c .= "<div class='table-responsive'>\n";
        $c .= "    <table class='table'>\n";
        $c .= "        <thead>\n";
        $c .= "            <tr>\n";
        $c .= "                <th>Dateiname</th>\n";
        $c .= "                <th>Letzte Änderung</th>\n";
        $c .= "            </tr>\n";
        $c .= "        </thead>\n";
        $c .= "        <tbody>\n";

        $c .= "        </tbody>\n";
        $c .= "    </table>\n";
        $c .= "</div>\n";
        return $c;
    }
    public function setCurrentKeyword($keyword) {
        $this->currentSearch = $keyword;
    }
}

?>
