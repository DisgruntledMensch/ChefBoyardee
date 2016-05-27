<html>
    <head>
        <title> The 7Th Realm</title>
        <script src="../Js/jquery-2.2.0.min.js"></script>
        <script src="../Js/Mai
                n.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/Main.css">
        </head>
         

            <img class="mail" src="../images/message.png" width= 500px height=500px/>
            <div class="contact">
                <h2>
                    <b>Send e-mail to ejcavalheiro@outlook.com:</b>
                        </h2>
                        <form id="input" action= "contact-process.php"  method="POST">
Name:
                        
                        
                        
                            <br>
                                <input class="text" type="text" name="name" value="your name" required>
                                    <br>
E-mail:
                                    
                                    
                               
                                        <br>
                                            <input class="text" id="mail" type="email" name="email" value="your email" required >
                                                <br>
Comment:
                                                
                                                
                                                
                                                    <br>
                                                    <textarea class="text" id="comment" type="text" name="comment" required></textarea>
                                                            <br></br>
                                                            <input class="buttonsend" type="submit" value="Send">
                                                            <input class="reset" type="reset" value="Reset">
                                                                </form>
                                                            </div>
                                                            <?php 
                                                               include ('../root/menu.php');
                                                               ?>
                                                            <?php 
                                                           include ('../root/footer.php');
                                                            ?>
                                                        </body>
                                                    </html>


