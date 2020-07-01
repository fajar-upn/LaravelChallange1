@extends('layouts/main')

@section('title','Register SanberBook')

@section('main')
<h1><b>Buat Account Baru!</b></h1>
<h3><b>Sign Up Form</b></h3>
<form action="/welcomeku" method="POST">
    @csrf
    <label>First Name : </label><br><br>
    <input type="text" id="fName" name="fName" value="{{old('fname')}}" placeholder="Input First Name" required><br>
    <br>
    <label>Last Name : </label><br><br>
    <input type="text" id="lName" name="lName" value="{{old('lname')}}" placeholder="Input last Name"required><br>
    
    <p>Gender : </p>
    <input type="radio" id="rMale" name="gender" value="" >
    <label>Male</label><br>
    <input type="radio" id="rFemale" name="gender" value="" >
    <label>Female</label><br>
    <input type="radio" id="rOther" name="gender" value="" >
    <label>Other</label><br>

    <p>Nationality : </p>
    <select id="Nationality" name="Nationality" >
        <option value="">Select</option>
        <option value="Indonesia">Indonesian</option>
        <option value="America">America</option>
        <option value="Japan">Japan</option>
    </select>

    <p>Language : </p>
    <input type="checkbox" id="=cbIndonesia" name="cbIndonesia" value="">
    <label>Bahasa Indonesia</label><br>
    <input type="checkbox" id="=cbEnglish" name="cbEnglish" value="">
    <label>English</label><br>
    <input type="checkbox" id="=cbOther" name="cbOther" value="">
    <label>Other</label><br>

    <p>Bio : </p>
    <textarea id="taBIO" name="taBio" rows="4" cols="50" placeholder="Write your BIO"></textarea>
    
    <br><br>

    <button type="submit">Sign Up</button>
</form>
@endsection