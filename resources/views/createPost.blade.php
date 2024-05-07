@extends('layout')
@section('content')
<div>
    <style>
        form {
            width: max-content;
            margin: auto;
        }
        .form-group{
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            width: 400px;
        }

        .form-group > label {
            font-weight: 600
        }
    </style>
    <h2 style="text-align: center">Creer un post</h2>
    <form  method="POST" action="{{route('storePost')}}">
        @csrf
        <div class="form-group">
            <label for="name">Nom du post :</label>
            <input type="text" name="name" id="name">
        </div>
        <div  class="form-group">
            <label for="description">Description :</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Enregistrer">
    </form>
</div>
@endsection


