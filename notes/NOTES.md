# Dev Notes

## Controllers


## Models

## Views


## Artisan

### Tinker

Laravel's Artisan Tinker allows interact with your application instide of terminal

Tinker Command
 - `php artisan tinker` loads the tinker CLI `>>>`
 - `>>> $name = 'Shawn Sandy'`

 Create a new variable in tinker
 ```cli
 // sets the variable
>>> $greet = "hello"
=> "hello"
// calls the variable
>>> $greet
=> "hello"
 ```

 Add a user to the to the Database using tinker

 ```
 >>> $user = new User;
 $user->first_name = 'John';
 >> John
 $user->last_name = 'Hanncock';
 >> Hannock
 $user->email = jhannock@email.com;
>> 'jhannock@email.com'
 $user->save();
 >> true
 ```

Now display all users

 ` >>> $users->all()`






