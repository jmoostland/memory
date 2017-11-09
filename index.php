<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <script>
            var photo1 = false;
            var photo2 = false;
            var photo2num = 0;
            var photo1num = 0;
            var photo1ind = 0;
            var photo2ind = 0;
            function changePhoto(d) {

                var numbers = [100, 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];

                if (photo1 == false)
                {
                    photo1 = true;
                    photo1num = numbers[d];
                    photo1ind = d;
                    
                    console.log(photo1);
                    console.log(photo1num);
                    console.log(photo1ind);
                    document.getElementById(d).src = 'images/' + d + '.jpg';
                } else
                {
                    if (photo2 == false)
                    {
                        document.getElementById(d).src = 'images/' + d + '.jpg';
                        photo2 = true;
                        photo2num = numbers[d];
                        photo2ind = d;
                        
                        console.log(photo2);
                        console.log(photo2num);
                        console.log(photo2ind);
                    }
                }

                if (photo1 == true && photo2 == true)
                {
                    console.log(photo1,photo2);
                    console.log(photo1num,photo2num);
                    console.log(Math.abs(photo1num - photo2num));
                    if (Math.abs(photo1num - photo2num) == 8)
                    {
                        
                        console.log("Match");
                        photo1 = false;
                        photo2 = false;
                        photo2num = 0;
                        photo1num = 0;
                        photo1ind = 0;
                        photo2ind = 0;
                    } else
                    {
                        document.getElementById(photo1ind).src = 'images/memory.jpg';
                        document.getElementById(photo2ind).src = 'images/memory.jpg';
                        photo1 = false;
                        photo2 = false;
                        photo2num = 0;
                        photo1num = 0;
                        photo1ind = 0;
                        photo2ind = 0;
                    }
                }
                

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
                $counter = 0;
                for ($row = 1; $row < 5; $row++) {
                    echo "<tr>";
                    for ($kolom = 1; $kolom < 5; $kolom++) {
                        ++$counter;
                        echo "<td><img id=$counter src=images/memory.jpg alt= Error onclick=changePhoto('$counter')></td>\n";
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
