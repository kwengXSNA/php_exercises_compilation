<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <style>
            table, th{
                 cellspacing:0;
                 text-align:center;
            }

            .dark{
                  background:#373737;
                  width: 20px;
                  height:20px;
                  color: white;
            }
            .light{
                  background:#A0A1A4;
                  width: 20px;
                  height:20px;
                  color: white;
            }

      </style>

      <?php
      $pieces=array('R','W','B','K','Q','P');

      echo "<table style= width:40%; height:auto>
            <tr>
                  <th class=light>".$pieces[0]."</th>
                  <th class=dark>".$pieces[3]."</th>
                  <th class=light>".$pieces[2]."</th>
                  <th class=dark>".$pieces[4]."</th>
                  <th class=light>".$pieces[1]."</th>
                  <th class=dark>".$pieces[2]."</th>
                  <th class=light>".$pieces[3]."</th>
                  <th class=dark>".$pieces[0]."</th>
            </tr>
            <tr>
                  <th class=dark>".$pieces[5]."</th>
                  <th class=light>".$pieces[5]."</th>
                  <th class=dark>".$pieces[5]."</th>
                  <th class=light>".$pieces[5]."</th>
                  <th class=dark>".$pieces[5]."</th>
                  <th class=light>".$pieces[5]."</th>
                  <th class=dark>".$pieces[5]."</th>
                  <th class=light>".$pieces[5]."</th>
            </tr>
            <tr>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
            </tr>
            <tr>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
            </tr>
            <tr>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
            </tr>
            <tr>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
                  <th class=dark></th>
                  <th class=light></th>
            </tr>
            <tr>
                  <th class=light>".$pieces[5]."</th>
                  <th class=dark>".$pieces[5]."</th>
                  <th class=light>".$pieces[5]."</th>
                  <th class=dark>".$pieces[5]."</th>
                  <th class=light>".$pieces[5]."</th>
                  <th class=dark>".$pieces[5]."</th>
                  <th class=light>".$pieces[5]."</th>
                  <th class=dark>".$pieces[5]."</th>
            </tr>
            <tr>
                  <th class=dark>".$pieces[0]."</th>
                  <th class=light>".$pieces[3]."</th>
                  <th class=dark>".$pieces[2]."</th>
                  <th class=light>".$pieces[4]."</th>
                  <th class=dark>".$pieces[1]."</th>
                  <th class=light>".$pieces[2]."</th>
                  <th class=dark>".$pieces[3]."</th>
                  <th class=light>".$pieces[0]."</th>
            </tr>


      </table>";
      
      
      ?>

      
</body>
</html>