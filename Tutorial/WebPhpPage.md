
- Directory
  + "routes/web.php"

- Why is it needed and what does it do
  +  In Laravel's default configuration, you typically don't access views (PHP files) directly through the URL like "localhost:8000/pageName.php". Instead, Laravel uses a routing system to define routes and their corresponding actions (controllers or closures) to handle incoming requests.
  + Even "localhost:8000/views/pageName.blade.php" wont work, the url request has to be defined on the "routes/web.php"
  + One of the most important files, this file essentially spells out what should happen for all of the different url patterns on your website.

- Breaking down a route function/GET functions
  + When the file is first created it has a function that determines the root path of your website (meaning the first page that opens), which is the following : 

  Route::get('/', function () {
    return view('welcome');
  });
  
  or its signature:

  Route::get($url, $callback);

  So to break it down we have:
   1. Route -> a class provided by the Laravel framework that manages the routes in your application.
   2. get -> a static method of the Route class used to define a route that handles HTTP GET requests.
   3. $url -> (string) The URL pattern to match against the incoming request URL. It represents the path of the URL. For example, '/' represents the root URL, '/about' represents http://yourdomain.com/about, etc.
   4. $callback -> A "callback function" is just a piece of code that gets executed when someone visits the URL you defined. It can be of two types: Closuer or Anonymous Function -> like the example of the welcome page where it returns the view file called 'welcome'. Controller Action (String) -> Instead of using a closure, you can use a string representing a "controller action." i.e. Route::get('/some-url','SomeController@someAction'); In this case, when a user visits http://yourdomain.com/some-url, Laravel will call the someAction method inside the SomeController class to handle the request.

- POST functions
  + same parameters as the 'get' function, where it can take a $url, and a $callback function
  i.e Route::post('/register', function {
    return 'thank you';                     
    //returns a blank page with the text 'thank you'
  });
  + calling a function from a controller syntax: 
  Route::post($url, [NameOfTheController::class, functionName])
  i.e.
  Route::post('/register', [UserController::class, 'register']);
  To get this to work we do need to import or load the Controller Class

- Why controllers help this page
  + since most of the functionality of a web application will be handeled on this page, it can get really crowded and confusing. In order to keep it organised, instead of declaring the functions inside this page, we can use the help of controllers which are basically seperate files that will hold the functions by just using the following line at the top of the page:
  "use App\Http\Controllers\NameOfTheControllerFile;

- Sending data to a view page
  + return view('home', ['variableName' => data])

- Check if user is logged in
  + if (auth()->check()){}