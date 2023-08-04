
- Login
  1. Go to the User Controller, or wherever you controll the signup/login
  2. After every Validation, write the following line:
  auth->login($user);
  3. redirect to home or any other page
  return redirect('/');