@if($users->isEmpty())
<script></script>
@else
@foreach ($users as $user)
<script>
    $('#btnRight{{$user->id}}').click(function (e) {
        $('select').moveToListAndDelete('#lstBox1{{$user->id}}', '#lstBox2{{$user->id}}');
        e.preventDefault();
    });
</script>
<script type="text/javascript">
jQuery('[name="form1{{$user->id}}"]').on("submit",selectAll);

    function selectAll() 
    { 
        jQuery('[name="{{$user->name}}[]"] option').prop('selected', true);
    }

</script>
@endforeach
@endif
