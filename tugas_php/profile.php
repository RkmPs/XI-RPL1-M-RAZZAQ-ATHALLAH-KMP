<!DOCTYPE html>
<html>
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>

  <style>
    body {
         font-family: Helvetica;
            background-color: #eff0f3;
        }
    .container {
          margin: 20px;
          display: flex;
          gap: 20px;
          flex-wrap: wrap;
          flex-direction: column;
          align-content: center;
          }  

    .text {
          background-color: #fffffe;
          width: 70%;
          border-radius: 10px;
          box-shadow: #444444 0px 3px 8px;
          text-align: left;
          padding: 30px;
          font-size: 20px;
          }
    .Profil {
          width: 70%;
          border-radius: 10px;
          text-align: left;
          padding: 30px;
          font-size: 40px;
          }

          .photo-profile {
            border-radius: 50%;
            width: 250px;
            height: 250px;
            object-fit: cover;
            border: 3px solid #ddd;
            margin-bottom: 30px;
        }
  </style>

</head>
<body>
<div class = container>

<div class = Profil>
  <?php
    echo "Biodata";
  ?>
</div>

<div class= text>
  <?php
    // menginisialisasi variable
    $nama = "M. Razzaq Athallah K.M.P";
    $umur = 16;
    $sekolah = "SMKN 2 Bandung";
    $cita_cita = null; //null = belum diisi(kosong)

    //mencetak, $(varible) berarti memanggil variable dan akan mencetak isi variable tersebut
    echo "<img src= photo.png class= photo-profile> <br>";
    echo "Nama: $nama <br>"; 
    echo "Umur: $umur <br>";
    echo "Sekolah: $sekolah <br>";
    echo "Cita-cita: $cita_cita";
    echo "<br><br>";
    echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet neque et sapien porta, quis tempus nulla pretium. <br>
          In sem leo, euismod in congue non, sodales ac massa. Cras porttitor placerat felis, id placerat felis accumsan sit amet. <br>
          Nam eu leo et purus pellentesque placerat suscipit eu lorem. Maecenas laoreet in sapien accumsan tempus. Suspendisse vitae neque sodales, <br>
          consequat sapien aliquet, mattis arcu. Sed sit amet mauris nibh. Proin scelerisque auctor euismod. Sed mollis sem et nibh rutrum, <br>";
  ?>
</div>
</div>
</body>
</html>
