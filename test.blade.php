@php
  
    $fruits=['Apple','Grapes','Bananas','Orange'];
@endphp


<script>
   

    var data = @json($fruits)

    data.forEach(function(entry){

        console.log(entry);
    });
    
</script>