<div class="control-group my-3">
    <label class="control-label">Select Category</label>
    <div class="controls">
        <select name="categories_id" style="width: 415px;">
            @foreach($categories as $key=>$value)
                <option value="{{$key}}">{{$value}}</option>
                <?php
                    if($key!=0){
                        $sub_categories=DB::table('categories')->select('id','name')->where('parent_id',$key)->get();
                        if(count($sub_categories)>0){
                            foreach ($sub_categories as $sub_category){
                                echo '<option value="'.$sub_category->id.'">&nbsp;&nbsp;--'.$sub_category->name.'</option>';
                            }
                        }
                    }
                ?>
            @endforeach
        </select>
    </div>
</div>

{{ Form::label('p_name', 'Name',['class' => 'my-3']) }}
{{ Form::text('p_name', old('p_name'), ['class' => 'form-control']) }}

{{ Form::label('title', 'Titulo',['class' => 'my-3']) }}
{{ Form::text('title', old('title'), ['class' => 'form-control']) }}

{{ Form::label('short', 'Short',['class' => 'my-3']) }}
{{ Form::text('short', old('short'), ['class' => 'form-control']) }}

{{ Form::label('description', 'Description',['class' => 'my-3']) }}
{{ Form::text('description', old('description'), ['class' => 'form-control']) }}

{{ Form::label('description2', 'Description',['class' => 'my-3']) }}
{{ Form::text('description2', old('description2'), ['class' => 'form-control']) }}

{{ Form::label('horario', 'Día y Horario de Atención',['class' => 'my-3']) }}
{{ Form::text('horario', old('horario'), ['class' => 'form-control']) }}

{{ Form::label('tel', 'Teléfono',['class' => 'my-3']) }}
{{ Form::text('tel', old('tel'), ['class' => 'form-control']) }}

{{ Form::label('tel2', 'Teléfono2',['class' => 'my-3']) }}
{{ Form::text('tel2', old('tel2'), ['class' => 'form-control']) }}

{{ Form::label('whatsapp', 'Whatsapp',['class' => 'my-3']) }}
{{ Form::text('whatsapp', old('whatsapp'), ['class' => 'form-control']) }}

{{ Form::label('whatsapp2', 'Whatsapp2',['class' => 'my-3']) }}
{{ Form::text('whatsapp2', old('whatsapp2'), ['class' => 'form-control']) }}

{{ Form::label('adress', 'Dirección',['class' => 'my-3']) }}
{{ Form::text('adress', old('adress'), ['class' => 'form-control']) }}

{{ Form::label('email', 'Email',['class' => 'my-3']) }}
{{ Form::text('email', old('email'), ['class' => 'form-control']) }}

{{ Form::label('facebook', 'Facebook',['class' => 'my-3']) }}
{{ Form::text('facebook', old('facebook'), ['class' => 'form-control']) }}

{{ Form::label('instagram', 'Instagram',['class' => 'my-3']) }}
{{ Form::text('instagram', old('instagram'), ['class' => 'form-control']) }}

{{ Form::label('twitter', 'Twitter',['class' => 'my-3']) }}
{{ Form::text('twitter', old('twitter'), ['class' => 'form-control']) }}

{{ Form::label('youtube', 'Youtube',['class' => 'my-3']) }}
{{ Form::text('youtube', old('youtube'), ['class' => 'form-control']) }}

{{ Form::label('googleMaps', 'Google Maps',['class' => 'my-3']) }}
{{ Form::text('googleMaps', old('googleMaps'), ['class' => 'form-control']) }}

{{ Form::label('destacado', 'Destacado',['class' => 'my-3']) }}
{{ Form::checkbox('destacado') }}
<br>
{{ Form::label('cuarentena', 'Cuarentena',['class' => 'my-3']) }}
{{ Form::checkbox('cuarentena') }}
<br>

{{ Form::label('image', 'Imagen', ['class' => 'my-3']) }}
{{ Form::file('image') }}
<img src="{{url('products/small/',$edit_product->image)}}" width="35" alt="">
<br>
{{ Form::label('banner', 'Banner', ['class' => 'my-3']) }}
{{ Form::file('banner') }}
<img src="{{url('products/banner/',$edit_product->banner)}}" width="35" alt="">
<br>

{{ Form::submit('Editar', ['class' => 'btn btn-primary']) }}
