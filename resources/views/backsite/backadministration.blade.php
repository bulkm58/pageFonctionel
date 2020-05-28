<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
@extends('layout/master')
<header>
    <h1>formulaire administration</h1>
</header>
<article>
    <h2>Formulaire</h2>
<a href="{{route('create')}}" class="btn btn-primary">create</a>
<a href="{{route('home')}}" class="btn btn-success">home</a>
    <table class="vitamins">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>age</th>
                <th>image</th>
                <th>
                    Edit&Delete
                </th>
                
            </tr>
        </thead>
        
        <tbody>
            @foreach ($administrations as $item)
                
            
            <tr>

            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
           <td>{{$item->age}}</td> 
            <td><img src="{{asset('storage/'.$item->img)}}" class="w-50" alt=""></td>
            <td>
            <a href="{{route('administrationch',$item->id)}}" class="text-success">Edit</a>
                <a href="{{route('delete',$item->id)}}" class="text-danger">Delete</a>
            </td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</article>





