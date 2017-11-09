<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <script>
            function changePhoto(d) {
                
                document.getElementById('d').src = '/images/tiger.jpg';
            }

        </script>

        <style>
            img{
                width: 100px;
                height: 100px;
                vertical-align: bottom;

            }
            td{
                padding: 0px;
            }

            div{
                margin: 200px auto;
                width: 50%;
                padding: 0px;
            }
        </style>

    </head>
    <body>
        <div>
            <table border="1">
                <?php
                for ($row = 0; $row <= 4; $row++) {
                    echo "<tr>";
                    for ($kolom = 0; $kolom <= 4; $kolom++) {
                        $id="id".$row.$kolom;
                        echo "<td><img id=$id src=images/memory.jpg onclick=changePhoto($id)></td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>


        </div>                


        <?php
// put your code here
        ?>
    </body>
</html>
