
- What are Models
  + Models represent 'M' in 'MVC' architectural pattern.
  + A model represents the data and business logic of your application and provides an abstraction to interact with the database. It serves as a bridge between your application code and the database tables, making it easier to perform database operations without writing raw SQL queries.
  + Basically since website doesnt directly access mysql, it needs to have an idea of how the database is. What are the tables, what are the rows and the relations between. 
  + One of the most important reasons about why models exist is to create relationships between tables.

- Directory
  + app/Models

- Create new Model
  1. Open terminal of current directory
  2. "php artisan make:model modelName"
  3. CAREFUL, name matters, if in the database the table name is "posts" the model name should be "Post", so uppercase and singular
  i.e. 
  class User extends Model {
    //automatically connects to the table named "user" or "users"
  }
  4. But if we want it to connect to any other table we do the following:
  class User extends Model{
    protected $table = 'custom_table_name';
  }

- Adding columns to table in databse/Creating ::create() method
  1. Open representative model
  2. Inside Class add the following:
  protected $fillable = ['columnName', 'columnName'];
  3. To set a specific type casting to any column, add the following:
  protected $casts = ['columnName' => 'string', 'columnName' => 'text'];
  4. To make a column be hidden when converted to an array or JSON response do the following, in the meaning that they wont be pulled :
  protected $hidden = ['columnName', 'columnName'];

- Get Data from models
  + Getting all rows from a table -> ModelName::all();  
  + Getting all rows with a condition -> ModelName::where('columnName', value)->get();
  || auth()->user()->functionName->latest()->get();
  where functionName can be something like the following:
  public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }
    

