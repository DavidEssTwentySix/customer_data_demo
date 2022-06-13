@if(count($errors))
    <div class="form-error">
         <ul>
            @foreach($errors->all() as $error)
                <li class="form-error-list">{{$error}}</li>
            @endforeach
        </ul>                
    </div> 
@endif