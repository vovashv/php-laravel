<?php
function create_input($name, $label, $type, $errors)
{
    $isInvalid='';
    $value='';
    $isError=false;
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $isValue=isset($_POST[$name]) and !empty($_POST[$name]);
        if($isValue)
            $value=$_POST[$name];
        
        $isError=isset($errors[$name]) and !empty($errors[$name]);
        $isInvalid=$isError ? 'is-invalid' : '';
    }
    print <<<END
                <div class="form-group">
                    <label for="email">$label</label>
                    <input type="$type"
                           class="form-control $isInvalid"
                           id="$name"
                           name="$name"
                           value="$value"/>         
    END;

    if($isError)
        print <<<ERROR
            <div class="invalid-feedback d-block">
                $errors[$name]
            </div>
        ERROR;

    echo '</div>';
}


?>