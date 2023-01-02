@extends('layouts.app-master')
@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <div class="container border border-info p-3" id="app" style="background: #ededed;">

                <div class="row">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>নাম:<br> {{$data->name}} </td>
                            <td>পদবী/পেশা:<br>{{$data->designation}} </td>
                            <td>প্রতিষ্ঠান:<br>{{$data->organisation}} </td>
                        </tr>
                        <tr>
                            <td>মোবাইল: <br>{{$data->mobile}}</td>
                            <td>ই-মেইল:<br>{{$data->email}} </td>
                            <td>জাতীয় পরিচয়পত্র নম্বর:<br>{{$data->nid}} </td>
                        </tr>
                        <tr>

                            <td>তথ্য প্রাপ্তির উদ্দেশ্য:<br>{{$data->purpose}}
                            </td>
                            <td>তথ্য ফরম্যাট: @if($data->data_format=='1')
                                    EXCEL
                                @elseif($data->data_format=='2')
                                    PDF
                                @else
                                    DOCS
                                @endif
                            </td>
                            <td>
                                Attachment:<br>
                                @if(isset($data->attachment_path))
                                    <a href="{{url('../../sebabox/uploads/'.$data->attachment_path)}}" target="_blank">Click Here</a>
                                       @else
                                    No Attachment
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>

                                প্রয়োজনীয় তথ্য সম্পর্কে বিস্তারিত:<br>
                                {{$data->question}}

                            </td>
                            <td>
                                আবেদনের বর্তমান অবস্থাঃ
                                {{$data->status->status_meaning}}
                            </td>
                        </tr>
                    </table>
                </div>


                <form action="{{url('update/'.$data->id)}}">
                    <div class="row pb-5">
                        <div class="col-md-12 font-weight-bold">
                            আবেদনের বর্তমান অবস্থা পরিবর্তন করুন:<br>
                            <select class="form-control w-25" name="application_status">
                                <option {{ ($data->application_status) == '1' ? 'selected' : '' }} value="1">
                                    Processing
                                </option>
                                <option {{ ($data->application_status) == '2' ? 'selected' : '' }} value="2">Done
                                </option>
                                <option {{ ($data->application_status) == '3' ? 'selected' : '' }} value="3">Rejected
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 font-weight-bold">
                            মন্তব্য লিখুনঃ
                            <textarea name="comments" style="width:100%; height: 150px;"> {{$data->comments}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12 text-center pt-3">
                        <input type="submit" class="form-control btn btn-success w-25" value="Submit">
                    </div>
                </form>
            </div>
        @endauth

        @guest
            <p class="lead">Please login to view the data.</p>
        @endguest
    </div>
@endsection

