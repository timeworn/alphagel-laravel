@extends('layouts.app_admin')
@section('content')
<link   href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
<style>
    .bootstrap-datetimepicker-widget tr:hover {
        background-color: #808080;
    }
    #weeklyDatePicker {
        cursor: pointer;
    }
</style>
<div class="card">
    <h3 class="card-header default-color-dark white-text">Traffic</h3>
    <div class="card-block">
        <form action="" method="POST">
            {{ csrf_field() }}
            <label class="radio-inline">
                <input type="radio" name="period_type" {{$period_type  == "dayWeek" ?  "checked" : ""}} value="dayWeek"> Daily in Week
            </label>
            <label class="radio-inline">
                <input type="radio" name="period_type" {{$period_type  == "dayMonth" ?  "checked" : ""}} value="dayMonth">Daily in Month
            </label>
            <label class="radio-inline">
                <input type="radio" name="period_type" {{$period_type  == "monthYear" ?  "checked" : ""}} value="monthYear">Monthly in Year
            </label>
        <input class="mt-1" type='text' name="period" value="{{$setting_date}}" id='weeklyDatePicker' placeholder="Select Week"/>
            <input class="mt-1" type='hidden' name="start_date"/>
            <input class="mt-1" type='hidden' name="end_date" />
            <input class="mt-1" type='hidden' name="current_date" />
        <button class="mt-1 btn btn-default">Show</button>
        </form>
    </div>
</div>
<div class="card card-cascade narrower">
<div class="table-responsive">
    <table class="table">
        <thead class="blue-grey lighten-4">
            <tr>
                <th>Date</th>
                <th>Orders</th>
                <th>Unique</th>
                <th>Clicks</th>
                <th>Ratio</th>
                <th>Amount</th>
                <th>Profit</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($sales))
            @foreach ($sales as $sale)
            <tr>
                <td>{{$sale['date']}}</td>
                <td>{{$sale['total_count']}}</td>
                <td>{{$sale['unique']}}</td>
                <td>{{$sale['clicks']}}</td>
                <td></td>
                <td>{{$sale['total_amount']}}</td>
                <td>{{$sale['total_profit']}}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
</div>
<script src="{{ asset('js/moment.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        moment.locale('en', {
            week: { dow: 1 } // Monday is the first day of the week
        });
        //Initialize the datePicker(I have taken format as mm-dd-yyyy, you can     //have your owh)
        $("#weeklyDatePicker").datetimepicker({
            format: 'YYYY-MM-DD',
        });

        //Get the value of Start and End of Week
        $('#weeklyDatePicker').on('dp.change', function (e) {
            var value = $("#weeklyDatePicker").val();
            $("input[name='current_date']").val(value);
            var firstDate = moment(value, "YYYY-MM-DD").day(1).format("YYYY-MM-DD");
            var lastDate =  moment(value, "YYYY-MM-DD").day(7).format("YYYY-MM-DD");
            $("#weeklyDatePicker").val(firstDate + " - " + lastDate);
            $("input[name='start_date']").val(firstDate);
            $("input[name='end_date']").val(lastDate);
        });

    });
</script>
<!-- Modal Add/Edit users -->
@endsection
