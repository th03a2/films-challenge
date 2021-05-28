## Movies challenge – Backend

Clone this project and <b>Run on your terminal</b> the following command:
 <li> $ cp .env.example .env</li>
 <li>$ composer install</li>
 <li>$ php artisan key:generate</li>
 <li>$ php artisan storage:link</li>

## Serve the API

Create Database name <b>'movies'</b> and run the following code on the terminal:
<li>php artisan migrate --seed</li>
<li>php artisan serve</li>
<br>
*** you can now checks the API available.

## API endpoints
<li>GET /favorites?user=:user_id - return that the user has previously favoritted.</li>
        <p>eg: http://127.0.0.1:8000/api/favorites?user=1</p>
<li>POST /favorite/:id?user=:user_id - add a favorite movie</li>
<p>eg: http://127.0.0.1:8000/api/favorites/4?user=1</p>
<li>GET /movies?search={search} - return popular movies or what the user searched for</li>
<p>eg: http://127.0.0.1:8000/api/movies?search=king</p>
<li>GET /movies/:id - return that specific movie in detail</li>
<p>eg: http://127.0.0.1:8000/api/movies/4</p>
<br>
You can use Postman to check all Available API.


## Thank you!!!

Hope you find more interesting in my coding style..
I am also looking forward to joining you guys and getting started.

##Tomas B. Pajarillaga Jr. RMT, RN
