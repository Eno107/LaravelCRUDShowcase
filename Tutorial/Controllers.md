
- Directory
  + App/Http/Controllers

- Create a new Controller
  1. go to terminal
  2. "php artisan make:controller controllerName" -> create base controller format file, which will have the following format:

  <?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  class UserController extends Controller
  {
    //placeholder for functions
  }

- Creating a new function 
  1. Inside the class
  2. General format of the function:
  public function functionName(){ return 'returned' }

- Accessing data from forms
  1. In the defined functions
  2. Add the parameter "Request $request", which gets all data from the form.
  3. To access any individual input field, use:
  $request->input('nameAttributeOfInput');

- Validating data 
  1. In the defined function
  2. Use the "request->validate([])" method that expects a validation rule set defined using an associative array:
   $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:200']

            // or if only 1 condition: 'name' => 'required',
        ]);

- Hashing value
  + bcrypt();

- Making an input unique
  + in the ->validate([]) method add the following:
  Rule::unique('tableName', 'columnName'),
  + import the following for that to work: 
  Illuminate/Validation/Rule
