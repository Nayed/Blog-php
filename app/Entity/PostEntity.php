<?php

namespace App\Entity;
use Core\Entity\Entity;

class PostEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=articles&id=' . $this->id;
    }

    public function getPreview(){
        $html = '<p>' . substr($this->content, 0, 150) . '...</p>';
        $html .= '<p><a href="' . $this->getURL() . ' ">See the rest...</a></p>';
        return $html;
    }
}