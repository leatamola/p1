

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
<div class="control-group my-3">
    <label for="p_name" class="control-label">Name</label>
    <div class="controls{{$errors->has('p_name')?' has-error':''}}">
        <input type="text" name="p_name" id="p_name" class="form-control" value="{{$edit_product->p_name ?? old('p_name')}}" title="" required="required" style="width: 400px;">
        <span class="text-danger">{{$errors->first('p_name')}}</span>
    </div>
</div>
<div class="control-group my-3">
    <label for="title" class="control-label">Title</label>
    <div class="controls{{$errors->has('title')?' has-error':''}}">
        <input type="text" name="title" id="title" class="form-control" value="{{$edit_product->title ?? old('title')}}" title=""  style="width: 400px;">
        <span class="text-danger">{{$errors->first('title')}}</span>
    </div>
</div>

<div class="form-group my-3">
   <label for="short" class="control-label">Short Description</label>
   <textarea class="form-control textarea_editor" name="short" style="width: 580px;" placeholder="Product Short" id="exampleFormControlTextarea1" rows="3">{{$edit_product->short ?? old('short')}}</textarea>
 </div>

 <div class="form-group my-3">
    <label for="description" class="control-label">Description</label>
    <textarea class="form-control textarea_editor" name="description" style="width: 580px;" placeholder="Product Description" id="exampleFormControlTextarea1" rows="3">{{$edit_product->description ?? old('description')}}</textarea>
  </div>

<div class="form-group my-3">
     <label for="description2" class="control-label">Description 2</label>
     <textarea class="form-control textarea_editor" name="description2" style="width: 580px;" placeholder="Product Description 2" id="exampleFormControlTextarea1" rows="3">{{$edit_product->description2 ?? old('description2')}}</textarea>
</div>

<div class="form-group my-3">
     <label for="horario" class="control-label">Día y Horario de Atención</label>
     <textarea class="form-control textarea_editor" name="horario" style="width: 580px;" placeholder="Horario de atención" id="exampleFormControlTextarea1" rows="3">{{$edit_product->horario ?? old('horario')}}</textarea>
</div>

<div class="control-group my-3">
    <label for="tel" class="control-label">Teléfono</label>
    <div class="controls{{$errors->has('tel')?' has-error':''}}">
        <input type="text" name="tel" id="tel" class="form-control" value="{{$edit_product->tel ?? old('tel')}}" title=""  style="width: 400px;">
        <span class="text-danger">{{$errors->first('tel')}}</span>
    </div>
</div>

<div class="control-group my-3">
    <label for="tel2" class="control-label">Teléfono 2</label>
    <div class="controls{{$errors->has('tel2')?' has-error':''}}">
        <input type="number" name="tel2" id="tel2" class="form-control" value="{{$edit_product->tel2 ?? old('tel2')}}" title=""  style="width: 400px;">
        <span class="text-danger">{{$errors->first('tel2')}}</span>
    </div>
</div>

<div class="control-group my-3">
    <label for="whatsapp" class="control-label">Whatsapp</label>
    <div class="controls{{$errors->has('whatsapp')?' has-error':''}}">
        <input type="number" name="whatsapp" id="whatsapp" class="form-control" value="{{$edit_product->whatsapp ?? old('whatsapp')}}" title=""  style="width: 400px;">
        <span class="text-danger">{{$errors->first('whatsapp')}}</span>
    </div>
</div>

<div class="control-group my-3">
    <label for="whatsapp2" class="control-label">Whatsapp 2</label>
    <div class="controls{{$errors->has('whatsapp2')?' has-error':''}}">
        <input type="number" name="whatsapp2" id="whatsapp2" class="form-control" value="{{$edit_product->whatsapp2 ?? old('whatsapp2')}}" title=""  style="width: 400px;">
        <span class="text-danger">{{$errors->first('whatsapp2')}}</span>
    </div>
</div>


<div class="control-group my-3">
    <label for="adress" class="control-label">Dirección</label>
    <div class="controls{{$errors->has('adress')?' has-error':''}}">
        <input type="text" name="adress" id="adress" class="form-control" value="{{$edit_product->adress ?? old('adress')}}" title=""  style="width: 400px;">
        <span class="text-danger">{{$errors->first('adress')}}</span>
    </div>
</div>

<div class="control-group my-3">
    <label for="email" class="control-label">Email</label>
    <div class="controls{{$errors->has('email')?' has-error':''}}">
        <input type="email" name="email" id="email" class="form-control" value="{{$edit_product->email ?? old('email')}}" title=""  style="width: 400px;">
        <span class="text-danger">{{$errors->first('email')}}</span>
    </div>
</div>

<div class="control-group my-3">
    <label for="facebook" class="control-label">Facebook</label>
    <div class="controls{{$errors->has('facebook')?' has-error':''}}">
        <input type="text" name="facebook" id="facebook" class="form-control" value="{{$edit_product->facebook ?? old('facebook')}}" title=""  style="width: 400px;">
        <span class="text-danger">{{$errors->first('facebook')}}</span>
    </div>
</div>

<div class="control-group my-3">
    <label for="instagram" class="control-label">Instagram</label>
    <div class="controls{{$errors->has('instagram')?' has-error':''}}">
        <input type="text" name="instagram" id="instagram" class="form-control" value="{{$edit_product->instagram ?? old('instagram')}}" title=""  style="width: 400px;">
        <span class="text-danger">{{$errors->first('instagram')}}</span>
    </div>
</div>

<div class="control-group my-3">
    <label for="twitter" class="control-label">Twitter</label>
    <div class="controls{{$errors->has('twitter')?' has-error':''}}">
        <input type="text" name="twitter" id="twitter" class="form-control" value="{{$edit_product->twitter ?? old('twitter')}}" title=""  style="width: 400px;">
        <span class="text-danger">{{$errors->first('twitter')}}</span>
    </div>
</div>

<div class="control-group my-3">
    <label for="youtube" class="control-label">Youtube</label>
    <div class="controls{{$errors->has('youtube')?' has-error':''}}">
        <input type="text" name="youtube" id="youtube" class="form-control" value="{{$edit_product->youtube ?? old('youtube')}}" title=""  style="width: 400px;">
        <span class="text-danger">{{$errors->first('youtube')}}</span>
    </div>
</div>

<div class="control-group my-3">
    <label for="destacado" class="control-label">Destacado:</label>
    <div class="controls">
        <input type="checkbox" name="destacado" id="destacado">
        <span class="text-danger">{{$errors->first('destacado')}}</span>
    </div>
</div>
