<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Home | Buat Tabel Cayley</title>
    <style type="text/css">
    	body {
		    background-color: #F1F4F9;
		}
    </style>
  </head>
  <body>
    
  	<div class="container mt-3">
  		<div class="card border-0 shadow-sm">
  			<div class="card-body">
  				<div class="row">
  					<div class="col-md-5">
  						<h2>Buat Tabel Cayley</h2>
  						<form action="cayleytable.php" method="get">
				  			<div class="mb-3">
				  				<label class="form-label" for="grupz">Grup</label>
				  				<select class="form-select" id="grupz" name="grupz">
									<?php for($a=1; $a <= 100; $a++): ?>
										<option value="<?= $a ;?>">$Z_<?= $a ;?>$</option>
									<?php endfor; ?>
								</select>
					  		</div>
					  		<div class="mb-3">
					  			<label class="form-label d-block">Operasi</label>
					  			<input class="form-check-input" name="operasi" type="radio" value="penjumlahan" id="jumlah">
								<label class="form-check-label me-3" for="jumlah">
									<b>+</b> (penjumlahan)
								</label>
								<input class="form-check-input" name="operasi" type="radio" value="perkalian" id="kali">
								<label class="form-check-label" for="kali">
									<b>*</b> (perkalian)
								</label>
					  		</div>
					  		<div class="mb-3">
					  			<button type="submit" class="btn btn-primary">Buat</button>
					  		</div>
		  				</form>
  					</div>
  				</div>
  			</div>
  		</div>
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
              <p>-</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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