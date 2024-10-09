<!DOCTYPE html>
<html lang="en">
<head>
    <title>CONTACT | Zii Server</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylecontact.css">
    <link rel="shortcut icon" href="scr/MPUSSLOGO.png"/>
</head>

<body>

<!-- header -->
<header>
 <nav>
        <div class="logo">
            <h4><a href="index.html"><img src="scr/MPUSSLOGO2.png" alt="MPUSS"></a></h4>
        </div>
        <ul>
            <li><a href="index.html" title="Home" id="home">Home</a></li>
            <li><a href="profile.html" title="Profile Lengkap" id="profile">Profile</a></li>
            <li><a href="galeri.html" title="Galeri" id="galeri">Galeri</a></li>
            <li><a href="contact.html" title="Contact Person" id="contact">Contact</a></li>
            <li><a href="about.html" title="About" id="about">About</a></li>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <script src="script.js"></script>
</header>

<!-- main -->
<main>
    <div class="topmain"></div>
    <div class="judul">
        <h1>CONTACT</h1>
    </div>
        <section class="sec1">
            <div class="sec1-div">
                <div class="beranda-img">
                    <img src="scr/contact-mpuss.svg" alt="">
                </div>
            </div>
            <div class="sec1-div">
                <h2>Social Media</h2>
                <p>Mari datang ke sosial media kami demi mendukung konten-konten kami</p>
                <div class="sec1-sosmed">
                        <a class="youtube" href="https://www.youtube.com/@Mpuss_Ch" target="_blank" title="Youtube Channel"><img src="scr/yt.png" alt="" width="20px"> Youtube</a>
                        <a class="instagram" href="https://www.instagram.com/zii_ovt/" target="_blank" title="Instagram"><img src="scr/ig.png" alt="" width="16px"> Instagram</a>
                        <a class="twitter" href="https://twitter.com/MpussCh" target="_blank" title="Twitter"><img src="scr/twitter.png" alt="" width="16px"> Twitter</a>
                        <a class="whatsapp" href="https://wa.me/+62887437218896" target="_blank" title="Whatsapp"><img src="scr/whatsapp.png" alt="" width="16px"> Whatsapp</a>
                    </div>
                </div>
        </section>
        <section class="sec2">
            <h2>FOR BUSSINESS CONTACT</h2>
            <div class="form">
                <form action="">
                    <table>
                        <tr>
                            <td><label for="nama">Nama</label></td>
                            <td>:</td>
                            <td><?php echo $_POST["nama"]?> </td>
                        </tr>
                        <tr>
                            <td><label for="email">Email Perusahaan</label></td>
                            <td>:</td>
                            <td><?php echo $_POST["email"]?> </td>
                        </tr>
                        <tr>
                            <td><label for="subject">Subject</label></td>
                            <td>:</td>
                            <td><?php echo $_POST["subject"]?> </td>
                        </tr>
                        <tr>
                            <td><label for="message">Message</label></td>
                            <td>:</td>
                            <td><?php echo $_POST["message"]?> </td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
</main>

<!-- footer -->
<footer>
    <div>
        &#169; 2023 by Zii Ofiicial
    </div>
</footer>
    
</body>
</html>
