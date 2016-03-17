<?php 
require $_SERVER['DOCUMENT_ROOT'].'/logic/uzytkownikclass.php';
$user = new uzytkownik;
$user->connection();
class web extends uzytkownik
{

public function navbarCheck()
{
             if($this->hasRole('Administrator'))
            {
              include $_SERVER['DOCUMENT_ROOT'].'/assets/loggedadminnav/navbar.php';
            }
            else
            {


                  if($this->is_loggedin())
                  {
                    
                  include $_SERVER['DOCUMENT_ROOT'].'/assets/loggednav/navbar.php';
                  }
                  else
                  {
                    include $_SERVER['DOCUMENT_ROOT'].'/assets/unloggednav/navbar.php';
                  }
}
}

public function sessionInfo()
{

              if(isset($_SESSION['poprawna_rejestracja']))
              {
                echo '<div class="container">';
                echo $_SESSION['poprawna_rejestracja'];
                echo '</div>';
                unset($_SESSION['poprawna_rejestracja']);
              }
              if(isset($_SESSION['nieudana_rejestracja']))
              {
                echo '<div class="container">';
                echo $_SESSION['nieudana_rejestracja'];
                echo '</div>';
                unset($_SESSION['nieudana_rejestracja']);
              }
    if(isset($_SESSION['brak_news']))
    {
        echo '<div class="container">';
        echo $_SESSION['brak_news'];
        echo '</div>';
        unset($_SESSION['brak_news']);
    }
}
public function addPost($text)
{
      $tmp = new PDO('mysql:host=localhost;dbname=harmless_blog', 'harmless_root', 'mlnot123',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    if($tmp==false)
    {
      echo 'Blad';
    }
  if($text==NULL)
  {
    echo 'Wprowadz text';
    exit();
  }
if(isset($_SESSION['user_session']))
{
  $id=$_SESSION['user_session'];
   $stmt = $tmp->prepare('INSERT INTO opinie (tresc,czas,idusera) VALUES (:tresc, NOW(), :idusera)');
    $stmt->bindValue(':tresc',$text, PDO::PARAM_STR);
    $stmt->bindValue(':idusera',$id, PDO::PARAM_STR);
    $stmt->execute(); 
    $this->redirect('../');
  }
  else
  {
    echo 'Error. Please contact with owner. E-mail: kikiengine123@gmail.com';
  }

}
public function editVar($column,$text,$id)
{
      $tmp = new PDO('mysql:host=localhost;dbname=harmless_blog', 'harmless_root', 'mlnot123',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    if($tmp==false)
    {
      echo 'Blad bazy';
    }


 
   $stmt = $tmp->prepare('UPDATE users SET '.$column.'=:text WHERE id=:id');
    $stmt->bindValue(':text',$text, PDO::PARAM_STR);
    $stmt->bindValue(':id',$id, PDO::PARAM_STR);
    $stmt->execute(); 
    



}

    public function getNews()
    {
        $tmp = new PDO('mysql:host=localhost;dbname=harmless_blog', 'harmless_root', 'mlnot123',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        if($tmp==false)
        {
            echo 'Blad bazy';
        }
        $stmt = $tmp->prepare('SELECT news.id AS NewsId,news.tresc,news.data,news.idusera,news.tytul,users.id ,users.login FROM news INNER JOIN users ON users.id =news.idusera');
        $stmt->execute();
        $newsRow=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $newsRow;

    }
    public function getSingleNews($id)
    {
        $tmp = new PDO('mysql:host=localhost;dbname=harmless_blog', 'harmless_root', 'mlnot123',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        if($tmp==false)
        {
            echo 'Blad bazy';
        }
        $stmt = $tmp->prepare('SELECT news.*,users.id,users.login FROM news INNER JOIN users ON users.id=news.idusera WHERE news.id=:id');
        $stmt->bindValue(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
        $newsRow=$stmt->fetch(PDO::FETCH_ASSOC);
        return $newsRow;

    }

}
 ?>