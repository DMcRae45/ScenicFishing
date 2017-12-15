<?php

    //try{
      //  $host ='studentnet.dundeeandangus.ac.uk';
     //   $dbname = 'db_1622686';
     //   $username = '1622686';
     //   $password = 'Password45';

    //    $pdo = new PDO ('mysql:host='.$host.';dbname='.$dbname.';charset=UTF8',$username,$password);
    //    //echo "Connection Successful"; 
        
    //} catch (PDOException $ex)
    //{
        //Die("Connection Failed");
    //}
    
    try{
        $host ='studentnet.dundeeandangus.ac.uk';
        $dbname = 'db_1622686';
        $un = '1622686';
        $pw = 'Password45';

        $pdo = new PDO ("mysql:host=$host;dbname=$dbname;charset=UTF8",$un,$pw);
        //echo "Connection Successful"; 
        
    } catch (PDOException $ex)
    {
        Die("Connection Failed");
    }

