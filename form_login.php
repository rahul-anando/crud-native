<!DOCTYPE html>
    <head>
      <title>UTS</title>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	  <style>
		.center {
		padding: 70px 0;
		border: 3px solid green;
		}
#cover {
		background: #222 url('https://unsplash.it/1920/1080/?random') center center no-repeat;
		background-size: cover;
		height: 100%;
		text-align: center;
		display: flex;
		align-items: center;
		position: relative;
		}

		#cover-caption {
		width: 100%;
		position: relative;
		z-index: 1;
		}

		/* only used for background overlay not needed for centering */
		form:before {
		content: '';
		height: 100%;
		left: 0;
		position: absolute;
		top: 0;
		width: 100%;
		background-color: rgba(0,0,0,0.3);
		z-index: -1;
		border-radius: 10px;
		}
	</style>
    </head>
	
    <body>
	<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Silahkan Login</h1>
                    <div class="px-2">
                        <form action="proses_login.php" method="post" class="justify-content-center">
                            <div class="form-group">
                                <label class="sr-only">Name</label>
                                <input class="form-control" type="text" name="nama_mahasiswa" placeholder="Nama" alt="nama_mahasiswa" required="required"/></br>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">NIM</label>
                                <input class="form-control" type="text" name="nim_mahasiswa" placeholder="NIM: xx.xx.xxxx" alt="nim_mahasiswa" required="required"/></br>
                            </div>
							<input class="btn btn-warning btn-lg" type="submit" name="Login" value="Login" alt="Login"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</section>
    </body>
</html>
