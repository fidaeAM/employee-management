<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Contact us </title>

    


                    <style>
                        body{
                            width: 100%;
                            height:100% ;
                            padding: 0%;
                            margin: 0%;
                            background-color:aliceblue;
                        }

                        .container_one{

                            width:100%;
                            height: 8%;
                            background-color: rgba(227, 197, 213, 0.92);
                            padding:10px;
                            position: relative;
                            
                            
                            
                        }

                         nav ul  {
                            padding: 10px;
                            text-align: center;
                            font-family: 'Courier New', Courier, monospace;
                            font-size: 20px;
                            
                            
                            
                        }

                        nav  ul   li{

                                            display: contents;
                                            
                                           

                                            }

                        nav ul li a{
                            text-decoration: none ;
                            color:aliceblue;
                            margin:20px;
                            cursor: pointer;
                            
                        }

                        .container_two{
                            background-color: rgba(243, 235, 244, 0.946);
                            position:fixed;
                            width: 98%;
                            height: 88%;
                           text-align: center;
                           margin-left:40px;
                          
                        }

                        .container_three{

                            width:15%;
                            height:98%;
                            background-color:rgba(227, 197, 213, 0.819);
                            position:fixed; 
                            padding-right:10%; 
                            left:0%;
                        }

                        .class{
                            float: right;
                            width: 45%;
                            right: 20%;
                            padding: 15px;
                            position:fixed;
                            margin-top: 80px;
                           
                        }
                        .center{
                            text-align: center;
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                            font-size: 17cm;
                            margin-top:20px; 
                            margin-left:20px; 
                        }
                        .icons{
                                
                                text-decoration: none;
                                width: 300px;
                                margin-top: 400px;
                                margin-right: 26px;
                                padding: 10px;
                                font-size: 30px;
                                border-radius: 50%;
                                cursor: pointer;
                                
                        }

                        #btnsend{
                            border-radius:40px;
                            margin:60px;
                            padding:10px; 
                        }

                        #btndelete{
                            border-radius:40px;
                            margin:60px;
                            padding:10px; 
                        }

                        .instagram{
                            
                           text-decoration: none;
                            margin: 10px;
                            display:inline;
                        }

                       .logoo img{

                        
                        height: 100px;
                        margin: 40px;
                        width: 100px;
                        height: auto;
                        border-radius: 25%;
                        border-block-color: #ffffff;
                        border-block-end: solid;
                        
                       }

                     
                       
                </style>
</head>
<body>



    <div class="container_one">
        
        <nav>
                <ul>
                        <li> 
                            <a href="/" id="aa"> Home</a>
                        
                        </li>
                        <li>
                            <a href="/home">Admin Pannel</a>
                        </li>
                        <li>
                            <a href="#">Documentation Laravel</a>
                        
                        </li>
                </ul>
        </nav>
    </div>  
    
    <div class="container_two">
       

        <div class="center">
            <h2>Contact Us </h2>
        </div>
        <div class="class" style="text-align: center;" >

            <form>
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="Name">Email Address</label>
                    <input type="Email" class="form-control" id="email" placeholder="Name@gmail.com">
                  </div>
            
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                    <button id="btnsend" type="submit">
                        <img src="/images/icons/send.svg" height="50px" width="50px">
                    
                    </button>

                    <button id="btndelete" type="submit">
                        <img src="/images/icons/delete.svg" height="50px" width="50px">
                    
                    </button>
              </form>
        </div>


       
        </div>

        <div class="container_three">
        
            <div class="logoo">
                <a href="/home">
                <img src="/images/Tails & Whiskers.png"> 
                </a>
            </div>

            <div class="icons">
            
            
                <a  class="instagram" href="https://www.instagram.com/" style="text-decoration: none;">
                <img src="/images/icons/instagram.png" height="20px" width="20px"> </a>

                <a  class="instagram" href="https://www.linkedin.com/in/">
                    <img src="/images/icons/linkedin.png" height="20px" width="20px"> </a>
        
                    <a  class="instagram" href="https://www.linkedin.com/in/">
                        <img src="/images/icons/twitter.svg" height="20px" width="20px"> </a>

                        <a  class="instagram" href="https://www.linkedin.com/in/">
                            <img src="/images/icons/facebook.svg" height="20px" width="20px"> </a>
            

        </div>
        
            </div>
</body>
</html>