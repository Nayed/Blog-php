<?php 

namespace Core\HTML;

class BootstrapForm extends Form{

    /**
     * @param $html string HTML code
     * @return string
     */
    protected function surround($html){
        return "<div class=\"form-group\">{$html}</div>";
    }

    /**
     * @param $name string
     * return string
     */
    public function input($name){
        return $this->surround(
            '<label>' . $name . '</label><br/><input type="text" name="' . $name . '" value ="">'
        );
    }

    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Submit</button>');
    }
}