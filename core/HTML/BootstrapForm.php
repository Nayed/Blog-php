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
     * @param $label
     * @param array $options
     * return string
     */
    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround(
            '<label>' . $label . '</label><br/><input type="' . $type . '" name="' . $name . '" value ="">'
        );
    }

    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Submit</button>');
    }
}