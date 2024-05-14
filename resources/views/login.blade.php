@extends('layout')
@section('content')
<style>
    .login-container {
        border: 1px solid ;
        width: 40%;
        margin-right: auto;
        margin-left: auto;
        margin-top: 20px;
    }

</style>
<div>

    <div class="login-container">
        <h2 style="text-align: center;">Connexion</h2>
        <form >
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" placeholder="Saisissez votre mail" id="email" name=email>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" placeholder="Saisissez votre mot de passe" id="password" name="password">
            </div>
            <p>Pas inscrire? <a href="">Inscrivez-vous</a></p>
            <input type="submit" value="Se connecter">
        </form>
    </div>
   

</div>
@endsection
