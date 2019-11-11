<html>
    <head>
        <title>Welcome to form 1</title>
        
    </head>
    <body>
    

    <form action="function.php" method="get" >

       <input type="hidden" name="choice" value=1>
       <br><br>  <br><br>  
        Title:
                 
                <input type="radio" id="Mr" name="title" value="Mr" checked>
                <label for="Mr">Mr</label>
               
                <input type="radio" id="Ms" name="title" value="Ms">
                <label for="Ms">Ms</label>
                
                <input type="radio" id="Mrs" name="title" value="Mrs">
                <label for="Mrs">Mrs</label>
                
                <input type="radio" id="Rev" name="title" value="Rev">
                <label for="Rev">Rev</label>
            <br><br>
                Name: <input type="text" name="name" class="form-control" required> <?php $id=$_GET['id1'];echo $id;?> <br><br>
                Registration Number: <input type="text" name="reg" class="form-control" required> <?php $id=$_GET['id2'];echo $id;?> <br><br>
                E-mail: <input type="text" name="email" class="form-control" required> <?php $id=$_GET['id3'];echo $id;?> <br><br>
    <input type="submit">
    </form>

    <br>
    <button id="Home" onclick="window.location.href='index.html'">Home</button>




    </body>
</html>