<?php ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"> </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>




    <body>
        <div class="container-fluid">
            <div class="row">   
                <div class="col-md-4"></div>   

                <div class="col-md-4">
                    <input type="text" id="colorInput" style="width: 394px; height: 40px; border:1px solid black; border-collapse:collapse; " placeholder="Insert text here:"/>
                </div> 
            </div>  

            <br>
            <br>
            <br>


        <div class="row">   
            <div class="col-md-4"></div>   
            <div class="col-md-4">    

                <table id="colorTable" bgcolor="white" style="width: 400px; height: 300px; border:1px solid black; border-collapse:collapse;">
                    <tr>
                        <td><p align="center">This block changes color<p></td>
                    </tr>
                </table>
            </div>   

        </div>   
    </div>   



    <script>
            document.addEventListener("DOMContentLoaded", function() {
                var colorInput = document.getElementById("colorInput");
                var colorTable = document.getElementById("colorTable");
                colorInput.addEventListener("input", function() {
                    var colorValue = colorInput.value;
                    if(colorValue != "" && colorValue != "Frax")
                        colorTable.innerHTML = "Scemo chi legge";
                    else
                        colorTable.innerHTML = "";
                });
            });
        </script>


    </body>


</html>