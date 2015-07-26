<?php 

namespace Core\HTML;

class BootstrapForm extends Form{

    private $data;

    public function __construct($data = array()){
        $this->data = $data;
    }

    /**
     * @param $html string HTML code
     * @return string
     */
    protected function surround($html){
        return "<div class=\"form-group\">{$html}</div>";
    }

    private function getValue($index){
        if(is_object($this->data)){
            return $this->data->$index;
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @param $label
     * @param array $options
     * return string
     */
    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = '<label>' . $label . '</label>';
        if ($type === 'textarea'){
            $input = '<textarea name="' . $name . '" class="form-control">' . $this->getValue($name) . '</textarea>';
        }
        else{
            $input = '<input type="' . $type . '" name="' . $name . '" value ="' . $this->getValue($name) . '" class="form-control">';
        }
        return $this->surround($label . $input);
    }

    public function select($name, $label, $options){
        $label = '<label>' . $label . '</label>';
        $input = '<select class="form-control" name="' . $name . '">';
        foreach ($options as $key => $value) {
            $input .= "<option value='$key'> $value</option>";
        }
        $input .= '</select>';
        return $this->surround($label . $input);
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Submit</button>');
    }
}