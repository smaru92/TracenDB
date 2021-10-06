<div>
    <label for="name_ko">이름(한)</label>
    <input type="text" name="name_ko" autocomplete="off" value="{{ old('name_ko') ?? $skill->name_ko }}">
    @error('name_ko')
        <p style="color:red;"> {{ $message }} </p>
    @enderror
</div>
<div>
    <label for="name_jp">이름(일)</label>
    <input type="text" name="name_jp" autocomplete="off" value="{{ old('name_jp') ?? $skill->name_jp }}">
    @error('name_jp')
        <p style="color:red;"> {{ $message }} </p>
    @enderror
</div>
<div>
    <label for="category">분류</label>
    <input type="text" name="category" autocomplete="off" value="{{ old('category') ?? $skill->category }}">
    @error('category')
        <p style="color:red;"> {{ $message }} </p>
    @enderror
</div>
<div>
    <label for="point">스킬포인트</label>
    <input type="text" name="point" autocomplete="off" value="{{ old('point') ?? $skill->point }}">
    @error('point')
        <p style="color:red;"> {{ $message }} </p>
    @enderror
</div>
<div>
    <label for="content">설명</label>
    <input type="text" name="content" autocomplete="off" value="{{ old('content') ?? $skill->content }}">
    @error('content')
        <p style="color:red;"> {{ $message }} </p>
    @enderror
</div>
    @csrf
