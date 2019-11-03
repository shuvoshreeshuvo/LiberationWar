    
@php 
dump($periods);
$i=0;
while($i<3){

 echo '<h1 class="headertwo">'.$periods[$i]->name.'</h1>';
    

 $i++;
}

@endphps