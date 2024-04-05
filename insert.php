<?php
//1. POSTデータ取得
//[name,cuntryarea,genre,text]
$name = $_POST["name"];
$countryarea = $_POST["countryarea"];
$genre = $_POST["genre"];
$text = $_POST["text"];

// $fields = [$name, $countryarea, $genre, $text];
// var_dump($fields);
// exit();
// // 中身の確認、何も入ってない場合はエラーを表示
// $errors = [];
// // var_dump($errors);
// // exit();

// foreach ($fields as $field) {

//   if (empty($field)) {
//     $errors[] = '<div class="error1">必須項目に入力してください<br></div>';
//   }
// }
// // // 配列の中身を確認するのは以下
// // //  var_dump($errors);
// // //  exit();

// // // エラーメッセージがあれば表示
// if ($errors) {
//   foreach ($errors as $error) {
//     echo $error;
//   }
//   echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">前に戻る</a>';
// } else{





//   function db_conn()
//   {
//     try {
//       $db_name = 'loveindia_request'; 
//       // データベース名
//       $db_host = 'mysql647.db.sakura.ne.jp';
//       // DBホスト
//       $db_id = 'loveindia.jp';
//       // アカウント名
//       $db_pw = '0122lisa';
//       // さくらサーバーのpw

//       $server_info ='mysql:dbname='.$db_name.';charset=utf8;host='.$db_host;
//       $pdo = new PDO($server_info, $db_id, $db_pw);
//     } catch(PDOException $e)  {
//       exit('DB Connection Error;' . $e->getMessage());
//     }
//   }
//   //SQLエラー
// function sql_error($stmt)
// {
//     //execute（SQL実行時にエラーがある場合）
//     $error = $stmt->errorInfo();
//     exit('SQLError:' . $error[2]);
// }

  // try {
  //   //Password:MAMP='root',XAMPP=''
  //   // pdo= PHP data object さくらサーバー使用する際はhostとpw をへんこうする
  //   $pdo = new PDO('mysql:dbname=kadai_db_08;charset=utf8;host=localhost', 'root', '');
  // } catch (PDOException $e) {
  //   exit('DB_CONECT:' . $e->getMessage());
  // }
    //2. DB接続します
  try {
    //Password:MAMP='root',XAMPP=''
    $pdo = new PDO('mysql:dbname=;charset=utf8;host=','','');
  } catch (PDOException $e) {
    exit('DBConnection Error:'.$e->getMessage());
  }


  //３．データ登録SQL作成
  $sql = "INSERT INTO request_table(id,name,countryarea,genre,text,indate)VALUES(NULL,:name,:countryarea,:genre,:text,sysdate())";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':countryarea', $countryarea, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':genre', $genre, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':text', $text, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $status = $stmt->execute();      //true or faluseが入る

  // //４．データ登録処理後
  if ($status == false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("SQL_ERROR:" . $error[2]);
  } else {
    //５．index.phpへリダイレクト
    header("Location:select.php");
    exit();
  }


?>
