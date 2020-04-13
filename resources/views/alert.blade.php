@if($errors->any())
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>
            <h4>Aduh Ada Kesalahan Nih</h4>
        </strong>
        <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(session('msgSuccess'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <b>
            <h4>Sukses!</h4>
        </b>
        <br>
        {!! session('msgSuccess') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@elseif(session('msgWarning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <b>
            <h4>Terjadi kesalahan</h4>
        </b>
        <br>
        {!! session('msgWarning') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@elseif(session('msgDanger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <b>
            <h4>error!</h4>
        </b>
        <br>
        {!! session('msgDanger') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif