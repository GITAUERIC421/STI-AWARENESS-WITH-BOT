<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2><img class="logo" src="images/icon.jpg" alt="LOGO!"></h2>
            </div>
            <div class="navig">
            <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="Services.php">SERVICES</a></li>
                    <li><a href="Gallery.php">GALLERY</a></li>
                    <li><a href="Contact.php">CONTACT</a></li>
                    <li><a href="http://127.0.0.1:5000/">CHAT</a></li>
                    <li> <a href="logout.php">LOGOUT</a>
                </ul>
            </div>
        </div>
        <br><br><br><br>
            <div class="form1">
                <form action="">
                <fieldset class="">
                    <label for="NAME:"><b>NAME:</b></label>
                    <input type="text" name="surname" placeholder="enter your surname">
                    <br><br>
                    <label for="EMAIL:"><b>EMAIL:</b></label>
                    <input type="email" name="personal email" placeholder="enter your personal email">
                    <br><br>
                    <label for="TEL NO:"><b>TEL NO:</b></label>
                    <input type="tel" name="telephone number" placeholder="enter your telephone number ">
                    <br><br> 
                    <label for="GENDER:"><b>GENDER:</b></label>
                    <input type="radio" name="gender"><label>male</label>
                    <input type="radio" name="gender"><label>female</label>
                    <br><br>
                    
                    
                    <DIV>
                    <label><b>IS THIS YOUR FIRST TIME HERE?</b></label>
                        <select>
                            <option>YES</option>
                            <option>NO</option>
                    
                    
                        </select>
                        
                    </DIV>
                    <br>   
                    
                    <DIV>
                    <label><b>WHERE DO YOU LIVE:</b></label>
                    <select>
                        <option>Oloika</option>
                        <option>Rafiki</option>
                        <option>Mercy Nyeri</option>
                        <option>Kiamunyi</option>
                        <option>Rongai</option>
                        <option>Kampi</option>
                        <br><br>
                    </select>
                    </DIV>
                    <br>
                    <br>
                    <h2 class="text-white mb-5">LEAVE US A MESSAGE</h2>
                    <div class="col"><input class="form-control" id="" type="text" placeholder="Enter your message" aria-label="Enter your message" data-sb-validations="required,text" /></div>
                    <br><br>
                    <button><input type="submit" name="send"></button>
                    <br>
                    <br>
                    <button class="akk"><input  type="reset" name="cancel"></button>
                    <br>
                </fieldset>

            </div>
    </div>
    <section class="footer" style="text-align:center; color: rgb(24, 8, 8);background-color: rgb(18, 172, 243);border-radius: 5px;">
        <h2 style="font-size: 40px; ">Vision</h2>
        <p style="font-size:20px">To Create aweraness inorder to save lives</p>
         <h2 style="font-size: 40px; ">Mission</h2>
        <p style="font-size:20px">HELP A FRIEND TO HELP A FRIEND</p>
        Copyright &copy; Your Website 2023
    
    </section>
</body>
</html> 