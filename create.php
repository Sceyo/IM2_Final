<!Doctype HTML>

<head>
	<title>AOPS Construction Company</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<html>
    <body>
        <h1>AOPS Construction Admin Dashboard</h1>
        <div id="div_form" >
            <div id="create_glass"></div>
            <form id="create_form">
                <h1>Create</h1>
                <button type="button" class="createButton">Project</button>
                <div class="content">
                    <table id="table_entry">
                        <tr> 
                            <td>Foreman ID</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr> 
                            <td>Client ID</td>
                            <td><input type="text" name="age"></td>
                        </tr>
                        <tr> 
                            <td>Duration</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr> 
                            <td></td>
                            <td><input type="submit" name="Submit" value="Create"></td>
                        </tr>
                    </table>
                </div>

                <button type="button" class="createButton">Client</button>
                <div class="content">
                    <table id="table_entry">
                        <tr> 
                            <td>First Name</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr> 
                            <td>Last Name</td>
                            <td><input type="text" name="age"></td>
                        </tr>
                        <tr> 
                            <td>Client Phone Number</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr> 
                            <td>Client Address</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr> 
                            <td>Client Email</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr> 
                            <td></td>
                            <td><input type="submit" name="Submit" value="Create"></td>
                        </tr>
                    </table>
                </div>

                <button type="button" class="createButton">Foreman</button>
                <div class="content">
                    <table id="table_entry">
                        <tr> 
                            <td>First Name</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr> 
                            <td>Last Name</td>
                            <td><input type="text" name="age"></td>
                        </tr>
                        <tr> 
                            <td>Client Phone Number</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr> 
                            <td>Client Address</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr> 
                            <td></td>
                            <td><input type="submit" name="Submit" value="Create"></td>
                        </tr>
                    </table>
                </div>
                
                <button type="button" class="createButton">Supplier</button>
                <div class="content">
                    <table id="table_entry">
                        <tr> 
                            <td>First Name</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr> 
                            <td>Last Name</td>
                            <td><input type="text" name="age"></td>
                        </tr>
                        <tr> 
                            <td>Client Phone Number</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr> 
                            <td>Client Address</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr> 
                            <td>Client Email</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr> 
                            <td></td>
                            <td><input type="submit" name="Submit" value="Create"></td>
                        </tr>
                    </table>
                </div>

                <button type="button" class="createButton">Worker</button>
                <div class="content">
                    <table id="table_entry">
                        <tr> 
                            <td>First Name</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr> 
                            <td>Last Name</td>
                            <td><input type="text" name="age"></td>
                        </tr>
                        <tr> 
                            <td>Client Phone Number</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr> 
                            <td>Client Address</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr> 
                            <td></td>
                            <td><input type="submit" name="Submit" value="Create"></td>
                        </tr>
                    </table>
                </div>

                <!-- <button type="button" class="createButton">Project Workers</button>
                <div class="content">
                
                </div>

                <button type="button" class="createButton">Project Supplier</button>
                <div class="content">
               
                </div> -->
                <br>
                <button type="submit" id="deleteLink" class="actionButton"><a href ="dashboard.php">Dashboard</a></button>
              
            
            </form>
        </div>
        <script>
            var coll = document.getElementsByClassName("createButton");
            var i;
            
            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                  content.style.display = "none";
                } else {
                  content.style.display = "block";
                }
              });
            }
            </script>
    </body>
</html>
