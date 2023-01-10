
@if ($star == 1)
    <x-star star="1"/>
    <x-star star="0"/>
    <x-star star="0"/>
    <x-star star="0"/>
    <x-star star="0"/>
@elseif ($star == 2)
    <x-star star="1"/>
    <x-star star="1"/>
    <x-star star="0"/>
    <x-star star="0"/>
    <x-star star="0"/>
@elseif ($star == 3)
    <x-star star="1"/>
    <x-star star="1"/>
    <x-star star="1"/>
    <x-star star="0"/>
    <x-star star="0"/>
@elseif ($star == 4)
    <x-star star="1"/>
    <x-star star="1"/>
    <x-star star="1"/>
    <x-star star="1"/>
    <x-star star="0"/>
@elseif ($star == 5)
    <x-star star="1"/>
    <x-star star="1"/>
    <x-star star="1"/>
    <x-star star="1"/>
    <x-star star="1"/>
@else
    <x-star star="0"/>
    <x-star star="0"/>
    <x-star star="0"/>
    <x-star star="0"/>
    <x-star star="0"/>
@endif