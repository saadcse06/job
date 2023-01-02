<div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th>Sl</th>
            <th>Applicant</th>
            <th>Subject</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action </th>
        </tr>
        </thead>
        <tbody>
        @foreach($applicant_data as $key=>$value)
            <?php //echo $value; ?>
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->question}}</td>
            <td>{{date('d/m/Y', strtotime($value->application_date))}}</td>
            <td>
                {{$value->status->status_meaning}}
            </td>
            <td><button class="btn btn-warning"><a href="{{url('/detail/'.$value->id)}}">Detail</a></button></td>
        </tr>
            @endforeach
       </tbody>
    </table>
</div>



<script>

</script>

