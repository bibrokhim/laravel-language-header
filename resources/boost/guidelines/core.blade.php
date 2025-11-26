## Laravel Language Header

This package sets application locale automatically according to header "Accept-Language".

### Features

- This package literally does this in its middleware:

@verbatim
$locale = $request->header('Accept-Language', app()->getLocale());

if (in_array($locale, ['en', 'ru', 'uz', 'kz'])) {
    app()->setLocale($locale);
}
@endverbatim
