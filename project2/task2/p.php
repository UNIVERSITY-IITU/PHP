<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>


<h1 style="padding-left: 600px;">Cheese board</h1>
<div style="padding-left: 350px; padding-top: 10px;">
    <table>

        <?php
        for($row=1;$row<=50;$row++)
        {
            echo "<tr>";
            for($col=1;$col<=50;$col++)
            {
                $total=$row+$col;
                if($total%2==0)
                {
                    echo "<td height=10px width=10px bgcolor=yellow></td>";
                }
                else
                {
                    echo "<td height=10px width=10px bgcolor=black></td>";
                }
            }
            echo "</tr>";
        }
        ?>
</table>
</div>


</body>
</html>