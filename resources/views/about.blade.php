<?php $items = array(); ?>

@foreach($items as $item)
	The item is {{ $item }}
@endforeach

@forelse($items as $item)
	The item is {{ $item }}
@empty
	There are no items.
@endforelse
