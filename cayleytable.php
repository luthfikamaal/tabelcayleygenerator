<?php 

if(count($_GET) == 0){
	echo "kosong";
	return false;
} else if(count($_GET) == 2){
	$data = $_GET['grupz'];
} else {
	echo '404 Not Found';
	return false;
}

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabel Cayley</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

	<style type="text/css">
		body {
		    background-color: #F1F4F9;
		}

		table {
			background-color: #fff;
		}
		td, tr {
			border: 1px solid black;
			text-align: center;
		}
		.top {
			background-color: #eaeaea;
			font-weight: bold;
		}
		td {
			padding: 1px 3px;
		}
	</style>
</head>
<body>

<div class="container mt-3">
	<div class="mb-3">
		<a href="index.php" class="btn btn-primary"><i class="bi bi-arrow-left me-2"></i>Kembali</a>
	</div>
	<div class="row">
		<div class="col-md-5 mb-3">
			<div class="card border-0 shadow-sm">
				<div class="bg-white card-header">
					Tabel Cayley
				</div>
				<div class="card-body">
					<div class="input-group mb-3">
						Grup <span class="mx-1">$\displaystyle Z_{<?= $data ;?>}$</span> terhadap operasi <?= $_GET['operasi'] ;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<?php if($_GET['operasi'] == 'penjumlahan'){ ?>
	<table>
		<tr>
			<td>+</td>
			<?php for($i = 0; $i < $data; $i++):?>
				<td class="top px-2"><?= $i ;?></td>
			<?php endfor; ?>
		</tr>
		
		<?php for($k = 0; $k < $data; $k++):?>
			<tr>
				<td class="top px-2"><?= $k ;?></td>
				<?php for($j = $k; $j < $k + $data; $j++): ?>
					<td class="px-2"><?= $j % $data ;?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
<br>
<?php } else if($_GET['operasi'] == 'perkalian') {?>
<table>
	<tr>
		<td>*</td>
		<?php for($m = 0; $m < $data; $m++):?>
			<td class="top px-2"><?= $m ;?></td>
		<?php endfor; ?>
	</tr>
	
	<?php for($n = 0; $n < $data; $n++):?>
		<tr>
			<td class="top px-2"><?= $n ;?></td>
			<?php for($o = 0; $o < $data; $o++): ?>
				<td><?= ($n * $o) % $data ;?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
</table>
<?php } else { ?>
	<div class="container pt-3">
		<div class="alert alert-danger" role="alert">
			404 Not Found
		</div>
	</div>
<?php } ?>
</div>

<!-- footer -->
<div class="container border-y">
    <div class="row">
      <div class="col-md-12">
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <div class="card border-0 shadow-sm">
          <div class="card-header bg-white">
            Quote
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p><i class="bi bi-hand-thumbs-up-fill"></i></p>
              <footer class="blockquote-footer">Si Fulan</footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <div class="card border-0 shadow-sm">
          <div class="card-header bg-white">
            Oke
          </div>
          <div class="card-body">
            <div class="mb-3">
              <a href="https://instagram.com/luthfikml_/" target="_blank" class="btn btn-danger btn-instagram"><i
                  class="bi bi-instagram"></i></a>
              <a href="https://github.com/luthfikamaal/" target="_blank" class="btn btn-dark"><i
                  class="bi bi-github"></i></a>
              <a href="#" target="_blank" class="btn btn-success"><i class="bi bi-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="text-center">Created by <strong>Muhammad Luthfi Kamal</strong></p>
  </div>
<!-- footer -->

<script>
	  MathJax = {
	    tex: {
	      inlineMath: [
	        ['$', '$'],
	        ['\\(', '\\)']
	      ]
	    }
	  };
	  </script>
	  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js">
	  </script>

</body>
</html>