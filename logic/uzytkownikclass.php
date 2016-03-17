<?php 

class uzytkownik
{
  public $handler;
  public function connection()
  {
    $this->handler = new PDO('mysql:host=localhost;dbname=harmless_blog', 'harmless_root', 'mlnot123',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    if($this->handler==false)
    {
      echo 'Blad';
    }
    
  }



  public function redirect($url)
  {
    header("Location: $url");
  }



    public function dodaj($email,$login,$haslo,$activation)
  {
              if($email==null)
                    {
              echo 'Wprowadz email!';
              exit();
                    }
              if($login==null)
                    {
              echo 'Wprowadz login!';
              exit();
                    }
              if($haslo==null)
                    {
              echo 'Wprowadz haslo!';
              exit();
                    }  
                    $new_password = password_hash($haslo, PASSWORD_DEFAULT);   
                    $activation=md5($email.time());              
    $stmt = $this->handler->prepare('INSERT INTO users (email,login,haslo,activation,czas) VALUES (:email, :login, :haslo, :activation, NOW())');
    $stmt->bindValue(':email',$email, PDO::PARAM_STR);
    $stmt->bindValue(':login',$login, PDO::PARAM_STR);
    $stmt->bindValue(':haslo',$new_password, PDO::PARAM_STR);
    $stmt->bindValue(':activation',$activation, PDO::PARAM_STR);
    $stmt->execute(); 
    $to=$email;
    $subject='E-mail verification';

     $txt = "Welcome! We need to make sure you are human. Please verify your email and get started using your Website account. http://www.xxa.xaa.pl/activation/activation.php?code=".$activation."";
    $headers="From: kikiengine123@gmail.com";
    mail($to,$subject,$txt,$headers);
    
  }



  public function logowanie($email1,$haslo1)
  {
  
    try
    {
      $stmt = $this->handler->prepare("SELECT id, login, email, haslo FROM users WHERE email=:email1");
      $stmt->bindValue(':email1',$email1, PDO::PARAM_STR);
      $stmt->execute();
      $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
     
      
      if($stmt->rowCount() == 1)
      {

          
                                                                                                                                               
        if(password_verify($haslo1, $userRow['haslo']))
        {
      $stmt = $this->handler->prepare("SELECT id, login, email, haslo, czas FROM users WHERE email=:email1 AND status='1'");
      $stmt->bindValue(':email1',$email1, PDO::PARAM_STR);
      $stmt->execute();
      $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
      if($stmt->rowCount()==1)
          {

          $_SESSION['nickname'] = $userRow['login'];
          $_SESSION['user_session'] = $userRow['id'];
          $_SESSION['email_session'] = $userRow['email'];
          $_SESSION['czas_session'] = $userRow['czas'];
          
          echo 'true';
         
          }
          else
          {
            echo 'notactivated';
          }
          
          
        }
        else
        {
         
          
         
          echo 'false';
         
          
        }
      }
      else
      {
                  
          echo 'false';
          
      }
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }
  
    public function is_loggedin()
  {
    if(isset($_SESSION['user_session']))
    {
      return true;
    }
  }
  public function doLogout()
  {
    session_destroy();
    unset($_SESSION['user_session']);
    return true;
  }
  public function hasRole($rola)
  {
    

      if(isset($_SESSION['email_session']))
      {
        
      
    $email=$_SESSION['email_session'];
    /*SELECT COUNT(*) FROM users INNER JOIN rolausera ON users.id = idusera INNER JOIN rola ON idroli = rola.id WHERE email = 'kikiengine123@gmail.com' AND rola.id = 'Administrator' */
    $stmt = $this->handler->prepare('SELECT COUNT(*) FROM users INNER JOIN rolausera ON users.id = idusera INNER JOIN rola ON idroli = rola.id WHERE email = :email AND rola.id = :rola');
    $stmt->bindValue(':email',$email, PDO::PARAM_STR);
    $stmt->bindValue(':rola',$rola, PDO::PARAM_STR);
    $stmt->execute(); 
    $result = $stmt->fetch();
    if($result[0]>0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
    }
  }
  public function getPass($sql)
{
   try
   {
  $tmp = new PDO('mysql:host=localhost;dbname=harmless_blog', 'harmless_root', 'mlnot123',array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

$stmt = $tmp->prepare($sql);
 $stmt->execute(); 

            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row)
{
  $pass=$row['haslo'];
}

}
   catch(PDOException $e)
    {
      echo $e->getMessage();
    }
return $pass;
}
public function updatePass($sql)
{
  $tmp = new PDO('mysql:host=localhost;dbname=harmless_blog', 'harmless_root', 'mlnot123',array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

$stmt = $tmp->prepare($sql);
 $stmt->execute(); 
if($stmt==true)
{
  return true;
}
else
{
  return false;
}
}
public function getUsers($sql)
{
   try
   {
  $tmp = new PDO('mysql:host=localhost;dbname=harmless_blog', 'harmless_root', 'mlnot123',array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

$stmt = $tmp->prepare($sql);
 $stmt->execute(); 

            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);


}
   catch(PDOException $e)
    {
      echo $e->getMessage();
    }
return $result;
}
}

 ?>