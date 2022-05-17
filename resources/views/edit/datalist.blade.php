<datalist id="districtOptions">
    @forelse (Cache::get('churches')->where('status', 2) as $district)
        <option>{{ $district->dropdown_name }}</option>
    @empty
        <option>No data found</option>
    @endforelse
</datalist>

 

<datalist id="areaOptions"> 
    @forelse (Cache::get('churches')->where('status', 1) as $district)
        <option>{{ $district->dropdown_name }}</option>
    @empty
        <option>No data found</option>
    @endforelse
</datalist>

 

<datalist id="localOptions"> 
    @forelse (Cache::get('churches')->where('status', 3) as $district)
        <option>{{ $district->dropdown_name }}</option>
    @empty
        <option>No data found</option>
    @endforelse
</datalist>