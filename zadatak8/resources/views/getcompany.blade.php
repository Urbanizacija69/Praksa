@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card" style="width: 500px">
                    <div class="card-header">Insert your PIB</div>
                    <div class="card-body">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <div class="form-group">

                                <label for="pib">Pib:</label>
                                <input type="text" id="pib" name="pib" class="form-control @error('pib') is-invalid @enderror" value="{{ old('pib') }}" required autocomplete="pib" autofocus>
                                <small  class="text-danger" id="pib_error">{{$errors->first('pib')}}</small>
                                <br>
                                <button type="submit" id="send_button" class="btn btn-primary">Send</button>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card" style="width: 500px">
                    <div class="card-header">Company Datas</div>
                    <div class="card-body" id="company_data_field">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#send_button').click(function(){
            $.ajax({
                type:"POST",
                url: "{{ Route('getcompany') }}",
                data:{ "_token": "{{ csrf_token() }}","pib": $('#pib').val()},
                cache: false,
                success: function (data) {
                    if($.isEmptyObject(data.error)){
                        $("input").removeClass('is-invalid');
                        $("small").html('');
                        $('#company_data_field').html(data);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
            return false;
        });
        function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
                $("#"+key+"_error").html('');
                $("#"+key+"_error").css('display','block');
                $("#"+key+"_error").append(value);
                $("#"+key).addClass("is-invalid");
            });
            $('#company_data_field').html('');
        }
    </script>
@stop
