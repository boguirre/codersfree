<x-app-layout>

    <div class="container py-8">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold ">CREAR NUEVO CURSO</h1>

                <hr class="mt-2 mb-6">

                {!! Form::open(['route' => 'instructor.courses.store', 'files' => true, 'autocomplete' => 'off']) !!}

                    {!! Form::hidden('user_id', auth()->user()->id) !!}
                    @include('instructor.courses.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Crear nuevo curso', ['class' => 'btn btn-primary cursor-pointer']) !!}
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
        <script src="{{asset('js/instructor/courses/form.js')}}"></script>

        <script>
                $(document).ready(function () {
                    $('#category').on('change', function () {
                        var category_id = this.value;
                        $('#subcategory').html('');
                        $.ajax({
                            url: '{{ route('instructor.getStates') }}?category_id='+category_id,
                            type: 'get',
                            success: function (res) {
                                // $('#subcategory').html('<option value="" selected　@if(old('subcategory_id')=='3')selected  @endif>Seleccione una Subcategoria .....</option>');
                                $.each(res, function (key, value) {
                                    $('#subcategory').append('<option value="' + value
                                        .id + '"       >' + value.name + '</option>');
                                });
                                // $('#city').html('<option value="">Select City</option>');
                            }
                        });
                    });
                
                });
        </script>
        
    </x-slot>

</x-app-layout>