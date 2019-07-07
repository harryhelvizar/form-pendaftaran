<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran harry design</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
    <!-- start nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand font-weight-bold" style="color:#08CC2C; font-size: 30px;" href="#">HARRY DESIGN02</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportContent"
            aria-controls="navbarSupportControl"
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <!-- <img class="image" src="assets/img/harrydesign.png" alt="" width="250px"
                    height="25px" style="margin: 15px; "> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">home</a>                        
                        </li> -->

                        <form class="form-inline" id="formLogin" style="padding:7px;" action="">
                            <div class="form-group">
                                <label style="margin-right:15px; color: white; ">Username</label>
                                <input style="margin-right: 15px;" type="email" class="form-control">
                            </div>
                            <div class="form-group" style="padding-right: 25px;">
                                <label style="margin-right:15px; color: white; ">Password</label>
                                <input style="margin-right: 0px;" type="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">
                                Login
                            </button>
                        </form>
                </ul>
            </div>
        </div>
    </nav>
    <!-- stop nav -->


    <!-- mulai form -->
    <form style="padding-top: 50px;">
        <div class="container">

            <div class="form-row">
                <div class="form-group col-md-2">
                    <input style="margin-right: 10px;" type="text" class="form-control" placeholder="nama depan">
                </div>
                <div class="form-group col-md-3">
                    <input style="margin-right: 10px;" type="text" class="form-control" placeholder="nama belakang">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <input style="margin-right: 10px;" type="email" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <input style="margin-right: 10px;" type="number" class="form-control" placeholder="Nomor Telpon" >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <input style="margin-right: 10px;" type="password" class="form-control" placeholder="Password">
                </div>
            </div>
            
            <div class="form-row col-md-2">
                <label>Tanggal Lahir</label>
            </div>
            <div class="form-row">                
                <div class="form-group col-md-1">
                  <select class="custom-select mr-sm-2" name="tanggal">
                    <?php
                        for ($tanggal=1; $tanggal<=31; $tanggal++){
                            echo "<option value='$tanggal'>$tanggal</option>";
                        }
                    ?>
                  </select>
                </div>

                <div class="form-group col-md-2">
                    <select class="custom-select mr-sm-2" name="bulan">
                        <?php
                            $bulan=1;
                            while($bulan<=12)
                            {
                                echo "<option value='$bulan'>Bulan $bulan</option>";
                                $bulan++;
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <select class="custom-select mr-sm-2" name="tahun">
                        <?php
                            for ($tahun=1990; $tahun<=2020 ; $tahun++) { 
                                echo "<option value='$tahun'>$tahun</option>";
                            }
                        ?>
                    </select>
                </div>
                
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                <label class="custom-control-label" for="customControlValidation2">Laki - Laki</label>
            </div>
            <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                <label class="custom-control-label" for="customControlValidation3">Perempuan</label>
            </div>

            <button type="submit" class="btn btn-success">
                masuk
            </button>
        </div>
    </form>
    <!-- akhir form -->

</body>
</html>