<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Go to Travel</title>
</head>
<body>
<header>
  <section class="header">
    <div class="header-nav">
      <ul class="nav">
        <li><a href="#malta">Malta</a></li>
        <li><a href="#australia">Australia</a></li>
        <li><a href="#philippine">philippine</a></li>
      </ul>
    </div>
    <div class="img-text">
      <h1>
        Go to Travel
      </h1>
    </div>
  </section>
</header>
<main>
  <div class="container">
    <div class="main-title">
      <h1>My Recommend Countries</h1>
    </div>
    <div class="main-countries">
      <div class="cards" id="malta">
        <div class="card-img">
          <img src="./assets/img/malta-popeye-village.jpg" alt="">
        </div>
        <div class="card-contents">
          <div class="card-text">
            <h2>Malta</h2>
            <p>マルタ共和国は、南ヨーロッパの共和制国家で、イギリス連邦およびEU加盟国でもあります。公用語は英語とマルタ語、通貨はユーロ、首都はバレッタの地中海中心部の小さな島国です。日本人からはあまり馴染みの少ない国ですが、美しい海に囲まれ、豊かな自然や歴史を持った魅力的な国です。近年では語学留学先としてとても人気を集めています。日本からは乗り継ぎで約1日かかりますが、時間をかけてでもぜひ行ってみたい魅力のある国です。</p>
          </div>
          <div class="card-readMore">
            <a href="#">More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="main-countries">
      <div class="cards" id="australia">
        <div class="card-img">
          <img src="./assets/img/australia-koala.jpg" alt="">
        </div>
        <div class="card-contents">
          <div class="card-text">
            <h2>Australia</h2>
            <p>オーストラリはオセアニアに位置する国で、首都はキャンベラー、最大の都市はシドニーです。世界遺産も多数あり、都市部から少し移動すれば、雄大な自然や珍しい動物たちと出会うこともできます。季節は日本と真逆なので、日本が冬の時期にオーストラリアは夏を迎えることになります。また、世界各国からの移民が多く、様々な国文化を感じることができます。食文化も豊かで各国の料理を堪能することができ、ワインも有名です。穏やかでゆったりとした時間を過ごすことができます。</p>
          </div>
          <div class="card-readMore">
            <a href="#">More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="main-countries">
      <div class="cards" id="philippine">
        <div class="card-img">
          <img src="./assets/img/philippine-kawasan.jpg" alt="">
        </div>
        <div class="card-contents">
          <div class="card-text">
            <h2>philippine</h2>
            <p>フィリピンは7,000以上の島からなる東南アジアに位置する国で、マニラが首都です。また、1年を通じて高温多湿なので、ずっと日本の夏の格好で過ごすことができます。セブ島やボラカイ島、ボホール島などをはじめ、多数のリゾートアイランドがあります。ビーチでのんびりしたり、ダイビングを楽しんだり、アイランドホッピングに行ったりすることができます。都市部に行けば、大型ショッピングモールもあるため、そこでショッピングを楽しんだり、お土産探しもすることができます。日本からの直行便も多く、約5時間で着くので、気軽にいきやすい国です。</p>
          </div>
          <div class="card-readMore">
            <a href="#">More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<footer>
  <div class="footer-top">
    <div class="flags">
      <a href="#">
        <img src="./assets/img/Flag_of_Malta.svg" alt="">
      </a>
      <p>Malta</p>
    </div>
    <div class="flags">
      <a href="#">
        <img src="./assets/img/flag-of-australia.jpg" alt="">
      </a>
      <p>Australia</p>
    </div>
    <div class="flags">
      <a href="#">
        <img src="./assets/img/philippine.png" alt="">
      </a>
      <p>Philippine</p>
    </div>
  </div>
  <div class="footer-middle">
    <div class="contact-left">
      <h1>CONTACT ME</h1>
      <p>お気軽にお問い合わせください</p>
      <p>Please feel free to contact me</p>
    </div>
    <div class="contact-right">
      <h1>お問い合わせ情報入力</h1>
      <form method="POST" action="check.php">
        <div class="info">
            お名前<br>
            <input type="text" name="name" style="width:295px">
        </div>
        <div class="info">
            メールアドレス<br>
            <input type="text" name="email" style="width: 295px">
        </div>
        <div class="info">
            お問い合わせ内容<br>
            <textarea name="comment" cols="40" rows="5"></textarea>
        </div>
        <input class="submit" type="submit" value="送信する">
      </form>
    </div>
  </div>
  <div class="footer-bottom">
    <p>
      © 2021 - Original Site All Rights Reserved.
    </p>
  </div>
</footer>
</body>
</html>
