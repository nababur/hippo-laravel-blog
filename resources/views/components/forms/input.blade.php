@props(['name','type'=> 'text', 'onload', 'onkeyup', 'id'])

<div class="col-md-12">
    <!-- Single Form Start -->
    <div class="single-form">
        <x-forms.label name="{{ $name }}" />
        
        <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        
        onload="{{ $onload }}" 
        
        onkeyup="{{ $onkeyup }}"
        id="{{ $id }}"
        
        {{ $attributes(['value'=> old($name)]) }}>
     
    </div>
    <!-- Single Form End -->
    <x-forms.error name="{{ $name }}"/>
</div>