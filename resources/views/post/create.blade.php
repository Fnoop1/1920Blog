@extends('layouts.app')

@section('content')
<div class="container">

        <div class="col-md-12 post-create">
          <div class="titelos">
            <h1>Schrijf een nieuw artikel</h1>
          </div>
            <form action="/posts" method="post">
                @csrf
                <div class="form-group">
                  <div class="textos">
                    <h3><label for="txtTitle">Titel</label></h3>
                  </div>
                  <input type="text" class="form-control" name="txtTitle" id="txtTitle">
                </div>
                <div class="form-group">
                  <div class="textos">
                    <h3><label for="txtSlug">Slug</label></h3>
                  </div>
                    <input type="text" class="form-control" name="txtSlug" id="txtSlug">
                </div>
                <div class="form-group">
                  <div class="textos">
                    <h3><label for="txtContent">Wat wil je schrijven</label></h3>
                  </div>
                  <textarea class="form-control" name="txtContent" id="txtContent" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Opslaan</button>
            </form>
        </div>
    </div>
</div>
@endsection