<?php

class User {
  public $name;
  public $lastname;
  public $email;
  public $username;
  public $password;

  public function __construct($_username, $_email, $_password)
  {
    $this->username = $_username;
    $this->email = $_email;
    $this->password = $_password;
  }

};



$user1 = new User("d_patane", "danilopatane98@tiscali.it", "passwordDanilo", "impiegato");
$user2 = new User("francsar", "francescosardo@hotmail.com", "passwordFra", "non impiegato");
$user3 = new User("giusepfra", "giuseppe.francesco@gmail.com", "passwordGiuseppe", "impiegato");

$users = [$user1, $user2, $user3];

class Impiegato extends User
{
  public $impiegato;

  public function impiegatoData ($_impiegato) {
    $this->impiegato = $_impiegato;
  };
};
$impiegato1 = new User("d_patane", "danilopatane98@tiscali.it", "passwordDanilo", "impiegato");
$impiegato2 = new User("francsar", "francescosardo@hotmail.com", "passwordFra", "non impiegato");
$impiegato3 = new User("giusepfra", "giuseppe.francesco@gmail.com", "passwordGiuseppe", "impiegato");
$impiegato1-> impiegatoData("Impiegato");
$impiegato2-> impiegatoData("Impiegato");
$impiegato3-> impiegatoData("Impiegato");
$impiegati = [$impiegato1, $impiegato2, $impiegato3];


?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php-oop-1</title>
     <link rel="stylesheet" href="style.css">
   </head>
   <body>
     <div class="row">

       <div class="col-4">
         <h2>USERNAME</h2>
         <?php foreach ($impiegati as $lavoratori ){?>
         <p><?php echo $lavoratori->username ?> <span></span>  </p>
       <?php } ?>
       </div>
       <div class="col-4">
         <h2>EMAIL</h2>
         <?php foreach ($impiegati as $lavoratori ){?>
         <p><?php echo $lavoratori->email ?></p>
       <?php } ?>
       </div>
       <div class="col-4">
         <h2>PASSWORD</h2>
         <?php foreach ($impiegati as $lavoratori ){?>
         <p><?php echo $lavoratori->password ?></p>
       <?php } ?>
       </div>
   </div>

   </body>
 </html>
