<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/home_style.css">
    </head>

    <body>
        <div class="content_home">
            <div class="image1">
                <div class="text_image_style">
                    <h1 style="50px">A1</h1>
                    <h3>1pc. Chicken & Soup</h3>
                    <button id="details_button1" class="button button_style">Details</button>
                </div>
            </div>
            
            <div class="image2">
                <div class="text_image_style">
                    <h1 style="50px">A2</h1>
                    <h3>1pc. Chicken & Mashed Potato</h3>
                    <button id="details_button2" class="button button_style">Details</button>
                </div>
            </div>

            <div class="image3">
                <div class="text_image_style">
                    <h1 style="50px">A3</h1>
                    <h3>Nuggets & Spaghetti</h3>
                    <button id="details_button3" class="button button_style">Details</button>
                </div>
            </div>
        </div>

        <script>
            document.getElementById("details_button1").onclick = function () {
                location.href = "?p=products";
            };

            document.getElementById("details_button2").onclick = function () {
                location.href = "?p=products";
            };

            document.getElementById("details_button3").onclick = function () {
                location.href = "?p=products";
            };
        </script>
    </body>
</html>