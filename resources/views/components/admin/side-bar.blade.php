@props(['name'=>'news','lable','home','create','icon'])
@can("$name-list")
<li class="slide">
    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);" > <i class="{{ $icon }}   side-menu__icon"></i><span class="side-menu__label"> {{ $lable }}</span><i class="angle fe fe-chevron-down"></i></a>

    <ul class="slide-menu">

        <li class="side-menu__label1"><a href="javascript:void(0);">  {{ $lable }}</a></li>
                @can("$name-list")
        <li><a class="slide-item" href="{{ $home }}"> قائمة {{ $lable }} </a></li>
                @endcan
                @can("$name-create")
        <li><a class="slide-item" href="{{ $create }}"> اضافة  {{ $lable }}</a></li>
                @endcan
    </ul>

</li>
@endcan
