@extends('layouts.app')
<style>
    th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
    }
    tr:nth-child(odd) td{
    background-color: #FFFFFF;
    }
    td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
    }
</style>
@section('title', 'admin.blade.php')

@section('content')
<table>
    <tr>
        <th>id</th>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>ご意見</th>
        <th></th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>
            {{$item->id}}
        </td>
        <td>
            {{$item->fullname}}
        </td>
        <td>
            {{$item->gender}}
        </td>
        <td>
            {{$item->email}}
        </td>
        <td>
            {{$item->opinion}}
        </td>
        <td>
            <form action="/admin"></form>
            <button class="form__button-submit" type="submit" name="{{$item->id}}">
                削除
            </button>
        </td>
    </tr>
    @endforeach
</table>
@endsection