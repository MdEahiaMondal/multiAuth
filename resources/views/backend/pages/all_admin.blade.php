<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>


           {{$al = App\Admin::get()}}
       @foreach($al as $alls)
        <tr>
            <td>{{$alls->name}}</td>
            <td>{{$alls->email}}</td>
        </tr>
        @endforeach


</table>