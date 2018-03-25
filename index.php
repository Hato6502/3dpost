<html>
	<head>
		<link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<script type="text/javascript" src="jsc3d/jsc3d.js"></script>
		<script type="text/javascript" src="jsc3d/jsc3d.webgl.js"></script>
		<script type="text/javascript" src="jsc3d/jsc3d.touch.js"></script>

		<?php if (isset($_GET['msg'])){ ?>
			<script>
$(function(){
	alert("<?php echo $_GET['msg']; ?>");
});
			</script>
		<?php } ?>
	</head>
	<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">〒 3D POST</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <!--<ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>-->
  </div>
</nav>
		<head>
			<div class="jumbotron" style="background-image: url('img/header.jpg'); background-size: cover; background-position: center; box-shadow: 0 2px 2px rgba(0,0,0,0.4); ">
				<h1 class="display-2 text-center">
					<span class="text-primary">〒</span>
					3D POST
				</h1>
				<h2 class="lead text-center">3D データを投函するサイト。</h2>
				<p class="lead text-center">まだ、開発者 (<a href="https://twitter.com/bluehood_admin/">@bluehood_admin</a>) にしか送れないけどね。</p>
				<!--<div class="text-center">
					<div class="d-inline-block card bg-light border-primary" style="max-width: 320px; ">
						<div class="card-header">
							1. 3D データを投函。
						</div>
						<img src="img/post_tegami_toukan.png" style="height: 12em; ">
					</div>
					<div class="d-inline-block card bg-light border-primary" style="max-width: 320px; ">
						<div class="card-header">
							2. 3D データを投函。
						</div>
						<img src="img/3d_printer.png" style="height: 12em; ">
					</div>
				</div>-->
			</div>
		</head>
		<article>
			<section class="container text-center">
				<img src="img/post_tegami_toukan.png" style="float: right; width: 240px; ">
				<div class="d-inline-block text-left">
					<h3 class="display-4">3D 造形物を送る。</h3>
					<p>いままで、自分で 3D データをダウンロードしたり、設計したりしてプリントしていました。<br>
					自分で指示して 3D プリンタを動かすのではなく、<br>まるで郵便ポストのように 3D データを受け取ったり差し出したりできたら、<br>面白そうですよね。
					</p>
				</div>
				<div style="clear: both; "></div>
			</section>
			<br>
			<br>
			<br>
			<!--<hr>
			<section class="container text-center">
				<img src="img/3d_printer.png" style="float: left; width: 240px; ">
				<div class="d-inline-block text-left">
					<h3 class="display-4">3D プリンタを IoT 化。</h3>
					<p>3D プリンタを、まるで FAX のようにインターネットにつなぐことが理想です。<br>
					しかし、いまある 3D プリンタ をそのまま IoT 化するのではなく、管理するためのサーバーが必要です。<br>
					それが、このサイトです。</p>
				</div>
				<div style="clear: both; "></div>
			</section>-->
			<!--<hr>
			<section class="container">
				<h3>で、どうするの?</h3>
				<p>3D プリンタを IoT 化するには多くの課題があります。<br>
				たとえば、プリントして出来上がった造形物を取り出さないまま、次のものをプリントしだしたら大変です。<br>
				また、オフィスのプリンタのように一日中電源を入れておかなければなりません。<br>
				そのほか、夜中の騒音問題など、課題を挙げればキリがありません。</p>
				<p>……となると、朝に 3D プリンタの電源を入れて出社・登校し、<br>
				帰ってきたころに造形物が出来上がっているといいのかもしれません (笑) 。<br>
				1 日 1 個くらいしかプリントできませんね。<br>
				それでも、3D 造形物が届いたらうれしいものでしょう、きっと。</p>
			</section>
			<hr>
			<section class="container">
				<h3>と、いうわけで。</h3>
				<p>私の家庭用 3D プリンタ「Da Vinci Jr. 1.0」を IoT 化してみました！<br>
				なにか、面白い 3D データをください。他人まかせ (笑)  。<br>
				私は、プリントがおわるまでどんな造形物かわかりません。<br>
				造形物の大きさによっては受取拒否するかも……<br>
				もしかしたら、<a href="https://twitter.com/bluehood_admin/">Twitter</a>でも受取報告させていただくかも。
				</p>
			</section>-->
			<section class="container">
					<div class="jumbotron text-center">
					<h3 class="display-4"><span class="text-primary">〒</span>3D POST 投函口</h3>
					<form method="post" action="send.php" enctype="multipart/form-data">
						<div class="form-group">
							<label for="form-name">名前<small> (任意、ニックネームでもなんでも可)</small></label><br>
							<input type="text" class="form-control d-inline" id="form-name" name="name" placeholder="グレたノコノコ" style="max-width: 320px; ">
						</div>
						<div class="form-group">
							<label for="form-msg">メッセージ<small> (任意)</small></label><br>
							<input type="text" class="form-control d-inline" id="form-msg" name="msg" placeholder="ミッミッ！　クワァ〜メミッミッ！　ポコンポコン♪　メェ〜〜……グワァ！！　ボコボコボコ……" style="max-width: 640px; ">
						</div>
						<div class="form-group">
							<label for="form-3ddata">3D データ <small>(stl ファイル)</small></label><br>
							<input required type="file" class="form-control-file d-inline" id="form-3ddata" name="3ddata" accept=".stl" style="max-width: 320px; ">
							<!--<canvas id="3d-preview"></canvas>
							<script>
var viewer = new JSC3D.Viewer(document.getElementById('3d-preview'));
        viewer.setParameter('SceneUrl',         'cube.obj');
        viewer.setParameter('ModelColor',       '#CAA618');
        viewer.setParameter('BackgroundColor1', '#E5D7BA');
        viewer.setParameter('BackgroundColor2', '#383840');
        viewer.setParameter('RenderMode',       'flat');
        viewer.init();
        viewer.update();
							</script>-->
						</div>
						<div class="form-group">
							<label for="form-privacy"><a href="#report">受取報告</a>をしてもよろしいですか？<br>お名前、メッセージ、3D 造形物を紹介するかもしれません。<small>(任意)</small></label>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="form-privacy" name="privacy">
								<label class="form-check-label" for="form-privacy">はい</label>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">投函する</button>
					</form>
				</div>
			</section>
			<section class="container" id="report">
				<div class="jumbotron text-center">
					<h3 class="display-4">受取報告</h3>
					いまのところ、受取はありません。<br>
					投函待ってます！
				</div>
			</section>
			<!--<section class="container">
				<h4>開発後記</h4>
				<p>私の家庭用 3D プリンタ「Da Vinci Jr. 1.0」を IoT 化してみました！<br>
				なにか、面白い 3D データをください。他人まかせ (笑)  。<br>
				私は、プリントがおわるまでどんな造形物かわかりません。<br>
				しかし、造形物の大きさによっては受取拒否するかもしれません。<br>
				</p>
			</section>-->
		</article>
	</body>
</html>
