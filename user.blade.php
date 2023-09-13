<h2>User page</h2>
{{-- <h1>Hello: {{$user}} </h1> --}}


     {{-- If user enter no city then use this method --}}

{{-- <h1>City: {{!empty($city) ? $city : 'No City Found'}} </h1> --}}


  {{-- multidemsional array output show on screen with the help of foreach loop --}}

  @foreach ($user as $id=>$u)
   <table>
   
    <h4>{{$id}} {{$u['name']}} {{$u['Phone']}}     {{$u['city']}}  </h4>
      
</table>
  @endforeach