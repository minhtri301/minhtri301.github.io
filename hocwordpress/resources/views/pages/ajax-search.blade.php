

 @foreach($baidang as $key => $bai)
       <ul>
       
           <li>
           	<a href="{{route('chitiet',$bai->baidang_slug)}}"><img src="{{asset('/public/uploads/'.$bai->baidang_image)}}"></a>
           	<h4><a href="{{route('chitiet',$bai->baidang_slug)}}">{{$bai->baidang_name}}</a></h4>
           </li>
        
       
    </ul>
     @endforeach


    