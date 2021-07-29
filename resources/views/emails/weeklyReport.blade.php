Hello..
 
This mail contains Weekly report of your Team.
 
<style>
    table, th, td {
         border: 1px solid black;
    }
 
    table {
        width: 100%;
        border-collapse: collapse;
    }
 
</style>
 
<table >
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
    </tr>
    </thead>
    <tbody>
    @foreach($body as $user)
    <tr>
        <td>{{$user->e_id}}</td>
        <td>{{$user->e_name}}</td>
        <td>{{$user->e_email}}</td>
        <td>{{$user->t_mon}}</td>
        <td>{{$user->t_tue}}</td>
        <td>{{$user->t_wed}}</td>
        <td>{{$user->t_thu}}</td>
        <td>{{$user->t_fri}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
