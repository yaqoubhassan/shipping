<div class="card-body" id="infoTable">
    <div class="table-responsive">
        @if(count($informations) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tracking Number</th>
                        <th>Final Destination</th>
                        <th>Product Features</th>
                        <th>Postal Product</th>
                        <th>Sender</th>
                        <th>Sender's Address</th>
                        <th>Receiver</th>
                        <th>Receiver's Address</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($informations as $information)
                    <tr>
                        <td>{{$information->tracking_number}}</td>
                        <td>{{$information->final_destination}}</td>
                        <td>{{$information->product_features}}</td>
                        <td>{{$information->postal_product}}</td>
                        <td>{{$information->sender}}</td>
                        <td>{{$information->sender_address}}</td>
                        <td>{{$information->receiver}}</td>
                        <td>{{$information->receiver_address}}</td>
                        <td class="text-center">
                            <span>
                                <button class="btn btn-primary" onclick="window.location='{{route('details',['id' => $information->id])}}'"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-danger deleteTracking" data-id="{{$information->id}}"><i class="fa fa-trash"></i></button>
                                <button class="btn btn-info editTracking" data-id="{{$information->id}}"  data-destination="{{$information->final_destination}}" data-features="{{$information->product_features}}" data-postal="{{$information->postal_product}}" data-sender="{{$information->sender}}" data-raddress="{{$information->receiver_address}}" data-receiver="{{$information->receiver}}" data-saddress="{{$information->sender_address}}"><i class="fa fa-edit"></i></button>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center">You have not added any shipment yet.</p>
        @endif
    </div>
</div>
