## class 44

### adding group to route
For adding same middleware to multiple route. 

~~~php
Route::group(['middleware' => 'auth'], function () {
  Route::get('/logout', [
    'uses' => 'SigninController@logout',
    'as' => 'logout'
  ]);
  Route::get('/create', [
    'uses' => 'PostController@create',
    'as' => 'post.create'
  ]);
  Route::post('/create', [
    'uses' => 'PostController@store',
    'as' => 'post.store'
  ]);
});

~~~
Route::group(['middleware' => 'guest'], function () {
  Route::get('/login', [
    'uses' => 'SigninController@login',
    'as' => 'login'
  ]);
  Route::post('/login', [
    'uses' => 'SigninController@store',
    'as' => 'login.store'
  ]);
  Route::get('/register', [
    'uses' => 'SignUpController@register',
    'as' => 'register'
  ]);
  Route::post('/register', [
    'uses' => 'SignUpController@store',
    'as' => 'register.store'
  ]);

});

### name routing 
we can name route by using name function or passing array to get or post function where array key `uses` will be controller and `as` will be name
~~~php
Route::post('/register','SignUpController@store')->name('register.store');
//or
Route::post('/register', [
  'uses' => 'SignUpController@store',
  'as' => 'register.store'
]);
~~~

### route url
~~~html
{% raw %}
<a href="{{route('home')}}">Home</a>
{% endraw %}
~~~

