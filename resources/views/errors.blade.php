<div>
    @if ($errors->any())
        <div style="background-color:red;color:white;border:1px solid black;margin-top:2%;padding:3px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</div>