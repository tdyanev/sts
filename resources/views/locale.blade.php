<ul>
    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
</ul>