<?php

namespace App\Http\Forms;

use Kris\LaravelFormBuilder\Form;

class CharacterCreateForm extends Form
{
    public function buildForm()
    {
        $this->add('prefix', 'text')
            ->add('first_name', 'text')
            ->add('middle_name', 'text')
            ->add('last_name')
            ->add('suffix', 'text')
            ->add('birth_date', 'date')
            ->add('eye_color', 'text')
            ->add('hair_style', 'text')
            ->add('hair_color', 'text')
            ->add('gender', 'select', ['choices' => ['Male', 'Female']])
            ->add('height', 'text')
            ->add('weight', 'text')
            ->add('submit_form', 'submit');
    }
}
