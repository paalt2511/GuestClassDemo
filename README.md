**Guest Class**

* Created Guest Class under Hotel namespace.
* Moved Database connection at single point
* Following PSR standards
* using PDO for database operations


**How to use**

* System Requirement: Apache2, PHP (7.x or higher), MySQL (5.x or higher)
* unzip code and copy extracted data to you www/htdocs folder of apache
* create an empty database named `guest_records` and 
* update Hotel/Repositories/DB.php file with your database details
* now hit the url in browser (e.g. http://localhost/GuestClass)


**Basic usage**

```
use Hotel\Guest;

$guest = new Hotel\Guest();

$guest->addGuest(array('name'=> 'User', 'address' => 'My Address', 'phone' => '+1-943-648-8239', 'email' => 'user@hotel.com'));
```


**Tests**
You can also execute test by hitting

```
$ php Test.php
```
or by visiting http://localhost/GuestClass/Test.php