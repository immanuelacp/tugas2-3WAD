<html>

<head>
    <title>Jakarta Foodies</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>

    <?php
$servername = "localhost:3307";
$username = "root";
$pass = "";
$db = "tugaswad";

$conn = mysqli_connect($servername, $username, $pass, $db);

    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = mysqli_query($conn, "INSERT INTO inputan VALUES('','$name','$email','$message')");

    if($sql){
        echo ' <script> alert("Data berhasil diinput");
        </script>';
    } else {
        echo ' <script> alert("Data gagal diinput");
        </script>';
    }
?>

    <header>
        <h1>Jakarta Foodies</h1>
    </header>
    <div align="center" class="menu">
        <a href="#">Home</a>
        <a href="#">Contact</a>
        <a href="#">Community</a>
        <a href="#">About</a>
    </div>
    <div class="image">
        <center>
            <img src="jcf.jpg" alt="Jakarta Culinary Festival">
        </center>
    </div>

    <section>
        <article>
            <h1>Jakarta Culinary Festival 2018 Segera Digelar untuk Pencinta Kuliner</h1>
            <p align="justify">Liputan6.com, Jakarta Mencoba berbagai makanan dalam satu event merupakan surga bagi
                Anda pencinta makanan.
                Anda dapat mengeksplorasi mulai rasa, sensasi kuliner kekinian, hingga mencoba pengalaman memasak
                langsung bersama chef di gelaran Jakarta Culinary Festival.
                Setelah tahun lalu sukses hadir dengan konsep yang berbeda dari sebelumnya, Ismaya Live kembali
                menghadirkan bazaar makanan, workshop, dan talkshow seputar kuliner dalam Jakarta Culinary Feastival
                2018.
                Gelaran kuliner ini akan memanjakan lidah Anda mulai tanggal 1-4 November 2018.</p>
            <p align="justify">Festival kuliner JCF ini mengusung konsep experience dari pengunjung melalui empat pilar
                di antaranya eat, sip, learn, dan fun.
                Anda dapat menemukan kuliner yang sedang digandrungi, menyaksikan demo masak dari para chef lokal dan
                mancanegara, serta merasakan sendiri memasak langsung di dapur ala chef profesional.
                “Pengunjung yang hadir tidak hanya menikmati makanan dan minuman dari berbagai tenant di JCF.
                Mereka juga dapat menyaksikan chef-chef internasional dan Tanah Air tampil di sesi cooking show.
                Selain itu, pengunjung juga dapat mengikuti banyak kelas memasak yang dipandu oleh koki internasional
                dan Tanah Air ternama,” kata Sarah Deshita Brand Manager Ismaya Live seperti rilis yang diterima
                Liputan6.com, Jumat (14/9/2018).</p>
        </article>

        <nav>
            <div class="foto" align="center">
                <img src="manul.JPG" alt="Profil penulis" width="30%">
            </div>
            <p>Immanuela Christiantari Perdana<br>
                immanuelacip@gmail.com<br>
                Telkom University
            </p>

            <table class="submit" width="100%">
                <tr>
                        <?php
                            $sql = "SELECT * FROM inputan";
                            $result = mysqli_query($conn, $sql);

                            if(mysqli_num_rows($result)==0){
                                echo 'Tidak ada data';
                            } else {
                                echo '<th align="center">No.</th> 
                                <th align="center">Name</th> 
                                <th align="center">Email</th>
                                <th align="center">Message</th>';
                                $no = 1;
                                while($data = mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo '<td align="center">'.$no.'</td>';
                                    echo '<td align="center">'.$data['name'].'</td>';
                                    echo '<td align="center">'.$data['email'].'</td>';
                                    echo '<td align="center">'.$data['message'].'</td>';
                                    echo '</tr>';
                                    $no++;
                                }
                            }
                            ?>
                </tr>

            </table>

            </form>
        </nav>

    </section>

    <footer>
        <p>Copyright © 2018 Web Application Development</p>
    </footer>

</body>

</html>