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
                <button type="button" class="readButton">Project</button>
                <div class="content">
                    <p>INSERT DATA ENTRIES HERE</p>
                </div>

                <button type="button" class="readButton">Client</button>
                <div class="content">
                    <p>INSERT DATA ENTRIES HERE</p>
                </div>

                <button type="button" class="readButton">Foreman</button>
                <div class="content">
                   <p>INSERT DATA ENTRIES HERE</p>
                </div>
                
                <button type="button" class="readButton">Supplier</button>
                <div class="content">
                    <p>INSERT DATA ENTRIES HERE</p>
                </div>

                <button type="button" class="readButton">Worker</button>
                <div class="content">
                    <p>INSERT DATA ENTRIES HERE</p>
                </div>

                <button type="button" class="readButton">Project Workers</button>
                <div class="content">
                    <p>INSERT DATA ENTRIES HERE</p>
                </div>

                <button type="button" class="readButton">Project Supplier</button>
                <div class="content">
                    <p>INSERT DATA ENTRIES HERE</p>
                </div>
                <br>
                <button type="submit" id="deleteLink" class="actionButton"><a href ="dashboard.php">Dashboard</a></button>
            
            </form>
        </div>
        <script>
            var coll = document.getElementsByClassName("readButton");
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
