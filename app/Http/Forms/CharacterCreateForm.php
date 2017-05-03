<?php

namespace App\Http\Forms;

use Kris\LaravelFormBuilder\Form;

class CharacterCreateForm extends Form
{
    public function buildForm()
    {
        $this->add('Prefix', 'text')
            ->add('First Name', 'text')
            ->add('Middle Name', 'text')
            ->add('Last Name')
            ->add('suffix', 'text')
            ->add('Birth Date', 'date')
            ->add('Eye Colot', 'text')
            ->add('Hair Style', 'text')
            ->add('Hair Color', 'text')
            ->add('Gender', 'select', ['choices' => ['Male', 'Female']])
            ->add('Height', 'text')
            ->add('Weight', 'text')
            ->add('submit_form', 'submit');
    }
}
