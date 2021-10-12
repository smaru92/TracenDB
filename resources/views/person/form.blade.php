<div>
    <label for="name_ko">이름(한)</label>
    <input type="text" name="name_ko" autocomplete="off" value="{{ old('name_ko') ?? $person->name_ko }}">
    @error('name_ko')
        <p style="color:red;"> {{ $message }} </p>
    @enderror
</div>
<div>
    <label for="name_jp">이름(일)</label>
    <input type="text" name="name_jp" autocomplete="off" value="{{ old('name_jp') ?? $person->name_jp }}">
    @error('name_jp')
        <p style="color:red;"> {{ $message }} </p>
    @enderror
</div>
    @csrf
