<?php

namespace App\Table;

class Article{

	public function getURL(){
		return 'index.php?p=article&id=' . $this->id;
	}
    
    public function getPreview(){
    	$html = '<p>' . substr($this->content,0, 150) . '...</p>';
    	$html .= '<p><a href="' . $this->getURL() . ' ">See the rest...</a></p>';
    	return $html;
    }
}