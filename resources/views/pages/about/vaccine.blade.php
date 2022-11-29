@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>ตารางฉีดวัคซีนโควิด-19</h2>
        </div>
    </div>
</section>

<section class="inner-page">
    <div class="container">
        <h5>
            <i class="icofont-injection-syringe mr-2"></i>หน่วยบริการฉีดวัคซีนโควิด-19 <br>
            <small class="text-muted">ให้บริการตั้งแต่เวลา 08:45น. - 15:30น.</small>
        </h5>
        <div class="container">
            <div id="calendar"></div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            hiddenDays: [0, 6],
            dayMaxEventRows: true,
            views: {
                timeGrid: {
                    dayMaxEventRows: 6
                }
            },
            displayEventTime: false,
            initialView: 'dayGridMonth',
            eventSources: [{
                // url: '/api/calendar_api',
                color: 'purple',
                textColor: 'white'
            }]
        });
        calendar.setOption('locale', 'th');
        calendar.render();
    });

</script>
@endsection
