<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>リクエストしたい</title>
</head>
<body id="home">
  <hedader>
  <h1>曲やミュージックビデオのリクエストフォーム</h1>
  </hedader>
    <main>
        
        <form method="POST" action="insert.php">
            
            <label class="name">名前（ニックネーム可能）:<input type="text" name="name"></label><br>
            <label class="music">リクエストしたい地域の曲  :</label>
            <select name="countryarea">
                <option value="">選択してください</option>
                <option value="North America">北米</option>
                <option value="South America">南米</option>
                <option value="North Europe">北欧</option>
                <option value="West Europe">西欧</option>
                <option value="East Europe">東欧</option>
                <option value="South Europe">南欧</option>
                <option value="North Africa">北アフリカ</option>
                <option value="West Africa">西アフリカ</option>
                <option value="East Africa">東アフリカ</option>
                <option value="South Africa">アフリカの南</option>
                <option value="North Asia">北アジア</option>
                <option value="West Asia">西アジア</option>
                <option value="Centre Asia">中央アジア</option>
                <option value="East Asia">東アジア</option>
                <option value="Southeast Asia">東南アジア</option>
                <option value="South Asia">南アジア</option>
            </select><br>
            <label class="genre">ジャンル： </label>
            <select name="genre">
            <option value="">選択してください</option>
                <option value="rb">RB&Seoul</option>
                <option value="rock">Rock</option>
                <option value="pop">POP</option>
                <option value="clasic">クラシック</option>
                <option value="blues">ブルース</option>
                <option value="Country">カントリー</option>
                <option value="folk">フォーク</option>
                <option value="hiphop">ヒップホップ</option>
                <option value="jazz">Jazz</option>
                <option value="metal">メタル</option>
                <option value="Punk">パンク</option>
                <option value="Anime">アニソン</option>
        </select><br>
        <label class="artist">曲名、アーティスト名等分かれば記入お願いします！
            <input type="textarea" name="text">
        </label><br>
     <button input type="submit">送信</button>
                
           

        </form>
      
    </main>
    <footer></footer>
</body>
</html>