<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Contact Form</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css" />
</head>
<body>



    <div class='contactform'>

    <div class='return-message'>
        <p>
            <?php
                if($_GET){
                    echo $_GET['returnMessage'];       
                }else{
                    echo "";}
            ?>
        </p>
    </div><!--end return-message-->

        <form action='processor.php' method='POST'>
                    
            <div>
                <label for="name">Name:</label><br/><br/>
                <input placeholder='name' type='text' name='name' ><br/><br/>
            </div>
        
            <div>
                <label for="email">Email:</label><br/><br/>
                <input placeholder='email' type='email' name='email' ><br/><br/>
            </div>
        
        
            <div>
                <label for="message">Message:</label><br/><br/>
                <textarea rows='4' name="message" placeholder='message'></textarea>
            </div>
        
                <input float='right' name='submit' type='submit' value='submit email'><br/>
                    
            
        
        </form>
    </div><!--end contactform-->
    
</body>
</html>