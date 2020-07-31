<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
  <!-- material icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
  <div class="container">
    <header>
      <div class="row justify-content-center">
        <nav class="col-10 d-flex justify-content-center">
          <div id="nav_wrap" class="d-flex justify-content-between px-5">
            <h1>Takeda farm</h1>
            <span class="material-icons md-36">menu</span>
          </div>
        </nav>
      </div>
      <h1 id="title">うまい</br>野菜</h1>
    </header>
    <main>
      <section id="main_message" class="row justify-content-center">
        <div class="col-10 col-md-10">
          <div class="text-center">
            <h1>おいしい野菜</h1>
            <p>鮮度が良ければ野菜はおいしいです。</br>当たり前だと思うかもしれませんが、実際に採れたてを味わう機会はなかなかありません。</br>武田農園ではその当たり前のことを満たした野菜を提供しています。</br>是非その日に採れた野菜をその日のうちに召し上がってみてください。やみつきになります。</p>
          </div>
        </div>
      </section>
      
      <section id="news" class="row justify-content-center">
        <div class="col-10 col-md-10">
          <div class="text-center">
            <h1>最新情報</h1>
            <p>野菜の販売に関する情報などをお届けします。</p>
          </div>
          <div id="news_list" class="w-75 mx-auto">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">更新日</th>
                  <th scope="col">ニュース</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2020/07/29</td>
                  <td><a href="#">とうきびの販売が始まりました</a></td>
                </tr>
                <tr>
                  <td>2020/06/30</td>
                  <td><a href="#">アスパラの販売は終了しました</a></td>
                </tr>
                <tr>
                  <td>2020/07/29</td>
                  <td><a href="#">アスパラの販売は6月30日までです</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      
      <section id="product" class="row justify-content-center">
        <div class="col-10 col-md-10">
          <div class="text-center">
            <h1>野菜の種類</h1>
            <p>武田農園で栽培している野菜の種類です。</br>季節やその年によって変更となる場合がございます。</p>
          </div>
          <h1 class="text-center">春シーズン（５月中旬〜６月中旬）</h1>
          <div id="spring_cards" class="d-flex flex-wrap justify-content-between w-75 pt-3 mx-auto">
            <div class="card mb-3" style="width: 45%;">
              <img class="card-img-top" src="images/onion.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">アスパラ</h5>
                <p class="card-text">春の代表となっているアスパラです。</p>
              </div>
            </div>
            <div class="card mb-3" style="width: 45%;">
              <img class="card-img-top" src="images/onion.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Onion</h5>
                <p class="card-text">onion. onion. onion. onion. onion. onion. onion. onion.</p>
              </div>
            </div>
          </div>
          <h1 class="text-center">秋シーズン（９月中旬〜１０月中旬）</h1>
          <div id="autumn_cards" class="d-flex flex-wrap justify-content-between w-75 pt-3 mx-auto">
            <div class="card mb-3" style="width: 45%;">
              <img class="card-img-top" src="images/onion.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">とうきび</h5>
                <p class="card-text">onion. onion. onion. onion. onion. onion. onion. onion.</p>
              </div>
            </div>
            <div class="card mb-3" style="width: 45%;">
              <img class="card-img-top" src="images/onion.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">長ネギ</h5>
                <p class="card-text">onion. onion. onion. onion. onion. onion. onion. onion.</p>
              </div>
            </div>
            <div class="card mb-3" style="width: 45%;">
              <img class="card-img-top" src="images/onion.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">onion. onion. onion. onion. onion. onion. onion. onion.</p>
              </div>
            </div>
            <div class="card mb-3" style="width: 45%;">
              <img class="card-img-top" src="images/onion.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Onion</h5>
                <p class="card-text">onion. onion. onion. onion. onion. onion. onion. onion.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section id="access" class="row justify-content-center">
        <div class="col-10 col-md-10">
          <div class="row">
            <div id="map" class="col-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2880.2510215398743!2d143.68534714594472!3d43.78840402316278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f72abee34376def%3A0x6efcf48b5366073f!2z44CSMDk5LTA4NzMg5YyX5rW36YGT5YyX6KaL5biC6KW_55u45YaF77yR77yZ77yS!5e0!3m2!1sja!2sjp!4v1595988865533!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div id="address" class="col-6">
              <p>〒099-0873 北海道北見市西相内192</p>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
  
</body>
</html>