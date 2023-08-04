
- What are views
  + Since laravel follow a MVC model, views stands for the presentation and the visual part of the project.
  
- What is .blade 
  + blade is a templating engine provided by laravel. A templating engine is a tool that allows you to create templates for your views with placeholders for dynamic content. In the case of Blade, it lets you write templates using a more concise and expressive syntax compared to raw PHP code.
  + Other things it allows you to do:
    1. Embed PHP code using special delimiters like '{{ }}' and '@'. For example '{{ @variable }}' -> outputs the value of a php variable in html. '@if(condition)' .. '@endif' -> allows you to include conditional statements in your views. 

- How to submit an access form data using POST 
  1. On the opening form tag add an "action=" attribute
  2. Inside the action attribute add the URL that this form is going to submit to. i.e. action="/register" 
  3. Also add the attribute: method="POST" 
  4. To handle the post request, we need to open "routes/web.php" page
  5. There we can create the following method:
  Routes::post($url, $callback); (more on "Tutorial/WebPhpPage")
  6. As it is, trying to acess $url from this POST form, it will throw a 419 error PAGE EXPIRED. Anytime you send a post request in laravel in order for it to actually go through you need to include a csrf token, which is basically a security measure blocking visitors of our site from having third-party sites take advantage of their logged in cookie data from our site. To do this just add the line "@csrf"  

- How to check if a user is logged in or not 
  @auth
   //logged in
  @else
   //not logged in
  @endauth


