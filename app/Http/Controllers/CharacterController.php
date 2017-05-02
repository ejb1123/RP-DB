<?php

namespace App\Http\Controllers;

use App\Character;
use Illuminate\Http\Request;
//use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Http\Forms\CharacterCreateForm;
class CharacterController extends Controller
{
    use FormBuilderTrait;

    public function index(Request $request){
        return view('character/index');
    }

    public function create(Request $formBuilder){

        $form = $this->form(CharacterCreateForm::class,[
            'method' => 'POST',
            'url' => action('CharacterController@store')
        ]);


        return view('character/create',compact('form'));
    }
    public function store(Request $request){

    }
}
