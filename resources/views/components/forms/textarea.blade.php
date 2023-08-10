@props(['name'])

<div class="col-md-12">
    <!-- Single Form Start -->
    <div class="single-form">
        <x-forms.label name="{{ $name }}" />
        <textarea 
        style="height: 120px" 
        name="body" 
        id="{{ $name }}" 
        cols="6" rows="5"
        
        >{{ $slot ?? old($name) }}  </textarea>
        
    </div>
    <!-- Single Form End -->
    <x-forms.error name="{{ $name }}"/>
</div>