BartoszBartniczak\NamingConventionConverter
===========================================
This library allows to apply different naming conventions.
---------------------------------------------

### Usage

#### camelCase to underscore

```php
<?php

use BartoszBartniczak\NamingConventionConverter\CamelCaseToUnderscoreConverter;
use BartoszBartniczak\NamingConventionConverter\UnderscoreToCamelCaseConverter;

$camelCaseToUnderscoreConverter = new CamelCaseToUnderscoreConverter();
$camelCaseToUnderscoreConverter->convert('camelCaseToUnderscoreConverter');
// camelCaseToUnderscoreConverter -> camel_case_to_underscore_converter

$underscoreToCamelCaseConverter = new UnderscoreToCamelCaseConverter();
$underscoreToCamelCaseConverter->convert('camel_case_to_underscore_converter');
// camel_case_to_underscore_converter -> camelCaseToUnderscoreConverter
```

#### CamelCase to underscore

```php
<?php

use BartoszBartniczak\NamingConventionConverter\PascalCaseToUnderscoreConverter;
use BartoszBartniczak\NamingConventionConverter\UnderscoreToPascalCaseConverter;

$pascalCaseToUnderscoreConverter = new PascalCaseToUnderscoreConverter();
$pascalCaseToUnderscoreConverter->convert('PascalCaseToUnderscoreConverter');
// PascalCaseToUnderscoreConverter -> pascal_case_to_underscore_converter

$underscoreToPascalCaseConverter = new UnderscoreToPascalCaseConverter();
$underscoreToPascalCaseConverter->convert('pascal_case_to_underscore_converter');
// pascal_case_to_underscore_converter -> PascalCaseToUnderscoreConverter
```