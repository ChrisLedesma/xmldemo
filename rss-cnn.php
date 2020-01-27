<style>

    .content{
        display: flex;
        justify-content: center;
    }
    .wrap{
        display: flex;
        flex-direction: column;
        border: 1px solid black;
        width: 30rem;
    }
    .border{
        border: 1px solid black;
        max-width: 40rem;
    }
</style>

<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("http://localhost/xml-sample/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("pet");
?>
 <div class="content">
 <h1>Pets</h1>
 </div>
 <div class="content">

 <div class="wrap">
 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
     $type = $data->getElementsByTagName("type")->item(0)->nodeValue;
     $age = $data->getElementsByTagName("age")->item(0)->nodeValue;
     $color = $data->getElementsByTagName("color")->item(0)->nodeValue;
     echo "<ul><h2>$name - $type</h2>
              <ul>
                  <li>Age: $age y/o</li>
                  <li>Color: $color color</li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>