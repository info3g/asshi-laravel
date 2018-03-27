<p align="center">1. clone git</p>


<p align="center">2. composer install</p>

<p align="center">3. php artisan key:generate</p>
<p align="center">4. php artisan migrate</p>


<p align="center">5. all results </p>
request type Get  <p>
http://localhost:8000/public/test
</p>

<p align="center">6. Single results by id </p>
request type Get  <p>
http://localhost:8000/public/test/{id}
</p>
<p align="center">7. creat a new recored</p>
request type Post   <p>
http://localhost:8000/public/test/
</p>
see screenshot http://prntscr.com/iwvvaj

<p align="center">8. Single results update by id </p>
request type Get  <p>
http://localhost:8000/public/test/{id}/edit
</p>

<p align="center">9. update a  recored by id</p>
request type update/patch  <p>
http://localhost:8000/public/test/{id}
</p>


<p align="center">9. delete a  recored by id</p>
request type delete   <p>
http://localhost:8000/public/test/{id}
</p>

