<?php namespace App\Model\Validation;

use Cake\Validation\Validator;

class ContactValidator extends Validator {

    public function __construct()
    {
        parent::__construct();

        $this

            ->notEmpty('CaptchaCode', 'The captcha code field cannot be left empty')
            ->add('CaptchaCode', 'validCaptcha', [
                'rule' => function($value) {
                    return captcha_validate($value);
                },
                'message' => 'EL CAPTCHA ingresado es incorrecto,Intente de nuevo'
            ]);
    }
}