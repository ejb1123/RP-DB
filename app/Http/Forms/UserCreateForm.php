<?php

namespace App\Http\Forms;

use Kris\LaravelFormBuilder\Form;

class UserCreateForm extends Form
{
    public function buildForm()
    {
        $this->add('name','text')
            ->add('email','email')
            ->add('password','password')
            ->add('steam_id','text')
            ->add('submitForm','submit');
    }
}
