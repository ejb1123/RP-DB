<?php

namespace App\Http\Controllers;

use App\Character;
use App\User;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
//use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Http\Forms\CharacterCreateForm;

class CharacterController extends Controller
{
    use FormBuilderTrait;

    public function index(Request $request)
    {
        $characters = Character::all();

        return view('character/index',['data'=>$characters]);
    }

    public function create(Request $formBuilder)
    {

        $form = $this->form(CharacterCreateForm::class, [
            'method' => 'POST',
            'url' => action('CharacterController@store')
        ]);


        return view('character/create', compact('form'));
    }

    public function store(Request $request)
    {
        $character = new Character();
        $user = Auth::id();

        $character['player_id'] = $request->user()['id'];
        $character['prefix'] = $request['prefix'];
        $character['first_name'] = $request['first_name'];
        $character['middle_name'] = $request['middle_name'];
        $character['last_name'] = $request['last_name'];
        $character['suffix'] = $request['suffix'];
        $character['eye_color'] = $request['eye_color'];
        $character['hair_style'] = $request['hair_style'];
        $character['hair_color'] = $request['hair_color'];
        $character['gender'] = $request['gender'];
        $character['height'] = $request['height'];
        $character['weight'] = $request['weight'];
        $character['birth_date'] = DateTime::date($request['birth_date']);
        //TODO: parse birth_date to be accepted in the model;
        $character->save();
        return ($character);
    }
}
