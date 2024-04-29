<x-header compnentName="about"/>
<h1>about </h1> <br>
@for ($i = 0; $i < 9; $i++)
    {{$i}} <br/>
@endfor
<?php
for($i = 0; $i < 9; $i++){
    echo $i;?><br>
   <?php 
}
?>