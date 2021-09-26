<div class="card-body" id="detailsTable">
    <div class="table-responsive">
        @if(count($details) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Current Destination</th>
                    <th>Current Status</th>
                    <th>Note</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $detail)
                <tr>
                    <td>{{$detail->current_destination}}</td>
                    <td>{{$detail->current_status}}</td>
                    <td>{{$detail->note}}</td>
                    <td>{{$detail->description}}</td>
                    @php $date = \Carbon\Carbon::parse($detail->date)->toFormattedDateString(); @endphp
                    <td>{{$date}}</td>
                    <td>{{$detail->time}}</td>
                    <td class="text-center">
                        <span>
                                <button class="btn btn-danger deleteDetail" data-id="{{$detail->id}}"><i class="fa fa-trash"></i></button>
                                <button class="btn btn-info editDetail" data-id="{{$detail->id}}" data-destination="{{$detail->current_destination}}" data-status="{{$detail->current_status}}" data-note="{{$detail->note}}" data-description="{{$detail->description}}" data-date="{{$detail->date}}" data-time="{{$detail->time}}"><i class="fa fa-edit"></i></button>
                            </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p class="text-center">You have not added any details yet.</p>
        @endif
    </div>
</div>
