<?php
namespace Core\HTML;
class BootstrapForm extends Form{

    /**
     * @param $html string Code HTML à entourer
     * @return string
     */
    protected function surround($html){
        return "<div class=\"form-group\">{$html}</div>";
    }

    /**
     * @param $name string
     * @param $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        $id = isset($options['id']) ? $options['id'] : '';
        $label = '<label>' . $label . '</label>';
        if($type === 'textarea'){
            $input = '<textarea name="' . $name . '" class="form-control">' . $this->getValue($name) . '</textarea>';
        } else{
            $input = '<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name).'" id="' . $id . '" class="form-control">';
        }
        return $this->surround($label . $input);
    }

    public function select($name, $label, $options){
        $label = '<label>' . $label . '</label>';
        $input = '<select class="form-control" name="' . $name . '">';
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = ' selected';
            }
            $input .= "<option value='$k'$attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surround($label . $input);
    }

    public function summernote($name, $label, $options = []){
        $label = '<label>' . $label . '</label>';
        $input = '<input type="hidden" name="' . $name . '" value="' . $this->getValue($name).'" id="' . $name . '" class="form-control">';
        $div = '<div id="summernote">' . $this->getValue($name) . '</div>';
        return $this->surround($label . $input . $div);
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}